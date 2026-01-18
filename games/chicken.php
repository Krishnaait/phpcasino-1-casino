<?php
require_once '../includes/config.php';
$page_title = "Chicken Adventure - Platformer Game";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       CHICKEN GAME - PLATFORMER DESIGN
       ========================================== */
    
    .game-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.05), rgba(255, 140, 0, 0.05));
    }
    
    .chicken-wrapper {
        max-width: 1000px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
    }
    
    .chicken-main {
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.1), rgba(255, 140, 0, 0.1));
        border: 3px solid #ff6347;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(255, 69, 0, 0.2), inset 0 0 40px rgba(255, 69, 0, 0.05);
        backdrop-filter: blur(10px);
    }
    
    .chicken-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ff6347, #ff8c00);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 20px rgba(255, 69, 0, 0.3);
    }
    
    .game-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-bottom: 20px;
    }
    
    .stat-card {
        background: rgba(255, 69, 0, 0.1);
        padding: 12px;
        border-radius: 10px;
        border: 2px solid rgba(255, 69, 0, 0.3);
        text-align: center;
    }
    
    .stat-label {
        color: rgba(255, 69, 0, 0.7);
        font-size: 0.85rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #ff6347;
        font-size: 1.3rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 69, 0, 0.3);
    }
    
    .game-board {
        position: relative;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2));
        border: 3px solid #ff6347;
        border-radius: 15px;
        overflow: hidden;
        margin: 20px 0;
        box-shadow: inset 0 0 30px rgba(0, 0, 0, 0.5);
    }
    
    #chickenCanvas {
        display: block;
        width: 100%;
        height: auto;
        background: linear-gradient(180deg, rgba(135, 206, 235, 0.2), rgba(34, 139, 34, 0.2));
    }
    
    .controls-info {
        text-align: center;
        color: #ff6347;
        font-size: 0.9rem;
        margin-top: 15px;
        padding: 10px;
        background: rgba(255, 69, 0, 0.1);
        border-radius: 8px;
        border: 1px solid rgba(255, 69, 0, 0.2);
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
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.1), rgba(255, 140, 0, 0.1));
        border: 3px solid #ff6347;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 0 40px rgba(255, 69, 0, 0.2);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 100px;
    }
    
    .control-title {
        font-size: 1.5rem;
        color: #ff6347;
        margin-bottom: 20px;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 69, 0, 0.3);
    }
    
    .control-group {
        margin-bottom: 25px;
    }
    
    .control-label {
        display: block;
        color: #ff6347;
        font-size: 0.95rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .control-input {
        width: 100%;
        padding: 12px;
        background: rgba(255, 69, 0, 0.1);
        border: 2px solid #ff6347;
        border-radius: 8px;
        color: #ff6347;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .control-input:focus {
        outline: none;
        border-color: #ff8c00;
        box-shadow: 0 0 20px rgba(255, 69, 0, 0.3);
    }
    
    .bet-presets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }
    
    .preset-btn {
        padding: 10px;
        background: rgba(255, 69, 0, 0.1);
        border: 2px solid #ff6347;
        border-radius: 8px;
        color: #ff6347;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .preset-btn:hover {
        background: rgba(255, 69, 0, 0.2);
        box-shadow: 0 0 15px rgba(255, 69, 0, 0.3);
    }
    
    .start-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #ff6347, #ff8c00);
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 69, 0, 0.4);
        margin-top: 20px;
    }
    
    .start-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 40px rgba(255, 69, 0, 0.6);
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
        background: rgba(255, 69, 0, 0.1);
        border: 2px solid rgba(255, 69, 0, 0.3);
        border-radius: 10px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(255, 69, 0, 0.7);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #ff6347;
        font-size: 1.4rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 69, 0, 0.3);
    }
    
    @media (max-width: 968px) {
        .chicken-wrapper {
            grid-template-columns: 1fr;
        }
        
        .control-panel {
            position: relative;
            top: 0;
        }
    }
</style>

