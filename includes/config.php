<?php
/**
 * Global Configuration File
 * Handles session initialization and helper functions
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Game Configuration Constants
define('INITIAL_BALANCE', 10000);
define('MIN_BET', 200);
define('MAX_BET', 5500);

// Dynamic Site URL - Works on any environment (root-relative path)
define('SITE_URL', '/');

// Company Information
define('COMPANY_NAME', 'VENTURES PRIVATE LIMITED');
define('COMPANY_CIN', 'U56102HR203e323TC123713');
define('COMPANY_GST', '0945678903PQWE');
define('COMPANY_PAN', 'KIFEIFJDI');
define('COMPANY_ADDRESS', 'C/O PARDEEP SAGGAR, 20-P DSC, SEC-23A, Shivaji Nagar, Gurgaon - 122001, Haryana');
define('COMPANY_EMAIL', 'contact@ventures.com');

// Initialize user session
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 'user_' . uniqid();
    $_SESSION['balance'] = INITIAL_BALANCE;
    $_SESSION['total_wins'] = 0;
    $_SESSION['total_losses'] = 0;
    $_SESSION['games_played'] = 0;
    $_SESSION['game_history'] = [];
}

/**
 * Format currency with Indian Rupee symbol
 * @param float $amount Amount to format
 * @return string Formatted currency string
 */
function formatCurrency($amount) {
    return '₹' . number_format($amount, 2);
}

/**
 * Get user's current balance
 * @return float User's balance
 */
function getUserBalance() {
    return isset($_SESSION['balance']) ? floatval($_SESSION['balance']) : INITIAL_BALANCE;
}

/**
 * Update user's balance
 * @param float $amount Amount to add/subtract
 * @return float Updated balance
 */
function updateBalance($amount) {
    $current = getUserBalance();
    $_SESSION['balance'] = max(0, $current + floatval($amount));
    return $_SESSION['balance'];
}

/**
 * Send JSON response
 * @param array $data Data to send
 */
function sendJSON($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

/**
 * Validate bet amount
 * @param float $bet Bet amount
 * @return array Validation result
 */
function validateBet($bet) {
    $bet = floatval($bet);
    $balance = getUserBalance();
    
    if ($bet < MIN_BET) {
        return ['valid' => false, 'message' => 'Minimum bet is ' . formatCurrency(MIN_BET)];
    }
    
    if ($bet > MAX_BET) {
        return ['valid' => false, 'message' => 'Maximum bet is ' . formatCurrency(MAX_BET)];
    }
    
    if ($bet > $balance) {
        return ['valid' => false, 'message' => 'Insufficient balance'];
    }
    
    return ['valid' => true, 'message' => 'Bet is valid'];
}

/**
 * Add game to history
 * @param string $game_name Game name
 * @param float $bet Bet amount
 * @param float $payout Payout amount
 * @param string $result Win/Loss
 */
function addGameHistory($game_name, $bet, $payout, $result) {
    if (!isset($_SESSION['game_history'])) {
        $_SESSION['game_history'] = [];
    }
    
    $_SESSION['game_history'][] = [
        'game' => $game_name,
        'bet' => $bet,
        'payout' => $payout,
        'result' => $result,
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    // Keep only last 50 games
    if (count($_SESSION['game_history']) > 50) {
        array_shift($_SESSION['game_history']);
    }
}

/**
 * Update game statistics
 * @param float $amount Amount won/lost
 */
function updateStats($amount) {
    $_SESSION['games_played'] = isset($_SESSION['games_played']) ? $_SESSION['games_played'] + 1 : 1;
    
    if ($amount > 0) {
        $_SESSION['total_wins'] = isset($_SESSION['total_wins']) ? $_SESSION['total_wins'] + 1 : 1;
    } else {
        $_SESSION['total_losses'] = isset($_SESSION['total_losses']) ? $_SESSION['total_losses'] + 1 : 1;
    }
}

?>
