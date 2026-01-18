<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once dirname(__FILE__) . '/config.php';

$page_title = isset($page_title) ? $page_title : 'Casino';
$balance = getUserBalance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VENTURES - Free-to-Play Social Casino Gaming Platform">
    <meta name="keywords" content="casino, games, dice, mines, slots, roulette, free-to-play">
    <meta name="author" content="VENTURES PRIVATE LIMITED">
    <title><?php echo htmlspecialchars($page_title); ?> - VENTURES Casino</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/global.css">
    
    <style>
        body {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="header-container">
            <a href="<?php echo SITE_URL; ?>index.php" class="logo">
                <i class="fas fa-dice"></i> VENTURES
            </a>
            
            <nav>
                <ul class="nav-menu">
                    <li><a href="<?php echo SITE_URL; ?>index.php" class="nav-link">Home</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/games.php" class="nav-link">Games</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/about.php" class="nav-link">About</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/contact.php" class="nav-link">Contact</a></li>
                    <li><a href="<?php echo SITE_URL; ?>pages/legal.php" class="nav-link">Legal</a></li>
                </ul>
            </nav>
            
            <div class="header-actions">
                <div class="balance-display" id="balance-display">
                    <?php echo formatCurrency($balance); ?>
                </div>
                <button class="reset-btn" onclick="resetBalance()" title="Reset Balance">
                    <i class="fas fa-redo"></i> Reset
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
