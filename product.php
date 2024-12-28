<?php
$products = [
    1 => ['name' => 'Galvanized Perforated Metal Sheets', 'description' => 'Size: 5.0mm hole diameter. Used for industrial and decorative purposes.', 'price' => 4500, 'category' => 'metal', 'images' => ['assets/images/GPMS1.jpg', 'assets/images/GPMS2.jpg', 'assets/images/GPMS3.jpg']],
    2 => ['name' => 'MIG Wire', 'description' => 'Size: 1.0mm. Ideal for precision welding.', 'price' => 4500, 'category' => 'mig-wire', 'images' => ['assets/images/migwire1.jpg', 'assets/images/migwire2.jpg', 'assets/images/migwire3.jpg']],
    3 => ['name' => 'Welding Rods', 'description' => 'Size: 3.2mm. Compatible with all major welding equipment.', 'price' => 4500, 'category' => 'welding-rods', 'images' => ['assets/images/electrodes1.jpg', 'assets/images/electrodes2.jpg', 'assets/images/electrodes3.jpg']],
    4 => ['name' => 'MIG Wire', 'description' => 'Size: 1.2mm. Ideal for precision welding.', 'price' => 4500, 'category' => 'mig-wire', 'images' => ['assets/images/migwire1.jpg', 'assets/images/migwire2.jpg', 'assets/images/migwire3.jpg']],
    5 => ['name' => 'Welding Rods', 'description' => 'Size: 2.5mm. Compatible with all major welding equipment.', 'price' => 4500, 'category' => 'welding-rods', 'images' => ['assets/images/electrodes1.jpg', 'assets/images/electrodes2.jpg', 'assets/images/electrodes3.jpg']],
    6 => ['name' => 'MIG Wire', 'description' => 'Size: 0.8mm. Ideal for precision welding.', 'price' => 4500, 'category' => 'mig-wire', 'images' => ['assets/images/migwire1.jpg', 'assets/images/migwire2.jpg', 'assets/images/migwire3.jpg']],
    7 => ['name' => 'Galvanized Perforated Metal Sheets', 'description' => 'Size: 2.0mm hole diameter. Used for industrial and decorative purposes.', 'price' => 4500, 'category' => 'metal', 'images' => ['assets/images/GPMS1.jpg', 'assets/images/GPMS2.jpg', 'assets/images/GPMS3.jpg']],
];

$productID = $_GET['id'] ?? 1;
$product = $products[$productID];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/head.php'; ?>
    <title><?= $product['name'] ?> | Weldmart</title>
    <link rel="stylesheet" href="assets/css/product.css">
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <div class="product_details_page">
        <div class="product_details_image">
            <div class="carousel">
                <button class="carousel_control prev">&lt;</button>
                <div class="active_image">
                    <img src="<?= $product['images'][0] ?>" alt="<?= $product['name'] ?>" id="mainImage">
                </div>
                <button class="carousel_control next">&gt;</button>
            </div>
            <div class="carousel_thumbnails">
                <?php foreach ($product['images'] as $index => $image): ?>
                    <img class="thumbnail <?= $index === 0 ? 'active' : '' ?>" src="<?= $image ?>" data-index="<?= $index ?>" alt="Thumbnail <?= $index + 1 ?>">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="product_details_info">
            <div class="details_top">
                <h1><?= $product['name'] ?></h1>
                <p class="product_description">Category: <?= ucfirst($product['category']) ?></p>
                <ul class="product_features">
                    <?php if ($product['category'] == 'welding-rods'): ?>
                        <li>Type: AWS E6013</li>
                        <li>Sizes: 3.2mm and 2.5mm</li>
                        <li>Packaging: 5kg per box, 4 boxes per package</li>
                        <li>Applications: General-purpose welding with excellent arc stability, easy slag removal, and smooth weld finish</li>
                    <?php elseif ($product['category'] == 'mig-wire'): ?>
                        <li>Type: AWS ER70S-6</li>
                        <li>Sizes: 1.0mm, 1.2mm, and 0.8mm</li>
                        <li>Packaging: 15kg spools</li>
                        <li>Applications: High-performance welding for structural steel, automotive parts, and industrial applications</li>
                    <?php elseif ($product['category'] == 'metal'): ?>
                        <li>Sizes: 5.0mm and 2.0mm hole diameters</li>
                        <li>Material: Durable, corrosion-resistant galvanized steel</li>
                        <li>Applications: Ventilation, decorative panels, filtration systems, and industrial use</li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="details_bottom">
                <p class="product_price">Price: <strong>Ksh <?= $product['price'] ?></strong></p>
                <button id="add-to-cart" class="add_to_cart_button" data-id="<?= $productID ?>">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="related_products">
        <h2 class="products_heading">You Might Like</h2>
        <div class="products_grid">
            <?php foreach (array_slice($products, 0, 3, true) as $id => $related): ?>
                <div class="product_card">
                    <div class="product_image">
                        <a href="product.php?id=<?= $id ?>" class="product_view_btn">
                            <img src="<?= $related['images'][0] ?>" alt="<?= $related['name'] ?>">
                        </a>
                    </div>
                    <div class="product_details">
                        <a href="product.php?id=<?= $id ?>" class="product_view_btn">
                            <h3 class="product_name"><?= $related['name'] ?></h3>
                        </a>
                        <p class="product_description"><?= $related['description'] ?></p>
                        <span>Ksh <?= $related['price'] ?></span>
                    </div>
                    <button class="add_to_cart_button" data-id="<?= $id ?>">Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>
    <script src="assets/js/carousel.js"></script>
</body>

</html>