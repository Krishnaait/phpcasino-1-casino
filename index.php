<?php
require_once 'includes/config.php';
$page_title = "Home - VENTURES Casino";
include 'includes/header.php';
?>

<style>
    .hero-section {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(0, 217, 255, 0.1));
        border-radius: 20px;
        margin: 40px 0;
        border: 2px solid rgba(255, 215, 0, 0.2);
    }
    
    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffd700, #00d9ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        text-shadow: 0 0 30px rgba(255, 215, 0, 0.2);
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
        color: #b0b0b0;
        margin-bottom: 30px;
    }
    
    .hero-description {
        max-width: 600px;
        margin: 0 auto 30px;
        color: #b0b0b0;
        line-height: 1.8;
        font-size: 1.1rem;
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .games-section {
        margin: 60px 0;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #ffd700;
        text-align: center;
        margin-bottom: 50px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .games-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
    }
    
    .game-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 20px;
        overflow: hidden;
        cursor: pointer;
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
        transform: translateY(-15px);
        box-shadow: 0 20px 50px rgba(255, 215, 0, 0.2);
    }
    
    .game-card:hover::before {
        opacity: 1;
    }
    
    .game-card-content {
        padding: 30px;
        position: relative;
        z-index: 2;
    }
    
    .game-icon {
        font-size: 4rem;
        margin-bottom: 15px;
    }
    
    .game-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #ffd700;
    }
    
    .game-description {
        color: #b0b0b0;
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.5;
        min-height: 60px;
    }
    
    .game-btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #000;
        border: none;
        border-radius: 10px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .game-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.4);
    }
    
    .features-section {
        background: rgba(255, 215, 0, 0.05);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 20px;
        padding: 50px;
        margin: 60px 0;
    }
    
    .features-title {
        font-size: 2rem;
        font-weight: 800;
        color: #ffd700;
        text-align: center;
        margin-bottom: 40px;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .feature-box {
        text-align: center;
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }
    
    .feature-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 10px;
    }
    
    .feature-text {
        color: #b0b0b0;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
        
        .cta-buttons {
            flex-direction: column;
        }
        
        .cta-buttons .btn {
            width: 100%;
        }
    }
</style>

<div class="container">
    <!-- Hero Section -->
    <div class="hero-section">
        <h1 class="hero-title">🎰 Welcome to VENTURES Casino 🎰</h1>
        <p class="hero-subtitle">100% Free-to-Play Social Gaming Platform</p>
        <p class="hero-description">
            Experience the thrill of casino gaming with virtual currency! No deposits, no withdrawals, 
            pure entertainment. Play multiple games, compete with friends, and enjoy unlimited fun!
        </p>
        <div class="cta-buttons">
            <a href="pages/games.php" class="btn btn-primary">🎮 Play Now</a>
            <a href="pages/about.php" class="btn btn-secondary">ℹ️ Learn More</a>
        </div>
    </div>
    
    <!-- Games Section -->
    <div class="games-section">
        <h2 class="section-title">🎯 Featured Games</h2>
        
        <div class="games-grid">
            <!-- Dice Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎲</div>
                    <h3 class="game-title">Dice Game</h3>
                    <p class="game-description">Predict HIGH or LOW and win 2x your bet! Fast-paced prediction game with instant results.</p>
                    <a href="games/dice.php" class="game-btn">Play Dice</a>
                </div>
            </div>
            
            <!-- Mines Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">💣</div>
                    <h3 class="game-title">Mines</h3>
                    <p class="game-description">Reveal safe tiles and avoid mines! Progressive multiplier system with strategic gameplay.</p>
                    <a href="games/mines.php" class="game-btn">Play Mines</a>
                </div>
            </div>
            
            <!-- Slots Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎰</div>
                    <h3 class="game-title">Slot Machine</h3>
                    <p class="game-description">Classic 3-reel slots with spinning reels! Match symbols for big wins up to 10x multiplier.</p>
                    <a href="games/slots.php" class="game-btn">Play Slots</a>
                </div>
            </div>
            
            <!-- Roulette Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎡</div>
                    <h3 class="game-title">Roulette</h3>
                    <p class="game-description">European roulette wheel with multiple betting options! Bet on RED, BLACK, EVEN, ODD, and more.</p>
                    <a href="games/roulette.php" class="game-btn">Play Roulette</a>
                </div>
            </div>
            
            <!-- Plinko Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎯</div>
                    <h3 class="game-title">Plinko</h3>
                    <p class="game-description">Drop balls through pegs and watch them fall! Physics-based game with multiplier slots.</p>
                    <a href="games/plinko.php" class="game-btn">Play Plinko</a>
                </div>
            </div>
            
            <!-- Chicken Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🐔</div>
                    <h3 class="game-title">Chicken Adventure</h3>
                    <p class="game-description">Guide the chicken through obstacles! Collect coins and cash out before hitting obstacles.</p>
                    <a href="games/chicken.php" class="game-btn">Play Chicken</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="features-section">
        <h2 class="features-title">✨ Why Choose VENTURES?</h2>
        
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">💰</div>
                <h3 class="feature-title">100% Free</h3>
                <p class="feature-text">No deposits, no withdrawals. Pure entertainment with virtual currency.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">⚡</div>
                <h3 class="feature-title">Instant Play</h3>
                <p class="feature-text">No login required. Start playing immediately with ₹10,000 virtual balance.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🎮</div>
                <h3 class="feature-title">Multiple Games</h3>
                <p class="feature-text">6 unique games with different mechanics and exciting gameplay.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">📱</div>
                <h3 class="feature-title">Mobile Friendly</h3>
                <p class="feature-text">Play on any device - desktop, tablet, or smartphone.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🔒</div>
                <h3 class="feature-title">Safe & Secure</h3>
                <p class="feature-text">Session-based gameplay with no personal data collection.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🎯</div>
                <h3 class="feature-title">Fair Gaming</h3>
                <p class="feature-text">Transparent algorithms and fair play guaranteed for all games.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
