<div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Your Shopping Cart</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div id="cartItems">
        <!-- Cart items will be added here -->
        <div class="text-center py-5" id="emptyCartMessage">
          <i class="bi bi-cart-x fs-1 text-muted"></i>
          <p class="mt-3">Your cart is empty</p>
          <button class="btn btn-dark mt-3" data-bs-dismiss="offcanvas">Continue Shopping</button>
        </div>
      </div>
      <div class="mt-auto" id="cartFooter" style="display: none;">
        <div class="d-flex justify-content-between mb-3">
          <span class="fw-bold">Subtotal:</span>
          <span class="fw-bold" id="cartSubtotal">$0.00</span>
        </div>
        <a href="index.php?page=checkout" class="btn btn-dark w-100 mb-2">Checkout</a>
        <button class="btn btn-outline-dark w-100" id="clearCartBtn">Clear Cart</button>
      </div>
    </div>
  </div>