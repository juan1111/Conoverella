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
  <nav>

  <?php include __DIR__ . '/../views/modal/sidebar.php'; ?>

    <div id="cart">
        <div class="cart-container">
            <button onclick="closeSidebar('cart')" class="close-btn">&times;</button>
            <h1>Shopping Cart</h1> 
            <div class="select-container">
                <div class="select-all-wrapper">
                    <input type="checkbox" name="select-all">
                    <label for="select-all">SELECT ALL ITEMS<span class="items-num">()</span></label>
                </div>
                <div class="delete-wrapper">
                    <img src="assets/images/cart-pics/trash.png" alt="trashbin-icon">
                    <button class="delete-btn"><p>DELETE</button>
                </div>
            </div>
            <div class="cart-product">
                <div class="product-selector">
                    <input type="checkbox">
                    <img src="assets/images/slide-pics/menswear 1.png" alt="product-pic">
                </div>
                <div class="cart-product-card">
                    <p class="product-name">Thiago-Warch for Men - Cool Black</p>
                    <p>c2
                    </p>
                    <p class="product-price">$ 5,000</p>
                </div>
                <div class="cart-btn">
                    <div class="product-manage">
                        <button><img src="assets/images/cart-pics/like.png" alt="heart"></button>
                        <button><img src="assets/images/cart-pics/gift.png" alt="gift"></button>
                        <button><img src="assets/images/cart-pics/trash.png" alt="trashbin"></button>
                    </div>
        
                    <div class="quantity-container">
                        <button class="minus">-</button>
                        <p>1</p>
                        <button class="add">+</button>
                    </div>
                </div>
            </div>
            <div class="cart-product">
                <div class="product-selector">
                    <input type="checkbox">
                    <img src="assets/images/slide-pics/menswear 1.png" alt="product-pic">
                </div>
                <div class="cart-product-card">
                    <p class="product-name">Thiago-Warch for Men - Cool Black</p>
                    <p>c2
                    </p>
                    <p class="product-price">$ 5,000</p>
                </div>
                <div class="cart-btn">
                    <div class="product-manage">
                        <button><img src="assets/images/cart-pics/like.png" alt="heart"></button>
                        <button><img src="assets/images/cart-pics/gift.png" alt="gift"></button>
                        <button><img src="assets/images/cart-pics/trash.png" alt="trashbin"></button>
                    </div>
        
                    <div class="quantity-container">
                        <button class="minus">-</button>
                        <p>1</p>
                        <button class="add">+</button>
                    </div>
                </div>
            </div>
            <div class="cart-product">
                <div class="product-selector">
                    <input type="checkbox">
                    <img src="assets/images/slide-pics/menswear 1.png" alt="product-pic">
                </div>
                <div class="cart-product-card">
                    <p class="product-name">Thiago-Warch for Men - Cool Black</p>
                    <p>c2
                    </p>
                    <p class="product-price">$ 5,000</p>
                </div>
                <div class="cart-btn">
                    <div class="product-manage">
                        <button><img src="assets/images/cart-pics/like.png" alt="heart"></button>
                        <button><img src="assets/images/cart-pics/gift.png" alt="gift"></button>
                        <button><img src="assets/images/cart-pics/trash.png" alt="trashbin"></button>
                    </div>
        
                    <div class="quantity-container">
                        <button class="minus">-</button>
                        <p>1</p>
                        <button class="add">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="searchbar">
        <button>&#709;</button>
        <h1>Looking for something? Let's find it together</h1>
        <input type="text">
    </div>
    <div class="header">
        <div class="left-section">
            <div class="left-entity">
                <button onclick="openSidebar('hamburg')"><img src="assets/images/header-pics/hamburger (2).png"></button>
            </div>
            <div class="left-entity">
                <button onclick="openSidebar('cart')"><img src="assets/images/header-pics/shopping-cart.png"></button>
            </div>
            <div class="left-entity">
                <button><img src="assets/images/header-pics/delivery.png"></button>
            </div>
            <div class="left-entity">
                <button><img src="assets/images/header-pics/user.png"></button>
            </div>
        </div>
        <div class="middle-section">
            <p class="middle-section-title">CONOVERELLA</p>
            <p class="middle-section-line">━━━━━━━━━━━━━</p>
            <p class="middle-section-text">become the better version of yourself</p>
        </div>
        <div class="right-section">
            <div class="search">
                <input onclick="" type="text" placeholder="What are you looking for?">
                <button onclick="" class="search-button">
                    <img src="assets/images/header-pics/search.png">
                </button>
            </div>
        </div>
    </div>
    <div class="shop-title">
        <h1>Women's Dress</h1>
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
</nav>

<!--  Product Container -->

<div class="container">
        <div class="product-grid" id="product-grid">
            <!-- Product 1 -->
        </div>
</div>
    
<?php include __DIR__ . '/../views/footer.php'; ?>

<script src="assets/js/header.js"></script>
</body>
</html>