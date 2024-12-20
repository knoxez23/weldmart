<?php
$products = [
    ['id' => 1, 'name' => 'Galvanized Perforated Metal Sheets', 'description' => 'Size: 5.0mm hole diameter', 'price' => 4500, 'image' => 'assets/images/GPMS1.jpg'],
    ['id' => 2, 'name' => 'MIG Wire', 'description' => 'Size: 1.0mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
    ['id' => 3, 'name' => 'Welding Rods', 'description' => 'Size: 3.2mm', 'price' => 4500, 'image' => 'assets/images/electrodes2.jpg'],
    ['id' => 4, 'name' => 'MIG Wire', 'description' => 'Size: 1.2mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
    ['id' => 5, 'name' => 'Welding Rods', 'description' => 'Size: 2.5mm', 'price' => 4500, 'image' => 'assets/images/electrodes2.jpg'],
    ['id' => 6, 'name' => 'MIG Wire', 'description' => 'Size: 0.8mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/head.php' ?>
    <title>Weldmart | Products</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <section class="products_container">
        <h2 class="products_heading">All Products</h2>
        <div class="products_grid">
            <?php foreach ($products as $product): ?>
            <div class="product_card">
                <div class="product_image">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                </div>
                <div class="product_details">
                    <h3 class="product_name"><?= $product['name'] ?></h3>
                    <p class="product_description"><?= $product['description'] ?></p>
                    <span>Ksh <?= $product['price'] ?></span>
                </div>
                <a href="product.php?id=<?= $product['id'] ?>" class="product_view_btn">View Details</a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php include 'partials/footer.php'; ?>
</body>migwire2

</html>