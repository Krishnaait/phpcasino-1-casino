<?php
require_once '../includes/config.php';
$page_title = "Mines Game - Find Safe Tiles";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       MINES GAME - RETRO ARCADE DESIGN
       ========================================== */
    
    .game-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(255, 165, 0, 0.05), rgba(255, 69, 0, 0.05));
    }
    
    .mines-wrapper {
        max-width: 1000px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
    }
    
    .mines-main {
        background: linear-gradient(135deg, rgba(255, 165, 0, 0.1), rgba(255, 69, 0, 0.1));
        border: 3px solid #ffa500;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(255, 165, 0, 0.2), inset 0 0 40px rgba(255, 165, 0, 0.05);
        backdrop-filter: blur(10px);
    }
    
    .mines-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffa500, #ff6347);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 20px rgba(255, 165, 0, 0.3);
    }
    
    .mines-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 12px;
        margin: 30px auto;
        max-width: 500px;
    }
    
    .mine-tile {
        aspect-ratio: 1;
        background: linear-gradient(135deg, rgba(255, 165, 0, 0.2), rgba(255, 69, 0, 0.2));
        border: 3px solid #ffa500;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(255, 165, 0, 0.2);
    }
    
    .mine-tile:hover:not(.revealed):not(.disabled) {
        background: linear-gradient(135deg, rgba(255, 165, 0, 0.4), rgba(255, 69, 0, 0.4));
        border-color: #ff6347;
        transform: scale(1.08);
        box-shadow: 0 0 25px rgba(255, 165, 0, 0.4);
    }
    
    .mine-tile.revealed {
        cursor: default;
        animation: tileReveal 0.3s ease;
    }
    
    .mine-tile.revealed.safe {
        background: linear-gradient(135deg, #00ff00, #00cc00);
        border-color: #00ff00;
        box-shadow: 0 0 30px rgba(0, 255, 0, 0.5);
    }
    
    .mine-tile.revealed.mine {
        background: linear-gradient(135deg, #ff4444, #cc0000);
        border-color: #ff4444;
        box-shadow: 0 0 30px rgba(255, 68, 68, 0.5);
        animation: explode 0.5s ease;
    }
    
    .mine-tile.disabled {
        cursor: not-allowed;
        opacity: 0.5;
    }
    
    @keyframes tileReveal {
        0% { transform: scale(0.8) rotateY(90deg); }
        100% { transform: scale(1) rotateY(0deg); }
    }
    
    @keyframes explode {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }
    
    .multiplier-display {
        text-align: center;
        font-size: 2rem;
        color: #ffa500;
        font-weight: bold;
        margin: 20px 0;
        text-shadow: 0 0 15px rgba(255, 165, 0, 0.5);
    }
    
    .current-win {
        text-align: center;
        font-size: 1.5rem;
        color: #00ff00;
        font-weight: bold;
        margin-bottom: 20px;
        text-shadow: 0 0 10px rgba(0, 255, 0, 0.3);
    }
    
    .result-area {
        text-align: center;
        min-height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
    }
    
    .result-message {
        font-size: 1.5rem;
        font-weight: bold;
        padding: 15px 30px;
        border-radius: 10px;
        animation: resultPop 0.5s ease;
    }
    
    .result-message.win {
        background: rgba(0, 255, 0, 0.2);
        border: 2px solid #00ff00;
        color: #00ff00;
        box-shadow: 0 0 30px rgba(0, 255, 0, 0.4);
    }
    
    .result-message.lose {
        background: rgba(255, 68, 68, 0.2);
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
        background: linear-gradient(135deg, rgba(255, 165, 0, 0.1), rgba(255, 69, 0, 0.1));
        border: 3px solid #ffa500;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 0 40px rgba(255, 165, 0, 0.2);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 100px;
    }
    
    .control-title {
        font-size: 1.5rem;
        color: #ffa500;
        margin-bottom: 20px;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 165, 0, 0.3);
    }
    
    .control-group {
        margin-bottom: 25px;
    }
    
    .control-label {
        display: block;
        color: #ffa500;
        font-size: 0.95rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .control-input {
        width: 100%;
        padding: 12px;
        background: rgba(255, 165, 0, 0.1);
        border: 2px solid #ffa500;
        border-radius: 8px;
        color: #ffa500;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .control-input:focus {
        outline: none;
        border-color: #ff6347;
        box-shadow: 0 0 20px rgba(255, 165, 0, 0.3);
    }
    
    .bet-presets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }
    
    .preset-btn {
        padding: 10px;
        background: rgba(255, 165, 0, 0.1);
        border: 2px solid #ffa500;
        border-radius: 8px;
        color: #ffa500;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .preset-btn:hover {
        background: rgba(255, 165, 0, 0.2);
        box-shadow: 0 0 15px rgba(255, 165, 0, 0.3);
    }
    
    .start-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #ffa500, #ff8c00);
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 165, 0, 0.4);
        margin-top: 20px;
    }
    
    .start-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 40px rgba(255, 165, 0, 0.6);
    }
    
    .cashout-btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #00ff00, #00cc00);
        border: none;
        border-radius: 8px;
        color: #000;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 20px rgba(0, 255, 0, 0.3);
        margin-top: 10px;
    }
    
    .cashout-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 30px rgba(0, 255, 0, 0.5);
    }
    
    .stats-box {
        background: rgba(255, 165, 0, 0.1);
        border: 2px solid rgba(255, 165, 0, 0.3);
        border-radius: 10px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(255, 165, 0, 0.7);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #ffa500;
        font-size: 1.4rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 165, 0, 0.3);
    }
    
    @media (max-width: 968px) {
        .mines-wrapper {
            grid-template-columns: 1fr;
        }
        
        .control-panel {
            position: relative;
            top: 0;
        }
    }
