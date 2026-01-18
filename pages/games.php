<?php
require_once '../includes/config.php';
$page_title = "All Games";
include '../includes/header.php';
?>

<style>
    .games-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    
    .page-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .page-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #ffd700;
        margin-bottom: 15px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .page-subtitle {
        color: #b0b0b0;
        font-size: 1.1rem;
    }
    
    .games-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
    }
    
    .game-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
        position: relative;
    }
    
    .game-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }
    
    .game-card:hover {
        border-color: #ffd700;
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(255, 215, 0, 0.2);
    }
    
    .game-card:hover::before {
        opacity: 1;
    }
    
    .game-card-header {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(0, 217, 255, 0.1));
        padding: 30px 20px;
        text-align: center;
        border-bottom: 2px solid rgba(255, 215, 0, 0.2);
    }
    
    .game-icon {
        font-size: 4rem;
        margin-bottom: 10px;
    }
    
    .game-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 5px;
    }
    
    .game-category {
        color: #00d9ff;
        font-size: 0.9rem;
        font-weight: 600;
    }
    
    .game-card-body {
        padding: 25px;
        position: relative;
        z-index: 2;
    }
    
    .game-description {
        color: #b0b0b0;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .game-features {
        list-style: none;
        margin-bottom: 20px;
    }
    
    .game-features li {
        color: #b0b0b0;
        font-size: 0.9rem;
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }
    
    .game-features li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #00ff00;
        font-weight: bold;
    }
    
    .game-stats {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-bottom: 20px;
    }
    
    .stat {
        background: rgba(255, 215, 0, 0.1);
        border: 1px solid rgba(255, 215, 0, 0.2);
        border-radius: 8px;
        padding: 10px;
        text-align: center;
    }
    
    .stat-label {
        color: rgba(255, 215, 0, 0.7);
        font-size: 0.8rem;
        margin-bottom: 5px;
    }
    
    .stat-value {
        color: #ffd700;
        font-weight: 700;
        font-size: 1.1rem;
    }
    
    .play-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #000;
        border: none;
        border-radius: 10px;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .play-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.4);
    }
    
    @media (max-width: 768px) {
        .page-title {
            font-size: 1.8rem;
        }
        
        .games-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="games-container">
    <div class="page-header">
        <h1 class="page-title">🎮 All Games</h1>
        <p class="page-subtitle">Choose your favorite game and start playing with ₹10,000 virtual balance</p>
    </div>
    
    <div class="games-grid">
        <!-- Dice Game -->
        <div class="game-card">
            <div class="game-card-header">
                <div class="game-icon">🎲</div>
                <h2 class="game-title">Dice Game</h2>
                <div class="game-category">Prediction Game</div>
            </div>
            <div class="game-card-body">
                <p class="game-description">Predict whether the dice will roll HIGH (8-12) or LOW (2-7) and win 2x your bet!</p>
                <ul class="game-features">
                    <li>Instant results</li>
                    <li>2x multiplier</li>
                    <li>Fast-paced gameplay</li>
                </ul>
                <div class="game-stats">
                    <div class="stat">
                        <div class="stat-label">Min Bet</div>
                        <div class="stat-value">₹200</div>
                    </div>
                    <div class="stat">
                        <div class="stat-label">Max Payout</div>
                        <div class="stat-value">2x</div>
                    </div>
                </div>
                <a href="../games/dice.php" class="play-btn">Play Dice</a>
            </div>
        </div>
        
        <!-- Mines Game -->
        <div class="game-card">
            <div class="game-card-header">
                <div class="game-icon">💣</div>
                <h2 class="game-title">Mines</h2>
                <div class="game-category">Strategy Game</div>
            </div>
            <div class="game-card-body">
                <p class="game-description">Reveal safe tiles on a 5x5 grid while avoiding hidden mines. Progressive multiplier system!</p>
                <ul class="game-features">
                    <li>5x5 grid</li>
                    <li>Progressive multiplier</li>
                    <li>Cashout anytime</li>
                </ul>
                <div class="game-stats">
                    <div class="stat">
                        <div class="stat-label">Min Bet</div>
                        <div class="stat-value">₹200</div>
                    </div>
                    <div class="stat">
                        <div class="stat-label">Max Multiplier</div>
                        <div class="stat-value">4x+</div>
                    </div>
                </div>
                <a href="../games/mines.php" class="play-btn">Play Mines</a>
            </div>
        </div>
        
        <!-- Slots Game -->
        <div class="game-card">
            <div class="game-card-header">
                <div class="game-icon">🎰</div>
                <h2 class="game-title">Slot Machine</h2>
                <div class="game-category">Classic Game</div>
            </div>
            <div class="game-card-body">
                <p class="game-description">Classic 3-reel slot machine with 6 different symbols. Match 3 for big wins up to 10x!</p>
                <ul class="game-features">
                    <li>3-reel slots</li>
                    <li>6 unique symbols</li>
                    <li>Up to 10x multiplier</li>
                </ul>
                <div class="game-stats">
                    <div class="stat">
                        <div class="stat-label">Min Bet</div>
                        <div class="stat-value">₹200</div>
                    </div>
                    <div class="stat">
                        <div class="stat-label">Max Payout</div>
                        <div class="stat-value">10x</div>
                    </div>
                </div>
                <a href="../games/slots.php" class="play-btn">Play Slots</a>
            </div>
        </div>
        
        <!-- Roulette Game -->
        <div class="game-card">
            <div class="game-card-header">
                <div class="game-icon">🎡</div>
                <h2 class="game-title">Roulette</h2>
                <div class="game-category">Wheel Game</div>
            </div>
            <div class="game-card-body">
                <p class="game-description">European roulette wheel with 37 numbers. Bet on RED, BLACK, EVEN, ODD, HIGH, or LOW!</p>
                <ul class="game-features">
                    <li>6 betting options</li>
                    <li>2x multiplier</li>
                    <li>Smooth animations</li>
                </ul>
                <div class="game-stats">
                    <div class="stat">
                        <div class="stat-label">Min Bet</div>
                        <div class="stat-value">₹200</div>
                    </div>
                    <div class="stat">
                        <div class="stat-label">Max Payout</div>
                        <div class="stat-value">2x</div>
                    </div>
                </div>
                <a href="../games/roulette.php" class="play-btn">Play Roulette</a>
            </div>
        </div>
        
        <!-- Plinko Game -->
        <div class="game-card">
            <div class="game-card-header">
                <div class="game-icon">🎯</div>
                <h2 class="game-title">Plinko</h2>
                <div class="game-category">Physics Game</div>
            </div>
            <div class="game-card-body">
                <p class="game-description">Drop balls through pegs and watch them fall into multiplier slots. Physics-based gameplay!</p>
                <ul class="game-features">
                    <li>Physics simulation</li>
                    <li>Multiple balls</li>
                    <li>Up to 5x multiplier</li>
                </ul>
                <div class="game-stats">
                    <div class="stat">
                        <div class="stat-label">Min Bet</div>
                        <div class="stat-value">₹200</div>
                    </div>
                    <div class="stat">
                        <div class="stat-label">Max Multiplier</div>
                        <div class="stat-value">5x</div>
                    </div>
                </div>
                <a href="../games/plinko.php" class="play-btn">Play Plinko</a>
            </div>
        </div>
        
        <!-- Chicken Game -->
        <div class="game-card">
            <div class="game-card-header">
                <div class="game-icon">🐔</div>
                <h2 class="game-title">Chicken Adventure</h2>
                <div class="game-category">Platformer Game</div>
            </div>
            <div class="game-card-body">
                <p class="game-description">Guide the chicken through obstacles and collect coins. Cashout anytime to secure your winnings!</p>
                <ul class="game-features">
                    <li>Platformer action</li>
                    <li>Coin collection</li>
                    <li>Progressive multiplier</li>
                </ul>
                <div class="game-stats">
                    <div class="stat">
                        <div class="stat-label">Min Bet</div>
                        <div class="stat-value">₹200</div>
                    </div>
                    <div class="stat">
                        <div class="stat-label">Max Multiplier</div>
                        <div class="stat-value">5x+</div>
                    </div>
                </div>
                <a href="../games/chicken.php" class="play-btn">Play Chicken</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
