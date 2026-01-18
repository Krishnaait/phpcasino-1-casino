<?php
require_once '../includes/config.php';
$page_title = "Disclaimer";
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
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(255, 140, 66, 0.1));
        border-radius: 20px;
        border: 2px solid rgba(255, 107, 53, 0.3);
    }
    
    .legal-title {
        font-size: 3rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ff6b35, #ff8c42);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
    }
    
    .legal-subtitle {
        color: #ff6b35;
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
        border: 2px solid rgba(255, 107, 53, 0.2);
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
    }
    
    .legal-section {
        margin-bottom: 45px;
        padding-bottom: 30px;
        border-bottom: 1px solid rgba(255, 107, 53, 0.1);
    }
    
    .legal-section:last-child {
        border-bottom: none;
    }
    
    .legal-section h2 {
        font-size: 1.8rem;
        color: #ff6b35;
        margin-bottom: 20px;
        font-weight: 700;
    }
    
    .legal-section h3 {
        font-size: 1.3rem;
        color: #ff8c42;
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
        content: "⚠";
        position: absolute;
        left: 0;
        color: #ff6b35;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    .highlight-box {
        background: rgba(255, 107, 53, 0.1);
        border-left: 4px solid #ff6b35;
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
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(255, 140, 66, 0.1));
        border: 2px solid rgba(255, 107, 53, 0.3);
        border-radius: 15px;
        padding: 30px;
        margin-top: 40px;
    }
    
    .contact-info h3 {
        color: #ff6b35;
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
        <h1 class="legal-title">⚠️ Disclaimer</h1>
        <p class="legal-subtitle">Important Information About Our Platform</p>
        <p class="legal-date">Last Updated: January 18, 2026</p>
    </div>
    
    <!-- 18+ Age Restriction Banner -->
    <div class="age-restriction-banner">
        <h2>🔞 18+ ONLY - AGE RESTRICTION & RESPONSIBLE GAMING</h2>
        <p><strong>THIS PLATFORM IS STRICTLY FOR USERS AGED 18 YEARS AND ABOVE.</strong></p>
        <p>By accessing VENTURES Casino, you confirm that you are at least 18 years of age. Underage access is strictly prohibited and may result in legal consequences.</p>
        <p><strong>If you are under 18, you must leave this platform immediately.</strong></p>
    </div>
    
    <div class="legal-content">
        <!-- General Disclaimer -->
        <div class="legal-section">
            <h2>1. General Disclaimer</h2>
            <p>The information and services provided on VENTURES PRIVATE LIMITED ("VENTURES," "we," "our," or "us") are for entertainment purposes only. By using our platform, you acknowledge and agree to the following disclaimers.</p>
            
            <div class="warning-box">
                <p><strong>⚠️ Important:</strong> This disclaimer should be read in conjunction with our Terms & Conditions and Privacy Policy. All three documents form the complete legal agreement between you and VENTURES.</p>
            </div>
        </div>
        
        <!-- Age and Responsible Gaming Disclaimer -->
        <div class="legal-section">
            <h2>🔞 2. Age Restriction & Responsible Gaming Disclaimer</h2>
            
            <h3>2.1 Minimum Age Requirement</h3>
            <p><strong>You must be 18 years of age or older to access and use this platform.</strong></p>
            <ul>
                <li>We do not knowingly provide services to individuals under 18 years of age</li>
                <li>By using our platform, you represent that you are at least 18 years old</li>
                <li>Providing false age information is a violation of our Terms and may result in legal action</li>
                <li>We reserve the right to request age verification at any time</li>
            </ul>
            
            <h3>2.2 Parental Control and Supervision</h3>
            <p>Parents and legal guardians are responsible for:</p>
            <ul>
                <li>Monitoring their children's internet usage</li>
                <li>Implementing parental control software to restrict access to age-restricted content</li>
                <li>Educating children about online safety and age-appropriate content</li>
                <li>Preventing minors from accessing platforms intended for adults</li>
            </ul>
            
            <h3>2.3 Responsible Gaming Commitment</h3>
            <p>VENTURES is committed to promoting responsible gaming:</p>
            <ul>
                <li>This platform is for entertainment purposes only</li>
                <li>All currency is virtual and has zero real-world value</li>
                <li>We encourage users to set personal time and usage limits</li>
                <li>Take regular breaks during gaming sessions</li>
                <li>Do not let gaming interfere with work, family, or social responsibilities</li>
            </ul>
            
            <div class="highlight-box">
                <p><strong>Seek Help:</strong> If you or someone you know is experiencing problematic gaming behavior, please seek help from professional counseling services or gaming addiction support organizations.</p>
            </div>
        </div>
        
        <!-- No Gambling Disclaimer -->
        <div class="legal-section">
            <h2>💰 3. No Gambling / No Real Money Disclaimer</h2>
            
            <h3>3.1 Entertainment Platform Only</h3>
            <p><strong>VENTURES is NOT a gambling platform.</strong> We explicitly disclaim any association with real money gambling:</p>
            <ul>
                <li>This is a FREE-TO-PLAY social gaming platform</li>
                <li>NO real money deposits are accepted</li>
                <li>NO real money withdrawals are possible</li>
                <li>NO monetary prizes or rewards are offered</li>
                <li>NO exchange of virtual currency for real money</li>
            </ul>
            
            <h3>3.2 Virtual Currency Disclaimer</h3>
            <p><strong>All currency displayed on our platform (₹) is VIRTUAL and has ZERO real-world value.</strong></p>
            <ul>
                <li>Virtual currency cannot be purchased with real money</li>
                <li>Virtual currency cannot be sold or exchanged for real money</li>
                <li>Virtual currency cannot be transferred to other users</li>
                <li>Virtual currency has no value outside our platform</li>
                <li>We do not offer refunds or compensation for virtual currency losses</li>
            </ul>
            
            <div class="warning-box">
                <p><strong>⚠️ Critical Notice:</strong> This platform does not constitute gambling under any legal definition. It is purely for entertainment and does not involve any real-world financial risk or reward.</p>
            </div>
        </div>
        
        <!-- Contact Information -->
        <div class="contact-info">
            <h3>📞 Contact Us</h3>
            <p>If you have questions or concerns about this Disclaimer, please contact us:</p>
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
