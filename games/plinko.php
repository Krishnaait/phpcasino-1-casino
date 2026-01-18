<?php
require_once '../includes/config.php';
$page_title = "Plinko Game - Physics Ball Drop";
include '../includes/header.php';
?>

<style>
    /* ==========================================
       PLINKO GAME - PHYSICS BASED DESIGN
       ========================================== */
    
    .game-container {
        min-height: calc(100vh - 200px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(147, 112, 219, 0.05), rgba(138, 43, 226, 0.05));
    }
    
    .plinko-wrapper {
        max-width: 1000px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
    }
    
    .plinko-main {
        background: linear-gradient(135deg, rgba(147, 112, 219, 0.1), rgba(138, 43, 226, 0.1));
        border: 3px solid #9d4edd;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 0 40px rgba(147, 112, 219, 0.2), inset 0 0 40px rgba(147, 112, 219, 0.05);
        backdrop-filter: blur(10px);
    }
    
    .plinko-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #9d4edd, #c77dff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 30px;
        text-shadow: 0 0 20px rgba(147, 112, 219, 0.3);
    }
    
    .plinko-board {
        position: relative;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2));
        border: 3px solid #9d4edd;
        border-radius: 15px;
        overflow: hidden;
        margin: 20px 0;
        box-shadow: inset 0 0 30px rgba(0, 0, 0, 0.5);
    }
    
    #plinkoCanvas {
        display: block;
        width: 100%;
        height: auto;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2));
    }
    
    .multipliers {
        display: flex;
        justify-content: space-around;
        gap: 5px;
        margin-top: 15px;
    }
    
    .multiplier {
        flex: 1;
        padding: 10px 5px;
        text-align: center;
        border-radius: 8px;
        font-weight: bold;
        font-size: 0.9rem;
        border: 2px solid;
        transition: all 0.3s ease;
    }
    
    .multiplier.low {
        background: rgba(255, 68, 68, 0.2);
        border-color: #ff4444;
        color: #ff4444;
    }
    
    .multiplier.medium {
        background: rgba(255, 165, 0, 0.2);
        border-color: #ffa500;
        color: #ffa500;
    }
    
    .multiplier.high {
        background: rgba(255, 215, 0, 0.2);
        border-color: #ffd700;
        color: #ffd700;
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
    
    @keyframes resultPop {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }
    
    /* Control Panel */
    .control-panel {
        background: linear-gradient(135deg, rgba(147, 112, 219, 0.1), rgba(138, 43, 226, 0.1));
        border: 3px solid #9d4edd;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 0 40px rgba(147, 112, 219, 0.2);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 100px;
    }
    
    .control-title {
        font-size: 1.5rem;
        color: #9d4edd;
        margin-bottom: 20px;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(147, 112, 219, 0.3);
    }
    
    .control-group {
        margin-bottom: 25px;
    }
    
    .control-label {
        display: block;
        color: #9d4edd;
        font-size: 0.95rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .control-input {
        width: 100%;
        padding: 12px;
        background: rgba(147, 112, 219, 0.1);
        border: 2px solid #9d4edd;
        border-radius: 8px;
        color: #9d4edd;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .control-input:focus {
        outline: none;
        border-color: #c77dff;
        box-shadow: 0 0 20px rgba(147, 112, 219, 0.3);
    }
    
    .bet-presets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }
    
    .preset-btn {
        padding: 10px;
        background: rgba(147, 112, 219, 0.1);
        border: 2px solid #9d4edd;
        border-radius: 8px;
        color: #9d4edd;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .preset-btn:hover {
        background: rgba(147, 112, 219, 0.2);
        box-shadow: 0 0 15px rgba(147, 112, 219, 0.3);
    }
    
    .drop-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #9d4edd, #c77dff);
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(147, 112, 219, 0.4);
        margin-top: 20px;
    }
    
    .drop-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 0 40px rgba(147, 112, 219, 0.6);
    }
    
    .drop-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .stats-box {
        background: rgba(147, 112, 219, 0.1);
        border: 2px solid rgba(147, 112, 219, 0.3);
        border-radius: 10px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(147, 112, 219, 0.7);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #9d4edd;
        font-size: 1.4rem;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(147, 112, 219, 0.3);
    }
    
    @media (max-width: 968px) {
        .plinko-wrapper {
            grid-template-columns: 1fr;
        }
        
        .control-panel {
            position: relative;
            top: 0;
        }
    }
</style>

<div class="game-container">
    <div class="plinko-wrapper">
        <!-- Main Game Area -->
        <div class="plinko-main">
            <h1 class="plinko-title">🎯 PLINKO 🎯</h1>
            
            <!-- Plinko Board -->
            <div class="plinko-board">
                <canvas id="plinkoCanvas" width="400" height="500"></canvas>
            </div>
            
            <!-- Multiplier Display -->
            <div class="multipliers">
                <div class="multiplier high">5x</div>
                <div class="multiplier medium">3x</div>
                <div class="multiplier low">2x</div>
                <div class="multiplier low">1.5x</div>
                <div class="multiplier low">1x</div>
                <div class="multiplier low">1.5x</div>
                <div class="multiplier low">2x</div>
                <div class="multiplier medium">3x</div>
                <div class="multiplier high">5x</div>
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
            
            <button class="drop-btn" id="dropBtn" onclick="dropBall()">DROP BALL</button>
            
            <div class="stats-box">
                <div class="stat-label">Active Balls</div>
                <div class="stat-value" id="activeBalls">0</div>
            </div>
            
            <div class="stats-box">
                <div class="stat-label">Total Wins</div>
                <div class="stat-value" id="totalWins">₹0</div>
            </div>
        </div>
    </div>