<div class="game-container">
    <div class="chicken-wrapper">
        <!-- Main Game Area -->
        <div class="chicken-main">
            <h1 class="chicken-title">🐔 CHICKEN ADVENTURE 🐔</h1>
            
            <!-- Game Stats -->
            <div class="game-stats">
                <div class="stat-card">
                    <div class="stat-label">Distance</div>
                    <div class="stat-value" id="distanceDisplay">0m</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Coins</div>
                    <div class="stat-value" id="coinsDisplay">0</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Multiplier</div>
                    <div class="stat-value" id="multiplierDisplay">1.0x</div>
                </div>
            </div>
            
            <!-- Game Board -->
            <div class="game-board">
                <canvas id="chickenCanvas" width="600" height="300"></canvas>
            </div>
            
            <div class="controls-info">
                🎮 Use ARROW KEYS or WASD to move | SPACE to jump
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
            
            <button class="start-btn" id="startBtn" onclick="startChickenGame()">START GAME</button>
            <button class="cashout-btn" id="cashoutBtn" onclick="cashoutChicken()" style="display:none;">CASHOUT</button>
            
            <div class="stats-box">
                <div class="stat-label">Current Win</div>
                <div class="stat-value" id="currentWinDisplay">₹0</div>
            </div>
            
            <div class="stats-box">
                <div class="stat-label">Personal Best</div>
                <div class="stat-value" id="personalBestDisplay">₹0</div>
            </div>
        </div>
    </div>
</div>

<script>
const canvas = document.getElementById('chickenCanvas');
const ctx = canvas.getContext('2d');

let gameState = {
    isRunning: false,
    betAmount: 0,
    distance: 0,
    coins: 0,
    multiplier: 1.0,
    currentWin: 0,
    personalBest: 0
};

let chicken = {
    x: 50,
    y: canvas.height - 100,
    width: 30,
    height: 30,
    velocityY: 0,
    velocityX: 0,
    jumping: false,
    speed: 5,
    jumpPower: 12,
    gravity: 0.6
};

let obstacles = [];
let coins = [];
let groundY = canvas.height - 50;
let gameSpeed = 3;

const keys = {};

window.addEventListener('keydown', (e) => {
    keys[e.key] = true;
    if (e.key === ' ') {
        e.preventDefault();
        if (gameState.isRunning && !chicken.jumping) {
            chicken.velocityY = -chicken.jumpPower;
            chicken.jumping = true;
        }
    }
});

window.addEventListener('keyup', (e) => {
    keys[e.key] = false;
});

function setBet(amount) {
    document.getElementById('betAmount').value = amount;
}

function startChickenGame() {
    const betAmount = parseFloat(document.getElementById('betAmount').value);
    const validation = validateBet(betAmount);
    
    if (!validation.valid) {
        showNotification(validation.message, 'error');
        return;
    }
    
    gameState.isRunning = true;
    gameState.betAmount = betAmount;
    gameState.distance = 0;
    gameState.coins = 0;
    gameState.multiplier = 1.0;
    gameState.currentWin = betAmount;
    
    updateBalance(-betAmount);
    
    chicken.x = 50;
    chicken.y = groundY - chicken.height;
    chicken.velocityY = 0;
    chicken.velocityX = 0;
    
    obstacles = [];
    coins = [];
    
    document.getElementById('startBtn').style.display = 'none';
    document.getElementById('cashoutBtn').style.display = 'block';
    document.getElementById('resultArea').innerHTML = '';
    
    gameLoop();
}

function gameLoop() {
    // Clear canvas
    ctx.fillStyle = 'linear-gradient(180deg, rgba(135, 206, 235, 0.3), rgba(34, 139, 34, 0.3))';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    if (!gameState.isRunning) {
        return;
    }
    
    // Handle input
    if (keys['ArrowLeft'] || keys['a'] || keys['A']) {
        chicken.velocityX = -chicken.speed;
    } else if (keys['ArrowRight'] || keys['d'] || keys['D']) {
        chicken.velocityX = chicken.speed;
    } else {
        chicken.velocityX *= 0.8;
    }
    
    // Update chicken position
    chicken.x += chicken.velocityX;
    chicken.velocityY += chicken.gravity;
    chicken.y += chicken.velocityY;
    
    // Ground collision
    if (chicken.y + chicken.height >= groundY) {
        chicken.y = groundY - chicken.height;
        chicken.velocityY = 0;
        chicken.jumping = false;
    }
    
    // Boundary
    chicken.x = Math.max(0, Math.min(canvas.width - chicken.width, chicken.x));
    
    // Spawn obstacles
    if (Math.random() < 0.02) {
        obstacles.push({
            x: canvas.width,
            y: groundY - 40,
            width: 30,
            height: 40
        });
    }
    
    // Spawn coins
    if (Math.random() < 0.01) {
        coins.push({
            x: canvas.width,
            y: Math.random() * (groundY - 100) + 50,
            radius: 8
        });
    }
    
    // Update obstacles
    for (let i = obstacles.length - 1; i >= 0; i--) {
        obstacles[i].x -= gameSpeed;
        
        // Collision detection
        if (checkCollision(chicken, obstacles[i])) {
            endChickenGame(false);
            return;
        }
        
        if (obstacles[i].x < -50) {
            obstacles.splice(i, 1);
            gameState.distance += 10;
        }
    }
    
    // Update coins
    for (let i = coins.length - 1; i >= 0; i--) {
        coins[i].x -= gameSpeed;
        
        if (checkCoinCollision(chicken, coins[i])) {
            gameState.coins++;
            coins.splice(i, 1);
        }
        
        if (coins[i].x < -20) {
            coins.splice(i, 1);
        }
    }
    
    // Update multiplier and win
    gameState.multiplier = 1 + (gameState.distance / 100) + (gameState.coins * 0.1);
    gameState.currentWin = gameState.betAmount * gameState.multiplier;
    
    // Draw
    drawChicken();
    drawObstacles();
    drawCoins();
    drawGround();
    
    updateGameStats();
    
    requestAnimationFrame(gameLoop);
}

