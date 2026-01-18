<?php
require_once '../includes/config.php';
$page_title = "Chicken Adventure - Platformer Game";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       CHICKEN GAME - IMPROVED PLATFORMER DESIGN
       ========================================== */
    
    .game-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(255, 140, 0, 0.08), rgba(255, 69, 0, 0.08));
    }
    
    .chicken-wrapper {
        max-width: 1100px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 30px;
    }
    
    .chicken-main {
        background: linear-gradient(135deg, rgba(255, 99, 71, 0.12), rgba(255, 140, 0, 0.12));
        border: 3px solid rgba(255, 99, 71, 0.5);
        border-radius: 25px;
        padding: 35px;
        box-shadow: 0 15px 50px rgba(255, 69, 0, 0.25), inset 0 0 50px rgba(255, 69, 0, 0.08);
        backdrop-filter: blur(15px);
    }
    
    .chicken-title {
        font-size: 2.8rem;
        font-weight: 900;
        background: linear-gradient(135deg, #ff6347, #ff8c00, #ffa500);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
    
    .game-stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 25px;
    }
    
    .stat-card {
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.15), rgba(255, 140, 0, 0.1));
        padding: 18px;
        border-radius: 15px;
        border: 2px solid rgba(255, 99, 71, 0.4);
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(255, 69, 0, 0.2);
    }
    
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(255, 69, 0, 0.3);
        border-color: rgba(255, 99, 71, 0.6);
    }
    
    .stat-label {
        color: rgba(255, 140, 0, 0.8);
        font-size: 0.9rem;
        margin-bottom: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .stat-value {
        color: #ff6347;
        font-size: 1.8rem;
        font-weight: 900;
        text-shadow: 0 0 15px rgba(255, 69, 0, 0.4);
    }
    
    .game-board {
        position: relative;
        background: linear-gradient(180deg, rgba(135, 206, 235, 0.15), rgba(34, 139, 34, 0.15));
        border: 3px solid rgba(255, 99, 71, 0.5);
        border-radius: 20px;
        overflow: hidden;
        margin: 25px 0;
        box-shadow: inset 0 0 40px rgba(0, 0, 0, 0.4), 0 10px 30px rgba(255, 69, 0, 0.2);
    }
    
    #chickenCanvas {
        display: block;
        width: 100%;
        height: auto;
        background: linear-gradient(180deg, 
            rgba(135, 206, 235, 0.25) 0%, 
            rgba(135, 206, 235, 0.15) 40%, 
            rgba(34, 139, 34, 0.2) 100%
        );
    }
    
    .controls-info {
        text-align: center;
        color: #ff8c00;
        font-size: 1rem;
        margin-top: 20px;
        padding: 15px;
        background: rgba(255, 69, 0, 0.1);
        border-radius: 12px;
        border: 2px solid rgba(255, 99, 71, 0.3);
        font-weight: 600;
    }
    
    .controls-info i {
        color: #ff6347;
        margin: 0 5px;
    }
    
    /* ==========================================
       CONTROLS PANEL - IMPROVED DESIGN
       ========================================== */
    
    .chicken-controls {
        background: linear-gradient(135deg, rgba(255, 99, 71, 0.12), rgba(255, 140, 0, 0.12));
        border: 3px solid rgba(255, 99, 71, 0.5);
        border-radius: 25px;
        padding: 30px;
        box-shadow: 0 15px 50px rgba(255, 69, 0, 0.25);
        backdrop-filter: blur(15px);
        display: flex;
        flex-direction: column;
        gap: 25px;
    }
    
    .controls-header {
        text-align: center;
        padding-bottom: 20px;
        border-bottom: 2px solid rgba(255, 99, 71, 0.3);
    }
    
    .controls-title {
        font-size: 1.8rem;
        font-weight: 800;
        color: #ff6347;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 10px;
    }
    
    .bet-section {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .bet-label {
        color: #ff8c00;
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .bet-input {
        width: 100%;
        padding: 15px;
        font-size: 1.2rem;
        font-weight: 700;
        background: rgba(255, 69, 0, 0.1);
        border: 2px solid rgba(255, 99, 71, 0.4);
        border-radius: 12px;
        color: #ff6347;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .bet-input:focus {
        outline: none;
        border-color: #ff6347;
        box-shadow: 0 0 20px rgba(255, 69, 0, 0.3);
        background: rgba(255, 69, 0, 0.15);
    }
    
    .quick-bets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }
    
    .quick-bet-btn {
        padding: 12px;
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.2), rgba(255, 140, 0, 0.2));
        border: 2px solid rgba(255, 99, 71, 0.4);
        border-radius: 10px;
        color: #ff6347;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 1rem;
    }
    
    .quick-bet-btn:hover {
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.3), rgba(255, 140, 0, 0.3));
        border-color: #ff6347;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 69, 0, 0.3);
    }
    
    .start-btn {
        width: 100%;
        padding: 18px;
        font-size: 1.3rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ff6347, #ff8c00);
        border: none;
        border-radius: 15px;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 2px;
        box-shadow: 0 8px 25px rgba(255, 69, 0, 0.4);
        position: relative;
        overflow: hidden;
    }
    
    .start-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(255, 69, 0, 0.5);
    }
    
    .start-btn:active {
        transform: translateY(-1px);
    }
    
    .start-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }
    
    .game-info {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }
    
    .info-card {
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.15), rgba(255, 140, 0, 0.1));
        padding: 18px;
        border-radius: 15px;
        border: 2px solid rgba(255, 99, 71, 0.4);
        text-align: center;
        box-shadow: 0 5px 15px rgba(255, 69, 0, 0.15);
    }
    
    .info-label {
        color: rgba(255, 140, 0, 0.8);
        font-size: 0.9rem;
        margin-bottom: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .info-value {
        color: #ff6347;
        font-size: 1.6rem;
        font-weight: 900;
        text-shadow: 0 0 15px rgba(255, 69, 0, 0.4);
    }
    
    .personal-best-card {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.15), rgba(255, 140, 0, 0.15));
        border-color: rgba(255, 215, 0, 0.5);
    }
    
    .personal-best-card .info-value {
        color: #ffd700;
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.4);
    }
    
    .game-message {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: linear-gradient(135deg, rgba(255, 69, 0, 0.95), rgba(255, 140, 0, 0.95));
        padding: 30px 50px;
        border-radius: 20px;
        border: 3px solid #ff6347;
        font-size: 1.8rem;
        font-weight: 900;
        color: white;
        text-align: center;
        z-index: 100;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.5);
        animation: messageAppear 0.3s ease;
    }
    
    @keyframes messageAppear {
        from {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.8);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }
    
    /* ==========================================
       RESPONSIVE DESIGN
       ========================================== */
    
    @media (max-width: 992px) {
        .chicken-wrapper {
            grid-template-columns: 1fr;
        }
        
        .chicken-controls {
            max-width: 600px;
            margin: 0 auto;
        }
    }
    
    @media (max-width: 768px) {
        .chicken-title {
            font-size: 2rem;
        }
        
        .game-stats {
            grid-template-columns: 1fr;
        }
        
        .quick-bets {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 480px) {
        .chicken-main,
        .chicken-controls {
            padding: 20px;
        }
        
        .chicken-title {
            font-size: 1.6rem;
        }
        
        .start-btn {
            font-size: 1.1rem;
            padding: 15px;
        }
    }
</style>

<div class="game-container">
    <div class="chicken-wrapper">
        <!-- Main Game Area -->
        <div class="chicken-main">
            <h1 class="chicken-title">
                <span>🐔</span>
                <span>CHICKEN ADVENTURE</span>
                <span>🐔</span>
            </h1>
            
            <!-- Game Stats -->
            <div class="game-stats">
                <div class="stat-card">
                    <div class="stat-label">Distance</div>
                    <div class="stat-value" id="distance-display">0m</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Multiplier</div>
                    <div class="stat-value" id="multiplier-display">1.00x</div>
                </div>
            </div>
            
            <!-- Game Board -->
            <div class="game-board">
                <canvas id="chickenCanvas" width="600" height="400"></canvas>
            </div>
            
            <!-- Controls Info -->
            <div class="controls-info">
                <i class="fas fa-keyboard"></i> Use <strong>ARROW KEYS</strong> or <strong>WASD</strong> to move | <strong>SPACE</strong> to jump
            </div>
        </div>
        
        <!-- Controls Panel -->
        <div class="chicken-controls">
            <div class="controls-header">
                <div class="controls-title">
                    <i class="fas fa-gamepad"></i>
                    <span>CONTROLS</span>
                </div>
            </div>
            
            <!-- Bet Amount Section -->
            <div class="bet-section">
                <label class="bet-label">Bet Amount (₹)</label>
                <input type="number" id="bet-amount" class="bet-input" value="500" min="200" max="5500" step="100">
                
                <div class="quick-bets">
                    <button class="quick-bet-btn" onclick="setBet(200)">₹200</button>
                    <button class="quick-bet-btn" onclick="setBet(500)">₹500</button>
                    <button class="quick-bet-btn" onclick="setBet(1000)">₹1K</button>
                    <button class="quick-bet-btn" onclick="setBet(2000)">₹2K</button>
                </div>
            </div>
            
            <!-- Start Button -->
            <button class="start-btn" id="start-btn" onclick="startGame()">
                <i class="fas fa-play"></i> START GAME
            </button>
            
            <!-- Game Info -->
            <div class="game-info">
                <div class="info-card">
                    <div class="info-label">Current Win</div>
                    <div class="info-value" id="current-win-display">₹0.00</div>
                </div>
                
                <div class="info-card personal-best-card">
                    <div class="info-label">Personal Best</div>
                    <div class="info-value" id="personal-best-display">₹0.00</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// ==========================================
// CHICKEN ADVENTURE GAME LOGIC
// ==========================================

const canvas = document.getElementById('chickenCanvas');
const ctx = canvas.getContext('2d');

// Game State
let gameState = {
    isRunning: false,
    betAmount: 500,
    distance: 0,
    multiplier: 1.0,
    currentWin: 0,
    personalBest: 0,
    chicken: {
        x: 50,
        y: 300,
        width: 30,
        height: 30,
        velocityY: 0,
        isJumping: false
    },
    obstacles: [],
    coins: [],
    score: 0,
    gameSpeed: 3
};

// Game Constants
const GRAVITY = 0.6;
const JUMP_STRENGTH = -12;
const GROUND_Y = 350;
const OBSTACLE_SPAWN_RATE = 0.02;
const COIN_SPAWN_RATE = 0.01;

// Set Bet Amount
function setBet(amount) {
    document.getElementById('bet-amount').value = amount;
    gameState.betAmount = amount;
}

// Start Game
async function startGame() {
    const betInput = document.getElementById('bet-amount');
    const betAmount = parseInt(betInput.value);
    
    // Validate bet
    if (betAmount < 200 || betAmount > 5500) {
        showNotification('Bet must be between ₹200 and ₹5,500', 'error');
        return;
    }
    
    // Check balance
    const balance = await getBalance();
    if (betAmount > balance) {
        showNotification('Insufficient balance! Please reset your credits.', 'error');
        return;
    }
    
    // Deduct bet amount
    await updateBalance(-betAmount);
    
    // Reset game state
    gameState.isRunning = true;
    gameState.betAmount = betAmount;
    gameState.distance = 0;
    gameState.multiplier = 1.0;
    gameState.currentWin = 0;
    gameState.chicken.y = 300;
    gameState.chicken.velocityY = 0;
    gameState.chicken.isJumping = false;
    gameState.obstacles = [];
    gameState.coins = [];
    gameState.score = 0;
    gameState.gameSpeed = 3;
    
    // Update UI
    document.getElementById('start-btn').disabled = true;
    updateDisplay();
    
    // Start game loop
    gameLoop();
}

// Game Loop
function gameLoop() {
    if (!gameState.isRunning) return;
    
    // Clear canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    // Draw background
    drawBackground();
    
    // Update and draw chicken
    updateChicken();
    drawChicken();
    
    // Update and draw obstacles
    updateObstacles();
    drawObstacles();
    
    // Update and draw coins
    updateCoins();
    drawCoins();
    
    // Check collisions
    checkCollisions();
    
    // Update distance and multiplier
    gameState.distance += 0.1;
    gameState.multiplier = 1 + (gameState.distance / 100);
    gameState.currentWin = Math.floor(gameState.betAmount * gameState.multiplier);
    
    // Increase game speed gradually
    gameState.gameSpeed = 3 + (gameState.distance / 50);
    
    // Update display
    updateDisplay();
    
    // Continue loop
    requestAnimationFrame(gameLoop);
}

// Draw Background
function drawBackground() {
    // Sky gradient
    const skyGradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
    skyGradient.addColorStop(0, 'rgba(135, 206, 235, 0.3)');
    skyGradient.addColorStop(1, 'rgba(34, 139, 34, 0.3)');
    ctx.fillStyle = skyGradient;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    // Ground
    ctx.fillStyle = 'rgba(139, 69, 19, 0.5)';
    ctx.fillRect(0, GROUND_Y + 30, canvas.width, 50);
    
    // Ground line
    ctx.strokeStyle = 'rgba(139, 69, 19, 0.8)';
    ctx.lineWidth = 3;
    ctx.beginPath();
    ctx.moveTo(0, GROUND_Y + 30);
    ctx.lineTo(canvas.width, GROUND_Y + 30);
    ctx.stroke();
}

// Update Chicken
function updateChicken() {
    // Apply gravity
    gameState.chicken.velocityY += GRAVITY;
    gameState.chicken.y += gameState.chicken.velocityY;
    
    // Ground collision
    if (gameState.chicken.y >= GROUND_Y) {
        gameState.chicken.y = GROUND_Y;
        gameState.chicken.velocityY = 0;
        gameState.chicken.isJumping = false;
    }
}

// Draw Chicken
function drawChicken() {
    const chicken = gameState.chicken;
    
    // Draw chicken emoji
    ctx.font = '30px Arial';
    ctx.fillText('🐔', chicken.x, chicken.y + chicken.height);
}

// Update Obstacles
function updateObstacles() {
    // Spawn new obstacles
    if (Math.random() < OBSTACLE_SPAWN_RATE) {
        gameState.obstacles.push({
            x: canvas.width,
            y: GROUND_Y,
            width: 30,
            height: 40
        });
    }
    
    // Move and remove obstacles
    gameState.obstacles = gameState.obstacles.filter(obstacle => {
        obstacle.x -= gameState.gameSpeed;
        return obstacle.x + obstacle.width > 0;
    });
}

// Draw Obstacles
function drawObstacles() {
    gameState.obstacles.forEach(obstacle => {
        // Draw cactus emoji
        ctx.font = '40px Arial';
        ctx.fillText('🌵', obstacle.x, obstacle.y + obstacle.height);
    });
}

// Update Coins
function updateCoins() {
    // Spawn new coins
    if (Math.random() < COIN_SPAWN_RATE) {
        gameState.coins.push({
            x: canvas.width,
            y: GROUND_Y - 80 - Math.random() * 100,
            width: 20,
            height: 20,
            collected: false
        });
    }
    
    // Move and remove coins
    gameState.coins = gameState.coins.filter(coin => {
        coin.x -= gameState.gameSpeed;
        return coin.x + coin.width > 0 && !coin.collected;
    });
}

// Draw Coins
function drawCoins() {
    gameState.coins.forEach(coin => {
        if (!coin.collected) {
            ctx.font = '20px Arial';
            ctx.fillText('🪙', coin.x, coin.y + coin.height);
        }
    });
}

// Check Collisions
function checkCollisions() {
    const chicken = gameState.chicken;
    
    // Check obstacle collisions
    for (let obstacle of gameState.obstacles) {
        if (chicken.x < obstacle.x + obstacle.width &&
            chicken.x + chicken.width > obstacle.x &&
            chicken.y < obstacle.y + obstacle.height &&
            chicken.y + chicken.height > obstacle.y) {
            endGame(false);
            return;
        }
    }
    
    // Check coin collisions
    for (let coin of gameState.coins) {
        if (!coin.collected &&
            chicken.x < coin.x + coin.width &&
            chicken.x + chicken.width > coin.x &&
            chicken.y < coin.y + coin.height &&
            chicken.y + chicken.height > coin.y) {
            coin.collected = true;
            gameState.score += 10;
        }
    }
}

// End Game
async function endGame(won) {
    gameState.isRunning = false;
    document.getElementById('start-btn').disabled = false;
    
    if (won || gameState.distance >= 20) {
        // Calculate winnings
        const netWin = gameState.currentWin - gameState.betAmount;
        await updateBalance(netWin);
        
        // Update personal best
        if (gameState.currentWin > gameState.personalBest) {
            gameState.personalBest = gameState.currentWin;
        }
        
        showNotification(`🎉 You won ${formatCurrency(gameState.currentWin)}! Distance: ${Math.floor(gameState.distance)}m`, 'success');
    } else {
        showNotification(`❌ Game Over! Hit an obstacle at ${Math.floor(gameState.distance)}m`, 'error');
    }
    
    updateDisplay();
}

// Keyboard Controls
document.addEventListener('keydown', (e) => {
    if (!gameState.isRunning) return;
    
    // Jump (Space, W, or Up Arrow)
    if ((e.code === 'Space' || e.code === 'KeyW' || e.code === 'ArrowUp') && !gameState.chicken.isJumping) {
        gameState.chicken.velocityY = JUMP_STRENGTH;
        gameState.chicken.isJumping = true;
    }
});

// Update Display
function updateDisplay() {
    document.getElementById('distance-display').textContent = Math.floor(gameState.distance) + 'm';
    document.getElementById('multiplier-display').textContent = gameState.multiplier.toFixed(2) + 'x';
    document.getElementById('current-win-display').textContent = formatCurrency(gameState.currentWin);
    document.getElementById('personal-best-display').textContent = formatCurrency(gameState.personalBest);
}

// Helper Functions
function formatCurrency(amount) {
    return '₹' + amount.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

async function getBalance() {
    const response = await fetch('/api/get-balance.php');
    const data = await response.json();
    return data.balance;
}

async function updateBalance(amount) {
    const response = await fetch('/api/update-balance.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ amount: amount })
    });
    return response.json();
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Initialize
updateDisplay();
</script>

<?php include '../includes/footer.php'; ?>
