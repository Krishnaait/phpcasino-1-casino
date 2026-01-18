# 🎰 VENTURES Casino - Free-to-Play Gaming Platform

A modern, responsive free-to-play social casino gaming platform built with HTML5, CSS3, PHP, and JavaScript. Play 6 unique casino games with virtual currency and enjoy pure entertainment!

## 🎮 Features

### Games Included
1. **🎲 Dice Game** - Predict HIGH/LOW with instant results (2x multiplier)
2. **💣 Mines** - Strategic grid-based game with progressive multipliers
3. **🎰 Slot Machine** - Classic 3-reel slots with 6 unique symbols (up to 10x)
4. **🎡 Roulette** - European wheel with multiple betting options (2x multiplier)
5. **🎯 Plinko** - Physics-based ball drop game (up to 5x multiplier)
6. **🐔 Chicken Adventure** - Platformer game with cashout mechanics

### Platform Features
- ✅ **100% Free-to-Play** - No deposits, no withdrawals, no real money
- ✅ **No Login Required** - Start playing instantly with ₹10,000 virtual balance
- ✅ **Responsive Design** - Works on desktop, tablet, and mobile devices
- ✅ **Fair Gaming** - Transparent algorithms and certified randomness
- ✅ **Privacy Protected** - No personal data collection
- ✅ **Session-Based** - Automatic data deletion after session expires
- ✅ **Unique UI/UX** - Each game has its own distinct visual design

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 8.1+
- **Session Management**: PHP Sessions (no cookies)
- **Styling**: Custom CSS with Glassmorphism & Gradient Effects
- **Fonts**: Google Fonts (Poppins, Playfair Display)
- **Icons**: Font Awesome 6.4

## 📋 Project Structure

```
phpcasino-1-casino/
├── index.php                 # Homepage
├── includes/
│   ├── config.php           # Configuration & helper functions
│   ├── header.php           # Header template
│   └── footer.php           # Footer template
├── games/
│   ├── dice.php             # Dice game
│   ├── mines.php            # Mines game
│   ├── slots.php            # Slot machine
│   ├── roulette.php         # Roulette game
│   ├── plinko.php           # Plinko game
│   └── chicken.php          # Chicken adventure
├── pages/
│   ├── games.php            # All games listing
│   ├── about.php            # About us
│   ├── contact.php          # Contact page
│   ├── privacy.php          # Privacy policy
│   ├── terms.php            # Terms & conditions
│   └── disclaimer.php       # Disclaimer
├── api/
│   ├── get-balance.php      # Get user balance
│   ├── update-balance.php   # Update balance
│   └── reset-balance.php    # Reset balance
├── assets/
│   ├── css/
│   │   └── global.css       # Global styles
│   └── js/
│       ├── main.js          # Main JavaScript
│       └── balance-checker.js # Balance management
├── .gitignore               # Git ignore file
└── README.md                # This file
```

## 🚀 Getting Started

### Prerequisites
- PHP 8.1 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Modern web browser (Chrome, Firefox, Safari, Edge)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Krishnaait/phpcasino-1-casino.git
   cd phpcasino-1-casino
   ```

2. **Using PHP Built-in Server (Development)**
   ```bash
   php -S localhost:8000
   ```
   Then open `http://localhost:8000` in your browser

3. **Using Apache/Nginx**
   - Copy the project to your web root directory
   - Configure your web server to point to the project directory
   - Access via your configured domain/IP

## 💰 Game Rules & Betting

### Betting Limits
- **Minimum Bet**: ₹200
- **Maximum Bet**: ₹5,500
- **Starting Balance**: ₹10,000 (virtual)
- **ALL IN Button**: Bets entire balance (capped at maximum)

### Balance Management
- Balance resets to ₹10,000 when it reaches ₹0
- All currency is virtual and has zero real-world value
- Session data is automatically deleted after 24 hours

## 🎯 Game Details

### Dice Game
- Predict if the next roll will be HIGH (8-12) or LOW (2-7)
- Win 2x your bet on correct prediction
- Instant results with smooth animations

### Mines Game
- 5x5 grid with hidden mines
- Reveal safe tiles to increase multiplier
- Cashout anytime to secure winnings
- Progressive multiplier system

### Slot Machine
- Classic 3-reel spinning slots
- 6 unique symbols: 🍒 🍋 🍊 🍌 🔔 7️⃣
- Match 3 symbols for wins up to 10x
- Smooth reel animations

