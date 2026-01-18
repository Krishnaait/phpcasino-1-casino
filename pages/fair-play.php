<?php
require_once '../includes/config.php';
$page_title = "Fair Play Policy - VENTURES Casino";
include '../includes/header.php';
?>

<style>
    .fairplay-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
        min-height: calc(100vh - 200px);
    }
    
    .fairplay-header {
        text-align: center;
        margin-bottom: 60px;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(0, 191, 255, 0.1), rgba(138, 43, 226, 0.1));
        border-radius: 20px;
        border: 2px solid rgba(0, 191, 255, 0.3);
    }
    
    .fairplay-title {
        font-size: 3rem;
        font-weight: 900;
        background: linear-gradient(135deg, #00bfff, #8a2be2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
    }
    
    .fairplay-subtitle {
        font-size: 1.2rem;
        color: #b0b0b0;
        line-height: 1.8;
    }
    
    .guarantee-box {
        background: linear-gradient(135deg, rgba(0, 255, 0, 0.2), rgba(0, 200, 0, 0.1));
        border: 3px solid #00ff00;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 40px;
        text-align: center;
    }
    
    .guarantee-title {
        font-size: 1.8rem;
        font-weight: 800;
        color: #00ff00;
        margin-bottom: 15px;
    }
    
    .guarantee-text {
        font-size: 1.1rem;
        color: #ffffff;
        line-height: 1.8;
    }
    
    .content-sections {
        display: grid;
        gap: 40px;
    }
    
    .content-section {
        background: rgba(255, 255, 255, 0.03);
        border: 2px solid rgba(0, 191, 255, 0.2);
        border-radius: 15px;
        padding: 35px;
        transition: all 0.3s ease;
    }
    
    .content-section:hover {
        border-color: rgba(0, 191, 255, 0.4);
        box-shadow: 0 10px 30px rgba(0, 191, 255, 0.2);
        transform: translateY(-5px);
    }
    
    .section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #00bfff;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .section-content {
        color: #d0d0d0;
        line-height: 1.9;
        font-size: 1.05rem;
    }
    
    .section-content p {
        margin-bottom: 15px;
    }
    
    .section-content ul {
        margin: 15px 0;
        padding-left: 25px;
    }
    
    .section-content li {
        margin-bottom: 10px;
    }
    
    .section-content strong {
        color: #00bfff;
        font-weight: 600;
    }
    
    .principles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-top: 50px;
    }
    
    .principle-card {
        background: linear-gradient(135deg, rgba(0, 191, 255, 0.05), rgba(138, 43, 226, 0.05));
        border: 2px solid rgba(0, 191, 255, 0.2);
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .principle-card:hover {
        border-color: #00bfff;
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 191, 255, 0.3);
    }
    
    .principle-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }
    
    .principle-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #00bfff;
        margin-bottom: 10px;
    }
    
    .principle-desc {
        font-size: 0.95rem;
        color: #b0b0b0;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .fairplay-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.5rem;
        }
        
        .principles-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="fairplay-container">
    <!-- Header -->
    <div class="fairplay-header">
        <h1 class="fairplay-title">✅ Fair Play Policy</h1>
        <p class="fairplay-subtitle">
            Our unwavering commitment to transparency, fairness, and integrity in every game
        </p>
    </div>
    
    <!-- Guarantee Box -->
    <div class="guarantee-box">
        <div class="guarantee-title">✓ 100% Fair Gaming Guarantee</div>
        <p class="guarantee-text">
            Every game on VENTURES Casino uses certified random number generators (RNG) and transparent algorithms. We guarantee fair, unbiased, and unpredictable outcomes for all players.
        </p>
    </div>
    
    <!-- Content Sections -->
    <div class="content-sections">
        <!-- Our Commitment -->
        <div class="content-section">
            <h2 class="section-title">🎯 Our Fair Play Commitment</h2>
            <div class="section-content">
                <p>
                    At VENTURES Casino, fair play is not just a policy—it's the foundation of everything we do. We are committed to providing a gaming environment where every player has an equal opportunity to win, and where outcomes are determined purely by chance and skill, never by manipulation or bias.
                </p>
                
                <p>
                    Our fair play commitment encompasses:
                </p>
                
                <ul>
                    <li><strong>Certified Random Number Generators:</strong> All games use industry-standard RNG algorithms that produce truly random, unpredictable results</li>
                    <li><strong>Transparent Game Mechanics:</strong> Clear rules and payout structures for every game</li>
                    <li><strong>Equal Treatment:</strong> All players are treated equally regardless of play history or virtual balance</li>
                    <li><strong>No Manipulation:</strong> We never alter game outcomes or odds to favor the house or any player</li>
                    <li><strong>Continuous Monitoring:</strong> Regular audits and testing to ensure fairness is maintained</li>
                </ul>
            </div>
        </div>
        
        <!-- Random Number Generation -->
        <div class="content-section">
            <h2 class="section-title">🎲 Random Number Generation (RNG)</h2>
            <div class="section-content">
                <p><strong>What is RNG?</strong></p>
                <p>
                    Random Number Generation (RNG) is the technology that ensures every game outcome is completely random and unpredictable. Our RNG systems use complex mathematical algorithms that generate sequences of numbers with no discernible pattern.
                </p>
                
                <p><strong>How We Ensure Randomness:</strong></p>
                <ul>
                    <li><strong>Cryptographic Algorithms:</strong> We use industry-standard cryptographic RNG algorithms that meet international gaming standards</li>
                    <li><strong>Seed Randomization:</strong> Each game session uses unique seed values to ensure different outcomes</li>
                    <li><strong>No Predictability:</strong> Past results have no influence on future outcomes</li>
                    <li><strong>Regular Testing:</strong> RNG systems are tested regularly to verify randomness and fairness</li>
                    <li><strong>Independent Verification:</strong> Our algorithms follow publicly documented standards</li>
                </ul>
                
                <p><strong>Game-Specific RNG Implementation:</strong></p>
                <ul>
                    <li><strong>Dice Game:</strong> Two independent dice rolls (1-6) generated randomly</li>
                    <li><strong>Roulette:</strong> Random number selection (0-36) with color assignment</li>
                    <li><strong>Slots:</strong> Independent random symbol selection for each reel</li>
                    <li><strong>Plinko:</strong> Physics-based randomness with random peg collisions</li>
                    <li><strong>Mines:</strong> Random mine placement on grid initialization</li>
                    <li><strong>Chicken:</strong> Random obstacle generation and placement</li>
                </ul>
            </div>
        </div>
        
        <!-- Game Integrity -->
        <div class="content-section">
            <h2 class="section-title">🔒 Game Integrity & Security</h2>
            <div class="section-content">
                <p><strong>Preventing Manipulation:</strong></p>
                <p>
                    We employ multiple layers of security to prevent any form of game manipulation:
                </p>
                
                <ul>
                    <li><strong>Server-Side Processing:</strong> All game logic runs on secure servers, not client browsers</li>
                    <li><strong>Tamper Detection:</strong> Systems detect and prevent attempts to modify game code</li>
                    <li><strong>Secure Communication:</strong> All data transmitted between client and server is encrypted</li>
                    <li><strong>Code Obfuscation:</strong> Game code is protected against reverse engineering</li>
                    <li><strong>Regular Security Audits:</strong> Ongoing security assessments to identify vulnerabilities</li>
                </ul>
                
                <p><strong>Anti-Cheating Measures:</strong></p>
                <ul>
                    <li>Detection of automated play or bot usage</li>
                    <li>Monitoring for suspicious betting patterns</li>
                    <li>Prevention of client-side manipulation attempts</li>
                    <li>Session validation and integrity checks</li>
                </ul>
            </div>
        </div>
        
        <!-- Transparency -->
        <div class="content-section">
            <h2 class="section-title">🔍 Transparency & Disclosure</h2>
            <div class="section-content">
                <p><strong>Clear Game Rules:</strong></p>
                <p>
                    Every game on our platform includes clear, easy-to-understand rules:
                </p>
                
                <ul>
                    <li>How to play and win</li>
                    <li>Payout structures and multipliers</li>
                    <li>Betting limits (min: ₹200, max: ₹5,500)</li>
                    <li>Game-specific mechanics and features</li>
                </ul>
                
                <p><strong>Payout Information:</strong></p>
                <p>
                    All games clearly display:
                </p>
                
                <ul>
                    <li><strong>Dice:</strong> 2x multiplier for correct HIGH/LOW prediction</li>
                    <li><strong>Roulette:</strong> 2x multiplier for RED/BLACK/EVEN/ODD/HIGH/LOW</li>
                    <li><strong>Slots:</strong> 3x to 10x multipliers based on symbol matches</li>
                    <li><strong>Plinko:</strong> 1x to 5x multipliers based on ball landing position</li>
                    <li><strong>Mines:</strong> Progressive multipliers up to 4x+ based on safe tiles revealed</li>
                    <li><strong>Chicken:</strong> Progressive multipliers based on distance traveled</li>
                </ul>
                
                <p><strong>No Hidden Mechanics:</strong></p>
                <p>
                    We do not employ any hidden mechanics, secret algorithms, or undisclosed features that could affect game outcomes or player experience.
                </p>
            </div>
        </div>
        
        <!-- Player Rights -->
        <div class="content-section">
            <h2 class="section-title">⚖️ Player Rights & Protections</h2>
            <div class="section-content">
                <p><strong>Your Rights as a Player:</strong></p>
                
                <ul>
                    <li><strong>Fair Treatment:</strong> Equal opportunity to win regardless of play history</li>
                    <li><strong>Transparent Rules:</strong> Access to complete game rules and payout information</li>
                    <li><strong>Random Outcomes:</strong> Guarantee that all game results are genuinely random</li>
                    <li><strong>No Discrimination:</strong> Equal treatment for all players without bias</li>
                    <li><strong>Issue Resolution:</strong> Fair and prompt resolution of any concerns or disputes</li>
                    <li><strong>Data Protection:</strong> Security and privacy of your gaming sessions</li>
                </ul>
                
                <p><strong>Reporting Concerns:</strong></p>
                <p>
                    If you suspect any unfair practices or have concerns about game fairness, please contact us immediately at <?php echo COMPANY_EMAIL; ?>. We take all reports seriously and investigate thoroughly.
                </p>
            </div>
        </div>
        
        <!-- Virtual Currency -->
        <div class="content-section">
            <h2 class="section-title">💰 Virtual Currency Policy</h2>
            <div class="section-content">
                <p><strong>No Real Money Value:</strong></p>
                <p>
                    All currency (₹) displayed on VENTURES Casino is virtual and has absolutely no real-world monetary value. This policy ensures:
                </p>
                
                <ul>
                    <li>No financial risk to players</li>
                    <li>Pure entertainment without gambling concerns</li>
                    <li>Equal starting opportunities for all users</li>
                    <li>Ability to reset balance at any time</li>
                </ul>
                
                <p><strong>Free-to-Play Model:</strong></p>
                <ul>
                    <li>No deposits or purchases required</li>
                    <li>No withdrawals or cash-outs possible</li>
                    <li>Starting balance of ₹10,000 for all users</li>
                    <li>Reset button available to restore balance anytime</li>
                </ul>
            </div>
        </div>
        
        <!-- Continuous Improvement -->
        <div class="content-section">
            <h2 class="section-title">📈 Continuous Improvement</h2>
            <div class="section-content">
                <p><strong>Regular Audits:</strong></p>
                <p>
                    We conduct regular internal audits of our gaming systems to ensure:
                </p>
                
                <ul>
                    <li>RNG algorithms continue to produce random results</li>
                    <li>Game mechanics function as intended</li>
                    <li>Payout calculations are accurate</li>
                    <li>Security measures remain effective</li>
                </ul>
                
                <p><strong>Player Feedback:</strong></p>
                <p>
                    We actively seek and incorporate player feedback to improve fairness and transparency. Your input helps us maintain the highest standards of fair play.
                </p>
                
                <p><strong>Technology Updates:</strong></p>
                <p>
                    We continuously update our technology and algorithms to incorporate the latest best practices in fair gaming and security.
                </p>
            </div>
        </div>
        
        <!-- Contact -->
        <div class="content-section">
            <h2 class="section-title">📧 Questions & Concerns</h2>
            <div class="section-content">
                <p>
                    If you have any questions about our fair play policies or wish to report a concern, please contact us:
                </p>
                
                <p style="margin-top: 20px;">
                    <strong>Email:</strong> <?php echo COMPANY_EMAIL; ?><br>
                    <strong>Company:</strong> <?php echo COMPANY_NAME; ?><br>
                    <strong>CIN:</strong> <?php echo COMPANY_CIN; ?>
                </p>
                
                <p style="margin-top: 20px;">
                    We are committed to responding to all fair play inquiries within 48 hours and resolving any issues promptly and transparently.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Fair Play Principles -->
    <div class="principles-grid">
        <div class="principle-card">
            <div class="principle-icon">🎲</div>
            <div class="principle-title">True Randomness</div>
            <div class="principle-desc">Certified RNG ensures unpredictable outcomes</div>
        </div>
        
        <div class="principle-card">
            <div class="principle-icon">🔍</div>
            <div class="principle-title">Full Transparency</div>
            <div class="principle-desc">Clear rules and payout structures for all games</div>
        </div>
        
        <div class="principle-card">
            <div class="principle-icon">⚖️</div>
            <div class="principle-title">Equal Treatment</div>
            <div class="principle-desc">Every player has the same fair opportunity</div>
        </div>
        
        <div class="principle-card">
            <div class="principle-icon">🔒</div>
            <div class="principle-title">Secure Gaming</div>
            <div class="principle-desc">Protected against manipulation and cheating</div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
