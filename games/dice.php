<?php
require_once '../includes/config.php';
$page_title = "Dice Game - HIGH/LOW Prediction";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       DICE GAME - NEON CYBERPUNK DESIGN
       ========================================== */
    
    .game-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.05), rgba(255, 20, 147, 0.05));
    }
    
    .dice-wrapper {
        max-width: 1000px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
    }
    
    .dice-main {
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.1), rgba(255, 20, 147, 0.1));
        border: 2px solid rgba(0, 255, 255, 0.3);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(0, 255, 255, 0.2), inset 0 0 40px rgba(0, 255, 255, 0.05);
        backdrop-filter: blur(10px);
    }
    
    .dice-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #00ffff, #ff1493);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
    }
    
    .dice-display-area {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin: 50px 0;
        min-height: 180px;
        align-items: center;
    }
    
    .dice-box {
        width: 140px;
        height: 140px;
        background: linear-gradient(145deg, rgba(0, 255, 255, 0.2), rgba(255, 20, 147, 0.2));
        border: 3px solid #00ffff;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        font-weight: bold;
        color: #00ffff;
        box-shadow: 0 0 30px rgba(0, 255, 255, 0.4), inset 0 0 20px rgba(0, 255, 255, 0.1);
        animation: dicePulse 2s ease-in-out infinite;
        text-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
    }
    
    .dice-box:nth-child(2) {
        border-color: #ff1493;
        color: #ff1493;
        box-shadow: 0 0 30px rgba(255, 20, 147, 0.4), inset 0 0 20px rgba(255, 20, 147, 0.1);
        text-shadow: 0 0 20px rgba(255, 20, 147, 0.5);
        animation-delay: 0.3s;
    }
    
    @keyframes dicePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    @keyframes diceRoll {
        0% { transform: rotateX(0deg) rotateY(0deg); }
        25% { transform: rotateX(90deg) rotateY(90deg); }
        50% { transform: rotateX(180deg) rotateY(180deg); }
        75% { transform: rotateX(270deg) rotateY(270deg); }
        100% { transform: rotateX(360deg) rotateY(360deg); }
    }
    
    .dice-box.rolling {
        animation: diceRoll 0.6s ease-in-out;
    }
    
    .dice-sum {
        text-align: center;
        font-size: 1.8rem;
        color: #00ffff;
        font-weight: bold;
        text-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
    }
    
    .prediction-area {
        text-align: center;
        margin: 30px 0;
    }
    
    .prediction-title {
        color: #00ffff;
        font-size: 1.3rem;
        margin-bottom: 15px;
        font-weight: 700;
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
    }
    
    .prediction-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .pred-btn {
        padding: 12px 25px;
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.2), rgba(0, 255, 255, 0.1));
        border: 2px solid #00ffff;
        border-radius: 10px;
        color: #00ffff;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
    }
    
    .pred-btn:hover {
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.4), rgba(0, 255, 255, 0.2));
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
        transform: translateY(-2px);
    }
    
    .pred-btn.active {
        background: linear-gradient(135deg, #00ffff, #00cccc);
        color: #000;
        box-shadow: 0 0 30px rgba(0, 255, 255, 0.7);
        text-shadow: none;
    }
    
    .result-area {
        text-align: center;
        min-height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
    }
    
    .result-message {
        font-size: 1.6rem;
        font-weight: bold;
        padding: 20px 30px;
        border-radius: 10px;
        animation: resultPop 0.5s ease;
    }
    
    .result-message.win {
        background: linear-gradient(135deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.1));
        border: 2px solid #00ff00;
        color: #00ff00;
        box-shadow: 0 0 30px rgba(0, 255, 0, 0.4);
        text-shadow: 0 0 15px rgba(0, 255, 0, 0.5);
    }
    
    .result-message.lose {
        background: linear-gradient(135deg, rgba(255, 20, 147, 0.2), rgba(255, 20, 147, 0.1));
        border: 2px solid #ff1493;
        color: #ff1493;
        box-shadow: 0 0 30px rgba(255, 20, 147, 0.4);
        text-shadow: 0 0 15px rgba(255, 20, 147, 0.5);
    }
    
    @keyframes resultPop {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }
    
    /* Control Panel */
    .control-panel {
        background: linear-gradient(135deg, rgba(0, 255, 255, 0.1), rgba(255, 20, 147, 0.1));
        border: 2px solid rgba(0, 255, 255, 0.3);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 0 40px rgba(0, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 100px;
    }
    
    .control-title {
        font-size: 1.5rem;
        color: #00ffff;
        margin-bottom: 20px;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
    }
    
    .control-group {
        margin-bottom: 25px;
    }
    
    .control-label {
        display: block;
        color: #00ffff;
        font-size: 0.95rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .control-input {
        width: 100%;
        padding: 12px;
        background: rgba(0, 255, 255, 0.1);
        border: 2px solid #00ffff;
        border-radius: 8px;
        color: #00ffff;
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .control-input:focus {
        outline: none;
        border-color: #ff1493;
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
    }
    
    .bet-presets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }
    
    .preset-btn {
        padding: 10px;
        background: rgba(0, 255, 255, 0.1);
        border: 2px solid #00ffff;
        border-radius: 8px;
        color: #00ffff;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .preset-btn:hover {
        background: rgba(0, 255, 255, 0.2);
        box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
    }
    
    .roll-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #00ffff, #00cccc);
        border: none;
        border-radius: 10px;
        color: #000;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(0, 255, 255, 0.4);
        margin-top: 20px;
    }
    
    .roll-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 40px rgba(0, 255, 255, 0.6);
    }
    
    .roll-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .all-in-btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #ff1493, #ff69b4);
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 20px rgba(255, 20, 147, 0.3);
        margin-top: 10px;
    }
    
    .all-in-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 30px rgba(255, 20, 147, 0.5);
    }
    
    .stats-box {
        background: rgba(0, 255, 255, 0.1);
        border: 2px solid rgba(0, 255, 255, 0.3);
        border-radius: 10px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(0, 255, 255, 0.7);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #00ffff;
        font-size: 1.4rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
    }
    
    @media (max-width: 968px) {
        .dice-wrapper {
            grid-template-columns: 1fr;
        }
        
        .control-panel {
            position: relative;
            top: 0;
        }
        
        .dice-box {
            width: 100px;
            height: 100px;
            font-size: 3.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .dice-display-area {
            gap: 20px;
        }
        
        .dice-box {
            width: 80px;
            height: 80px;
            font-size: 2.5rem;
        }
        
        .prediction-buttons {
            gap: 10px;
        }
        
        .pred-btn {
            padding: 10px 15px;
            font-size: 0.9rem;
        }
    }
</style>

<div class="game-container">
    <div class="dice-wrapper">
        <!-- Main Game Area -->
        <div class="dice-main">
            <h1 class="dice-title">🎲 DICE GAME 🎲</h1>
            
            <!-- Dice Display -->
            <div class="dice-display-area">
                <div class="dice-box" id="dice1">?</div>
                <div class="dice-box" id="dice2">?</div>
            </div>
            
            <!-- Sum Display -->
            <div class="dice-sum" id="diceSum"></div>
            
            <!-- Prediction Section -->
            <div class="prediction-area">
                <div class="prediction-title">Choose Your Prediction:</div>
                <div class="prediction-buttons">
                    <button class="pred-btn" data-prediction="high">HIGH (8-12)</button>
                    <button class="pred-btn" data-prediction="low">LOW (2-7)</button>
                </div>
            </div>
            
            <!-- Result Display -->
            <div class="result-area" id="resultArea"></div>
        </div>
        
        <!-- Control Panel -->
        <div class="control-panel">
            <h3 class="control-title">⚙️ CONTROLS</h3>
            
            <div class="control-group">
                <label class="control-label">Bet Amount (₹)</label>
                <input type="number" id="betAmount" class="control-input" placeholder="Enter bet" min="200" max="5500" value="500">
                <div class="bet-presets">
                    <button class="preset-btn" onclick="setBet(200)">₹200</button>
                    <button class="preset-btn" onclick="setBet(500)">₹500</button>
                    <button class="preset-btn" onclick="setBet(1000)">₹1K</button>
                    <button class="preset-btn" onclick="setBet(2000)">₹2K</button>
                </div>
            </div>
            
            <button class="roll-btn" id="rollBtn" onclick="playDice()">ROLL DICE</button>
            <button class="all-in-btn" onclick="setAllIn()">ALL IN</button>
            
            <div class="stats-box">
                <div class="stat-label">Current Balance</div>
                <div class="stat-value" id="balanceDisplay">₹10,000.00</div>
            </div>
            
            <div class="stats-box">
                <div class="stat-label">Payout</div>
                <div class="stat-value">2x Multiplier</div>
            </div>
        </div>
    </div>
</div>

<script>
let selectedPrediction = null;
let isRolling = false;

// Set bet amount
function setBet(amount) {
    document.getElementById('betAmount').value = amount;
}

// Set all in
function setAllIn() {
    const balanceText = document.getElementById('balance-display').textContent;
    const balance = parseFloat(balanceText.replace(/[₹,]/g, ''));
    const maxBet = Math.min(balance, 5500);
    setBet(maxBet);
}

// Prediction button handlers
document.querySelectorAll('.pred-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.pred-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        selectedPrediction = this.dataset.prediction;
    });
});

