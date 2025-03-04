<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHIC - Fashion Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=2070');
      background-size: cover;
      background-position: center;
      height: 500px;
      display: flex;
      align-items: center;
      color: white;
    }
    
    .product-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
    
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .category-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      z-index: 10;
    }
    
    .cart-count {
      position: absolute;
      top: -8px;
      right: -8px;
      background-color: #dc3545;
      color: white;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      font-size: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .filter-btn.active {
      background-color: #212529;
      color: white;
    }
    
    .newsletter-section {
      background-color: #f8f9fa;
    }
  </style>
    <script src="https://www.paypal.com/sdk/js?client-id=AT8v-dpDLziIEaKUWQBlo3pINXDyuyABidt6WcHnlkIpzPVTabRThWMFQsB0DXcWnDm4mtONngBaU30f"></script>

</head>
<body>


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
              <li><a class="dropdown-item" href="women.html">Women</a></li>
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
