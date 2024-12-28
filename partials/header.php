<?php
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<header class="desktop-header">
    <div class="header_logo">
        <img src="assets/images/weldmartlogo1.png" alt="Weldmart Logo">
    </div>
    <ul class="nav_links">
        <li>
            <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a>
        </li>
        <li>
            <a href="products.php" class="<?= $currentPage == 'products.php' ? 'active' : '' ?>">Products</a>
        </li>
        <li>
            <a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About Us</a>
        </li>
        <li>
            <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a>
        </li>
    </ul>
    <div class="header_icons">
        <div class="cart">
            <div class="cart_icon">
                <a href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
            </div>
            <div id="cart-counter">0</div>
        </div>
        <div>
            <div class="whatsapp_icon">
                <a href="http://wa.me/+254711288688" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-square-whatsapp fa-xl"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Header -->
<header class="mobile-header">
    <div class="header_logo">
        <img src="assets/images/weldmartlogo1.png" alt="Weldmart Logo">
    </div>
    <div class="header_icons">
        <div class="cart">
            <div class="cart_icon">
                <a href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
            </div>
            <div id="cart-counter">0</div>
        </div>
        <div class="whatsapp_icon">
            <a href="http://wa.me/+254711288688" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-square-whatsapp fa-xl"></i>
            </a>
        </div>
        <button class="hamburger" id="hamburger">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>

<!-- Hidden Nav Menu for Mobile -->
<div class="mobile-nav" id="mobile-nav">
    <ul class="nav_links">
        <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="products.php" class="<?= $currentPage == 'products.php' ? 'active' : '' ?>">Products</a></li>
        <li><a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About Us</a></li>
        <li><a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
    </ul>
</div>

<div id="toast-container"></div>