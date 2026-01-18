<?php
require_once '../includes/config.php';
$page_title = "Privacy Policy";
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
</style>

<div class="legal-container">
    <div class="legal-header">
        <h1 class="legal-title">Privacy Policy</h1>
        <p class="legal-date">Last Updated: January 18, 2026</p>
    </div>
    
    <div class="legal-content">
        <div class="legal-section">
            <h2>1. Introduction</h2>
            <p>
                Welcome to <span class="highlight">VENTURES PRIVATE LIMITED</span> ("we," "us," "our," or "Company"). 
                We are committed to protecting your privacy and ensuring you have a positive experience on our website. 
                This Privacy Policy explains our data practices and how we handle information related to your use of our platform.
            </p>
            <p>
                <strong>Important:</strong> VENTURES is a free-to-play gaming platform that does not require user registration 
                or personal data collection. We respect your privacy and maintain minimal data collection practices.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>2. Information We Collect</h2>
            <h3>2.1 What We DON'T Collect</h3>
            <ul>
                <li>Personal names, addresses, or contact information</li>
                <li>Email addresses or phone numbers</li>
                <li>Financial information or payment details</li>
                <li>Cookies or persistent identifiers</li>
                <li>Location data or device identifiers</li>
            </ul>
            
            <h3>2.2 Session Information (Temporary)</h3>
            <p>
                We use PHP sessions to manage your gameplay. Session data includes:
            </p>
            <ul>
                <li>Session ID (randomly generated, non-identifying)</li>
                <li>Virtual balance and game progress</li>
                <li>Game history and statistics</li>
            </ul>
            <p>
                <strong>Note:</strong> Session data is stored server-side and is automatically deleted when you close your browser 
                or after the session expires (typically 24 hours).
            </p>
            
            <h3>2.3 Automatically Collected Information</h3>
            <ul>
                <li>IP address (for server security only)</li>
                <li>Browser type and version</li>
                <li>Page visited and time spent</li>
                <li>Referrer information</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>3. How We Use Information</h2>
            <p>We use collected information for the following purposes:</p>
            <ul>
                <li>Providing and improving our gaming services</li>
                <li>Ensuring platform security and preventing fraud</li>
                <li>Analyzing gameplay patterns to enhance user experience</li>
                <li>Complying with legal obligations</li>
                <li>Troubleshooting technical issues</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>4. Data Security</h2>
            <p>
                We implement industry-standard security measures to protect your information:
            </p>
            <ul>
                <li>SSL/TLS encryption for data transmission</li>
                <li>Secure session management</li>
                <li>Regular security audits</li>
                <li>No storage of sensitive personal data</li>
                <li>Firewall protection and intrusion detection</li>
            </ul>
            <p>
                <strong>Note:</strong> While we strive to protect your information, no security system is completely impenetrable. 
                We cannot guarantee absolute security of data transmitted over the internet.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>5. Cookies and Tracking</h2>
            <p>
                <span class="highlight">VENTURES does NOT use cookies or persistent tracking technologies.</span> 
                Our platform operates entirely through PHP sessions, which are temporary and server-side.
            </p>
            <p>
                We do not use:
            </p>
            <ul>
                <li>Persistent cookies</li>
                <li>Local storage (localStorage)</li>
                <li>Session storage (sessionStorage)</li>
                <li>Third-party tracking pixels</li>
                <li>Analytics cookies</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>6. Third-Party Services</h2>
            <p>
                VENTURES does not share your information with third-party services. We do not use:
            </p>
            <ul>
                <li>Google Analytics or similar tracking services</li>
                <li>Advertising networks</li>
                <li>Data brokers or marketing companies</li>
                <li>Social media integrations</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>7. Age Restrictions</h2>
            <p>
                VENTURES is strictly for users 18 years of age or older. We do not knowingly collect information from minors. 
                If we become aware that a minor has accessed our platform, we will take appropriate action.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>8. Your Rights</h2>
            <p>
                As a user of VENTURES, you have the following rights:
            </p>
            <ul>
                <li><strong>Right to Access:</strong> You can view your session data during active gameplay</li>
                <li><strong>Right to Deletion:</strong> Your session data is automatically deleted when you close your browser</li>
                <li><strong>Right to Privacy:</strong> We do not collect or store personal information</li>
                <li><strong>Right to Opt-Out:</strong> You can stop using our platform at any time</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>9. Data Retention</h2>
            <p>
                <strong>Session Data:</strong> Automatically deleted after session expiration (typically 24 hours or when browser closes)
            </p>
            <p>
                <strong>Server Logs:</strong> IP addresses and access logs are retained for up to 30 days for security purposes
            </p>
            <p>
                <strong>Personal Information:</strong> We do not retain personal information as we do not collect it
            </p>
        </div>
        
        <div class="legal-section">
            <h2>10. International Users</h2>
            <p>
                VENTURES is operated from India and complies with Indian data protection laws including the Information Technology Act, 2000. 
                If you access our platform from outside India, you agree to comply with all applicable local laws.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>11. Changes to This Policy</h2>
            <p>
                We may update this Privacy Policy from time to time. Changes will be effective immediately upon posting to our website. 
                Your continued use of VENTURES after changes constitutes your acceptance of the updated policy.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>12. Contact Us</h2>
            <p>
                If you have questions about this Privacy Policy or our data practices, please contact us:
            </p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #00d9ff;"><?php echo COMPANY_EMAIL; ?></a></li>
                <li><strong>Company:</strong> <?php echo COMPANY_NAME; ?></li>
                <li><strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?></li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>13. Disclaimer</h2>
            <p>
                VENTURES is a free-to-play entertainment platform. All currency is virtual and has zero real-world value. 
                This is not gambling and is for entertainment purposes only. Must be 18+ to play.
            </p>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