</div>

<script>
const canvas = document.getElementById('plinkoCanvas');
const ctx = canvas.getContext('2d');

let balls = [];
let pegs = [];
let activeBalls = 0;
let totalWins = 0;
let currentBet = 0;

const multipliers = [5, 3, 2, 1.5, 1, 1.5, 2, 3, 5];
const pegRadius = 8;
const ballRadius = 6;
const gravity = 0.3;
const bounce = 0.6;
const friction = 0.99;

// Initialize pegs
function initPegs() {
    pegs = [];
    const rows = 8;
    const cols = 9;
    const spacingX = canvas.width / (cols + 1);
    const spacingY = canvas.height / (rows + 1);
    
    for (let row = 0; row < rows; row++) {
        for (let col = 0; col < cols; col++) {
            const x = spacingX * (col + 1) + (row % 2 ? spacingX / 2 : 0);
            const y = spacingY * (row + 1);
            pegs.push({ x, y, radius: pegRadius });
        }
    }
}

class Ball {
    constructor(betAmount) {
        this.x = canvas.width / 2;
        this.y = 30;
        this.vx = (Math.random() - 0.5) * 4;
        this.vy = 0;
        this.radius = ballRadius;
        this.betAmount = betAmount;
        this.color = `hsl(${Math.random() * 360}, 70%, 60%)`;
    }
    
    update() {
        this.vy += gravity;
        this.vx *= friction;
        this.x += this.vx;
        this.y += this.vy;
        
        // Peg collision
        pegs.forEach(peg => {
            const dx = this.x - peg.x;
            const dy = this.y - peg.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < this.radius + peg.radius) {
                const angle = Math.atan2(dy, dx);
                this.vx = Math.cos(angle) * 3;
                this.vy = Math.sin(angle) * 3 * bounce;
            }
        });
        
        // Wall collision
        if (this.x - this.radius < 0 || this.x + this.radius > canvas.width) {
            this.vx *= -bounce;
            this.x = Math.max(this.radius, Math.min(canvas.width - this.radius, this.x));
        }
        
        // Bottom collision
        if (this.y + this.radius > canvas.height) {
            return this.getMultiplier();
        }
        
        return null;
    }
    
    getMultiplier() {
        const slotWidth = canvas.width / 9;
        const slot = Math.floor(this.x / slotWidth);
        return multipliers[Math.min(slot, 8)];
    }
    
    draw() {
        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fill();
        ctx.strokeStyle = 'rgba(255, 255, 255, 0.5)';
        ctx.lineWidth = 1;
        ctx.stroke();
    }
}

function setBet(amount) {
    document.getElementById('betAmount').value = amount;
}

function dropBall() {
    const betAmount = parseFloat(document.getElementById('betAmount').value);
    const validation = validateBet(betAmount);
    
    if (!validation.valid) {
        showNotification(validation.message, 'error');
        return;
    }
    
    updateBalance(-betAmount);
    const ball = new Ball(betAmount);
    balls.push(ball);
    activeBalls++;
    currentBet = betAmount;
    document.getElementById('activeBalls').textContent = activeBalls;
}

function animate() {
    ctx.fillStyle = 'rgba(0, 0, 0, 0.2)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    // Draw pegs
    ctx.fillStyle = 'rgba(147, 112, 219, 0.6)';
    pegs.forEach(peg => {
        ctx.beginPath();
        ctx.arc(peg.x, peg.y, peg.radius, 0, Math.PI * 2);
        ctx.fill();
    });
    
    // Update and draw balls
    for (let i = balls.length - 1; i >= 0; i--) {
        const multiplier = balls[i].update();
        
        if (multiplier !== null) {
            // Ball reached bottom
            const payout = currentBet * multiplier;
            totalWins += payout;
            updateBalance(payout);
            
            document.getElementById('resultArea').innerHTML = `<div class="result-message win">✨ ${multiplier}x WIN! +${formatCurrency(payout)} ✨</div>`;
            showNotification(`Won ${formatCurrency(payout)}!`, 'success');
            
            balls.splice(i, 1);
            activeBalls--;
            document.getElementById('activeBalls').textContent = activeBalls;
            document.getElementById('totalWins').textContent = formatCurrency(totalWins);
            
            setTimeout(() => {
                document.getElementById('resultArea').innerHTML = '';
            }, 2000);
        } else {
            balls[i].draw();
        }
    }
    
    requestAnimationFrame(animate);
}

document.addEventListener('DOMContentLoaded', function() {
    initPegs();
    animate();
    updateBalanceDisplay();
});
</script>

<?php include '../includes/footer.php'; ?>
