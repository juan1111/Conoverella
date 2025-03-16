<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3" href="#">Conoverella</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Shop
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?page=women">Women</a></li>
              <li><a class="dropdown-item" href="index.php?page=men">Men</a></li>
              <li><a class="dropdown-item" href="accessories.html">Accessories</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="new-arrivals.html">New Arrivals</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
        <form class="d-flex me-3">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Search products...">
            <button class="btn btn-outline-dark" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
        <div class="d-flex align-items-center">
          <div class="position-relative me-3">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas">
              <i class="bi bi-cart fs-5"></i>
              <span class="cart-count" id="cartCount">0</span>
            </button>
          </div>
          <a href="#" class="me-3">
            <i class="bi bi-heart fs-5"></i>
          </a>
          <div class="dropdown">
            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
              <i class="bi bi-person fs-5"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="login.html">Login</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">My Account</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <?php include __DIR__ .'/../views/modal/sidebar.php'; ?>
