<?php
require_once 'includes/config.php';
$page_title = "Home - VENTURES Casino";
include 'includes/header.php';
?>

<style>
    /* Hero Banner Section */
    .hero-banner {
        position: relative;
        width: 100%;
        height: 500px;
        background-image: url('<?php echo SITE_URL; ?>assets/images/hero-banner.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 25px;
        margin: 40px 0 60px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 60px 40px;
    }
    
    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        z-index: 10;
    }
    
    .hero-title {
        font-size: 3.5rem;
        font-weight: 900;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
        text-shadow: 0 0 40px rgba(255, 215, 0, 0.5);
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.8));
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
        color: #ffffff;
        margin-bottom: 25px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        font-weight: 600;
    }
    
    .hero-description {
        font-size: 1.1rem;
        color: #e0e0e0;
        margin-bottom: 30px;
        line-height: 1.8;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .cta-btn {
        padding: 15px 40px;
        font-size: 1.1rem;
        font-weight: 700;
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
    }
    
    .cta-primary {
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #000;
    }
    
    .cta-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 215, 0, 0.5);
    }
    
    .cta-secondary {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        color: #ffffff;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }
    
    .cta-secondary:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
    }
    
    .games-section {
        margin: 80px 0;
    }
    
    .section-title {
        font-size: 2.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffd700, #00d9ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 50px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .games-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 35px;
        margin-bottom: 60px;
    }
    
    .game-card {
        background: rgba(255, 255, 255, 0.03);
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
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(255, 215, 0, 0.3);
    }
    
    .game-card:hover::before {
        opacity: 1;
    }
    
    .game-card-content {
        padding: 35px;
        position: relative;
        z-index: 2;
    }
    
    .game-icon {
        font-size: 4.5rem;
        margin-bottom: 20px;
        display: block;
    }
    
    .game-title {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: #ffd700;
    }
    
    .game-description {
        color: #b0b0b0;
        font-size: 1rem;
        margin-bottom: 25px;
        line-height: 1.6;
        min-height: 65px;
    }
    
    .game-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #000;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1.05rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }
    
    .game-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(255, 215, 0, 0.5);
    }
    
    .features-section {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.05), rgba(0, 217, 255, 0.05));
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 25px;
        padding: 60px 40px;
        margin: 80px 0;
    }
    
    .features-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffd700, #00d9ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 50px;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 35px;
    }
    
    .feature-box {
        text-align: center;
        padding: 25px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 15px;
        border: 1px solid rgba(255, 215, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    .feature-box:hover {
        transform: translateY(-5px);
        border-color: rgba(255, 215, 0, 0.3);
        box-shadow: 0 10px 30px rgba(255, 215, 0, 0.2);
    }
    
    .feature-icon {
        font-size: 3.5rem;
        margin-bottom: 20px;
    }
    
    .feature-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 12px;
    }
    
    .feature-text {
        color: #b0b0b0;
        line-height: 1.7;
        font-size: 1.05rem;
    }
    
    @media (max-width: 768px) {
        .hero-banner {
            height: 400px;
        }
        
        .hero-overlay {
            padding: 40px 20px;
        }
        
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
        }
        
        .hero-description {
            font-size: 1rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .cta-buttons {
            flex-direction: column;
        }
        
        .cta-btn {
            width: 100%;
        }
        
        .games-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="container">
    <!-- Hero Banner Section with Background Image -->
    <div class="hero-banner">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="hero-title">Welcome to VENTURES Casino</h1>
                <p class="hero-subtitle">100% Free-to-Play Social Gaming Platform</p>
                <p class="hero-description">
                    Experience the thrill of casino gaming with virtual currency! No deposits, no withdrawals, pure entertainment. Play 6 unique games and enjoy unlimited fun!
                </p>
                <div class="cta-buttons">
                    <a href="pages/games.php" class="cta-btn cta-primary">🎮 Start Playing Now</a>
                    <a href="pages/about.php" class="cta-btn cta-secondary">ℹ️ Learn More</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Games Section -->
    <div class="games-section">
        <h2 class="section-title">🎯 Featured Casino Games</h2>
        
        <div class="games-grid">
            <!-- Dice Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎲</div>
                    <h3 class="game-title">Dice Game</h3>
                    <p class="game-description">Predict HIGH or LOW and win 2x your bet! Fast-paced prediction game with instant results and smooth animations.</p>
                    <a href="games/dice.php" class="game-btn">Play Dice Game</a>
                </div>
            </div>
            
            <!-- Mines Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">💣</div>
                    <h3 class="game-title">Mines</h3>
                    <p class="game-description">Reveal safe tiles and avoid mines! Strategic grid-based game with progressive multipliers up to 4x and beyond.</p>
                    <a href="games/mines.php" class="game-btn">Play Mines</a>
                </div>
            </div>
            
            <!-- Slots Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎰</div>
                    <h3 class="game-title">Slot Machine</h3>
                    <p class="game-description">Classic 3-reel slots with casino symbols! Match diamonds, sevens, and stars for big wins up to 10x multiplier.</p>
                    <a href="games/slots.php" class="game-btn">Play Slots</a>
                </div>
            </div>
            
            <!-- Roulette Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎡</div>
                    <h3 class="game-title">Roulette</h3>
                    <p class="game-description">European roulette wheel with numbers 0-36! Bet on RED, BLACK, EVEN, ODD, HIGH, LOW and watch the wheel spin.</p>
                    <a href="games/roulette.php" class="game-btn">Play Roulette</a>
                </div>
            </div>
            
            <!-- Plinko Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎯</div>
                    <h3 class="game-title">Plinko</h3>
                    <p class="game-description">Drop balls through pegs and watch them bounce! Physics-based game with multiplier slots up to 5x your bet.</p>
                    <a href="games/plinko.php" class="game-btn">Play Plinko</a>
                </div>
            </div>
            
            <!-- Chicken Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🐔</div>
                    <h3 class="game-title">Chicken Adventure</h3>
                    <p class="game-description">Guide the chicken through obstacles! 2D platformer game with progressive multipliers. Cash out before you crash!</p>
                    <a href="games/chicken.php" class="game-btn">Play Chicken</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="features-section">
        <h2 class="features-title">✨ Why Choose VENTURES Casino?</h2>
        
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">💰</div>
                <h3 class="feature-title">100% Free to Play</h3>
                <p class="feature-text">No deposits, no withdrawals, no hidden costs. Pure entertainment with virtual currency.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">⚡</div>
                <h3 class="feature-title">Instant Play</h3>
                <p class="feature-text">No login or registration required. Start playing immediately with ₹10,000 virtual balance.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🎮</div>
                <h3 class="feature-title">6 Unique Games</h3>
                <p class="feature-text">Diverse collection of casino games with different mechanics and exciting gameplay experiences.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">📱</div>
                <h3 class="feature-title">Mobile Friendly</h3>
                <p class="feature-text">Fully responsive design. Play seamlessly on any device - desktop, tablet, or smartphone.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🔒</div>
                <h3 class="feature-title">Safe & Secure</h3>
                <p class="feature-text">Session-based gameplay with no personal data collection. Your privacy is our priority.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🎯</div>
                <h3 class="feature-title">Fair Gaming</h3>
                <p class="feature-text">Transparent algorithms and certified random number generators ensure fair play for everyone.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
