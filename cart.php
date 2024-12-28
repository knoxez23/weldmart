<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/head.php'; ?>
    <title>Cart | Weldmart</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <section class="cart_page">
        <h2>Your Cart</h2>
        <div id="cart-items" class="cart_items"></div>
        <div class="cart_checkout">
            <a id="checkout-link" target="_blank">
                <button class="checkout_button">Checkout with WhatsApp</button>
            </a>
            
            <!-- Clear Cart Button -->
            <button id="clear-cart" class="clear_cart_button"><i class="fa-solid fa-trash" style="color: #ffffff;"></i> Clear Cart</button>
        </div>

    </section>
    <?php include 'partials/footer.php'; ?>
</body>

</html>