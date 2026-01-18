<?php
require_once '../includes/config.php';
$page_title = "Disclaimer";
include '../includes/header.php';
?>

<style>
    .legal-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 20px;
    }
    
    .legal-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .legal-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #ffd700;
        margin-bottom: 20px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .legal-date {
        color: #b0b0b0;
        font-size: 0.95rem;
    }
    
    .legal-content {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 15px;
        padding: 40px;
    }
    
    .legal-section {
        margin-bottom: 35px;
    }
    
    .legal-section h2 {
        font-size: 1.5rem;
        color: #00d9ff;
        margin-bottom: 15px;
        font-weight: 700;
    }
    
    .legal-section h3 {
        font-size: 1.2rem;
        color: #ffd700;
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .legal-section p {
        color: #b0b0b0;
        line-height: 1.8;
        margin-bottom: 12px;
    }
    
    .legal-section ul {
        color: #b0b0b0;
        margin-left: 20px;
        line-height: 1.8;
    }
    
    .legal-section li {
        margin-bottom: 10px;
    }
    
    .highlight {
        color: #ffd700;
        font-weight: 600;
    }
    
    .warning-box {
        background: rgba(255, 68, 68, 0.1);
        border: 2px solid rgba(255, 68, 68, 0.3);
        border-radius: 10px;
        padding: 20px;
        margin: 20px 0;
    }
    
    .warning-box p {
        color: #ff4444;
        font-weight: 600;
    }
</style>

<div class="legal-container">
    <div class="legal-header">
        <h1 class="legal-title">⚠️ Disclaimer</h1>
        <p class="legal-date">Last Updated: January 18, 2026</p>
    </div>
    
    <div class="legal-content">
        <div class="warning-box">
            <p>
                ⚠️ IMPORTANT: VENTURES is a 100% FREE-TO-PLAY entertainment platform. 
                This is NOT gambling. All currency is virtual and has ZERO real-world value.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>1. Age & Responsible Gaming Disclaimer</h2>
            <p>
                <span class="highlight">VENTURES is strictly for users 18 years of age or older.</span> 
                By using this platform, you confirm that you are at least 18 years old.
            </p>
            <p>
                <strong>Responsible Gaming Notice:</strong>
            </p>
            <ul>
                <li>This is entertainment, not gambling</li>
                <li>All currency is virtual and has no real value</li>
                <li>You cannot win real money or prizes</li>
                <li>Play for fun and entertainment only</li>
                <li>Set personal limits and stick to them</li>
                <li>Take regular breaks</li>
                <li>Never gamble with money you cannot afford to lose</li>
                <li>If you develop unhealthy gaming habits, seek professional help</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>2. Not Gambling</h2>
            <p>
                <span class="highlight">VENTURES is NOT gambling.</span> Here's why:
            </p>
            <ul>
                <li>No real money is involved</li>
                <li>No deposits or withdrawals</li>
                <li>No prizes or cash rewards</li>
                <li>Virtual currency has zero real-world value</li>
                <li>No financial risk whatsoever</li>
                <li>Purely for entertainment purposes</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>3. Virtual Currency</h2>
            <p>
                All currency on VENTURES is <span class="highlight">100% virtual</span>:
            </p>
            <ul>
                <li>Cannot be withdrawn</li>
                <li>Cannot be exchanged for real money</li>
                <li>Cannot be transferred to other users</li>
                <li>Cannot be sold or traded</li>
                <li>Has absolutely no real-world value</li>
                <li>Is provided for entertainment only</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>4. No Financial Risk</h2>
            <p>
                Using VENTURES carries <span class="highlight">NO financial risk</span>:
            </p>
            <ul>
                <li>No money is required to play</li>
                <li>No deposits are accepted</li>
                <li>No credit card or payment information needed</li>
                <li>No hidden charges or fees</li>
                <li>No real money can be lost</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>5. No Prizes or Rewards</h2>
            <p>
                VENTURES offers <span class="highlight">NO real prizes or rewards</span>:
            </p>
            <ul>
                <li>No cash prizes</li>
                <li>No gift cards</li>
                <li>No physical goods</li>
                <li>No vouchers or coupons</li>
                <li>No real-world rewards of any kind</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>6. Fair Play Guarantee</h2>
            <p>
                VENTURES guarantees fair play:
            </p>
            <ul>
                <li>All games use certified random number generators</li>
                <li>Algorithms are transparent and unbiased</li>
                <li>No game manipulation</li>
                <li>No rigged outcomes</li>
                <li>Equal odds for all players</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>7. Privacy & Data Protection</h2>
            <p>
                VENTURES protects your privacy:
            </p>
            <ul>
                <li>No personal data collection</li>
                <li>No cookies or persistent tracking</li>
                <li>No email or phone number required</li>
                <li>Session-based gameplay only</li>
                <li>Automatic data deletion</li>
                <li>No third-party data sharing</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>8. Technical Disclaimer</h2>
            <p>
                VENTURES is provided "as is" without warranties:
            </p>
            <ul>
                <li>No guarantee of uninterrupted service</li>
                <li>No guarantee of error-free operation</li>
                <li>No liability for technical issues</li>
                <li>No liability for data loss</li>
                <li>No liability for third-party actions</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>9. Prohibited Activities</h2>
            <p>
                The following activities are strictly prohibited:
            </p>
            <ul>
                <li>Hacking or exploiting the platform</li>
                <li>Using bots or automated tools</li>
                <li>Manipulating game outcomes</li>
                <li>Fraudulent activities</li>
                <li>Violating applicable laws</li>
                <li>Harassment of other users</li>
            </ul>
            <p>
                Violation of these rules may result in immediate termination of access.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>10. Limitation of Liability</h2>
            <p>
                <span class="highlight">VENTURES PRIVATE LIMITED is not liable for:</span>
            </p>
            <ul>
                <li>Loss of virtual currency</li>
                <li>Technical failures or downtime</li>
                <li>Data loss or corruption</li>
                <li>Indirect or consequential damages</li>
                <li>Third-party actions</li>
                <li>Any damages whatsoever arising from platform use</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>11. Third-Party Links</h2>
            <p>
                VENTURES may contain links to third-party websites. We are not responsible for:
            </p>
            <ul>
                <li>Content of third-party sites</li>
                <li>Privacy practices of third parties</li>
                <li>Actions of third parties</li>
                <li>Accuracy of third-party information</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>12. Governing Law</h2>
            <p>
                This Disclaimer is governed by the laws of India. Any disputes shall be resolved in the courts of Haryana, India.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>13. Contact & Support</h2>
            <p>
                For questions about this Disclaimer or our platform:
            </p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #00d9ff;"><?php echo COMPANY_EMAIL; ?></a></li>
                <li><strong>Company:</strong> <?php echo COMPANY_NAME; ?></li>
                <li><strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?></li>
            </ul>
        </div>
        
        <div class="warning-box" style="margin-top: 40px;">
            <p>
                By using VENTURES, you acknowledge that you have read and understood this Disclaimer. 
                You agree to use the platform responsibly and in accordance with all applicable laws.
            </p>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
