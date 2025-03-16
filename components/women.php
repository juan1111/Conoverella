<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Women's Fashion - Conoverella</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="assets/css/home.css">
  <script src="../js/script_featured.js"></script>
</head>
<body>
  <!-- Navigation -->
  <?php include __DIR__ . '/../views/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container text-center">
      <h1 class="display-4 fw-bold mb-4">Women's Collection</h1>
      <p class="lead mb-4">Discover the latest trends in women's fashion</p>
    </div>
  </section>

  <!-- Filters and Sorting -->
  <section class="py-4 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="d-flex flex-wrap">
            <button class="btn btn-outline-dark me-2 mb-2 filter-btn active" data-filter="all">All</button>
            <button class="btn btn-outline-dark me-2 mb-2 filter-btn" data-filter="dresses">Dresses</button>
            <button class="btn btn-outline-dark me-2 mb-2 filter-btn" data-filter="tops">Tops</button>
            <button class="btn btn-outline-dark me-2 mb-2 filter-btn" data-filter="bottoms">Bottoms</button>
            <button class="btn btn-outline-dark mb-2 filter-btn" data-filter="outerwear">Outerwear</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-md-end mt-3 mt-md-0">
            <select class="form-select me-2" style="width: auto;">
              <option>Sort by: Featured</option>
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
              <option>Newest</option>
              <option>Best Selling</option>
            </select>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-outline-dark">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </button>
              <button type="button" class="btn btn-outline-dark">
                <i class="bi bi-list"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4" id="productsGrid">
        <!-- Women's products will be dynamically added here -->
      </div>
      
      <!-- Pagination -->
      <nav class="mt-5">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h3>Subscribe to Our Newsletter</h3>
          <p class="text-muted mb-4">Get the latest updates on new products and upcoming sales</p>
          <form class="d-flex">
            <input type="email" class="form-control me-2" placeholder="Your email address">
            <button class="btn btn-dark px-4">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalProductTitle">Product Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img src="/placeholder.svg" class="img-fluid" id="modalProductImage" alt="Product Image">
            </div>
            <div class="col-md-6">
              <h3 id="modalProductPrice">$0.00</h3>
              <div class="mb-3">
                <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                <span class="text-warning me-1"><i class="bi bi-star-half"></i></span>
                <span class="text-muted">(24 reviews)</span>
              </div>
              <p id="modalProductDescription">Product description goes here.</p>
              <div class="mb-3">
                <label class="form-label">Size</label>
                <select class="form-select">
                  <option>Select Size</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Quantity</label>
                <div class="input-group" style="width: 130px;">
                  <button class="btn btn-outline-secondary" type="button" id="decreaseQuantity">-</button>
                  <input type="text" class="form-control text-center" value="1" id="productQuantity">
                  <button class="btn btn-outline-secondary" type="button" id="increaseQuantity">+</button>
                </div>
              </div>
              <button class="btn btn-dark w-100" id="addToCartModalBtn">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->

  <?php include __DIR__ . '/../views/footer.php'; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>

</body>
</html>