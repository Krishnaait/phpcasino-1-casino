<?php
require_once '../includes/config.php';
$page_title = "Privacy Policy";
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
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(0, 217, 255, 0.1));
        border-radius: 20px;
        border: 2px solid rgba(255, 215, 0, 0.3);
    }
    
    .legal-title {
        font-size: 3rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffd700, #00d9ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
        text-shadow: 0 0 30px rgba(255, 215, 0, 0.3);
    }
    
    .legal-subtitle {
        color: #00d9ff;
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
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
    }
    
    .legal-section {
        margin-bottom: 45px;
        padding-bottom: 30px;
        border-bottom: 1px solid rgba(255, 215, 0, 0.1);
    }
    
    .legal-section:last-child {
        border-bottom: none;
    }
    
    .legal-section h2 {
        font-size: 1.8rem;
        color: #ffd700;
        margin-bottom: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .legal-section h3 {
        font-size: 1.3rem;
        color: #00d9ff;
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
        color: #00ff00;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    .highlight-box {
        background: rgba(255, 215, 0, 0.1);
        border-left: 4px solid #ffd700;
        padding: 20px 25px;
        margin: 25px 0;
        border-radius: 8px;
    }
    
    .highlight-box p {
        margin-bottom: 10px;
    }
    
    .contact-info {
        background: linear-gradient(135deg, rgba(0, 217, 255, 0.1), rgba(0, 150, 255, 0.1));
        border: 2px solid rgba(0, 217, 255, 0.3);
        border-radius: 15px;
        padding: 30px;
        margin-top: 40px;
    }
    
    .contact-info h3 {
        color: #00d9ff;
        margin-bottom: 20px;
        font-size: 1.5rem;
    }
    
    .contact-info p {
        margin-bottom: 10px;
    }
    
    @media (max-width: 768px) {
        .legal-title {
            font-size: 2rem;
        }
        
        .legal-content {
            padding: 30px 20px;
        }
        
        .legal-section h2 {
            font-size: 1.5rem;
        }
    }
</style>

<div class="legal-container">
    <div class="legal-header">
        <h1 class="legal-title">🔒 Privacy Policy</h1>
        <p class="legal-subtitle">Your Privacy is Our Priority</p>
        <p class="legal-date">Last Updated: January 18, 2026</p>
    </div>
    
    <!-- 18+ Age Restriction Banner -->
    <div class="age-restriction-banner">
        <h2>🔞 18+ ONLY - AGE RESTRICTION</h2>
        <p><strong>This platform is strictly for users aged 18 years and above.</strong></p>
        <p>By accessing and using VENTURES Casino, you confirm that you are at least 18 years of age and legally permitted to participate in social gaming activities in your jurisdiction.</p>
        <p><strong>We do not knowingly collect or process personal data from individuals under 18 years of age.</strong></p>
    </div>
    
    <div class="legal-content">
        <!-- Introduction -->
        <div class="legal-section">
            <h2>📋 1. Introduction</h2>
            <p>Welcome to VENTURES PRIVATE LIMITED ("we," "our," or "us"). This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and use our free-to-play social casino gaming platform.</p>
            
            <p>We are committed to protecting your privacy and ensuring transparency in our data practices. This policy applies to all users of our platform, regardless of how you access or use our services.</p>
            
            <div class="highlight-box">
                <p><strong>Important:</strong> VENTURES is a 100% free-to-play entertainment platform. We do NOT involve real money gambling, and all currency used on our platform is virtual with zero real-world value.</p>
            </div>
        </div>
        
        <!-- Information We Collect -->
        <div class="legal-section">
            <h2>📊 2. Information We Collect</h2>
            
            <h3>2.1 Information We DO NOT Collect</h3>
            <p>Unlike many online platforms, VENTURES operates with minimal data collection:</p>
            <ul>
                <li>We do NOT require registration or login</li>
                <li>We do NOT collect your name, email, or phone number</li>
                <li>We do NOT collect payment information (no transactions occur)</li>
                <li>We do NOT use cookies for tracking</li>
                <li>We do NOT collect personal identification documents</li>
            </ul>
            
            <h3>2.2 Information We DO Collect</h3>
            <p>We collect minimal technical information necessary for platform functionality:</p>
            <ul>
                <li><strong>Session Data:</strong> Temporary game state and virtual balance stored in PHP sessions</li>
                <li><strong>Technical Data:</strong> Browser type, device type, IP address, and access times</li>
                <li><strong>Usage Data:</strong> Pages visited, games played, and time spent on platform</li>
                <li><strong>Performance Data:</strong> Error logs and performance metrics for technical improvements</li>
            </ul>
            
            <div class="highlight-box">
                <p><strong>Session-Based Storage:</strong> All your game data is stored temporarily in PHP sessions and is automatically deleted when you close your browser or after 24 hours of inactivity.</p>
            </div>
        </div>
        
        <!-- How We Use Information -->
        <div class="legal-section">
            <h2>🎯 3. How We Use Your Information</h2>
            <p>We use the minimal information we collect for the following purposes:</p>
            <ul>
                <li><strong>Platform Functionality:</strong> To provide and maintain our gaming services</li>
                <li><strong>Game State Management:</strong> To track your virtual balance and game progress during your session</li>
                <li><strong>Technical Improvement:</strong> To analyze platform performance and fix technical issues</li>
                <li><strong>Security:</strong> To detect and prevent fraudulent activity or abuse</li>
                <li><strong>Legal Compliance:</strong> To comply with applicable laws and regulations</li>
            </ul>
        </div>
        
        <!-- Age Verification and Protection -->
        <div class="legal-section">
            <h2>🔞 4. Age Verification and Minor Protection</h2>
            
            <h3>4.1 Minimum Age Requirement</h3>
            <p><strong>You must be at least 18 years of age to use this platform.</strong> By accessing VENTURES Casino, you represent and warrant that you are 18 years of age or older.</p>
            
            <h3>4.2 Protection of Minors</h3>
            <ul>
                <li>We do not knowingly collect, use, or disclose personal information from individuals under 18</li>
                <li>If we become aware that a user is under 18, we will immediately terminate their access</li>
                <li>Parents and guardians should monitor their children's internet usage</li>
                <li>We encourage the use of parental control software to restrict access</li>
            </ul>
            
            <h3>4.3 Reporting Underage Access</h3>
            <p>If you believe a minor has accessed our platform, please contact us immediately at <strong>contact@ventures.com</strong>. We will investigate and take appropriate action.</p>
            
            <div class="highlight-box">
                <p><strong>Parental Responsibility:</strong> Parents and guardians are responsible for ensuring that minors under their supervision do not access age-restricted content online.</p>
            </div>
        </div>
        
        <!-- Data Security -->
        <div class="legal-section">
            <h2>🔐 5. Data Security</h2>
            <p>We implement appropriate technical and organizational measures to protect your information:</p>
            <ul>
                <li><strong>Encryption:</strong> All data transmission is encrypted using SSL/TLS protocols</li>
                <li><strong>Session Security:</strong> PHP sessions are secured with httponly and secure flags</li>
                <li><strong>Access Controls:</strong> Limited access to technical data by authorized personnel only</li>
                <li><strong>Regular Audits:</strong> Periodic security assessments and vulnerability testing</li>
                <li><strong>Automatic Deletion:</strong> Session data is automatically deleted after 24 hours</li>
            </ul>
            
            <p>However, no method of transmission over the internet is 100% secure. While we strive to protect your information, we cannot guarantee absolute security.</p>
        </div>
        
        <!-- Data Retention -->
        <div class="legal-section">
            <h2>⏱️ 6. Data Retention</h2>
            <p>We retain information only as long as necessary:</p>
            <ul>
                <li><strong>Session Data:</strong> Deleted automatically when you close your browser or after 24 hours of inactivity</li>
                <li><strong>Technical Logs:</strong> Retained for 30 days for troubleshooting and security purposes</li>
                <li><strong>Analytics Data:</strong> Aggregated and anonymized data may be retained indefinitely for statistical analysis</li>
            </ul>
        </div>
        
        <!-- Third-Party Services -->
        <div class="legal-section">
            <h2>🔗 7. Third-Party Services</h2>
            <p>Our platform uses minimal third-party services:</p>
            <ul>
                <li><strong>Google Fonts:</strong> For typography (subject to Google's privacy policy)</li>
                <li><strong>Font Awesome:</strong> For icons (CDN delivery only)</li>
                <li><strong>Hosting Provider:</strong> Railway.app for platform hosting</li>
            </ul>
            
            <p>We do not share your personal information with third parties for marketing purposes. We do not use third-party analytics or advertising services.</p>
        </div>
        
        <!-- Your Rights -->
        <div class="legal-section">
            <h2>⚖️ 8. Your Privacy Rights</h2>
            <p>Depending on your location, you may have the following rights:</p>
            <ul>
                <li><strong>Right to Access:</strong> Request information about data we hold about you</li>
                <li><strong>Right to Deletion:</strong> Request deletion of your data (automatically happens after 24 hours)</li>
                <li><strong>Right to Object:</strong> Object to processing of your data</li>
                <li><strong>Right to Restriction:</strong> Request restriction of data processing</li>
                <li><strong>Right to Data Portability:</strong> Request a copy of your data in a portable format</li>
            </ul>
            
            <p>To exercise any of these rights, please contact us at <strong>contact@ventures.com</strong>.</p>
        </div>
        
        <!-- No Real Money -->
        <div class="legal-section">
            <h2>💰 9. No Real Money Transactions</h2>
            <p><strong>Important Clarification:</strong></p>
            <ul>
                <li>VENTURES is a FREE-TO-PLAY entertainment platform</li>
                <li>No real money deposits or withdrawals are accepted</li>
                <li>All currency (₹) displayed is VIRTUAL and has ZERO real-world value</li>
                <li>We do NOT collect payment information or financial data</li>
                <li>This is NOT gambling - it is social gaming for entertainment only</li>
            </ul>
        </div>
        
        <!-- International Users -->
        <div class="legal-section">
            <h2>🌍 10. International Users</h2>
            <p>Our platform is accessible globally, but users must comply with local laws:</p>
            <ul>
                <li>You are responsible for ensuring that your use of our platform complies with local laws</li>
                <li>Some jurisdictions may restrict or prohibit social gaming</li>
                <li>Data may be processed in India or other locations where our servers are located</li>
                <li>By using our platform, you consent to the transfer of data across borders</li>
            </ul>
        </div>
        
        <!-- Changes to Privacy Policy -->
        <div class="legal-section">
            <h2>📝 11. Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. Changes will be effective immediately upon posting to our website. We will update the "Last Updated" date at the top of this policy.</p>
            
            <p>We encourage you to review this Privacy Policy periodically. Continued use of our platform after changes constitutes acceptance of the updated policy.</p>
        </div>
        
        <!-- Contact Information -->
        <div class="contact-info">
            <h3>📞 Contact Us</h3>
            <p>If you have questions, concerns, or requests regarding this Privacy Policy, please contact us:</p>
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
