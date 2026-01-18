<?php
require_once '../includes/config.php';
$page_title = "Slot Machine - Classic 3-Reel Slots";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       SLOTS GAME - CLASSIC CASINO DESIGN
       ========================================== */
    
    .game-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.05), rgba(218, 165, 32, 0.05));
    }
    
    .slots-wrapper {
        max-width: 1000px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
    }
    
    .slots-main {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(218, 165, 32, 0.1));
        border: 4px solid #daa520;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(255, 215, 0, 0.2), inset 0 0 40px rgba(255, 215, 0, 0.05);
        backdrop-filter: blur(10px);
    }
    
    .slots-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #daa520, #ffd700);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .slots-machine {
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2));
        border: 3px solid #daa520;
        border-radius: 15px;
        padding: 30px;
        margin: 30px 0;
        box-shadow: inset 0 0 30px rgba(0, 0, 0, 0.5);
    }
    
    .reels-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 30px 0;
    }
    
    .reel {
        width: 100px;
        height: 120px;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3));
        border: 3px solid #ffd700;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        font-weight: bold;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.3), inset 0 0 15px rgba(0, 0, 0, 0.5);
        position: relative;
    }
    
    .reel.spinning {
        animation: spinReel 0.5s linear infinite;
    }
    
    @keyframes spinReel {
        0% { transform: rotateY(0deg); }
        100% { transform: rotateY(360deg); }
    }
    
    .reel-symbol {
        color: #ffd700;
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
    }
    
    .win-line {
        text-align: center;
        font-size: 1.2rem;
        color: #ffd700;
        margin: 15px 0;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
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
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.1));
        border: 2px solid #ffd700;
        color: #ffd700;
        box-shadow: 0 0 30px rgba(255, 215, 0, 0.4);
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
    }
    
    .result-message.lose {
        background: linear-gradient(135deg, rgba(255, 68, 68, 0.2), rgba(255, 68, 68, 0.1));
        border: 2px solid #ff4444;
        color: #ff4444;
        box-shadow: 0 0 30px rgba(255, 68, 68, 0.4);
        text-shadow: 0 0 15px rgba(255, 68, 68, 0.5);
    }
    
    @keyframes resultPop {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }
    
    /* Control Panel */
    .control-panel {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(218, 165, 32, 0.1));
        border: 4px solid #daa520;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 0 40px rgba(255, 215, 0, 0.2);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 100px;
    }
    
    .control-title {
        font-size: 1.5rem;
        color: #daa520;
        margin-bottom: 20px;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
    }
    
    .control-group {
        margin-bottom: 25px;
    }
    
    .control-label {
        display: block;
        color: #daa520;
        font-size: 0.95rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .control-input {
        width: 100%;
        padding: 12px;
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid #daa520;
        border-radius: 8px;
        color: #daa520;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .control-input:focus {
        outline: none;
        border-color: #ffd700;
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .bet-presets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }
    
    .preset-btn {
        padding: 10px;
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid #daa520;
        border-radius: 8px;
        color: #daa520;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .preset-btn:hover {
        background: rgba(255, 215, 0, 0.2);
        box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
    }
    
    .spin-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        border: none;
        border-radius: 10px;
        color: #000;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 215, 0, 0.4);
        margin-top: 20px;
    }
    
    .spin-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 40px rgba(255, 215, 0, 0.6);
    }
    
    .spin-btn:disabled {
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
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 10px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(255, 215, 0, 0.7);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #daa520;
        font-size: 1.4rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
    }
    
    @media (max-width: 968px) {
        .slots-wrapper {
            grid-template-columns: 1fr;
        }
        
        .control-panel {
            position: relative;
            top: 0;
        }
        
        .reel {
            width: 80px;
            height: 100px;
            font-size: 2.5rem;
        }
    }
</style>

