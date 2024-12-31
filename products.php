<?php
$products = [
    ['id' => 1, 'name' => 'Galvanized Perforated Metal Sheets', 'description' => 'Size: 5.0mm hole diameter', 'price' => 4500, 'image' => 'assets/images/GPMS1.jpg'],
    ['id' => 2, 'name' => 'MIG Wire', 'description' => 'Size: 1.0mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
    ['id' => 3, 'name' => 'Welding Rods', 'description' => 'Size: 3.2mm', 'price' => 4500, 'image' => 'assets/images/electrodes2.jpg'],
    ['id' => 4, 'name' => 'MIG Wire', 'description' => 'Size: 1.2mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
    ['id' => 5, 'name' => 'Welding Rods', 'description' => 'Size: 2.5mm', 'price' => 4500, 'image' => 'assets/images/electrodes2.jpg'],
    ['id' => 6, 'name' => 'MIG Wire', 'description' => 'Size: 0.8mm', 'price' => 4500, 'image' => 'assets/images/migwire2.jpg'],
    ['id' => 7, 'name' => 'Galvanized Perforated Metal Sheets', 'description' => 'Size: 2.0mm hole diameter', 'price' => 4500, 'image' => 'assets/images/GPMS1.jpg'],
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
        <div class="products_container_top">
            <div class="divider"></div>
            <h2 class="products_heading">All Products</h2>
            <div class="divider"></div>
        </div>
        <div class="products_grid">
            <?php foreach ($products as $product): ?>
                <div class="product_card">
                    <div class="product_image">
                        <a href="product.php?id=<?= $product['id'] ?>" class="product_view_btn">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                        </a>
                    </div>
                    <div class="product_details">
                        <div class="product_details_top">
                            <a href="product.php?id=<?= $product['id'] ?>" class="product_view_btn">
                                <h3 class="product_name"><?= $product['name'] ?></h3>
                            </a>
                            <p class="product_description"><?= $product['description'] ?></p>
                        </div>
                        
                        <div class="product_details_bottom">
                            <span>Ksh <?= $product['price'] ?></span>
                            <button id="add-to-cart" class="add_to_cart_button" data-id="<?= $product['id'] ?>">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php include 'partials/footer.php'; ?>
</body>

</html>