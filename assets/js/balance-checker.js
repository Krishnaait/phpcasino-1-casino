/**
 * Balance Checker
 * Monitors balance and prompts reset when balance reaches 0
 */

let balanceCheckInterval;

function startBalanceChecker() {
    balanceCheckInterval = setInterval(function() {
        const balanceDisplay = document.getElementById('balance-display');
        if (!balanceDisplay) return;
        
        const balanceText = balanceDisplay.textContent;
        const balance = parseFloat(balanceText.replace(/[₹,]/g, ''));
        
        if (balance === 0) {
            clearInterval(balanceCheckInterval);
            showBalanceResetPrompt();
        }
    }, 2000);
}

function showBalanceResetPrompt() {
    const confirmed = confirm(
        '🎰 Your balance is ₹0!\n\n' +
        'Would you like to reset your balance to ₹10,000 and continue playing?\n\n' +
        'Remember: This is a free-to-play platform with virtual currency only!'
    );
    
    if (confirmed) {
        resetBalance().then(data => {
            if (data && data.success) {
                showNotification('✨ Balance reset to ₹10,000! Ready to play again?', 'success');
                startBalanceChecker();
            }
        });
    } else {
        showNotification('You can reset your balance anytime by refreshing the page', 'info', 5000);
        startBalanceChecker();
    }
}

// Start balance checker when page loads
document.addEventListener('DOMContentLoaded', function() {
    startBalanceChecker();
});
