/**
 * Main JavaScript File
 * Global functionality and utilities
 */

const SITE_URL = '/';

/**
 * Show notification
 * @param {string} message - Message to display
 * @param {string} type - Type: success, error, warning, info
 * @param {number} duration - Duration in milliseconds
 */
function showNotification(message, type = 'info', duration = 3000) {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <i class="fas fa-${getIconForType(type)}"></i> ${message}
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, duration);
}

/**
 * Get icon for notification type
 */
function getIconForType(type) {
    const icons = {
        success: 'check-circle',
        error: 'exclamation-circle',
        warning: 'exclamation-triangle',
        info: 'info-circle'
    };
    return icons[type] || 'info-circle';
}

/**
 * Format currency
 */
function formatCurrency(amount) {
    return '₹' + parseFloat(amount).toLocaleString('en-IN', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });
}

/**
 * Update balance display
 */
function updateBalanceDisplay() {
    fetch(SITE_URL + 'api/get-balance.php')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const balanceDisplay = document.getElementById('balance-display');
                if (balanceDisplay) {
                    balanceDisplay.textContent = data.balance;
                }
            }
        })
        .catch(error => console.error('Error updating balance:', error));
}

/**
 * Update user balance
 */
function updateBalance(amount) {
    return fetch(SITE_URL + 'api/update-balance.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ amount: parseFloat(amount) })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateBalanceDisplay();
            return data;
        } else {
            showNotification(data.message || 'Error updating balance', 'error');
            return null;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Network error', 'error');
        return null;
    });
}

/**
 * Reset balance
 */
function resetBalance() {
    return fetch(SITE_URL + 'api/reset-balance.php', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateBalanceDisplay();
            showNotification(data.message, 'success');
            return data;
        }
        return null;
    })
    .catch(error => {
        console.error('Error:', error);
        return null;
    });
}

/**
 * Validate bet amount
 */
function validateBet(bet) {
    const MIN_BET = 200;
    const MAX_BET = 5500;
    
    bet = parseFloat(bet);
    
    if (isNaN(bet) || bet <= 0) {
        return { valid: false, message: 'Please enter a valid bet amount' };
    }
    
    if (bet < MIN_BET) {
        return { valid: false, message: `Minimum bet is ${formatCurrency(MIN_BET)}` };
    }
    
    if (bet > MAX_BET) {
        return { valid: false, message: `Maximum bet is ${formatCurrency(MAX_BET)}` };
    }
    
    return { valid: true, message: 'Bet is valid' };
}

/**
 * Get ALL IN amount
 */
function getAllInAmount() {
    const MAX_BET = 5500;
    const balanceText = document.getElementById('balance-display').textContent;
    const balance = parseFloat(balanceText.replace(/[₹,]/g, ''));
    return Math.min(balance, MAX_BET);
}

/**
 * Initialize page
 */
document.addEventListener('DOMContentLoaded', function() {
    // Update balance on page load
    updateBalanceDisplay();
    
    // Update balance every 5 seconds
    setInterval(updateBalanceDisplay, 5000);
});

/**
 * Smooth scroll to element
 */
function smoothScroll(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

/**
 * Copy to clipboard
 */
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        showNotification('Copied to clipboard!', 'success', 2000);
    }).catch(err => {
        console.error('Error copying:', err);
    });
}
