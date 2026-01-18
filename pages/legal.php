<?php
require_once '../includes/config.php';
$page_title = "Legal Information - VENTURES Casino";
include '../includes/header.php';
?>

<style>
    .legal-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
        min-height: calc(100vh - 200px);
    }
    
    .legal-header {
        text-align: center;
        margin-bottom: 60px;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(0, 217, 255, 0.1));
        border-radius: 20px;
        border: 2px solid rgba(255, 215, 0, 0.3);
    }
    
    .legal-title {
        font-size: 3rem;
        font-weight: 900;
        background: linear-gradient(135deg, #ffd700, #00d9ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
    }
    
    .legal-subtitle {
        font-size: 1.2rem;
        color: #b0b0b0;
        line-height: 1.8;
    }
    
    .age-warning {
        background: linear-gradient(135deg, rgba(255, 68, 68, 0.2), rgba(255, 0, 0, 0.1));
        border: 3px solid #ff4444;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 40px;
        text-align: center;
    }
    
    .age-warning-title {
        font-size: 2rem;
        font-weight: 800;
        color: #ff4444;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
    
    .age-warning-text {
        font-size: 1.1rem;
        color: #ffffff;
        line-height: 1.8;
    }
    
    .legal-sections {
        display: grid;
        gap: 40px;
    }
    
    .legal-section {
        background: rgba(255, 255, 255, 0.03);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 15px;
        padding: 35px;
        transition: all 0.3s ease;
    }
    
    .legal-section:hover {
        border-color: rgba(255, 215, 0, 0.4);
        box-shadow: 0 10px 30px rgba(255, 215, 0, 0.2);
        transform: translateY(-5px);
    }
    
    .section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #ffd700;
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
        color: #ffd700;
        font-weight: 600;
    }
    
    .legal-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-top: 50px;
    }
    
    .legal-link-card {
        background: linear-gradient(135deg, rgba(255, 215, 0, 0.05), rgba(0, 217, 255, 0.05));
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .legal-link-card:hover {
        border-color: #ffd700;
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(255, 215, 0, 0.3);
    }
    
    .legal-link-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }
    
    .legal-link-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 10px;
    }
    
    .legal-link-desc {
        font-size: 0.95rem;
        color: #b0b0b0;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .legal-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.5rem;
        }
        
        .legal-links {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="legal-container">
    <!-- Header -->
    <div class="legal-header">
        <h1 class="legal-title">⚖️ Legal Information</h1>
        <p class="legal-subtitle">
            Complete legal framework governing VENTURES Casino operations, user rights, and responsibilities
        </p>
    </div>
    
    <!-- Age Warning -->
    <div class="age-warning">
        <div class="age-warning-title">
            <span>🔞</span>
            <span>18+ ONLY - AGE RESTRICTION</span>
            <span>🔞</span>
        </div>
        <p class="age-warning-text">
            VENTURES Casino is strictly for users aged 18 years and above. By accessing this platform, you confirm that you meet the minimum age requirement and comply with all applicable laws in your jurisdiction.
        </p>
    </div>
    
    <!-- Legal Sections -->
    <div class="legal-sections">
        <!-- Company Information -->
        <div class="legal-section">
            <h2 class="section-title">🏢 Company Information</h2>
            <div class="section-content">
                <p><strong>Legal Entity:</strong> <?php echo COMPANY_NAME; ?></p>
                <p><strong>Corporate Identification Number (CIN):</strong> <?php echo COMPANY_CIN; ?></p>
                <p><strong>GST Number:</strong> <?php echo COMPANY_GST; ?></p>
                <p><strong>PAN Number:</strong> <?php echo COMPANY_PAN; ?></p>
                <p><strong>Registered Address:</strong> <?php echo COMPANY_ADDRESS; ?></p>
                <p><strong>Email:</strong> <?php echo COMPANY_EMAIL; ?></p>
                
                <p style="margin-top: 20px;">
                    VENTURES PRIVATE LIMITED operates as a registered entity in India, providing free-to-play social gaming entertainment. All operations are conducted in full compliance with applicable Indian laws and regulations.
                </p>
            </div>
        </div>
        
        <!-- Legal Framework -->
        <div class="legal-section">
            <h2 class="section-title">📜 Legal Framework</h2>
            <div class="section-content">
                <p>
                    VENTURES Casino operates under a comprehensive legal framework designed to protect users and ensure fair, transparent gaming experiences. Our platform is governed by the following key principles:
                </p>
                
                <ul>
                    <li><strong>No Real Money Gambling:</strong> This is a 100% free-to-play social gaming platform. No real money is involved in any transactions.</li>
                    <li><strong>Virtual Currency Only:</strong> All credits (₹) displayed are virtual and have no real-world monetary value.</li>
                    <li><strong>Entertainment Purpose:</strong> Games are provided solely for entertainment and recreational purposes.</li>
                    <li><strong>Age Verification:</strong> Strict 18+ age requirement enforced across all platform access points.</li>
                    <li><strong>Data Protection:</strong> User privacy protected through minimal data collection and secure session management.</li>
                    <li><strong>Fair Gaming:</strong> Certified random number generators ensure fair and unbiased game outcomes.</li>
                    <li><strong>Responsible Gaming:</strong> Comprehensive responsible gaming policies and support resources.</li>
                </ul>
            </div>
        </div>
        
        <!-- Jurisdiction & Compliance -->
        <div class="legal-section">
            <h2 class="section-title">🌍 Jurisdiction & Compliance</h2>
            <div class="section-content">
                <p>
                    <strong>Governing Law:</strong> This platform and all related services are governed by the laws of India. The registered office is located in Haryana, India, and all legal disputes shall be subject to the exclusive jurisdiction of courts in Gurgaon, Haryana.
                </p>
                
                <p>
                    <strong>Regulatory Compliance:</strong> VENTURES Casino complies with all applicable Indian laws, including but not limited to:
                </p>
                
                <ul>
                    <li>Information Technology Act, 2000</li>
                    <li>Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011</li>
                    <li>Consumer Protection Act, 2019</li>
                    <li>Companies Act, 2013</li>
                </ul>
                
                <p>
                    <strong>International Users:</strong> Users accessing this platform from outside India must ensure compliance with their local laws and regulations. VENTURES Casino does not guarantee that the platform is appropriate or available for use in all jurisdictions.
                </p>
            </div>
        </div>
        
        <!-- User Rights & Responsibilities -->
        <div class="legal-section">
            <h2 class="section-title">👤 User Rights & Responsibilities</h2>
            <div class="section-content">
                <p><strong>Your Rights:</strong></p>
                <ul>
                    <li>Right to fair and transparent gaming experiences</li>
                    <li>Right to privacy and data protection</li>
                    <li>Right to access and understand all terms and policies</li>
                    <li>Right to responsible gaming support and resources</li>
                    <li>Right to discontinue use at any time without penalty</li>
                </ul>
                
                <p><strong>Your Responsibilities:</strong></p>
                <ul>
                    <li>Verify you meet the minimum age requirement (18+)</li>
                    <li>Comply with all applicable laws in your jurisdiction</li>
                    <li>Use the platform responsibly and for entertainment only</li>
                    <li>Respect other users and platform integrity</li>
                    <li>Report any technical issues or concerns promptly</li>
                    <li>Understand that virtual currency has no real-world value</li>
                </ul>
            </div>
        </div>
        
        <!-- Intellectual Property -->
        <div class="legal-section">
            <h2 class="section-title">©️ Intellectual Property</h2>
            <div class="section-content">
                <p>
                    All content, designs, graphics, logos, game mechanics, software code, and other materials on VENTURES Casino are the exclusive property of VENTURES PRIVATE LIMITED or its licensors and are protected by Indian and international copyright, trademark, and intellectual property laws.
                </p>
                
                <p><strong>Restrictions:</strong></p>
                <ul>
                    <li>No reproduction, distribution, or modification of platform content without written permission</li>
                    <li>No reverse engineering or decompilation of game software</li>
                    <li>No unauthorized commercial use of platform materials</li>
                    <li>No creation of derivative works based on platform content</li>
                </ul>
                
                <p>
                    Users are granted a limited, non-exclusive, non-transferable license to access and use the platform for personal, non-commercial entertainment purposes only.
                </p>
            </div>
        </div>
        
        <!-- Limitation of Liability -->
        <div class="legal-section">
            <h2 class="section-title">⚠️ Limitation of Liability</h2>
            <div class="section-content">
                <p>
                    VENTURES PRIVATE LIMITED provides this platform "as is" and "as available" without warranties of any kind, either express or implied. To the fullest extent permitted by law:
                </p>
                
                <ul>
                    <li>We do not guarantee uninterrupted or error-free service</li>
                    <li>We are not liable for any direct, indirect, incidental, or consequential damages</li>
                    <li>We are not responsible for technical failures, data loss, or service interruptions</li>
                    <li>We do not warrant the accuracy or completeness of platform content</li>
                    <li>Maximum liability is limited to the extent permitted by applicable law</li>
                </ul>
                
                <p>
                    Users acknowledge that virtual currency has no real-world value and cannot be exchanged for real money, goods, or services.
                </p>
            </div>
        </div>
        
        <!-- Contact Information -->
        <div class="legal-section">
            <h2 class="section-title">📧 Legal Contact Information</h2>
            <div class="section-content">
                <p>
                    For legal inquiries, compliance questions, or formal notices, please contact us at:
                </p>
                
                <p style="margin-top: 20px;">
                    <strong>Email:</strong> <?php echo COMPANY_EMAIL; ?><br>
                    <strong>Registered Address:</strong> <?php echo COMPANY_ADDRESS; ?>
                </p>
                
                <p style="margin-top: 20px;">
                    All legal communications should be sent in writing to the registered address or via email. We aim to respond to all legal inquiries within 7-10 business days.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Related Legal Pages -->
    <div class="legal-links">
        <a href="privacy.php" class="legal-link-card">
            <div class="legal-link-icon">🔒</div>
            <div class="legal-link-title">Privacy Policy</div>
            <div class="legal-link-desc">How we collect, use, and protect your data</div>
        </a>
        
        <a href="terms.php" class="legal-link-card">
            <div class="legal-link-icon">📋</div>
            <div class="legal-link-title">Terms & Conditions</div>
            <div class="legal-link-desc">Rules and guidelines for using our platform</div>
        </a>
        
        <a href="disclaimer.php" class="legal-link-card">
            <div class="legal-link-icon">⚠️</div>
            <div class="legal-link-title">Disclaimer</div>
            <div class="legal-link-desc">Important notices and limitations</div>
        </a>
        
        <a href="responsible-gaming.php" class="legal-link-card">
            <div class="legal-link-icon">🛡️</div>
            <div class="legal-link-title">Responsible Gaming</div>
            <div class="legal-link-desc">Play safely and responsibly</div>
        </a>
        
        <a href="fair-play.php" class="legal-link-card">
            <div class="legal-link-icon">✅</div>
            <div class="legal-link-title">Fair Play Policy</div>
            <div class="legal-link-desc">Our commitment to fair gaming</div>
        </a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
