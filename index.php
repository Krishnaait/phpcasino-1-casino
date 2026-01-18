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
        background-image: url('<?php echo SITE_URL; ?>assets/images/hero-banner.webp');
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
    
    /* Content Section with Image */
    .content-section {
        margin: 80px 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }
    
    .content-section.reverse {
        direction: rtl;
    }
    
    .content-section.reverse > * {
        direction: ltr;
    }
    
    .content-image {
        width: 100%;
        height: 400px;
        background-size: cover;
        background-position: center;
        border-radius: 20px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
        border: 2px solid rgba(255, 215, 0, 0.2);
    }
    
    .content-text {
        padding: 20px;
    }
    
    .content-title {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffd700, #00d9ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 25px;
    }
    
    .content-description {
        color: #b0b0b0;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .content-list {
        list-style: none;
        padding: 0;
        margin: 25px 0;
    }
    
    .content-list li {
        color: #e0e0e0;
        font-size: 1.05rem;
        margin-bottom: 15px;
        padding-left: 35px;
        position: relative;
        line-height: 1.6;
    }
    
    .content-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #ffd700;
        font-weight: bold;
        font-size: 1.3rem;
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
    
    @media (max-width: 992px) {
        .content-section {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .content-section.reverse {
            direction: ltr;
        }
        
        .content-image {
            height: 300px;
        }
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
        
        .content-title {
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
    
    <!-- Why Choose Us Section -->
    <div class="content-section">
        <div class="content-image" style="background-image: url('<?php echo SITE_URL; ?>assets/images/why-choose-us.webp');"></div>
        <div class="content-text">
            <h2 class="content-title">Why Choose VENTURES Casino?</h2>
            <p class="content-description">
                VENTURES Casino offers a premium social gaming experience designed for entertainment and fun. Our platform combines cutting-edge technology with user-friendly design to deliver an exceptional gaming environment.
            </p>
            <ul class="content-list">
                <li><strong>100% Free to Play</strong> - No real money involved, just pure entertainment with virtual currency</li>
                <li><strong>No Registration Required</strong> - Start playing instantly without creating an account or sharing personal data</li>
                <li><strong>6 Unique Games</strong> - Enjoy a diverse collection of casino-style games including Dice, Mines, Slots, Roulette, Plinko, and Chicken Adventure</li>
                <li><strong>Fair Gaming</strong> - All games use certified random number generators for transparent and fair gameplay</li>
                <li><strong>24/7 Availability</strong> - Play anytime, anywhere on desktop or mobile devices</li>
                <li><strong>Instant Reset</strong> - Run out of credits? Reset your balance instantly and continue playing</li>
            </ul>
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
                    <p class="game-description">Spin the European roulette wheel! Bet on RED, BLACK, EVEN, ODD, HIGH, or LOW for 2x multiplier wins.</p>
                    <a href="games/roulette.php" class="game-btn">Play Roulette</a>
                </div>
            </div>
            
            <!-- Plinko Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🎯</div>
                    <h3 class="game-title">Plinko</h3>
                    <p class="game-description">Drop the ball and watch it bounce! Physics-based game with multipliers ranging from 3x to 8x based on landing position.</p>
                    <a href="games/plinko.php" class="game-btn">Play Plinko</a>
                </div>
            </div>
            
            <!-- Chicken Adventure Game -->
            <div class="game-card">
                <div class="game-card-content">
                    <div class="game-icon">🐔</div>
                    <h3 class="game-title">Chicken Adventure</h3>
                    <p class="game-description">Help the chicken avoid obstacles! Platformer game where distance traveled increases your multiplier and winnings.</p>
                    <a href="games/chicken.php" class="game-btn">Play Chicken Adventure</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Games Showcase Section -->
    <div class="content-section reverse">
        <div class="content-image" style="background-image: url('<?php echo SITE_URL; ?>assets/images/games-showcase.webp');"></div>
        <div class="content-text">
            <h2 class="content-title">Exciting Game Collection</h2>
            <p class="content-description">
                Our carefully curated selection of casino-style games offers something for everyone. Each game features unique mechanics, stunning visuals, and engaging gameplay designed to provide hours of entertainment.
            </p>
            <p class="content-description">
                From classic favorites like Slots and Roulette to innovative games like Mines and Plinko, every game is optimized for smooth performance across all devices. Experience the excitement of a real casino from the comfort of your home!
            </p>
            <ul class="content-list">
                <li><strong>Diverse Game Mechanics</strong> - Each game offers unique gameplay and winning strategies</li>
                <li><strong>Progressive Multipliers</strong> - Win bigger as you play smarter and take calculated risks</li>
                <li><strong>Instant Results</strong> - No waiting, all games provide immediate feedback and payouts</li>
                <li><strong>Mobile Optimized</strong> - Play seamlessly on smartphones, tablets, and desktop computers</li>
            </ul>
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="features-section">
        <h2 class="features-title">✨ Platform Features</h2>
        
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">🎮</div>
                <h3 class="feature-title">Easy to Play</h3>
                <p class="feature-text">Simple controls and intuitive interface make it easy for anyone to start playing immediately.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🔒</div>
                <h3 class="feature-title">Safe & Secure</h3>
                <p class="feature-text">No personal data collection, no downloads required. Your privacy is our priority.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">📱</div>
                <h3 class="feature-title">Mobile Friendly</h3>
                <p class="feature-text">Fully responsive design works perfectly on all devices - desktop, tablet, and mobile.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">⚡</div>
                <h3 class="feature-title">Instant Play</h3>
                <p class="feature-text">No registration, no downloads. Click and play your favorite games instantly.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🎯</div>
                <h3 class="feature-title">Fair Gaming</h3>
                <p class="feature-text">All games use provably fair algorithms to ensure transparent and unbiased results.</p>
            </div>
            
            <div class="feature-box">
                <div class="feature-icon">🔄</div>
                <h3 class="feature-title">Unlimited Credits</h3>
                <p class="feature-text">Reset your virtual balance anytime with one click. Play as much as you want!</p>
            </div>
        </div>
    </div>
    
    <!-- Responsible Gaming Section -->
    <div class="content-section">
        <div class="content-image" style="background-image: url('<?php echo SITE_URL; ?>assets/images/responsible-gaming.webp');"></div>
        <div class="content-text">
            <h2 class="content-title">Responsible Gaming Commitment</h2>
            <p class="content-description">
                At VENTURES Casino, we are committed to promoting responsible gaming practices. Our platform is designed purely for entertainment purposes using virtual currency with no real-world monetary value.
            </p>
            <p class="content-description">
                We enforce strict age restrictions and provide resources to ensure gaming remains a fun and safe activity for all users. Our platform does not involve real money gambling, eliminating financial risks while preserving the entertainment value.
            </p>
            <ul class="content-list">
                <li><strong>18+ Only</strong> - Strict age verification and compliance with responsible gaming standards</li>
                <li><strong>No Real Money</strong> - All currency is virtual with zero monetary value</li>
                <li><strong>Entertainment Focus</strong> - Designed for fun, not profit or financial gain</li>
                <li><strong>Parental Controls</strong> - Resources and guidelines for parents to protect minors</li>
                <li><strong>Support Resources</strong> - Links to responsible gaming organizations and support services</li>
            </ul>
            <a href="pages/responsible-gaming.php" class="cta-btn cta-primary" style="display: inline-block; margin-top: 20px;">Learn More About Responsible Gaming</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
