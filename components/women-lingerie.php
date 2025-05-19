<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoveralla</title>
    <link rel="stylesheet" href="assets/css/Home.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@400;700&family=Tienne:wght@400;700;900&family=Tilt+Prism&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <script src="../js/script_featured.js"></script>
    
</head>
<body>

  <?php include __DIR__ . '/../views/header.php'; ?>

    <div class="shop-title">
        <h1>Women’s Lingeries</h1>
    </div>
    <div class="nav-wrapper">
        <div class="filter-container">
            <div class="filter-title">
                <img src="assets/images/header-pics/filter (1).png">
                <p>Filter:</p>
            </div>
            <div class="nav-dropdown-btn">
                <p>Availability</p>
                <img src="assets/images/header-pics/down-arrow (3).png">
            </div>
            <div class="nav-dropdown-btn">
                <p>Price</p>
                <img src="assets/images/header-pics/down-arrow (3).png">
            </div>
        </div>
        <div class="sort-container">
            <div>
                <p>Sort by:</p>
            </div>
            <div class="nav-dropdown-btn">
                <p>Alphabetically</p>
                <img src="assets/images/header-pics/down-arrow (3).png">
            </div>
        </div>
    </div>

<!--  Product Container -->
<div class="container">
        <div class="product-grid" id="product-grid">
            <!-- Product 1 -->
        </div>
</div>
    
<?php include __DIR__ . '/../views/footer.php'; ?>

<script src="assets/js/script.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>