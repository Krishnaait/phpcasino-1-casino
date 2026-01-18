    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <!-- Company Info -->
            <div class="footer-section">
                <h3><i class="fas fa-building"></i> Company</h3>
                <p>
                    <strong><?php echo COMPANY_NAME; ?></strong><br>
                    CIN: <?php echo COMPANY_CIN; ?><br>
                    GST: <?php echo COMPANY_GST; ?><br>
                    PAN: <?php echo COMPANY_PAN; ?>
                </p>
                <p style="margin-top: 10px; font-size: 0.9rem;">
                    <?php echo COMPANY_ADDRESS; ?>
                </p>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-section">
                <h3><i class="fas fa-link"></i> Quick Links</h3>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>index.php">Home</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/games.php">Play Games</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/about.php">About Us</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/contact.php">Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Legal -->
            <div class="footer-section">
                <h3><i class="fas fa-gavel"></i> Legal</h3>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>pages/privacy.php">Privacy Policy</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/terms.php">Terms & Conditions</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/disclaimer.php">Disclaimer</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/fair-play.php">Fair Play Policy</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/responsible-gaming.php">Responsible Gaming</a></li>
                </ul>
            </div>
            
            <!-- Contact -->
            <div class="footer-section">
                <h3><i class="fas fa-envelope"></i> Contact</h3>
                <p>
                    Email: <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a><br>
                    <br>
                    <strong>Business Hours:</strong><br>
                    Mon - Sun: 24/7 Available
                </p>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="legal-disclaimer">
                <div class="age-badge">18+ ONLY</div>
                <p>
                    <strong>Legal Disclaimer:</strong> VENTURES is a 100% free-to-play social gaming platform for entertainment purposes only. 
                    All currency (₹) is virtual and has zero real-world value. No real money gambling. No prizes. No withdrawals. 
                    Must be 18+ to play. This is not gambling - it's entertainment with virtual currency only.
                </p>
            </div>
            <p style="margin-top: 20px; color: #999;">
                &copy; 2026 <?php echo COMPANY_NAME; ?>. All rights reserved. | Last Updated: January 18, 2026
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo SITE_URL; ?>assets/js/main.js"></script>
    <script src="<?php echo SITE_URL; ?>assets/js/balance-checker.js"></script>
</body>
</html>
