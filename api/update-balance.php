<?php
/**
 * API Endpoint: Update User Balance
 */

require_once '../includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJSON(['success' => false, 'message' => 'Invalid request method']);
}

try {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($input['amount'])) {
        sendJSON(['success' => false, 'message' => 'Amount not provided']);
    }
    
    $amount = floatval($input['amount']);
    
    // Validate bet
    $validation = validateBet(abs($amount));
    if (!$validation['valid']) {
        sendJSON(['success' => false, 'message' => $validation['message']]);
    }
    
    $newBalance = updateBalance($amount);
    
    // Update statistics
    updateStats($amount);
    
    sendJSON([
        'success' => true,
        'balance' => formatCurrency($newBalance),
        'raw_balance' => $newBalance,
        'message' => 'Balance updated successfully'
    ]);
} catch (Exception $e) {
    sendJSON([
        'success' => false,
        'message' => 'Error updating balance: ' . $e->getMessage()
    ]);
}
?>
