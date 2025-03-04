<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conoverella</title>
</head>
<body>

   <!-- Hero Section -->
   <section class="hero-section">
    <div class="container text-center">
      <h1 class="display-3 fw-bold mb-4">Summer Collection 2025</h1>
      <p class="lead mb-4">Discover the latest trends in fashion</p>
      <a href="#products" class="btn btn-light btn-lg px-5">Shop Now</a>
    </div>
  </section>

  <!-- Featured Categories -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card bg-dark text-white overflow-hidden" style="height: 200px;">
            <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?q=80&w=1935" class="card-img opacity-75" alt="Women's Fashion" style="object-fit: cover; height: 100%;">
            <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
              <h3 class="card-title fw-bold">Women</h3>
              <a href="#" class="text-white">Shop Collection</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white overflow-hidden" style="height: 200px;">
            <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?q=80&w=1974" class="card-img opacity-75" alt="Men's Fashion" style="object-fit: cover; height: 100%;">
            <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
              <h3 class="card-title fw-bold">Men</h3>
              <a href="#" class="text-white">Shop Collection</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white overflow-hidden" style="height: 200px;">
            <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=1935" class="card-img opacity-75" alt="Accessories" style="object-fit: cover; height: 100%;">
            <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
              <h3 class="card-title fw-bold">Accessories</h3>
              <a href="#" class="text-white">Shop Collection</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Featured Products</h2>
      
      <!-- Filter Buttons -->
      <div class="d-flex justify-content-center mb-4 flex-wrap">
        <button class="btn btn-outline-dark me-2 mb-2 filter-btn active" data-filter="all">All</button>
        <button class="btn btn-outline-dark me-2 mb-2 filter-btn" data-filter="women">Women</button>
        <button class="btn btn-outline-dark me-2 mb-2 filter-btn" data-filter="men">Men</button>
        <button class="btn btn-outline-dark mb-2 filter-btn" data-filter="accessories">Accessories</button>
      </div>
      
      <!-- Products Grid -->
      <div class="row g-4" id="productsGrid">
        <!-- Products will be dynamically added here -->
      </div>
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


  <!-- Shopping Cart Offcanvas -->


  <!-- Quick View Modal -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
  
</body>
</html>