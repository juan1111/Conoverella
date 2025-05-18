   <nav>
    <?php include __DIR__ . '/../views/modal/sidebar.php'; ?>

        <div id="cart">
            <div class="cart-container">
                <button onclick="closeSidebar('cart')" class="close-btn">&times;</button>
                <h1>Shopping Cart</h1> 
                <!-- <div class="select-container">
                    <div class="select-all-wrapper">
                        <input type="checkbox" name="select-all">
                        <label for="select-all">SELECT ALL ITEMS<span class="items-num">()</span></label>
                    </div>
                    <div class="delete-wrapper">
                        <img src="assets/images/cart-pics/trash.png" alt="trashbin-icon">
                        <button class="delete-btn"><p>DELETE</button>
                    </div>                 
                </div> -->

                    <div id="cartItems">                         
                     <!-- Load Cart -->
                        <div id="emptyCartMessage" class="empty-cart-message">
                            <i class="bi bi-cart-x empty-cart-icon"></i>
                            <p class="empty-cart-text">Your cart is empty</p>
                        </div>
                    </div>

                    <div id="cartFooter" class="cart-footer">
                        <div class="cart-subtotal-row">
                            <span class="subtotal-label">Subtotal:</span>
                            <span class="subtotal-amount" id="cartSubtotal">$0.00</span>
                        </div>
                        <a href="index.php?page=checkout" class="checkout-btn">Checkout</a>
                        <button class="clear-cart-btn" id="clearCartBtn">Clear Cart</button>
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
                  <div class="left-entity" style="position: relative;">
                      <button onclick="openSidebar('cart')">
                          <img src="assets/images/header-pics/shopping-cart.png" alt="Cart" style="width: 24px; height: 24px;">
                          <span id="cartCount" style="
                              position: absolute;
                              top: -5px;
                              right: -5px;
                              background: red;
                              color: white;
                              font-size: 12px;
                              padding: 2px 6px;
                              border-radius: 50%;
                          ">2</span>
                      </button>
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
        <div class="nav-bar">
            <ul>
                <li><a href="index.php?page=home">HOME</a></li>
                <li><a href="index.php?page=men">MEN</a></li>
                <li><a href="index.php?page=women">WOMEN</a></li>
                <li><a href="index.php?page=accessories">NEW ACCESSORIES</a></li>
                <li><a href="#home">CONTACT US</a></li>
                <li><a href="#home">ABOUT US</a></li>
            </ul>
        </div>
    </nav>