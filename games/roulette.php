<?php
require_once '../includes/config.php';
$page_title = "Roulette - European Wheel";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       IMPROVED ROULETTE GAME WITH NUMBERS
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
        max-width: 1200px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 380px;
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
        height: 400px;
    }
    
    .wheel {
        width: 350px;
        height: 350px;
        border-radius: 50%;
        border: 5px solid #0096ff;
        box-shadow: 0 0 40px rgba(0, 150, 255, 0.4), inset 0 0 30px rgba(0, 0, 0, 0.3);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #1a1a2e;
    }
    
    .wheel-segment {
        position: absolute;
        width: 50%;
        height: 50%;
        transform-origin: 100% 100%;
        clip-path: polygon(100% 100%, 0% 100%, 50% 0%);
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding-top: 15px;
    }
    
    .wheel-number {
        color: white;
        font-weight: bold;
        font-size: 16px;
        text-shadow: 0 0 5px rgba(0, 0, 0, 0.8);
        transform: rotate(-90deg);
        user-select: none;
    }
    
    .wheel.spinning {
        animation: spinWheel 4s cubic-bezier(0.17, 0.67, 0.12, 0.99);
    }
    
    @keyframes spinWheel {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(3600deg); }
    }
    
    .wheel-center {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #0096ff, #00d9ff);
        border-radius: 50%;
        border: 4px solid #fff;
        box-shadow: 0 0 30px rgba(0, 150, 255, 0.6);
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
        color: #000;
    }
    
    .wheel-pointer {
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 35px solid #ffd700;
        z-index: 10;
        filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.8));
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
        padding: 15px;
        background: linear-gradient(135deg, rgba(0, 150, 255, 0.2), rgba(0, 150, 255, 0.1));
        border: 2px solid #0096ff;
        border-radius: 10px;
        color: #0096ff;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .bet-btn:hover {
        background: linear-gradient(135deg, rgba(0, 150, 255, 0.4), rgba(0, 150, 255, 0.2));
        box-shadow: 0 0 20px rgba(0, 150, 255, 0.3);
        transform: translateY(-2px);
    }
    
    .bet-btn.active {
        background: linear-gradient(135deg, #0096ff, #00d9ff);
        color: #000;
        box-shadow: 0 0 30px rgba(0, 150, 255, 0.5);
    }
    
    .result-area {
        text-align: center;
        min-height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
        gap: 15px;
    }
    
    .result-number {
        font-size: 3rem;
        font-weight: bold;
        padding: 20px 40px;
        border-radius: 15px;
        animation: resultPop 0.6s ease;
        min-width: 120px;
    }
    
    .result-number.red {
        background: linear-gradient(135deg, rgba(255, 0, 0, 0.3), rgba(255, 0, 0, 0.2));
        border: 3px solid #ff0000;
        color: #ff0000;
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.5);
    }
    
    .result-number.black {
        background: linear-gradient(135deg, rgba(50, 50, 50, 0.5), rgba(30, 30, 30, 0.4));
        border: 3px solid #ffffff;
        color: #ffffff;
        box-shadow: 0 0 40px rgba(255, 255, 255, 0.3);
    }
    
    .result-message {
        font-size: 1.8rem;
        font-weight: bold;
        padding: 15px 30px;
        border-radius: 10px;
        animation: resultPop 0.5s ease 0.3s both;
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
        max-height: calc(100vh - 120px);
        overflow-y: auto;
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
        padding: 18px;
        background: linear-gradient(135deg, #0096ff, #00d9ff);
        border: none;
        border-radius: 10px;
        color: #000;
        font-size: 1.3rem;
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
        font-size: 1.6rem;
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
            width: 280px;
            height: 280px;
        }
        
        .wheel-number {
            font-size: 14px;
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
                <div class="wheel" id="wheel">
                    <div class="wheel-center" id="wheelCenter">🎰</div>
                </div>
            </div>
            
            <!-- Result Area -->
            <div class="result-area" id="resultArea"></div>
            
            <!-- Betting Area -->
            <div class="betting-area">
                <div style="text-align: center; color: #0096ff; font-weight: bold; margin-bottom: 15px; font-size: 1.1rem;">Choose Your Bet:</div>
                <div class="bet-options">
                    <button class="bet-btn" data-bet="red" onclick="selectBet('red', this)">🔴 RED</button>
                    <button class="bet-btn" data-bet="black" onclick="selectBet('black', this)">⚫ BLACK</button>
                    <button class="bet-btn" data-bet="even" onclick="selectBet('even', this)">📊 EVEN</button>
                    <button class="bet-btn" data-bet="odd" onclick="selectBet('odd', this)">📈 ODD</button>
                    <button class="bet-btn" data-bet="low" onclick="selectBet('low', this)">⬇️ LOW (1-18)</button>
                    <button class="bet-btn" data-bet="high" onclick="selectBet('high', this)">⬆️ HIGH (19-36)</button>
                </div>
            </div>
        </div>
        
        <!-- Control Panel -->
        <div class="control-panel">
            <div class="control-title">⚙️ CONTROLS</div>
            
            <div class="control-group">
                <label class="control-label">Bet Amount (₹)</label>
                <input type="number" id="betAmount" class="control-input" value="500" min="<?php echo MIN_BET; ?>" max="<?php echo MAX_BET; ?>" step="100">
                <div class="bet-presets">
                    <button class="preset-btn" onclick="setBetAmount(200)">₹200</button>
                    <button class="preset-btn" onclick="setBetAmount(500)">₹500</button>
                    <button class="preset-btn" onclick="setBetAmount(1000)">₹1K</button>
                    <button class="preset-btn" onclick="setBetAmount(2000)">₹2K</button>
                </div>
            </div>
            
            <button class="spin-btn" id="spinBtn" onclick="spinWheel()">SPIN WHEEL</button>
            
            <div class="stats-box">
                <div class="stat-label">Selected Bet</div>
                <div class="stat-value" id="selectedBet">None</div>
            </div>
            
            <div class="stats-box">
                <div class="stat-label">Payout</div>
                <div class="stat-value">2x Multiplier</div>
            </div>
        </div>
    </div>
</div>

<script>
// European Roulette Numbers (0-36)
const rouletteNumbers = [
    0, 32, 15, 19, 4, 21, 2, 25, 17, 34, 6, 27, 13, 36, 11, 30, 8, 23, 10,
    5, 24, 16, 33, 1, 20, 14, 31, 9, 22, 18, 29, 7, 28, 12, 35, 3, 26
];

const redNumbers = [1, 3, 5, 7, 9, 12, 14, 16, 18, 19, 21, 23, 25, 27, 30, 32, 34, 36];
const blackNumbers = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20, 22, 24, 26, 28, 29, 31, 33, 35];

let selectedBet = null;
let isSpinning = false;

// Create wheel segments with numbers
function createWheel() {
    const wheel = document.getElementById('wheel');
    const segmentAngle = 360 / rouletteNumbers.length;
    
    rouletteNumbers.forEach((number, index) => {
        const segment = document.createElement('div');
        segment.className = 'wheel-segment';
        
        // Determine color
        let color;
        if (number === 0) {
            color = '#00ff00'; // Green for 0
        } else if (redNumbers.includes(number)) {
            color = '#ff0000'; // Red
        } else {
            color = '#000000'; // Black
        }
        
        segment.style.background = color;
        segment.style.transform = `rotate(${index * segmentAngle}deg)`;
        
        const numberSpan = document.createElement('span');
        numberSpan.className = 'wheel-number';
        numberSpan.textContent = number;
        numberSpan.style.transform = `rotate(${90 + (segmentAngle / 2)}deg)`;
        
        segment.appendChild(numberSpan);
        wheel.appendChild(segment);
    });
}

// Initialize wheel on page load
createWheel();

function selectBet(bet, button) {
    if (isSpinning) return;
    
    // Remove active class from all buttons
    document.querySelectorAll('.bet-btn').forEach(btn => btn.classList.remove('active'));
    
    // Add active class to selected button
    button.classList.add('active');
    selectedBet = bet;
    
    // Update display
    document.getElementById('selectedBet').textContent = bet.toUpperCase();
}

function setBetAmount(amount) {
    document.getElementById('betAmount').value = amount;
}

async function spinWheel() {
    if (isSpinning) return;
    
    const betAmount = parseInt(document.getElementById('betAmount').value);
    
    // Validation
    if (!selectedBet) {
        alert('Please select a bet type!');
        return;
    }
    
    if (betAmount < <?php echo MIN_BET; ?>) {
        alert('Minimum bet is ₹<?php echo MIN_BET; ?>!');
        return;
    }
    
    if (betAmount > <?php echo MAX_BET; ?>) {
        alert('Maximum bet is ₹<?php echo MAX_BET; ?>!');
        return;
    }
    
    // Check balance
    const currentBalance = await getBalance();
    if (betAmount > currentBalance) {
        alert('Insufficient balance!');
        return;
    }
    
    isSpinning = true;
    document.getElementById('spinBtn').disabled = true;
    document.getElementById('resultArea').innerHTML = '';
    
    // Deduct bet amount
    await updateBalance(-betAmount);
    
    // Spin animation
    const wheel = document.getElementById('wheel');
    wheel.classList.add('spinning');
    
    // Generate random result
    const resultNumber = rouletteNumbers[Math.floor(Math.random() * rouletteNumbers.length)];
    
    setTimeout(async () => {
        wheel.classList.remove('spinning');
        
        // Determine result color
        let resultColor;
        if (resultNumber === 0) {
            resultColor = 'green';
        } else if (redNumbers.includes(resultNumber)) {
            resultColor = 'red';
        } else {
            resultColor = 'black';
        }
        
        // Check if won
        let won = false;
        if (selectedBet === 'red' && resultColor === 'red') won = true;
        if (selectedBet === 'black' && resultColor === 'black') won = true;
        if (selectedBet === 'even' && resultNumber !== 0 && resultNumber % 2 === 0) won = true;
        if (selectedBet === 'odd' && resultNumber % 2 !== 0) won = true;
        if (selectedBet === 'low' && resultNumber >= 1 && resultNumber <= 18) won = true;
        if (selectedBet === 'high' && resultNumber >= 19 && resultNumber <= 36) won = true;
        
        // Display result
        const resultArea = document.getElementById('resultArea');
        const numberDiv = document.createElement('div');
        numberDiv.className = `result-number ${resultColor}`;
        numberDiv.textContent = resultNumber;
        resultArea.appendChild(numberDiv);
        
        if (won) {
            const winAmount = betAmount * 2;
            await updateBalance(winAmount);
            
            const messageDiv = document.createElement('div');
            messageDiv.className = 'result-message win';
            messageDiv.textContent = `🎉 YOU WIN ₹${winAmount.toLocaleString('en-IN')}! 🎉`;
            resultArea.appendChild(messageDiv);
        } else {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'result-message lose';
            messageDiv.textContent = `❌ YOU LOSE ₹${betAmount.toLocaleString('en-IN')} ❌`;
            resultArea.appendChild(messageDiv);
        }
        
        isSpinning = false;
        document.getElementById('spinBtn').disabled = false;
        
        // Update wheel center with result
        document.getElementById('wheelCenter').textContent = resultNumber;
        
    }, 4000);
}

// Balance management functions
async function getBalance() {
    try {
        const response = await fetch('../api/get-balance.php');
        const data = await response.json();
        return data.balance;
    } catch (error) {
        console.error('Error getting balance:', error);
        return 0;
    }
}

async function updateBalance(amount) {
    try {
        const response = await fetch('../api/update-balance.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `amount=${amount}`
        });
        const data = await response.json();
        return data.success;
    } catch (error) {
        console.error('Error updating balance:', error);
        return false;
    }
}
</script>

<?php include '../includes/footer.php'; ?>
