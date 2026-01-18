<?php
/**
 * API Endpoint: Reset User Balance
 */

require_once '../includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJSON(['success' => false, 'message' => 'Invalid request method']);
}

try {
    $_SESSION['balance'] = INITIAL_BALANCE;
    $_SESSION['total_wins'] = 0;
    $_SESSION['total_losses'] = 0;
    $_SESSION['games_played'] = 0;
    $_SESSION['game_history'] = [];
    
    sendJSON([
        'success' => true,
        'balance' => formatCurrency(INITIAL_BALANCE),
        'raw_balance' => INITIAL_BALANCE,
        'message' => 'Balance reset successfully to ' . formatCurrency(INITIAL_BALANCE)
    ]);
} catch (Exception $e) {
    sendJSON([
        'success' => false,
        'message' => 'Error resetting balance: ' . $e->getMessage()
    ]);
}
?>