function checkCollision(rect1, rect2) {
    return rect1.x < rect2.x + rect2.width &&
           rect1.x + rect1.width > rect2.x &&
           rect1.y < rect2.y + rect2.height &&
           rect1.y + rect1.height > rect2.y;
}

function checkCoinCollision(rect, circle) {
    const closestX = Math.max(rect.x, Math.min(circle.x, rect.x + rect.width));
    const closestY = Math.max(rect.y, Math.min(circle.y, rect.y + rect.height));
    const dx = circle.x - closestX;
    const dy = circle.y - closestY;
    return (dx * dx + dy * dy) < (circle.radius * circle.radius);
}

function drawChicken() {
    ctx.fillStyle = '#ff6347';
    ctx.fillRect(chicken.x, chicken.y, chicken.width, chicken.height);
    ctx.fillStyle = '#ffd700';
    ctx.fillRect(chicken.x + 5, chicken.y + 5, 8, 8);
}

function drawObstacles() {
    ctx.fillStyle = '#ff4444';
    obstacles.forEach(obs => {
        ctx.fillRect(obs.x, obs.y, obs.width, obs.height);
    });
}

function drawCoins() {
    ctx.fillStyle = '#ffd700';
    coins.forEach(coin => {
        ctx.beginPath();
        ctx.arc(coin.x, coin.y, coin.radius, 0, Math.PI * 2);
        ctx.fill();
    });
}

function drawGround() {
    ctx.fillStyle = '#228b22';
    ctx.fillRect(0, groundY, canvas.width, canvas.height - groundY);
}

function updateGameStats() {
    document.getElementById('distanceDisplay').textContent = gameState.distance + 'm';
    document.getElementById('coinsDisplay').textContent = gameState.coins;
    document.getElementById('multiplierDisplay').textContent = gameState.multiplier.toFixed(2) + 'x';
    document.getElementById('currentWinDisplay').textContent = formatCurrency(gameState.currentWin);
}

function cashoutChicken() {
    endChickenGame(true);
}

function endChickenGame(won) {
    gameState.isRunning = false;
    
    if (won) {
        const netWin = gameState.currentWin - gameState.betAmount; // Only add the profit
        updateBalance(netWin);
        document.getElementById('resultArea').innerHTML = `<div class="result-message win">✨ CASHED OUT! Won ${formatCurrency(gameState.currentWin)} ✨</div>`;
        showNotification(`Cashed out! Won ${formatCurrency(gameState.currentWin)}!`, 'success');
    } else {
        document.getElementById('resultArea').innerHTML = `<div class="result-message lose">❌ GAME OVER! Hit an obstacle ❌</div>`;
        showNotification(`Game Over! Distance: ${gameState.distance}m`, 'error');
    }
    
    if (gameState.currentWin > gameState.personalBest) {
        gameState.personalBest = gameState.currentWin;
        document.getElementById('personalBestDisplay').textContent = formatCurrency(gameState.personalBest);
    }
    
    document.getElementById('startBtn').style.display = 'block';
    document.getElementById('cashoutBtn').style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function() {
    updateBalanceDisplay();
    drawGround();
});
</script>

<?php include '../includes/footer.php'; ?>
