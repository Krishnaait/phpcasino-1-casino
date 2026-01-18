<?php
/**
 * API Endpoint: Get User Balance
 */

require_once '../includes/config.php';

header('Content-Type: application/json');

try {
    $balance = getUserBalance();
    
    sendJSON([
        'success' => true,
        'balance' => formatCurrency($balance),
        'raw_balance' => $balance
    ]);
} catch (Exception $e) {
    sendJSON([
        'success' => false,
        'message' => 'Error retrieving balance: ' . $e->getMessage()
    ]);
}
?>
