<?php
$products = [
    1 => ['name' => 'Galvanized Perforated Metal Sheets', 'description' => 'Size: 5.0mm hole diameter', 'price' => 4500, 'image' => 'assets/images/GPMS1.jpg'],
    2 => ['name' => 'MIG Wire', 'description' => 'Size: 1.0mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
    3 => ['name' => 'Welding Rods', 'description' => 'Size: 3.2mm', 'price' => 4500, 'image' => 'assets/images/electrodes2.jpg'],
    4 => ['name' => 'MIG Wire', 'description' => 'Size: 1.2mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
    5 => ['name' => 'Welding Rods', 'description' => 'Size: 2.5mm', 'price' => 4500, 'image' => 'assets/images/electrodes2.jpg'],
    6 => ['name' => 'MIG Wire', 'description' => 'Size: 0.8mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
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
            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        </div>
        <div class="product_details_info">
            <h1><?= $product['name'] ?></h1>
            <p class="product_description"><?= $product['description'] ?></p>
            <p class="product_price">Price: <strong>Ksh <?= $product['price'] ?></strong></p>
            <button id="add-to-cart" class="add_to_cart_button" data-id="<?= $productID ?>">Add to Cart</button>
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>

</html>
