<?php
require_once '../includes/config.php';
$page_title = "Terms & Conditions";
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
        <h1 class="legal-title">Terms & Conditions</h1>
        <p class="legal-date">Last Updated: January 18, 2026</p>
    </div>
    
    <div class="legal-content">
        <div class="legal-section">
            <h2>1. Acceptance of Terms</h2>
            <p>
                By accessing and using VENTURES ("the Platform"), you agree to be bound by these Terms & Conditions. 
                If you do not agree to these terms, please do not use our Platform.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>2. Platform Description</h2>
            <p>
                VENTURES is a <span class="highlight">100% free-to-play social gaming platform</span> offering entertainment 
                through casino-style games. All currency is virtual and has zero real-world value.
            </p>
            <ul>
                <li>No real money transactions</li>
                <li>No deposits or withdrawals</li>
                <li>Entertainment purposes only</li>
                <li>Not gambling</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>3. Eligibility</h2>
            <p>
                You must be <span class="highlight">18 years of age or older</span> to use VENTURES. By using our Platform, 
                you represent and warrant that you meet this age requirement.
            </p>
            <p>
                We reserve the right to verify age and restrict access to minors.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>4. Account and Session Management</h2>
            <h3>4.1 No Account Registration Required</h3>
            <p>
                VENTURES does not require account creation or login. You can start playing immediately with ₹10,000 in virtual currency.
            </p>
            
            <h3>4.2 Session-Based Gameplay</h3>
            <p>
                Your gameplay is managed through temporary sessions. Sessions are automatically deleted when you close your browser 
                or after 24 hours of inactivity.
            </p>
            
            <h3>4.3 Virtual Currency</h3>
            <ul>
                <li>Initial balance: ₹10,000 (virtual)</li>
                <li>Cannot be withdrawn or exchanged</li>
                <li>Cannot be transferred to other users</li>
                <li>Resets when balance reaches ₹0</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>5. Betting Rules</h2>
            <h3>5.1 Bet Limits</h3>
            <ul>
                <li>Minimum bet: ₹200</li>
                <li>Maximum bet: ₹5,500</li>
                <li>ALL IN button: Bets entire balance (capped at maximum)</li>
            </ul>
            
            <h3>5.2 Valid Bets</h3>
            <p>
                A bet is only valid if:
            </p>
            <ul>
                <li>Amount is between ₹200 and ₹5,500</li>
                <li>Your balance is sufficient</li>
                <li>Bet is placed before game starts</li>
                <li>You have not exceeded session limits</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>6. Game Rules</h2>
            <h3>6.1 Fair Play</h3>
            <p>
                All games use certified random number generators and transparent algorithms. We guarantee fair play for all users.
            </p>
            
            <h3>6.2 Game Outcomes</h3>
            <p>
                Game outcomes are determined by our algorithms and cannot be influenced by users. We do not manipulate results.
            </p>
            
            <h3>6.3 Disputes</h3>
            <p>
                In case of disputes, we will review game logs and make a final determination. Our decision is binding.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>7. Prohibited Activities</h2>
            <p>
                You agree not to:
            </p>
            <ul>
                <li>Attempt to hack or exploit the Platform</li>
                <li>Use bots or automated tools</li>
                <li>Manipulate game outcomes</li>
                <li>Engage in fraudulent activities</li>
                <li>Violate any applicable laws</li>
                <li>Harass other users</li>
                <li>Post offensive or inappropriate content</li>
                <li>Attempt to reverse-engineer our systems</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>8. Responsible Gaming</h2>
            <p>
                VENTURES is committed to responsible gaming practices:
            </p>
            <ul>
                <li>This is entertainment, not gambling</li>
                <li>Virtual currency has no real value</li>
                <li>Play for fun, not profit</li>
                <li>Set personal limits and stick to them</li>
                <li>Take regular breaks</li>
                <li>Seek help if you develop unhealthy gaming habits</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>9. Intellectual Property</h2>
            <p>
                All content on VENTURES, including game designs, graphics, code, and trademarks, is the exclusive property 
                of VENTURES PRIVATE LIMITED. Unauthorized reproduction or distribution is prohibited.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>10. Limitation of Liability</h2>
            <p>
                <span class="highlight">VENTURES is provided "as is" without warranties.</span> We are not liable for:
            </p>
            <ul>
                <li>Loss of virtual currency</li>
                <li>Technical issues or downtime</li>
                <li>Data loss or corruption</li>
                <li>Indirect or consequential damages</li>
                <li>Third-party actions or content</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>11. Indemnification</h2>
            <p>
                You agree to indemnify and hold harmless VENTURES PRIVATE LIMITED from any claims, damages, or losses arising 
                from your use of the Platform or violation of these Terms.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>12. Termination</h2>
            <p>
                We reserve the right to terminate or suspend your access to VENTURES if you:
            </p>
            <ul>
                <li>Violate these Terms</li>
                <li>Engage in fraudulent or illegal activities</li>
                <li>Attempt to exploit the Platform</li>
                <li>Violate applicable laws</li>
            </ul>
        </div>
        
        <div class="legal-section">
            <h2>13. Modifications to Terms</h2>
            <p>
                We may modify these Terms at any time. Changes are effective immediately upon posting. Your continued use 
                of VENTURES constitutes acceptance of modified terms.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>14. Governing Law</h2>
            <p>
                These Terms are governed by and construed in accordance with the laws of India. Any disputes shall be resolved 
                in the courts of Haryana, India.
            </p>
        </div>
        
        <div class="legal-section">
            <h2>15. Contact Information</h2>
            <p>
                For questions about these Terms, please contact:
            </p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: #00d9ff;"><?php echo COMPANY_EMAIL; ?></a></li>
                <li><strong>Company:</strong> <?php echo COMPANY_NAME; ?></li>
                <li><strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?></li>
            </ul>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
