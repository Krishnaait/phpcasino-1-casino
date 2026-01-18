<?php
require_once '../includes/config.php';
$page_title = "About Us";
include '../includes/header.php';
?>

<style>
    .about-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 20px;
    }
    
    .about-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .about-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #ffd700;
        margin-bottom: 20px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .about-subtitle {
        color: #b0b0b0;
        font-size: 1.2rem;
    }
    
    .about-section {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 30px;
    }
    
    .section-title {
        font-size: 1.8rem;
        color: #ffd700;
        margin-bottom: 20px;
        font-weight: 700;
    }
    
    .section-content {
        color: #b0b0b0;
        line-height: 1.8;
        font-size: 1.05rem;
    }
    
    .section-content p {
        margin-bottom: 15px;
    }
    
    .highlight {
        color: #00d9ff;
        font-weight: 600;
    }
    
    .company-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    
    .info-box {
        background: rgba(0, 217, 255, 0.1);
        border: 2px solid rgba(0, 217, 255, 0.3);
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }
    
    .info-label {
        color: rgba(0, 217, 255, 0.7);
        font-size: 0.9rem;
        margin-bottom: 10px;
    }
    
    .info-value {
        color: #00d9ff;
        font-weight: 700;
        font-size: 1.1rem;
        word-break: break-all;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    
    .value-box {
        text-align: center;
        padding: 20px;
        background: rgba(255, 215, 0, 0.05);
        border-radius: 10px;
        border: 1px solid rgba(255, 215, 0, 0.2);
    }
    
    .value-icon {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    
    .value-title {
        color: #ffd700;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .value-text {
        color: #b0b0b0;
        font-size: 0.9rem;
    }
</style>

<div class="about-container">
    <div class="about-header">
        <h1 class="about-title">About VENTURES Casino</h1>
        <p class="about-subtitle">Your Premier Free-to-Play Gaming Platform</p>
    </div>
    
    <!-- Company Overview -->
    <div class="about-section">
        <h2 class="section-title">Who We Are</h2>
        <div class="section-content">
            <p>
                <span class="highlight">VENTURES PRIVATE LIMITED</span> is a leading free-to-play social gaming platform 
                dedicated to providing world-class entertainment experiences. We believe gaming should be accessible, 
                fun, and completely risk-free.
            </p>
            <p>
                Our platform offers a diverse collection of casino-style games designed for maximum entertainment value. 
                With virtual currency and zero real-money transactions, we ensure a safe and responsible gaming environment 
                for all players.
            </p>
        </div>
        
        <div class="company-info">
            <div class="info-box">
                <div class="info-label">Company Name</div>
                <div class="info-value"><?php echo COMPANY_NAME; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">CIN</div>
                <div class="info-value"><?php echo COMPANY_CIN; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">GST No</div>
                <div class="info-value"><?php echo COMPANY_GST; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">PAN No</div>
                <div class="info-value"><?php echo COMPANY_PAN; ?></div>
            </div>
        </div>
    </div>
    
    <!-- Our Mission -->
    <div class="about-section">
        <h2 class="section-title">Our Mission</h2>
        <div class="section-content">
            <p>
                To revolutionize the gaming industry by providing a <span class="highlight">100% free, transparent, and 
                entertaining</span> platform where players can enjoy casino-style games without any financial risk or 
                personal data collection.
            </p>
            <p>
                We are committed to responsible gaming, fair play, and creating a vibrant community of players who share 
                a passion for entertainment and competition.
            </p>
        </div>
    </div>
    
    <!-- Our Values -->
    <div class="about-section">
        <h2 class="section-title">Our Core Values</h2>
        <div class="values-grid">
            <div class="value-box">
                <div class="value-icon">🎯</div>
                <div class="value-title">Transparency</div>
                <div class="value-text">Complete honesty about our platform, games, and policies</div>
            </div>
            <div class="value-box">
                <div class="value-icon">🔒</div>
                <div class="value-title">Security</div>
                <div class="value-text">Protecting player data and ensuring safe gameplay</div>
            </div>
            <div class="value-box">
                <div class="value-icon">⚖️</div>
                <div class="value-title">Fairness</div>
                <div class="value-text">Equal odds and unbiased game mechanics for all</div>
            </div>
            <div class="value-box">
                <div class="value-icon">🎮</div>
                <div class="value-title">Entertainment</div>
                <div class="value-text">Creating engaging and enjoyable gaming experiences</div>
            </div>
            <div class="value-box">
                <div class="value-icon">🌍</div>
                <div class="value-title">Accessibility</div>
                <div class="value-text">Available to everyone, anytime, anywhere</div>
            </div>
            <div class="value-box">
                <div class="value-icon">💡</div>
                <div class="value-title">Innovation</div>
                <div class="value-text">Constantly improving and adding new games</div>
            </div>
        </div>
    </div>
    
    <!-- Game Portfolio -->
    <div class="about-section">
        <h2 class="section-title">Our Game Portfolio</h2>
        <div class="section-content">
            <p>
                We offer <span class="highlight">6 unique casino-style games</span>, each with its own mechanics and 
                entertainment value:
            </p>
            <ul style="margin-top: 15px; margin-left: 20px;">
                <li style="margin-bottom: 10px;"><strong>🎲 Dice Game</strong> - Fast-paced prediction game with instant results</li>
                <li style="margin-bottom: 10px;"><strong>💣 Mines</strong> - Strategic grid-based game with progressive multipliers</li>
                <li style="margin-bottom: 10px;"><strong>🎰 Slot Machine</strong> - Classic 3-reel slots with multiple symbols</li>
                <li style="margin-bottom: 10px;"><strong>🎡 Roulette</strong> - European wheel with multiple betting options</li>
                <li style="margin-bottom: 10px;"><strong>🎯 Plinko</strong> - Physics-based ball drop game</li>
                <li style="margin-bottom: 10px;"><strong>🐔 Chicken Adventure</strong> - Platformer game with cashout mechanics</li>
            </ul>
        </div>
    </div>
    
    <!-- Why Choose Us -->
    <div class="about-section">
        <h2 class="section-title">Why Choose VENTURES?</h2>
        <div class="section-content">
            <ul style="margin-left: 20px;">
                <li style="margin-bottom: 10px;">✅ <strong>100% Free-to-Play</strong> - No deposits, no withdrawals, no hidden costs</li>
                <li style="margin-bottom: 10px;">✅ <strong>No Login Required</strong> - Start playing instantly with ₹10,000 virtual balance</li>
                <li style="margin-bottom: 10px;">✅ <strong>Multiple Games</strong> - 6 unique games with different mechanics</li>
                <li style="margin-bottom: 10px;">✅ <strong>Mobile Friendly</strong> - Play on any device</li>
                <li style="margin-bottom: 10px;">✅ <strong>Fair Gaming</strong> - Transparent algorithms and certified randomness</li>
                <li style="margin-bottom: 10px;">✅ <strong>Responsible Gaming</strong> - Age restrictions and responsible gaming guidelines</li>
                <li style="margin-bottom: 10px;">✅ <strong>Privacy Protected</strong> - No personal data collection or cookies</li>
            </ul>
        </div>
    </div>
    
    <!-- Contact Info -->
    <div class="about-section">
        <h2 class="section-title">Get in Touch</h2>
        <div class="section-content">
            <p>Have questions? We'd love to hear from you!</p>
            <div class="company-info" style="margin-top: 20px;">
                <div class="info-box">
                    <div class="info-label">Email</div>
                    <div class="info-value"><a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #00d9ff; text-decoration: none;"><?php echo COMPANY_EMAIL; ?></a></div>
                </div>
                <div class="info-box">
                    <div class="info-label">Address</div>
                    <div class="info-value" style="font-size: 0.95rem;"><?php echo COMPANY_ADDRESS; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
