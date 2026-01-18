<?php
require_once '../includes/config.php';
$page_title = "About Us";
include '../includes/header.php';
?>

<style>
    .about-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px 100px;
    }
    
    .about-header {
        text-align: center;
        margin-bottom: 60px;
        padding: 50px 20px;
        background: linear-gradient(135deg, rgba(0, 217, 255, 0.1), rgba(157, 78, 221, 0.1));
        border-radius: 25px;
        border: 2px solid rgba(0, 217, 255, 0.3);
    }
    
    .about-title {
        font-size: 3.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #00d9ff, #9d4edd);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
    }
    
    .about-subtitle {
        color: #00d9ff;
        font-size: 1.4rem;
        line-height: 1.8;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .content-section {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(0, 217, 255, 0.2);
        border-radius: 20px;
        padding: 50px;
        margin-bottom: 40px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
    }
    
    .content-section h2 {
        font-size: 2.2rem;
        color: #00d9ff;
        margin-bottom: 25px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .content-section h3 {
        font-size: 1.6rem;
        color: #9d4edd;
        margin: 30px 0 20px;
        font-weight: 600;
    }
    
    .content-section p {
        color: #e0e0e0;
        line-height: 2;
        margin-bottom: 20px;
        font-size: 1.1rem;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }
    
    .feature-card {
        background: linear-gradient(135deg, rgba(0, 217, 255, 0.1), rgba(157, 78, 221, 0.1));
        border: 2px solid rgba(0, 217, 255, 0.3);
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 40px rgba(0, 217, 255, 0.3);
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    
    .feature-title {
        font-size: 1.4rem;
        color: #00d9ff;
        margin-bottom: 15px;
        font-weight: 700;
    }
    
    .feature-desc {
        color: #b0b0b0;
        line-height: 1.8;
        font-size: 1.05rem;
    }
    
    .values-list {
        list-style: none;
        padding: 0;
        margin: 30px 0;
    }
    
    .values-list li {
        color: #e0e0e0;
        padding: 20px;
        margin-bottom: 15px;
        background: rgba(0, 217, 255, 0.05);
        border-left: 4px solid #00d9ff;
        border-radius: 8px;
        font-size: 1.1rem;
        line-height: 1.8;
    }
    
    .values-list li strong {
        color: #00d9ff;
        font-size: 1.2rem;
    }
    
    .company-info-box {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(255, 140, 66, 0.1));
        border: 2px solid rgba(255, 215, 0, 0.3);
        border-radius: 15px;
        padding: 40px;
        margin-top: 50px;
    }
    
    .company-info-box h3 {
        color: #ffd700;
        font-size: 2rem;
        margin-bottom: 25px;
        text-align: center;
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 25px;
    }
    
    .info-item {
        padding: 15px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
    }
    
    .info-label {
        color: #ffd700;
        font-weight: 600;
        font-size: 0.95rem;
        margin-bottom: 8px;
    }
    
    .info-value {
        color: #ffffff;
        font-size: 1.05rem;
        word-break: break-word;
    }
    
    @media (max-width: 768px) {
        .about-title {
            font-size: 2.5rem;
        }
        
        .content-section {
            padding: 30px 20px;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="about-container">
    <div class="about-header">
        <h1 class="about-title">🎰 About VENTURES</h1>
        <p class="about-subtitle">Your Premier Destination for Free-to-Play Social Casino Entertainment</p>
    </div>
    
    <!-- Who We Are -->
    <div class="content-section">
        <h2>🏢 Who We Are</h2>
        <p>Welcome to <strong>VENTURES PRIVATE LIMITED</strong>, a pioneering force in the world of free-to-play social casino gaming. We are dedicated to providing an exceptional entertainment experience that combines the thrill of casino-style games with a completely risk-free environment.</p>
        
        <p>Established with a vision to revolutionize online entertainment, VENTURES offers a unique platform where players can enjoy the excitement of casino games without any financial risk. Our platform is built on the principles of transparency, fairness, and responsible gaming.</p>
        
        <p>As a registered company operating under Indian law, we are committed to maintaining the highest standards of legal compliance, ethical business practices, and user satisfaction.</p>
    </div>
    
    <!-- Our Mission -->
    <div class="content-section">
        <h2>🎯 Our Mission</h2>
        <p>Our mission is simple yet powerful: <strong>To provide world-class entertainment that is accessible, fair, and completely free for everyone aged 18 and above.</strong></p>
        
        <p>We believe that entertainment should be inclusive and risk-free. That's why we've created a platform where:</p>
        <ul class="values-list">
            <li><strong>No Real Money is Involved:</strong> All currency on our platform is virtual with zero real-world value, ensuring a completely risk-free experience.</li>
            <li><strong>No Registration Required:</strong> Jump straight into the action without the hassle of creating accounts or sharing personal information.</li>
            <li><strong>Fair Play Guaranteed:</strong> Our games use certified random number generators and transparent algorithms to ensure every player has an equal chance.</li>
            <li><strong>Privacy First:</strong> We collect minimal data and automatically delete session information after 24 hours.</li>
        </ul>
    </div>
    
    <!-- What We Offer -->
    <div class="content-section">
        <h2>🎮 What We Offer</h2>
        <p>VENTURES features a diverse collection of casino-style games designed to provide hours of entertainment:</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🎲</div>
                <div class="feature-title">Dice Game</div>
                <div class="feature-desc">Predict HIGH or LOW and test your luck with our classic dice game featuring smooth animations and instant results.</div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💣</div>
                <div class="feature-title">Mines</div>
                <div class="feature-desc">Navigate through a strategic grid, avoiding mines and collecting multipliers in this thrilling game of risk and reward.</div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎰</div>
                <div class="feature-title">Slot Machine</div>
                <div class="feature-desc">Spin the reels and match casino symbols for exciting wins with multipliers up to 10x your bet.</div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎡</div>
                <div class="feature-title">Roulette</div>
                <div class="feature-desc">Experience the elegance of European roulette with numbers 0-36 and multiple betting options.</div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <div class="feature-title">Plinko</div>
                <div class="feature-desc">Watch the ball bounce through pegs in this physics-based game with multipliers up to 5x.</div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🐔</div>
                <div class="feature-title">Chicken Adventure</div>
                <div class="feature-desc">Guide your chicken through obstacles in this unique 2D platformer-style casino game.</div>
            </div>
        </div>
    </div>
    
    <!-- Our Values -->
    <div class="content-section">
        <h2>💎 Our Core Values</h2>
        
        <h3>1. Transparency</h3>
        <p>We believe in complete transparency. Our game algorithms are fair, our terms are clear, and our intentions are honest. We have nothing to hide and everything to share.</p>
        
        <h3>2. Responsible Gaming</h3>
        <p>While our platform doesn't involve real money, we are committed to promoting responsible gaming habits. We encourage users to set personal limits, take regular breaks, and remember that gaming is meant for entertainment, not as a substitute for real-life activities.</p>
        
        <h3>3. Privacy Protection</h3>
        <p>Your privacy is paramount. We collect minimal data, use no tracking cookies, and automatically delete session information. We will never sell or share your data with third parties.</p>
        
        <h3>4. Innovation</h3>
        <p>We continuously innovate to bring you the best gaming experience. From smooth animations to intuitive interfaces, we're always improving our platform based on user feedback.</p>
        
        <h3>5. Accessibility</h3>
        <p>Entertainment should be accessible to everyone. That's why our platform requires no registration, works on all devices, and is completely free to use.</p>
    </div>
    
    <!-- Why Choose Us -->
    <div class="content-section">
        <h2>⭐ Why Choose VENTURES?</h2>
        
        <ul class="values-list">
            <li><strong>100% Free to Play:</strong> No deposits, no withdrawals, no hidden charges. Just pure entertainment.</li>
            <li><strong>No Registration:</strong> Start playing immediately without creating an account or sharing personal information.</li>
            <li><strong>Fair & Transparent:</strong> Certified random number generators ensure every game is fair and unbiased.</li>
            <li><strong>Privacy Focused:</strong> Minimal data collection with automatic deletion after 24 hours.</li>
            <li><strong>Mobile Friendly:</strong> Play on any device - desktop, tablet, or smartphone.</li>
            <li><strong>6 Unique Games:</strong> Diverse selection of casino-style games with unique themes and mechanics.</li>
            <li><strong>Instant Reset:</strong> Reset your balance to ₹10,000 anytime with a single click.</li>
            <li><strong>No Real Money Risk:</strong> All currency is virtual with zero real-world value.</li>
        </ul>
    </div>
    
    <!-- Age Restriction Notice -->
    <div class="content-section" style="border-color: rgba(255, 68, 68, 0.3); background: rgba(255, 68, 68, 0.05);">
        <h2 style="color: #ff4444;">🔞 Age Restriction</h2>
        <p><strong>VENTURES is strictly for users aged 18 years and above.</strong> We are committed to preventing underage access and promoting responsible gaming. By using our platform, you confirm that you are at least 18 years of age.</p>
        
        <p>Parents and guardians are encouraged to use parental control software to restrict access to age-restricted content.</p>
    </div>
    
    <!-- Company Information -->
    <div class="company-info-box">
        <h3>📋 Company Information</h3>
        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Company Name</div>
                <div class="info-value"><?php echo COMPANY_NAME; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Corporate Identity Number (CIN)</div>
                <div class="info-value"><?php echo COMPANY_CIN; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">GST Number</div>
                <div class="info-value"><?php echo COMPANY_GST; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">PAN Number</div>
                <div class="info-value"><?php echo COMPANY_PAN; ?></div>
            </div>
            <div class="info-item" style="grid-column: 1 / -1;">
                <div class="info-label">Registered Address</div>
                <div class="info-value"><?php echo COMPANY_ADDRESS; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Email</div>
                <div class="info-value"><?php echo COMPANY_EMAIL; ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Business Hours</div>
                <div class="info-value">Monday - Sunday, 24/7 (Email Support)</div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