// Play dice game
function playDice() {
    if (isRolling) return;
    
    const betAmount = parseFloat(document.getElementById('betAmount').value);
    
    if (!selectedPrediction) {
        showNotification('Please select HIGH or LOW', 'warning');
        return;
    }
    
    const validation = validateBet(betAmount);
    if (!validation.valid) {
        showNotification(validation.message, 'error');
        return;
    }
    
    isRolling = true;
    document.getElementById('rollBtn').disabled = true;
    
    // Deduct bet
    updateBalance(-betAmount);
    
    // Start rolling animation
    const dice1 = document.getElementById('dice1');
    const dice2 = document.getElementById('dice2');
    dice1.classList.add('rolling');
    dice2.classList.add('rolling');
    
    setTimeout(() => {
        dice1.classList.remove('rolling');
        dice2.classList.remove('rolling');
        
        // Roll dice
        const roll1 = Math.floor(Math.random() * 6) + 1;
        const roll2 = Math.floor(Math.random() * 6) + 1;
        const total = roll1 + roll2;
        
        dice1.textContent = roll1;
        dice2.textContent = roll2;
        document.getElementById('diceSum').textContent = `Total: ${total}`;
        
        // Determine result
        const isHigh = total >= 8;
        const won = (selectedPrediction === 'high' && isHigh) || (selectedPrediction === 'low' && !isHigh);
        
        // Calculate payout
        const payout = won ? betAmount * 2 : 0;
        
        // Show result
        const resultArea = document.getElementById('resultArea');
        if (won) {
            resultArea.innerHTML = `<div class="result-message win">✨ YOU WON! +${formatCurrency(payout)} ✨</div>`;
            showNotification(`Won ${formatCurrency(payout)}!`, 'success');
            updateBalance(payout);
        } else {
            resultArea.innerHTML = `<div class="result-message lose">❌ YOU LOST ❌</div>`;
            showNotification(`Lost ${formatCurrency(betAmount)}!`, 'error');
        }
        
        isRolling = false;
        document.getElementById('rollBtn').disabled = false;
        
        // Clear result after 3 seconds
        setTimeout(() => {
            resultArea.innerHTML = '';
            document.getElementById('diceSum').textContent = '';
            dice1.textContent = '?';
            dice2.textContent = '?';
        }, 3000);
    }, 600);
}

// Update balance display on page load
document.addEventListener('DOMContentLoaded', function() {
    updateBalanceDisplay();
});
</script>

<?php include '../includes/footer.php'; ?>