</style>

<div class="game-container">
    <div class="mines-wrapper">
        <!-- Main Game Area -->
        <div class="mines-main">
            <h1 class="mines-title">💣 MINES 💣</h1>
            
            <!-- Multiplier Display -->
            <div class="multiplier-display" id="multiplierDisplay">1.0x</div>
            
            <!-- Current Win -->
            <div class="current-win" id="currentWin"></div>
            
            <!-- Mines Grid -->
            <div class="mines-grid" id="minesGrid"></div>
            
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
            
            <button class="start-btn" id="startBtn" onclick="startMinesGame()">START GAME</button>
            <button class="cashout-btn" id="cashoutBtn" onclick="cashoutMines()" style="display:none;">CASHOUT</button>
            
            <div class="stats-box">
                <div class="stat-label">Safe Tiles</div>
                <div class="stat-value" id="safeCount">0/20</div>
            </div>
            
            <div class="stats-box">
                <div class="stat-label">Mines</div>
                <div class="stat-value">5 Hidden</div>
            </div>
        </div>
    </div>
</div>

<script>
let gameState = {
    isPlaying: false,
    betAmount: 0,
    mines: [],
    revealed: new Set(),
    safeRevealed: 0,
    multiplier: 1.0
};

function setBet(amount) {
    document.getElementById('betAmount').value = amount;
}

function generateMines() {
    gameState.mines = [];
    while (gameState.mines.length < 5) {
        const pos = Math.floor(Math.random() * 25);
        if (!gameState.mines.includes(pos)) {
            gameState.mines.push(pos);
        }
    }
}

function startMinesGame() {
    const betAmount = parseFloat(document.getElementById('betAmount').value);
    const validation = validateBet(betAmount);
    
    if (!validation.valid) {
        showNotification(validation.message, 'error');
        return;
    }
    
    gameState.isPlaying = true;
    gameState.betAmount = betAmount;
    gameState.revealed = new Set();
    gameState.safeRevealed = 0;
    gameState.multiplier = 1.0;
    
    updateBalance(-betAmount);
    generateMines();
    renderGrid();
    
    document.getElementById('startBtn').style.display = 'none';
    document.getElementById('cashoutBtn').style.display = 'block';
    document.getElementById('resultArea').innerHTML = '';
    document.getElementById('currentWin').textContent = `Current Win: ${formatCurrency(betAmount)}`;
}

function renderGrid() {
    const grid = document.getElementById('minesGrid');
    grid.innerHTML = '';
    
    for (let i = 0; i < 25; i++) {
        const tile = document.createElement('div');
        tile.className = 'mine-tile';
        
        if (gameState.revealed.has(i)) {
            tile.classList.add('revealed');
            if (gameState.mines.includes(i)) {
                tile.classList.add('mine');
                tile.textContent = '💣';
            } else {
                tile.classList.add('safe');
                tile.textContent = '✓';
            }
        } else if (gameState.isPlaying) {
            tile.onclick = () => revealTile(i);
        } else {
            tile.classList.add('disabled');
        }
        
        grid.appendChild(tile);
    }
}

function revealTile(index) {
    if (!gameState.isPlaying || gameState.revealed.has(index)) return;
    
    gameState.revealed.add(index);
    
    if (gameState.mines.includes(index)) {
        // Hit a mine - game over
        gameState.isPlaying = false;
        document.getElementById('resultArea').innerHTML = '<div class="result-message lose">💥 GAME OVER! You hit a mine!</div>';
        showNotification('You hit a mine! Game Over!', 'error');
        revealAllMines();
        endMinesGame(false);
    } else {
        // Safe tile
        gameState.safeRevealed++;
        gameState.multiplier = 1 + (gameState.safeRevealed * 0.15);
        document.getElementById('multiplierDisplay').textContent = gameState.multiplier.toFixed(2) + 'x';
        document.getElementById('safeCount').textContent = gameState.safeRevealed + '/20';
        
        const currentWin = gameState.betAmount * gameState.multiplier;
        document.getElementById('currentWin').textContent = `Current Win: ${formatCurrency(currentWin)}`;
        
        renderGrid();
    }
}

function revealAllMines() {
    gameState.mines.forEach(index => {
        gameState.revealed.add(index);
    });
    renderGrid();
}

function cashoutMines() {
    if (!gameState.isPlaying) return;
    
    gameState.isPlaying = false;
    const winAmount = gameState.betAmount * gameState.multiplier;
    
    document.getElementById('resultArea').innerHTML = `<div class="result-message win">✨ CASHED OUT! Won ${formatCurrency(winAmount)} ✨</div>`;
    showNotification(`Cashed out! Won ${formatCurrency(winAmount)}!`, 'success');
    
    updateBalance(winAmount);
    endMinesGame(true);
}

function endMinesGame(won) {
    document.getElementById('startBtn').style.display = 'block';
    document.getElementById('cashoutBtn').style.display = 'none';
    
    setTimeout(() => {
        document.getElementById('minesGrid').innerHTML = '';
        document.getElementById('multiplierDisplay').textContent = '1.0x';
        document.getElementById('currentWin').textContent = '';
        document.getElementById('safeCount').textContent = '0/20';
    }, 3000);
}

document.addEventListener('DOMContentLoaded', function() {
    updateBalanceDisplay();
});
</script>

<?php include '../includes/footer.php'; ?>
