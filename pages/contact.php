<?php
require_once '../includes/config.php';
$page_title = "Contact Us";
include '../includes/header.php';
?>

<style>
    .contact-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 20px;
    }
    
    .contact-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .contact-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #ffd700;
        margin-bottom: 20px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
    }
    
    .contact-subtitle {
        color: #b0b0b0;
        font-size: 1.1rem;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .contact-info {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 15px;
        padding: 40px;
    }
    
    .info-title {
        font-size: 1.8rem;
        color: #ffd700;
        margin-bottom: 30px;
        font-weight: 700;
    }
    
    .info-item {
        margin-bottom: 30px;
    }
    
    .info-label {
        color: #00d9ff;
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 1.1rem;
    }
    
    .info-value {
        color: #b0b0b0;
        font-size: 1rem;
        line-height: 1.6;
    }
    
    .info-value a {
        color: #ffd700;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .info-value a:hover {
        color: #00d9ff;
    }
    
    .contact-form {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 15px;
        padding: 40px;
    }
    
    .form-title {
        font-size: 1.8rem;
        color: #ffd700;
        margin-bottom: 30px;
        font-weight: 700;
    }
    
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-label {
        display: block;
        color: #00d9ff;
        font-weight: 600;
        margin-bottom: 10px;
    }
    
    .form-input,
    .form-textarea {
        width: 100%;
        padding: 12px;
        background: rgba(0, 217, 255, 0.1);
        border: 2px solid rgba(0, 217, 255, 0.3);
        border-radius: 8px;
        color: #00d9ff;
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .form-input:focus,
    .form-textarea:focus {
        outline: none;
        border-color: #ffd700;
        box-shadow: 0 0 15px rgba(0, 217, 255, 0.3);
    }
    
    .form-textarea {
        resize: vertical;
        min-height: 120px;
    }
    
    .submit-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #ffd700, #ffed4e);
        color: #000;
        border: none;
        border-radius: 8px;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.4);
    }
    
    .faq-section {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 215, 0, 0.2);
        border-radius: 15px;
        padding: 40px;
        margin-top: 40px;
    }
    
    .faq-title {
        font-size: 1.8rem;
        color: #ffd700;
        margin-bottom: 30px;
        font-weight: 700;
    }
    
    .faq-item {
        margin-bottom: 25px;
        padding-bottom: 25px;
        border-bottom: 1px solid rgba(255, 215, 0, 0.2);
    }
    
    .faq-item:last-child {
        border-bottom: none;
    }
    
    .faq-question {
        color: #00d9ff;
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 1.05rem;
    }
    
    .faq-answer {
        color: #b0b0b0;
        line-height: 1.6;
    }
    
    @media (max-width: 968px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }
        
        .contact-title {
            font-size: 1.8rem;
        }
    }
</style>

<div class="contact-container">
    <div class="contact-header">
        <h1 class="contact-title">Contact Us</h1>
        <p class="contact-subtitle">We're here to help! Reach out with any questions or feedback</p>
    </div>
    
    <div class="contact-grid">
        <!-- Contact Information -->
        <div class="contact-info">
            <h2 class="info-title">Get in Touch</h2>
            
            <div class="info-item">
                <div class="info-label">📧 Email</div>
                <div class="info-value">
                    <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-label">🏢 Company</div>
                <div class="info-value">
                    <?php echo COMPANY_NAME; ?><br>
                    CIN: <?php echo COMPANY_CIN; ?><br>
                    GST: <?php echo COMPANY_GST; ?>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-label">📍 Address</div>
                <div class="info-value">
                    <?php echo COMPANY_ADDRESS; ?>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-label">⏰ Availability</div>
                <div class="info-value">
                    Available 24/7<br>
                    Response time: 24-48 hours
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="contact-form">
            <h2 class="form-title">Send us a Message</h2>
            
            <form onsubmit="handleContactForm(event)">
                <div class="form-group">
                    <label class="form-label">Name *</label>
                    <input type="text" class="form-input" name="name" required placeholder="Your name">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-input" name="email" required placeholder="Your email">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Subject *</label>
                    <input type="text" class="form-input" name="subject" required placeholder="Message subject">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Message *</label>
                    <textarea class="form-textarea" name="message" required placeholder="Your message..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
    
    <!-- FAQ Section -->
    <div class="faq-section">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        
        <div class="faq-item">
            <div class="faq-question">❓ Is VENTURES really free to play?</div>
            <div class="faq-answer">
                Yes! VENTURES is 100% free-to-play. There are no deposits, no withdrawals, and no real money involved. 
                You get ₹10,000 in virtual currency to play with, and you can reset it anytime.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">❓ Do I need to create an account?</div>
            <div class="faq-answer">
                No! You don't need to create an account or login. Just visit the website and start playing immediately. 
                Your session is managed automatically.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">❓ Can I withdraw my virtual winnings?</div>
            <div class="faq-answer">
                No, virtual currency cannot be withdrawn or exchanged for real money. This is a free-to-play entertainment 
                platform only. All currency has zero real-world value.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">❓ What is the minimum and maximum bet?</div>
            <div class="faq-answer">
                Minimum bet is ₹200 and maximum bet is ₹5,500. You can also use the "ALL IN" button to bet your entire 
                current balance (capped at the maximum).
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">❓ Are the games fair?</div>
            <div class="faq-answer">
                Yes! All our games use certified random number generators and transparent algorithms. Every game is designed 
                to be fair and unbiased. Check our Fair Play Policy for more details.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">❓ What happens when my balance reaches ₹0?</div>
            <div class="faq-answer">
                When your balance reaches ₹0, a popup will appear asking if you want to reset your balance back to ₹10,000. 
                You can reset as many times as you want!
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">❓ Is there an age restriction?</div>
            <div class="faq-answer">
                Yes, VENTURES is strictly for players 18 years and above. This is an entertainment platform, not gambling, 
                but we maintain age restrictions for responsible gaming.
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">❓ Do you collect personal data?</div>
            <div class="faq-answer">
                No! We don't collect any personal data. Your session is managed entirely through PHP sessions without storing 
                cookies or personal information. Your privacy is our priority.
            </div>
        </div>
    </div>
</div>

<script>
function handleContactForm(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    const data = Object.fromEntries(formData);
    
    // In a real application, this would send to a backend
    console.log('Contact form submitted:', data);
    
    showNotification('Thank you for your message! We will get back to you soon.', 'success');
    event.target.reset();
}
</script>

<?php include '../includes/footer.php'; ?>
