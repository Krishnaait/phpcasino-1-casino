<?php
require_once '../includes/config.php';
$page_title = "Slot Machine - Classic 3-Reel Slots";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       IMPROVED SLOTS GAME - CASINO SYMBOLS
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
        max-width: 1200px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 30px;
    }
    
    .slots-main {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.15), rgba(218, 165, 32, 0.1));
        border: 4px solid #daa520;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(255, 215, 0, 0.3), inset 0 0 40px rgba(255, 215, 0, 0.05);
        backdrop-filter: blur(10px);
    }
    
    .slots-title {
        font-size: 2.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, #daa520, #ffd700, #ffed4e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.4);
        animation: titleGlow 2s ease-in-out infinite;
    }
    
    @keyframes titleGlow {
        0%, 100% { filter: brightness(1); }
        50% { filter: brightness(1.3); }
    }
    
    .slots-machine {
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3));
        border: 4px solid #daa520;
        border-radius: 20px;
        padding: 40px;
        margin: 30px 0;
        box-shadow: inset 0 0 40px rgba(0, 0, 0, 0.6), 0 0 30px rgba(255, 215, 0, 0.2);
        position: relative;
    }
    
    .machine-top {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 20px;
        color: #ffd700;
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
    }
    
    .reels-container {
        display: flex;
        justify-content: center;
        gap: 25px;
        margin: 40px 0;
        padding: 20px;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3));
        border-radius: 15px;
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.8);
    }
    
    .reel {
        width: 120px;
        height: 140px;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
        border: 4px solid #ffd700;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
        overflow: hidden;
        box-shadow: 0 0 25px rgba(255, 215, 0, 0.4), inset 0 0 20px rgba(0, 0, 0, 0.6);
        position: relative;
    }
    
    .reel::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, rgba(255, 215, 0, 0.1) 50%, transparent 100%);
        pointer-events: none;
    }
    
    .reel.spinning {
        animation: spinReel 0.1s linear infinite;
    }
    
    @keyframes spinReel {
        0% { transform: translateY(0); }
        100% { transform: translateY(-100%); }
    }
    
    .reel-symbol {
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
        animation: symbolPulse 1s ease-in-out infinite;
    }
    
    @keyframes symbolPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    .reel.winning .reel-symbol {
        animation: winningSymbol 0.5s ease-in-out infinite;
    }
    
    @keyframes winningSymbol {
        0%, 100% { transform: scale(1); filter: brightness(1); }
        50% { transform: scale(1.2); filter: brightness(1.5); }
    }
    
    .symbols-legend {
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 20px;
        margin: 20px 0;
    }
    
    .legend-title {
        text-align: center;
        color: #ffd700;
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 15px;
    }
    
    .legend-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }
    
    .legend-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
    }
    
    .legend-symbol {
        font-size: 2.5rem;
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
    }
    
    .legend-payout {
        color: #ffd700;
        font-size: 0.9rem;
        font-weight: 600;
    }
    
    .result-area {
        text-align: center;
        min-height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 25px 0;
    }
    
    .result-message {
        font-size: 2rem;
        font-weight: bold;
        padding: 20px 40px;
        border-radius: 15px;
        animation: resultPop 0.6s ease;
    }
    
    .result-message.win {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.3), rgba(255, 215, 0, 0.2));
        border: 3px solid #ffd700;
        color: #ffd700;
        box-shadow: 0 0 40px rgba(255, 215, 0, 0.6);
    }
    
    .result-message.lose {
        background: linear-gradient(135deg, rgba(255, 68, 68, 0.2), rgba(255, 68, 68, 0.1));
        border: 3px solid #ff4444;
        color: #ff4444;
        box-shadow: 0 0 30px rgba(255, 68, 68, 0.4);
    }
    
    @keyframes resultPop {
        0% { transform: scale(0) rotate(-10deg); opacity: 0; }
        50% { transform: scale(1.15) rotate(5deg); }
        100% { transform: scale(1) rotate(0deg); opacity: 1; }
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
        max-height: calc(100vh - 120px);
        overflow-y: auto;
    }
    
    .control-title {
        font-size: 1.6rem;
        color: #ffd700;
        margin-bottom: 25px;
        font-weight: bold;
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.4);
        text-align: center;
    }
    
    .control-group {
        margin-bottom: 25px;
    }
    
    .control-label {
        display: block;
        color: #ffd700;
        font-size: 1rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .control-input {
        width: 100%;
        padding: 14px;
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid #daa520;
        border-radius: 10px;
        color: #ffd700;
        font-size: 1.1rem;
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
        margin-top: 12px;
    }
    
    .preset-btn {
        padding: 12px;
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid #daa520;
        border-radius: 10px;
        color: #ffd700;
        font-size: 0.95rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .preset-btn:hover {
        background: rgba(255, 215, 0, 0.2);
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        transform: translateY(-2px);
    }
    
    .spin-btn {
        width: 100%;
        padding: 20px;
        background: linear-gradient(135deg, #daa520, #ffd700);
        border: none;
        border-radius: 12px;
        color: #000;
        font-size: 1.4rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 215, 0, 0.4);
        margin-top: 25px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    
    .spin-btn:hover:not(:disabled) {
        transform: translateY(-3px);
        box-shadow: 0 0 40px rgba(255, 215, 0, 0.6);
        background: linear-gradient(135deg, #ffd700, #ffed4e);
    }
    
    .spin-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .stats-box {
        background: rgba(255, 215, 0, 0.1);
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 12px;
        padding: 18px;
        margin-top: 20px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(255, 215, 0, 0.7);
        font-size: 0.95rem;
        margin-bottom: 8px;
    }
    
    .stat-value {
        color: #ffd700;
        font-size: 1.6rem;
        font-weight: bold;
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.4);
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
            width: 90px;
            height: 110px;
            font-size: 3rem;
        }
        
        .reels-container {
            gap: 15px;
        }
    }
</style>

<div class="game-container">
    <div class="slots-wrapper">
        <!-- Main Game Area -->
        <div class="slots-main">
            <h1 class="slots-title">🎰 SLOT MACHINE 🎰</h1>
            
            <div class="slots-machine">
                <div class="machine-top">💎 JACKPOT SLOTS 💎</div>
                
                <div class="reels-container">
                    <div class="reel" id="reel1">
                        <div class="reel-symbol">💎</div>
                    </div>
                    <div class="reel" id="reel2">
                        <div class="reel-symbol">💰</div>
                    </div>
                    <div class="reel" id="reel3">
                        <div class="reel-symbol">🎰</div>
                    </div>
                </div>
                
                <div class="result-area" id="resultArea"></div>
            </div>
            
            <!-- Symbols Legend -->
            <div class="symbols-legend">
                <div class="legend-title">🎯 SYMBOL PAYOUTS</div>
                <div class="legend-grid">
                    <div class="legend-item">
                        <div class="legend-symbol">💎</div>
                        <div class="legend-payout">10x</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-symbol">7️⃣</div>
                        <div class="legend-payout">8x</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-symbol">⭐</div>
                        <div class="legend-payout">6x</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-symbol">🔔</div>
                        <div class="legend-payout">5x</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-symbol">💰</div>
                        <div class="legend-payout">4x</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-symbol">🎰</div>
                        <div class="legend-payout">3x</div>
                    </div>
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
            
            <button class="spin-btn" id="spinBtn" onclick="spinSlots()">🎰 SPIN 🎰</button>
            
            <div class="stats-box">
                <div class="stat-label">Max Payout</div>
                <div class="stat-value">10x Multiplier</div>
            </div>
        </div>
    </div>
</div>

<script>
// Slot symbols with their multipliers
const slotSymbols = [
    { symbol: '💎', multiplier: 10, weight: 1 },
    { symbol: '7️⃣', multiplier: 8, weight: 2 },
    { symbol: '⭐', multiplier: 6, weight: 3 },
    { symbol: '🔔', multiplier: 5, weight: 4 },
    { symbol: '💰', multiplier: 4, weight: 5 },
    { symbol: '🎰', multiplier: 3, weight: 6 }
];

let isSpinning = false;

function getRandomSymbol() {
    // Weighted random selection
    const totalWeight = slotSymbols.reduce((sum, s) => sum + s.weight, 0);
    let random = Math.random() * totalWeight;
    
    for (let symbol of slotSymbols) {
        random -= symbol.weight;
        if (random <= 0) {
            return symbol;
        }
    }
    return slotSymbols[slotSymbols.length - 1];
}

function setBetAmount(amount) {
    document.getElementById('betAmount').value = amount;
}

async function spinSlots() {
    if (isSpinning) return;
    
    const betAmount = parseInt(document.getElementById('betAmount').value);
    
    // Validation
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
    
    // Remove winning class
    document.querySelectorAll('.reel').forEach(reel => reel.classList.remove('winning'));
    
    // Deduct bet amount
    await updateBalance(-betAmount);
    
    // Start spinning animation
    const reels = [
        document.getElementById('reel1'),
        document.getElementById('reel2'),
        document.getElementById('reel3')
    ];
    
    reels.forEach(reel => reel.classList.add('spinning'));
    
    // Generate results
    const results = [
        getRandomSymbol(),
        getRandomSymbol(),
        getRandomSymbol()
    ];
    
    // Stop reels one by one
    setTimeout(() => {
        reels[0].classList.remove('spinning');
        reels[0].querySelector('.reel-symbol').textContent = results[0].symbol;
    }, 1000);
    
    setTimeout(() => {
        reels[1].classList.remove('spinning');
        reels[1].querySelector('.reel-symbol').textContent = results[1].symbol;
    }, 1500);
    
    setTimeout(async () => {
        reels[2].classList.remove('spinning');
        reels[2].querySelector('.reel-symbol').textContent = results[2].symbol;
        
        // Check for win
        if (results[0].symbol === results[1].symbol && results[1].symbol === results[2].symbol) {
            // WIN!
            const multiplier = results[0].multiplier;
            const winAmount = betAmount * multiplier;
            const netWin = winAmount - betAmount; // Only add the profit
            await updateBalance(netWin);
            
            // Add winning animation
            reels.forEach(reel => reel.classList.add('winning'));
            
            const resultArea = document.getElementById('resultArea');
            const messageDiv = document.createElement('div');
            messageDiv.className = 'result-message win';
            messageDiv.innerHTML = `🎉 JACKPOT! 🎉<br>You Won ₹${winAmount.toLocaleString('en-IN')}!<br>${multiplier}x Multiplier!`;
            resultArea.appendChild(messageDiv);
        } else {
            // LOSE
            const resultArea = document.getElementById('resultArea');
            const messageDiv = document.createElement('div');
            messageDiv.className = 'result-message lose';
            messageDiv.textContent = `❌ No Match - Try Again! ❌`;
            resultArea.appendChild(messageDiv);
        }
        
        isSpinning = false;
        document.getElementById('spinBtn').disabled = false;
        
    }, 2000);
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
