<?php
require_once '../includes/config.php';
$page_title = "Roulette - European Wheel";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       ROULETTE GAME - ELEGANT DESIGN
       ========================================== */
    
    .game-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(0, 100, 200, 0.05), rgba(0, 150, 255, 0.05));
    }
    
    .roulette-wrapper {
        max-width: 1000px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
    }
    
    .roulette-main {
        background: linear-gradient(135deg, rgba(0, 100, 200, 0.1), rgba(0, 150, 255, 0.1));
        border: 3px solid #0096ff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(0, 150, 255, 0.2), inset 0 0 40px rgba(0, 150, 255, 0.05);
        backdrop-filter: blur(10px);
    }
    
    .roulette-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #0096ff, #00d9ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 20px rgba(0, 150, 255, 0.3);
    }
    
    .wheel-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px 0;
        position: relative;
        height: 350px;
    }
    
    .wheel {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: conic-gradient(
            red 0deg 18.9deg,
            black 18.9deg 37.8deg,
            red 37.8deg 56.7deg,
            black 56.7deg 75.6deg,
            red 75.6deg 94.5deg,
            black 94.5deg 113.4deg,
            red 113.4deg 132.3deg,
            black 132.3deg 151.2deg,
            red 151.2deg 170.1deg,
            black 170.1deg 189deg,
            red 189deg 207.9deg,
            black 207.9deg 226.8deg,
            red 226.8deg 245.7deg,
            black 245.7deg 264.6deg,
            red 264.6deg 283.5deg,
            black 283.5deg 302.4deg,
            red 302.4deg 321.3deg,
            black 321.3deg 340.2deg,
            red 340.2deg 360deg
        );
        border: 5px solid #0096ff;
        box-shadow: 0 0 40px rgba(0, 150, 255, 0.4), inset 0 0 30px rgba(0, 0, 0, 0.3);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .wheel.spinning {
        animation: spinWheel 3s linear;
    }
    
    @keyframes spinWheel {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(3600deg); }
    }
    
    .wheel-center {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #0096ff, #00d9ff);
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 0 20px rgba(0, 150, 255, 0.5);
    }
    
    .wheel-pointer {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-top: 25px solid #ffd700;
        z-index: 10;
        filter: drop-shadow(0 0 10px rgba(255, 215, 0, 0.5));
    }
    
    .betting-area {
        margin: 30px 0;
    }
    
    .bet-options {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin: 20px 0;
    }
    
    .bet-btn {
        padding: 12px;
        background: linear-gradient(135deg, rgba(0, 150, 255, 0.2), rgba(0, 150, 255, 0.1));
        border: 2px solid #0096ff;
        border-radius: 10px;
        color: #0096ff;
        font-size: 0.95rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .bet-btn:hover {
        background: linear-gradient(135deg, rgba(0, 150, 255, 0.4), rgba(0, 150, 255, 0.2));
        box-shadow: 0 0 20px rgba(0, 150, 255, 0.3);
    }
    
    .bet-btn.active {
        background: linear-gradient(135deg, #0096ff, #00d9ff);
        color: #000;
        box-shadow: 0 0 30px rgba(0, 150, 255, 0.5);
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
    }
    
    .result-message.lose {
        background: linear-gradient(135deg, rgba(255, 68, 68, 0.2), rgba(255, 68, 68, 0.1));
        border: 2px solid #ff4444;
        color: #ff4444;
        box-shadow: 0 0 30px rgba(255, 68, 68, 0.4);
    }
    
    @keyframes resultPop {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }
    
    /* Control Panel */
    .control-panel {
        background: linear-gradient(135deg, rgba(0, 100, 200, 0.1), rgba(0, 150, 255, 0.1));
        border: 3px solid #0096ff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 0 40px rgba(0, 150, 255, 0.2);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 100px;
    }
    
    .control-title {
        font-size: 1.5rem;
        color: #0096ff;
        margin-bottom: 20px;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(0, 150, 255, 0.3);
    }
    
    .control-group {
        margin-bottom: 25px;
    }
    
    .control-label {
        display: block;
        color: #0096ff;
        font-size: 0.95rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .control-input {
        width: 100%;
        padding: 12px;
        background: rgba(0, 150, 255, 0.1);
        border: 2px solid #0096ff;
        border-radius: 8px;
        color: #0096ff;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .control-input:focus {
        outline: none;
        border-color: #00d9ff;
        box-shadow: 0 0 20px rgba(0, 150, 255, 0.3);
    }
    
    .bet-presets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }
    
    .preset-btn {
        padding: 10px;
        background: rgba(0, 150, 255, 0.1);
        border: 2px solid #0096ff;
        border-radius: 8px;
        color: #0096ff;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .preset-btn:hover {
        background: rgba(0, 150, 255, 0.2);
        box-shadow: 0 0 15px rgba(0, 150, 255, 0.3);
    }
    
    .spin-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #0096ff, #00d9ff);
        border: none;
        border-radius: 10px;
        color: #000;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(0, 150, 255, 0.4);
        margin-top: 20px;
    }
    
    .spin-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 40px rgba(0, 150, 255, 0.6);
    }
    
    .spin-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .stats-box {
        background: rgba(0, 150, 255, 0.1);
        border: 2px solid rgba(0, 150, 255, 0.3);
        border-radius: 10px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(0, 150, 255, 0.7);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #0096ff;
        font-size: 1.4rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(0, 150, 255, 0.3);
    }
    
    @media (max-width: 968px) {
        .roulette-wrapper {
            grid-template-columns: 1fr;
        }
        
        .control-panel {
            position: relative;
            top: 0;
        }
        
        .wheel {
            width: 250px;
            height: 250px;
        }
    }
