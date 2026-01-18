<?php
require_once '../includes/config.php';
$page_title = "Terms & Conditions";
include '../includes/header.php';
?>

<style>
    .legal-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 60px 20px 100px;
    }
    
    .legal-header {
        text-align: center;
        margin-bottom: 50px;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(157, 78, 221, 0.1), rgba(255, 20, 147, 0.1));
        border-radius: 20px;
        border: 2px solid rgba(157, 78, 221, 0.3);
    }
    
    .legal-title {
        font-size: 3rem;
        font-weight: 800;
        background: linear-gradient(135deg, #9d4edd, #ff1493);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
    }
    
    .legal-subtitle {
        color: #9d4edd;
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
    
    .legal-date {
        color: #b0b0b0;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .age-restriction-banner {
        background: linear-gradient(135deg, rgba(255, 68, 68, 0.2), rgba(255, 0, 0, 0.1));
        border: 3px solid #ff4444;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 40px;
        text-align: center;
        box-shadow: 0 0 30px rgba(255, 68, 68, 0.3);
    }
    
    .age-restriction-banner h2 {
        color: #ff4444;
        font-size: 2rem;
        margin-bottom: 15px;
        font-weight: 800;
    }
    
    .age-restriction-banner p {
        color: #ffffff;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 10px;
    }
    
    .legal-content {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(157, 78, 221, 0.2);
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
    }
    
    .legal-section {
        margin-bottom: 45px;
        padding-bottom: 30px;
        border-bottom: 1px solid rgba(157, 78, 221, 0.1);
    }
    
    .legal-section:last-child {
        border-bottom: none;
    }
    
    .legal-section h2 {
        font-size: 1.8rem;
        color: #9d4edd;
        margin-bottom: 20px;
        font-weight: 700;
    }
    
    .legal-section h3 {
        font-size: 1.3rem;
        color: #ff1493;
        margin: 25px 0 15px;
        font-weight: 600;
    }
    
    .legal-section p {
        color: #e0e0e0;
        line-height: 1.9;
        margin-bottom: 15px;
        font-size: 1.05rem;
    }
    
    .legal-section ul {
        list-style: none;
        padding-left: 0;
        margin: 20px 0;
    }
    
    .legal-section li {
        color: #e0e0e0;
        padding: 12px 0 12px 35px;
        position: relative;
        line-height: 1.8;
        font-size: 1.05rem;
    }
    
    .legal-section li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #9d4edd;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    .highlight-box {
        background: rgba(157, 78, 221, 0.1);
        border-left: 4px solid #9d4edd;
        padding: 20px 25px;
        margin: 25px 0;
        border-radius: 8px;
    }
    
    .warning-box {
        background: rgba(255, 68, 68, 0.1);
        border-left: 4px solid #ff4444;
        padding: 20px 25px;
        margin: 25px 0;
        border-radius: 8px;
    }
    
    .contact-info {
        background: linear-gradient(135deg, rgba(157, 78, 221, 0.1), rgba(255, 20, 147, 0.1));
        border: 2px solid rgba(157, 78, 221, 0.3);
        border-radius: 15px;
        padding: 30px;
        margin-top: 40px;
    }
    
    .contact-info h3 {
        color: #9d4edd;
        margin-bottom: 20px;
        font-size: 1.5rem;
    }
    
    @media (max-width: 768px) {
        .legal-title {
            font-size: 2rem;
        }
        
        .legal-content {
            padding: 30px 20px;
        }
    }
</style>

<div class="legal-container">
    <div class="legal-header">
        <h1 class="legal-title">📜 Terms & Conditions</h1>
        <p class="legal-subtitle">Please Read Carefully Before Using Our Platform</p>
        <p class="legal-date">Last Updated: January 18, 2026</p>
    </div>
    
    <!-- 18+ Age Restriction Banner -->
    <div class="age-restriction-banner">
        <h2>🔞 18+ ONLY - MANDATORY AGE REQUIREMENT</h2>
        <p><strong>YOU MUST BE 18 YEARS OR OLDER TO USE THIS PLATFORM.</strong></p>
        <p>By accessing VENTURES Casino, you represent, warrant, and agree that you are at least 18 years of age and have the legal capacity to enter into this agreement.</p>
        <p><strong>Access by minors is strictly prohibited and constitutes a violation of these Terms.</strong></p>
    </div>
    
    <div class="legal-content">
        <!-- Acceptance of Terms -->
        <div class="legal-section">
            <h2>1. Acceptance of Terms</h2>
            <p>Welcome to VENTURES PRIVATE LIMITED ("VENTURES," "we," "our," or "us"). These Terms and Conditions ("Terms") govern your access to and use of our free-to-play social casino gaming platform.</p>
            
            <p>By accessing or using our platform, you agree to be bound by these Terms. If you do not agree to these Terms, you must not access or use our platform.</p>
            
            <div class="highlight-box">
                <p><strong>Binding Agreement:</strong> These Terms constitute a legally binding agreement between you and VENTURES PRIVATE LIMITED. Please read them carefully.</p>
            </div>
        </div>
        
        <!-- Age Restrictions -->
        <div class="legal-section">
            <h2>🔞 2. Age Restrictions and Eligibility</h2>
            
            <h3>2.1 Minimum Age Requirement</h3>
            <p><strong>You must be at least 18 years of age to use this platform.</strong> By using our services, you represent and warrant that:</p>
            <ul>
                <li>You are 18 years of age or older</li>
                <li>You have the legal capacity to enter into binding contracts</li>
                <li>You are not prohibited by law from accessing social gaming platforms</li>
                <li>You will comply with all applicable laws in your jurisdiction</li>
            </ul>
            
            <h3>2.2 Verification and Enforcement</h3>
            <p>We reserve the right to:</p>
            <ul>
                <li>Request age verification at any time</li>
                <li>Immediately terminate access for users under 18</li>
                <li>Report violations to appropriate authorities</li>
                <li>Implement technical measures to prevent underage access</li>
            </ul>
            
            <h3>2.3 Parental Responsibility</h3>
            <p>Parents and legal guardians are responsible for monitoring and controlling their children's internet access. We recommend using parental control software to restrict access to age-restricted content.</p>
            
            <div class="warning-box">
                <p><strong>⚠️ Warning:</strong> Providing false information about your age is a violation of these Terms and may result in immediate account termination and legal action.</p>
            </div>
        </div>
        
        <!-- Platform Description -->
        <div class="legal-section">
            <h2>3. Platform Description</h2>
            
            <h3>3.1 Free-to-Play Entertainment</h3>
            <p>VENTURES is a 100% free-to-play social casino gaming platform designed for entertainment purposes only. Key features include:</p>
            <ul>
                <li>No registration or login required</li>
                <li>Virtual currency with zero real-world value</li>
                <li>Multiple casino-style games (Dice, Mines, Slots, Roulette, Plinko, Chicken)</li>
                <li>Session-based gameplay with automatic data deletion</li>
            </ul>
            
            <h3>3.2 No Real Money Gambling</h3>
            <div class="warning-box">
                <p><strong>IMPORTANT:</strong> This is NOT a gambling platform. VENTURES does not involve:</p>
                <ul style="margin-top: 15px;">
                    <li>Real money deposits or withdrawals</li>
                    <li>Monetary prizes or rewards</li>
                    <li>Exchange of virtual currency for real money</li>
                    <li>Any form of real-world value transactions</li>
                </ul>
            </div>
        </div>
        
        <!-- User Conduct -->
        <div class="legal-section">
            <h2>4. User Conduct and Prohibited Activities</h2>
            
            <h3>4.1 Acceptable Use</h3>
            <p>You agree to use our platform only for lawful purposes and in accordance with these Terms. You agree NOT to:</p>
            <ul>
                <li>Violate any applicable laws or regulations</li>
                <li>Infringe upon the rights of others</li>
                <li>Transmit harmful or malicious code</li>
                <li>Attempt to gain unauthorized access to our systems</li>
                <li>Use automated tools, bots, or scripts</li>
                <li>Reverse engineer or decompile our platform</li>
                <li>Collect user data without authorization</li>
                <li>Impersonate any person or entity</li>
            </ul>
            
            <h3>4.2 Consequences of Violations</h3>
            <p>Violations of these Terms may result in:</p>
            <ul>
                <li>Immediate termination of access</li>
                <li>Legal action and prosecution</li>
                <li>Reporting to law enforcement authorities</li>
                <li>Liability for damages caused</li>
            </ul>
        </div>
        
        <!-- Virtual Currency -->
        <div class="legal-section">
            <h2>💰 5. Virtual Currency</h2>
            
            <h3>5.1 No Real-World Value</h3>
            <p><strong>All currency displayed on our platform (₹) is VIRTUAL and has ZERO real-world value.</strong></p>
            <ul>
                <li>Virtual currency cannot be exchanged for real money</li>
                <li>Virtual currency cannot be transferred between users</li>
                <li>Virtual currency has no monetary value outside our platform</li>
                <li>We do not offer refunds or compensation for virtual currency</li>
            </ul>
            
            <h3>5.2 Starting Balance and Resets</h3>
            <ul>
                <li>All users start with ₹10,000 virtual balance</li>
                <li>Balance can be reset to ₹10,000 at any time</li>
                <li>Balance is stored temporarily in PHP sessions</li>
                <li>Balance is automatically deleted after 24 hours of inactivity</li>
            </ul>
        </div>
        
        <!-- Betting Rules -->
        <div class="legal-section">
            <h2>6. Betting Rules</h2>
            <h3>6.1 Bet Limits</h3>
            <ul>
                <li>Minimum bet: ₹200</li>
                <li>Maximum bet: ₹5,500</li>
            </ul>
            
            <h3>6.2 Valid Bets</h3>
            <p>A bet is only valid if:</p>
            <ul>
                <li>Amount is between ₹200 and ₹5,500</li>
                <li>Your balance is sufficient</li>
                <li>Bet is placed before game starts</li>
            </ul>
        </div>
        
        <!-- Intellectual Property -->
        <div class="legal-section">
            <h2>7. Intellectual Property Rights</h2>
            <p>All content, features, and functionality on our platform are owned by VENTURES PRIVATE LIMITED and are protected by international copyright, trademark, and other intellectual property laws.</p>
            
            <h3>7.1 Our Rights</h3>
            <ul>
                <li>All game designs, graphics, and code are our property</li>
                <li>The VENTURES name and logo are our trademarks</li>
                <li>All content is protected by copyright</li>
            </ul>
            
            <h3>7.2 Your License</h3>
            <p>We grant you a limited, non-exclusive, non-transferable, revocable license to access and use our platform for personal, non-commercial entertainment purposes only.</p>
        </div>
        
        <!-- Disclaimer of Warranties -->
        <div class="legal-section">
            <h2>8. Disclaimer of Warranties</h2>
            <p>Our platform is provided "AS IS" and "AS AVAILABLE" without warranties of any kind, either express or implied, including but not limited to:</p>
            <ul>
                <li>Warranties of merchantability</li>
                <li>Fitness for a particular purpose</li>
                <li>Non-infringement</li>
                <li>Uninterrupted or error-free operation</li>
                <li>Accuracy or reliability of results</li>
            </ul>
            
            <div class="warning-box">
                <p><strong>No Guarantee:</strong> We do not guarantee that our platform will be available at all times or free from errors, viruses, or other harmful components.</p>
            </div>
        </div>
        
        <!-- Limitation of Liability -->
        <div class="legal-section">
            <h2>9. Limitation of Liability</h2>
            <p>To the maximum extent permitted by law, VENTURES PRIVATE LIMITED shall not be liable for any indirect, incidental, special, consequential, or punitive damages.</p>
            
            <p><strong>Our total liability shall not exceed ₹0 (zero rupees), as this is a free-to-play platform with no monetary transactions.</strong></p>
        </div>
        
        <!-- Responsible Gaming -->
        <div class="legal-section">
            <h2>🎮 10. Responsible Gaming</h2>
            
            <h3>10.1 Entertainment Only</h3>
            <p>Our platform is designed for entertainment purposes only. We encourage responsible gaming practices:</p>
            <ul>
                <li>Set time limits for your gaming sessions</li>
                <li>Take regular breaks</li>
                <li>Do not let gaming interfere with daily responsibilities</li>
                <li>Remember that this is entertainment, not a way to make money</li>
            </ul>
        </div>
        
        <!-- Termination -->
        <div class="legal-section">
            <h2>11. Termination</h2>
            <p>We reserve the right to terminate or suspend your access to our platform immediately, without prior notice or liability, for any reason, including but not limited to:</p>
            <ul>
                <li>Violation of these Terms</li>
                <li>Fraudulent or illegal activity</li>
                <li>Underage access</li>
                <li>Abuse of platform features</li>
            </ul>
        </div>
        
        <!-- Governing Law -->
        <div class="legal-section">
            <h2>12. Governing Law and Jurisdiction</h2>
            <p>These Terms shall be governed by and construed in accordance with the laws of India, without regard to its conflict of law provisions.</p>
            
            <p>Any disputes arising from these Terms or your use of our platform shall be subject to the exclusive jurisdiction of the courts located in Gurgaon, Haryana, India.</p>
        </div>
        
        <!-- Changes to Terms -->
        <div class="legal-section">
            <h2>13. Changes to Terms</h2>
            <p>We reserve the right to modify or replace these Terms at any time. Changes will be effective immediately upon posting to our website.</p>
            
            <p>Your continued use of the platform after changes constitutes acceptance of the modified Terms.</p>
        </div>
        
        <!-- Contact Information -->
        <div class="contact-info">
            <h3>📞 Contact Us</h3>
            <p>For questions or concerns about these Terms, please contact us:</p>
            <p><strong>Company:</strong> <?php echo COMPANY_NAME; ?></p>
            <p><strong>Email:</strong> <?php echo COMPANY_EMAIL; ?></p>
            <p><strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?></p>
            <p><strong>CIN:</strong> <?php echo COMPANY_CIN; ?></p>
            <p><strong>GST:</strong> <?php echo COMPANY_GST; ?></p>
            <p><strong>PAN:</strong> <?php echo COMPANY_PAN; ?></p>
            <p><strong>Business Hours:</strong> Monday - Sunday, 24/7 (Email Support)</p>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