<div class="game-container">
    <div class="slots-wrapper">
        <!-- Main Game Area -->
        <div class="slots-main">
            <h1 class="slots-title">🎰 SLOT MACHINE 🎰</h1>
            
            <!-- Slot Machine -->
            <div class="slots-machine">
                <div class="win-line">━━━━━━━━━━━━━━━━</div>
                <div class="reels-container">
                    <div class="reel" id="reel1">🍒</div>
                    <div class="reel" id="reel2">🍋</div>
                    <div class="reel" id="reel3">🍊</div>
                </div>
                <div class="win-line">━━━━━━━━━━━━━━━━</div>
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
            
            <button class="spin-btn" id="spinBtn" onclick="spinSlots()">SPIN</button>
            <button class="all-in-btn" onclick="setAllIn()">ALL IN</button>
            
            <div class="stats-box">
                <div class="stat-label">Payout</div>
                <div class="stat-value" id="payoutDisplay">Up to 10x</div>
            </div>
            
            <div class="stats-box">
                <div class="stat-label">Symbols</div>
                <div class="stat-value">🍒 🍋 🍊 🍌 🔔 7️⃣</div>
            </div>
        </div>
    </div>
</div>

<script>
const symbols = ['🍒', '🍋', '🍊', '🍌', '🔔', '7️⃣'];
const payouts = {
    '7️⃣7️⃣7️⃣': 10,
    '🔔🔔🔔': 5,
    '🍌🍌🍌': 3,
    'pair': 1.5
};

let isSpinning = false;

function setBet(amount) {
    document.getElementById('betAmount').value = amount;
}

function setAllIn() {
    const balanceText = document.getElementById('balance-display').textContent;
    const balance = parseFloat(balanceText.replace(/[₹,]/g, ''));
    const maxBet = Math.min(balance, 5500);
    setBet(maxBet);
}

function spinSlots() {
    if (isSpinning) return;
    
    const betAmount = parseFloat(document.getElementById('betAmount').value);
    const validation = validateBet(betAmount);
    
    if (!validation.valid) {
        showNotification(validation.message, 'error');
        return;
    }
    
    isSpinning = true;
    document.getElementById('spinBtn').disabled = true;
    
    // Deduct bet
    updateBalance(-betAmount);
    
    // Start spinning animation
    const reels = ['reel1', 'reel2', 'reel3'];
    reels.forEach(reel => {
        document.getElementById(reel).classList.add('spinning');
    });
    
    // Spin duration
    setTimeout(() => {
        // Stop spinning and show results
        const result = [];
        reels.forEach((reel, index) => {
            const symbol = symbols[Math.floor(Math.random() * symbols.length)];
            result.push(symbol);
            document.getElementById(reel).classList.remove('spinning');
            document.getElementById(reel).textContent = symbol;
        });
        
        // Check win
        const [r1, r2, r3] = result;
        let multiplier = 0;
        let winMessage = '';
        
        if (r1 === r2 && r2 === r3) {
            // Three of a kind
            multiplier = payouts[`${r1}${r2}${r3}`] || 1.5;
            winMessage = `🎉 THREE OF A KIND! ${r1} ${r2} ${r3} - ${multiplier}x WIN!`;
        } else if (r1 === r2 || r2 === r3 || r1 === r3) {
            // Pair
            multiplier = payouts['pair'];
            winMessage = `✨ PAIR! ${multiplier}x WIN!`;
        }
        
        const resultArea = document.getElementById('resultArea');
        if (multiplier > 0) {
            const payout = betAmount * multiplier;
            resultArea.innerHTML = `<div class="result-message win">${winMessage}<br>Won ${formatCurrency(payout)}</div>`;
            showNotification(`Won ${formatCurrency(payout)}!`, 'success');
            updateBalance(payout);
        } else {
            resultArea.innerHTML = `<div class="result-message lose">❌ NO MATCH - TRY AGAIN ❌</div>`;
            showNotification(`Lost ${formatCurrency(betAmount)}!`, 'error');
        }
        
        isSpinning = false;
        document.getElementById('spinBtn').disabled = false;
        
        // Clear result after 3 seconds
        setTimeout(() => {
            resultArea.innerHTML = '';
        }, 3000);
    }, 2000);
}

document.addEventListener('DOMContentLoaded', function() {
    updateBalanceDisplay();
});
</script>

<?php include '../includes/footer.php'; ?>
