<?php
$products = [
    1 => ['name' => 'Galvanized Perforated Metal Sheets', 'description' => 'Size: 5.0mm hole diameter. Used for industrial and decorative purposes.', 'price' => 4500, 'category' => 'metal', 'images' => ['assets/images/GPMS1.jpg', 'assets/images/GPMS2.jpg', 'assets/images/GPMS3.jpg']],
    2 => ['name' => 'MIG Wire', 'description' => 'Size: 1.0mm. Ideal for precision welding.', 'price' => 4500, 'category' => 'mig-wire', 'images' => ['assets/images/migwire1.jpg', 'assets/images/migwire2.jpg', 'assets/images/migwire3.jpg']],
    3 => ['name' => 'Welding Rods', 'description' => 'Size: 3.2mm. Compatible with all major welding equipment.', 'price' => 4500, 'category' => 'welding-rods', 'images' => ['assets/images/electrodes1.jpg', 'assets/images/electrodes2.jpg', 'assets/images/electrodes3.jpg']],
    4 => ['name' => 'MIG Wire', 'description' => 'Size: 1.2mm. Provides excellent welding quality.', 'price' => 4500, 'category' => 'mig-wire', 'images' => ['assets/images/migwire1.jpg', 'assets/images/migwire2.jpg', 'assets/images/migwire3.jpg']],
    5 => ['name' => 'Welding Rods', 'description' => 'Size: 2.5mm. Durable and high-quality welding solution.', 'price' => 4500, 'category' => 'welding-rods', 'images' => ['assets/images/electrodes1.jpg', 'assets/images/electrodes2.jpg', 'assets/images/electrodes3.jpg']],
    6 => ['name' => 'MIG Wire', 'description' => 'Size: 0.8mm. Ensures precision in fine welding tasks.', 'price' => 4500, 'category' => 'mig-wire', 'images' => ['assets/images/migwire1.jpg', 'assets/images/migwire2.jpg', 'assets/images/migwire3.jpg']],
];

$productID = $_GET['id'] ?? 1;
$product = $products[$productID];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/head.php'; ?>
    <title><?= $product['name'] ?> | Weldmart</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <div class="product_details_page">
        <div class="product_details_image">
            <div class="carousel">
                <?php foreach ($product['images'] as $image): ?>
                    <div class="carousel_image">
                        <img src="<?= $image ?>" alt="<?= $product['name'] ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="product_details_info">
            <h1><?= $product['name'] ?></h1>
            <p class="product_description"><?= $product['description'] ?></p>
            <ul class="product_features">
                <li>Durable and high-quality material</li>
                <li>Compatible with industrial and DIY use</li>
                <li>Delivered in secure packaging</li>
            </ul>
            <p class="product_price">Price: <strong>Ksh <?= $product['price'] ?></strong></p>
            <button id="add-to-cart" class="add_to_cart_button" data-id="<?= $productID ?>">Add to Cart</button>
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
    <script src="assets/js/carousel.js"></script>
</body>

</html>