### Roulette
- European wheel with 37 numbers
- Multiple betting options: RED, BLACK, EVEN, ODD, HIGH, LOW
- 2x multiplier on correct bets
- Realistic wheel spinning animation

### Plinko
- Drop balls through pegs
- Physics-based gameplay
- Multiple balls can be dropped
- Multiplier slots at the bottom (1x to 5x)

### Chicken Adventure
- Platformer game with obstacles
- Collect coins for multiplier bonus
- Progressive multiplier system
- Cashout before hitting obstacles

## 🔒 Security & Privacy

- **No Personal Data**: We don't collect names, emails, or phone numbers
- **No Cookies**: Session-based gameplay without persistent tracking
- **SSL/TLS Ready**: Can be deployed with HTTPS
- **Session Security**: Automatic session expiration and cleanup
- **Fair Play**: Transparent algorithms and certified randomness

## 📱 Responsive Design

The platform is fully responsive and works on:
- 📱 Mobile phones (320px and up)
- 📱 Tablets (768px and up)
- 💻 Desktop (1024px and up)
- 🖥️ Large screens (1440px and up)

## 📄 Legal Pages

- **Privacy Policy** - Comprehensive data protection information
- **Terms & Conditions** - User agreement and platform rules
- **Disclaimer** - Important legal disclaimers and age restrictions
- **About Us** - Company information and mission
- **Contact** - Support and contact information

## 🎨 Design Highlights

### Color Schemes
- **Dice**: Neon purple and cyan
- **Mines**: Vibrant grid-based design
- **Slots**: Golden casino aesthetic
- **Roulette**: Blue and cyan elegance
- **Plinko**: Purple physics-based design
- **Chicken**: Orange adventure theme

### UI Features
- Glassmorphism effects
- Gradient backgrounds
- Smooth animations and transitions
- Responsive grid layouts
- Modern typography
- Interactive hover states

## 🔧 Configuration

Edit `includes/config.php` to customize:
- Company name and details
- Starting balance amount
- Minimum/maximum bet limits
- Session timeout duration
- Email and contact information

```php
define('COMPANY_NAME', 'VENTURES PRIVATE LIMITED');
define('INITIAL_BALANCE', 10000);
define('MIN_BET', 200);
define('MAX_BET', 5500);
```

## 📊 API Endpoints

### Get Balance
```php
GET /api/get-balance.php
```

### Update Balance
```php
POST /api/update-balance.php
Parameters: amount (positive or negative)
```

### Reset Balance
```php
POST /api/reset-balance.php
```

## 🐛 Troubleshooting

### PHP Server Not Starting
```bash
# Check PHP version
php --version

# Try different port
php -S localhost:8001
```

### Session Issues
- Clear browser cache
- Close and reopen browser
- Check PHP session directory permissions

### Game Not Loading
- Check browser console for errors (F12)
- Verify all files are in correct directories
- Ensure PHP is serving the files correctly

## 📈 Performance

- Lightweight CSS (no frameworks)
- Minimal JavaScript dependencies
- Optimized game rendering
- Fast session management
- Responsive image loading

## 🌐 Deployment

### Production Deployment
1. Use HTTPS for secure connections
2. Set up proper error logging
3. Configure PHP security settings
4. Use environment variables for sensitive data
5. Set up regular backups
6. Monitor server performance

### Docker Deployment
```dockerfile
FROM php:8.1-apache
COPY . /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]
```

## 📝 License

This project is provided as-is for entertainment purposes. All rights reserved by VENTURES PRIVATE LIMITED.

## 🤝 Contributing

Contributions are welcome! Please feel free to submit pull requests or open issues for bugs and feature requests.

## 📞 Support

For support and inquiries:
- **Email**: support@ventures.com
- **Address**: C/O PARDEEP SAGGAR, 20-P DSC, SEC-23A, Shivaji Nagar (Gurgaon), Shivaji Nagar, Gurgaon- 122001, Haryana
- **CIN**: U56102HR203e323TC123713

## ⚠️ Disclaimer

VENTURES is a 100% free-to-play entertainment platform. This is NOT gambling. All currency is virtual and has zero real-world value. Must be 18+ to play.

---

**Last Updated**: January 18, 2026

**Version**: 1.0.0

**Status**: ✅ Production Ready