</style>

<div class="game-container">
    <div class="roulette-wrapper">
        <!-- Main Game Area -->
        <div class="roulette-main">
            <h1 class="roulette-title">🎡 ROULETTE 🎡</h1>
            
            <!-- Wheel -->
            <div class="wheel-container">
                <div class="wheel-pointer"></div>
                <div class="wheel" id="wheel"></div>
            </div>
            
            <!-- Betting Area -->
            <div class="betting-area">
                <div style="text-align: center; color: #0096ff; font-weight: bold; margin-bottom: 15px;">Choose Your Bet:</div>
                <div class="bet-options">
                    <button class="bet-btn" data-bet="red" onclick="selectBet('red', this)">🔴 RED</button>
                    <button class="bet-btn" data-bet="black" onclick="selectBet('black', this)">⚫ BLACK</button>
                    <button class="bet-btn" data-bet="even" onclick="selectBet('even', this)">🔢 EVEN</button>
                    <button class="bet-btn" data-bet="odd" onclick="selectBet('odd', this)">🔢 ODD</button>
                    <button class="bet-btn" data-bet="low" onclick="selectBet('low', this)">⬇️ LOW</button>
                    <button class="bet-btn" data-bet="high" onclick="selectBet('high', this)">⬆️ HIGH</button>
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
            
            <button class="spin-btn" id="spinBtn" onclick="spinRoulette()">SPIN WHEEL</button>
            
            <div class="stats-box">
                <div class="stat-label">Selected Bet</div>
                <div class="stat-value" id="selectedBetDisplay">None</div>
            </div>
            
            <div class="stats-box">
                <div class="stat-label">Payout</div>
                <div class="stat-value">2x Multiplier</div>
            </div>
        </div>
    </div>
</div>

<script>
let selectedBet = null;
let isSpinning = false;

const redNumbers = [1, 3, 5, 7, 9, 12, 14, 16, 18, 19, 21, 23, 25, 27, 30, 32, 34, 36];
const blackNumbers = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20, 22, 24, 26, 28, 29, 31, 33, 35];

function setBet(amount) {
    document.getElementById('betAmount').value = amount;
}

function selectBet(bet, element) {
    document.querySelectorAll('.bet-btn').forEach(btn => btn.classList.remove('active'));
    element.classList.add('active');
    selectedBet = bet;
    document.getElementById('selectedBetDisplay').textContent = bet.toUpperCase();
}

function spinRoulette() {
    if (isSpinning) return;
    
    const betAmount = parseFloat(document.getElementById('betAmount').value);
    
    if (!selectedBet) {
        showNotification('Please select a bet type', 'warning');
        return;
    }
    
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
    const wheel = document.getElementById('wheel');
    wheel.classList.add('spinning');
    
    setTimeout(() => {
        wheel.classList.remove('spinning');
        
        // Generate random number (0-36)
        const result = Math.floor(Math.random() * 37);
        
        // Determine win
        let won = false;
        let resultText = '';
        
        if (selectedBet === 'red') {
            won = redNumbers.includes(result);
            resultText = `Red ${result}`;
        } else if (selectedBet === 'black') {
            won = blackNumbers.includes(result);
            resultText = `Black ${result}`;
        } else if (selectedBet === 'even') {
            won = result !== 0 && result % 2 === 0;
            resultText = `Even ${result}`;
        } else if (selectedBet === 'odd') {
            won = result !== 0 && result % 2 !== 0;
            resultText = `Odd ${result}`;
        } else if (selectedBet === 'low') {
            won = result > 0 && result <= 18;
            resultText = `Low ${result}`;
        } else if (selectedBet === 'high') {
            won = result > 18;
            resultText = `High ${result}`;
        }
        
        const resultArea = document.getElementById('resultArea');
        if (won) {
            const payout = betAmount * 2;
            resultArea.innerHTML = `<div class="result-message win">✨ YOU WON! ${resultText}<br>Won ${formatCurrency(payout)} ✨</div>`;
            showNotification(`Won ${formatCurrency(payout)}!`, 'success');
            updateBalance(payout);
        } else {
            resultArea.innerHTML = `<div class="result-message lose">❌ YOU LOST - ${resultText} ❌</div>`;
            showNotification(`Lost ${formatCurrency(betAmount)}!`, 'error');
        }
        
        isSpinning = false;
        document.getElementById('spinBtn').disabled = false;
        
        // Clear result after 3 seconds
        setTimeout(() => {
            resultArea.innerHTML = '';
        }, 3000);
    }, 3000);
}

document.addEventListener('DOMContentLoaded', function() {
    updateBalanceDisplay();
});
</script>

<?php include '../includes/footer.php'; ?>
