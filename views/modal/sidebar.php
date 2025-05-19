<div id="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <button onclick="closeSidebar('hamburg')" class="sidebar-close-button">&times;</button>
                    <h1 class="header-txt">MENU</h1>
                    <div class="sidebar-profile-pic">
                        <img src="assets/images/sidebar-pics/user.png" alt="Profile picture">
                    </div>
                    <div class="sidebar-id-wrapper">
                        <h3 contenteditable="false" class="sidebar-user-id">Username</h3>
                        <button class="sidebar-edit-btn" onclick="toggleEdit()"><img src="assets/images/sidebar-pics/edit.png" alt="Edit icon"></button>
                    </div>
                    <div class="sidebar-email-wrapper">
                        <p class="sidebar-user-email">@gmail.com</p>
                        <button onclick="toggleMask('email')"><img src="assets/images/sidebar-pics/hide.png"></button>
                    </div>
                    <div class="sidebar-contact-wrapper">
                        <p class="sidebar-user-contact">+09975643501</p>
                        <button onclick="toggleMask('contact')"><img src="assets/images/sidebar-pics/hide.png"></button>
                    </div>
                </div>
                <div class="sidebar-delivery-wrapper">
                    <button class="sidebar-cart"><img src="assets/images/sidebar-pics/grocery-store.png"> My Cart</button>
                    <button class="sidebar-delivery"><img src="assets/images/sidebar-pics/fast-delivery.png"> Track your order</button>
                </div>
                <div class="sidebar-nav-wrapper">
                    <div class="sidebar-nav">
                        <div class="sidebar-dropdown-btn" onclick="dropDown(this)">
                            <h3>Men</h3>
                            <img class="dropdown-arrow" src="assets/images/sidebar-pics/next.png" alt="Arrow next">
                        </div>
                        <ul class="sidebar-dropdown-content">
                            <li><a href="#">Blazers</a></li>
                            <li><a>Pants</a></li>
                            <li><a>Shoes</a></li>
                            <li><a>Trousers</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-nav">
                        <div class="sidebar-dropdown-btn" onclick="dropDown(this)">
                            <h3>Women</h3>
                            <img src="assets/images/sidebar-pics/next.png" alt="Arrow next">
                        </div>
                        <ul class="sidebar-dropdown-content">
                            <li><a href="index.php?page=women-top">Women Tops</a></li>
                            <li><a href="index.php?page=women-set">Women Sets</a></li>
                            <li><a href="index.php?page=women-footwear">Women Footwears</a></li>
                            <li><a href="index.php?page=women-dress">Women Dresses</a></li>
                            <li><a href="index.php?page=women-bottom">Women Bottoms</a></li>
                            <li><a href="index.php?page=women-dress">Women Bikinis</a></li>
                            <li><a href="index.php?page=women-lingerie">Women Lingeries</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-nav">
                        <div class="sidebar-dropdown-btn" onclick="dropDown(this)">
                            <h3>Accesories</h3>
                            <img src="assets/images/sidebar-pics/next.png" alt="Arrow next">
                        </div>
                        <ul class="sidebar-dropdown-content">
                            <li><a href="index.php?page=accessories">Men Bags</a></li>
                            <li><a href="index.php?page=accessories">Men Backpack</a></li>
                            <li><a href="index.php?page=accessories">Women Bags</a></li>
                            <li><a href="index.php?page=accessories">Women Backpack</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-policy">
                    <h3>Policy</h3>
                    <p>Privacy</p>
                    <p>Contact Us</p>
                    <p>About Us</p>
                </div>
            </div>
  </div>