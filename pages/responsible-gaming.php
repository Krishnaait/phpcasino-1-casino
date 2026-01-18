<?php
require_once '../includes/config.php';
$page_title = "Responsible Gaming - VENTURES Casino";
include '../includes/header.php';
?>

<style>
    .responsible-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
        min-height: calc(100vh - 200px);
    }
    
    .responsible-header {
        text-align: center;
        margin-bottom: 60px;
        padding: 40px 20px;
        background: linear-gradient(135deg, rgba(0, 255, 127, 0.1), rgba(0, 191, 255, 0.1));
        border-radius: 20px;
        border: 2px solid rgba(0, 255, 127, 0.3);
    }
    
    .responsible-title {
        font-size: 3rem;
        font-weight: 900;
        background: linear-gradient(135deg, #00ff7f, #00bfff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
    }
    
    .responsible-subtitle {
        font-size: 1.2rem;
        color: #b0b0b0;
        line-height: 1.8;
    }
    
    .warning-box {
        background: linear-gradient(135deg, rgba(255, 165, 0, 0.2), rgba(255, 140, 0, 0.1));
        border: 3px solid #ffa500;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 40px;
        text-align: center;
    }
    
    .warning-title {
        font-size: 1.8rem;
        font-weight: 800;
        color: #ffa500;
        margin-bottom: 15px;
    }
    
    .warning-text {
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
        border: 2px solid rgba(0, 255, 127, 0.2);
        border-radius: 15px;
        padding: 35px;
        transition: all 0.3s ease;
    }
    
    .content-section:hover {
        border-color: rgba(0, 255, 127, 0.4);
        box-shadow: 0 10px 30px rgba(0, 255, 127, 0.2);
        transform: translateY(-5px);
    }
    
    .section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #00ff7f;
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
        color: #00ff7f;
        font-weight: 600;
    }
    
    .help-resources {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-top: 50px;
    }
    
    .help-card {
        background: linear-gradient(135deg, rgba(0, 255, 127, 0.05), rgba(0, 191, 255, 0.05));
        border: 2px solid rgba(0, 255, 127, 0.2);
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .help-card:hover {
        border-color: #00ff7f;
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 255, 127, 0.3);
    }
    
    .help-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }
    
    .help-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #00ff7f;
        margin-bottom: 10px;
    }
    
    .help-desc {
        font-size: 0.95rem;
        color: #b0b0b0;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .responsible-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.5rem;
        }
        
        .help-resources {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="responsible-container">
    <!-- Header -->
    <div class="responsible-header">
        <h1 class="responsible-title">🛡️ Responsible Gaming</h1>
        <p class="responsible-subtitle">
            Your well-being is our priority. Play responsibly and enjoy gaming as entertainment.
        </p>
    </div>
    
    <!-- Warning Box -->
    <div class="warning-box">
        <div class="warning-title">⚠️ Important Notice</div>
        <p class="warning-text">
            VENTURES Casino is a free-to-play social gaming platform for entertainment purposes only. No real money is involved. All currency displayed is virtual and has zero real-world value. Must be 18+ to play.
        </p>
    </div>
    
    <!-- Content Sections -->
    <div class="content-sections">
        <!-- Our Commitment -->
        <div class="content-section">
            <h2 class="section-title">💚 Our Commitment to Responsible Gaming</h2>
            <div class="section-content">
                <p>
                    At VENTURES Casino, we are deeply committed to promoting responsible gaming practices. While our platform uses only virtual currency with no real-world value, we recognize the importance of maintaining healthy gaming habits and preventing excessive play.
                </p>
                
                <p>
                    We believe that gaming should be a fun, entertaining, and social activity enjoyed in moderation. Our responsible gaming framework is designed to:
                </p>
                
                <ul>
                    <li>Educate users about healthy gaming practices</li>
                    <li>Provide tools and resources for self-management</li>
                    <li>Protect minors from accessing the platform</li>
                    <li>Offer support for users who may need assistance</li>
                    <li>Maintain transparency in all gaming operations</li>
                </ul>
            </div>
        </div>
        
        <!-- Signs of Problem Gaming -->
        <div class="content-section">
            <h2 class="section-title">🚨 Recognizing Problem Gaming Behavior</h2>
            <div class="section-content">
                <p>
                    Even with virtual currency, it's important to maintain healthy gaming habits. Be aware of these warning signs:
                </p>
                
                <ul>
                    <li><strong>Time Management Issues:</strong> Spending excessive time on gaming, neglecting work, studies, or personal responsibilities</li>
                    <li><strong>Social Isolation:</strong> Withdrawing from family, friends, or social activities to game</li>
                    <li><strong>Emotional Dependence:</strong> Using gaming as the primary way to cope with stress or negative emotions</li>
                    <li><strong>Loss of Interest:</strong> Losing interest in other hobbies or activities you once enjoyed</li>
                    <li><strong>Sleep Disruption:</strong> Gaming late into the night, affecting sleep patterns and daily routine</li>
                    <li><strong>Deceptive Behavior:</strong> Hiding or lying about the amount of time spent gaming</li>
                    <li><strong>Compulsive Behavior:</strong> Feeling unable to stop or reduce gaming despite wanting to</li>
                </ul>
                
                <p>
                    If you recognize any of these signs in yourself or someone you know, it may be time to seek support and make changes to gaming habits.
                </p>
            </div>
        </div>
        
        <!-- Self-Management Tools -->
        <div class="content-section">
            <h2 class="section-title">🔧 Self-Management Tools & Tips</h2>
            <div class="section-content">
                <p><strong>Set Personal Limits:</strong></p>
                <ul>
                    <li>Decide in advance how much time you'll spend gaming each day</li>
                    <li>Use timers or alarms to remind yourself when to take breaks</li>
                    <li>Set specific gaming hours and stick to them</li>
                    <li>Balance gaming with other activities and responsibilities</li>
                </ul>
                
                <p><strong>Take Regular Breaks:</strong></p>
                <ul>
                    <li>Take a 10-15 minute break every hour of gaming</li>
                    <li>Step away from the screen and stretch</li>
                    <li>Hydrate and rest your eyes regularly</li>
                    <li>Engage in physical activity between gaming sessions</li>
                </ul>
                
                <p><strong>Maintain Balance:</strong></p>
                <ul>
                    <li>Prioritize work, studies, and personal relationships</li>
                    <li>Pursue other hobbies and interests</li>
                    <li>Maintain a healthy sleep schedule</li>
                    <li>Stay socially connected with family and friends</li>
                </ul>
                
                <p><strong>Use the Reset Feature:</strong></p>
                <p>
                    Our platform includes a reset button that allows you to restart your virtual balance at any time. Use this feature if you feel you're spending too much time chasing losses or trying to increase your virtual balance.
                </p>
            </div>
        </div>
        
        <!-- Age Restriction & Parental Control -->
        <div class="content-section">
            <h2 class="section-title">👨‍👩‍👧‍👦 Age Restriction & Parental Guidance</h2>
            <div class="section-content">
                <p><strong>18+ Age Requirement:</strong></p>
                <p>
                    VENTURES Casino is strictly for users aged 18 years and above. We take age verification seriously and employ measures to prevent minors from accessing the platform.
                </p>
                
                <p><strong>For Parents and Guardians:</strong></p>
                <ul>
                    <li>Monitor your children's online activities and gaming habits</li>
                    <li>Use parental control software to restrict access to gaming sites</li>
                    <li>Educate children about responsible gaming and online safety</li>
                    <li>Set clear rules and boundaries for screen time and gaming</li>
                    <li>Encourage open communication about online activities</li>
                    <li>Be a positive role model for healthy technology use</li>
                </ul>
                
                <p><strong>Reporting Underage Access:</strong></p>
                <p>
                    If you become aware of a minor accessing our platform, please report it immediately to <?php echo COMPANY_EMAIL; ?>. We will take swift action to investigate and prevent further access.
                </p>
            </div>
        </div>
        
        <!-- Getting Help -->
        <div class="content-section">
            <h2 class="section-title">🆘 Getting Help & Support</h2>
            <div class="section-content">
                <p>
                    If you or someone you know is struggling with gaming-related issues, help is available. While VENTURES Casino uses only virtual currency, we recognize that gaming habits can still impact well-being.
                </p>
                
                <p><strong>Self-Exclusion:</strong></p>
                <p>
                    If you feel you need a break from gaming, we recommend:
                </p>
                <ul>
                    <li>Closing your browser and avoiding the platform for a set period</li>
                    <li>Using browser extensions to block gaming websites</li>
                    <li>Seeking support from family, friends, or professionals</li>
                    <li>Contacting us at <?php echo COMPANY_EMAIL; ?> for guidance</li>
                </ul>
                
                <p><strong>Professional Support Resources:</strong></p>
                <ul>
                    <li><strong>National Problem Gambling Helpline (India):</strong> Available through various mental health organizations</li>
                    <li><strong>Mental Health Professionals:</strong> Consult a therapist or counselor specializing in behavioral issues</li>
                    <li><strong>Support Groups:</strong> Join online or in-person support groups for gaming-related concerns</li>
                    <li><strong>Family Support:</strong> Involve trusted family members or friends in your recovery journey</li>
                </ul>
                
                <p>
                    <strong>Contact Us:</strong> For any concerns or questions about responsible gaming, email us at <?php echo COMPANY_EMAIL; ?>
                </p>
            </div>
        </div>
        
        <!-- Our Policies -->
        <div class="content-section">
            <h2 class="section-title">📋 Our Responsible Gaming Policies</h2>
            <div class="section-content">
                <p><strong>Transparency:</strong></p>
                <p>
                    We are transparent about the nature of our platform. All games use certified random number generators, and we clearly state that virtual currency has no real-world value.
                </p>
                
                <p><strong>No Real Money Gambling:</strong></p>
                <p>
                    VENTURES Casino is a 100% free-to-play platform. There are no deposits, withdrawals, or real money transactions. This eliminates financial risk while maintaining entertainment value.
                </p>
                
                <p><strong>Fair Gaming:</strong></p>
                <p>
                    All games are designed with fair algorithms and certified random number generators. We do not manipulate outcomes or encourage excessive play.
                </p>
                
                <p><strong>User Education:</strong></p>
                <p>
                    We provide comprehensive information about responsible gaming, healthy habits, and support resources throughout the platform.
                </p>
                
                <p><strong>Continuous Improvement:</strong></p>
                <p>
                    We regularly review and update our responsible gaming policies to incorporate best practices and user feedback.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Help Resources -->
    <div class="help-resources">
        <div class="help-card">
            <div class="help-icon">⏰</div>
            <div class="help-title">Set Time Limits</div>
            <div class="help-desc">Decide in advance how long you'll play and stick to it</div>
        </div>
        
        <div class="help-card">
            <div class="help-icon">🔄</div>
            <div class="help-title">Take Breaks</div>
            <div class="help-desc">Step away regularly to rest and recharge</div>
        </div>
        
        <div class="help-card">
            <div class="help-icon">⚖️</div>
            <div class="help-title">Maintain Balance</div>
            <div class="help-desc">Keep gaming as one of many enjoyable activities</div>
        </div>
        
        <div class="help-card">
            <div class="help-icon">💬</div>
            <div class="help-title">Seek Support</div>
            <div class="help-desc">Talk to someone if gaming becomes problematic</div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
