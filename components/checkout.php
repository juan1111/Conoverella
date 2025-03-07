<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <script src="https://www.paypal.com/sdk/js?client-id=AT8v-dpDLziIEaKUWQBlo3pINXDyuyABidt6WcHnlkIpzPVTabRThWMFQsB0DXcWnDm4mtONngBaU30f"></script>
</head>
<body>

<section class="py-5">
    <div class="container">
      <h1 class="mb-4">Checkout</h1>
      <div class="row">
        <div class="col-md-8">
          <form id="checkoutForm" method="POST">
            <h3 class="mb-3">Billing Details</h3>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="name" required>
              </div>
              <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastname" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
              </div>
              <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <select class="form-select" id="state" name="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                  <option>New York</option>
                  <!-- Add more states as needed -->
                </select>
              </div>
              <div class="col-md-2">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" required>
              </div>
            </div>

            <h3 class="my-4">Payment</h3>
            <!-- <div class="row g-3">
              <div class="col-md-6">
                <label for="cardName" class="form-label">Name on Card</label>
                <input type="text" class="form-control" id="cardName" required>
              </div>
              <div class="col-md-6">
                <label for="cardNumber" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" required>
              </div>
              <div class="col-md-4">
                <label for="expiration" class="form-label">Expiration</label>
                <input type="text" class="form-control" id="expiration" placeholder="MM/YY" required>
              </div>
              <div class="col-md-2">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" required>
              </div>
            </div> -->

            <div id="paypal-button-container" class="mt-4"></div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title mb-4">Order Summary</h3>
              <div id="orderSummary">
                <!-- Order summary will be dynamically populated here -->
              </div>
              <hr>
              <div class="d-flex justify-content-between mb-2">
                <span>Subtotal</span>
                <span id="subtotal">$0.00</span>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Shipping</span>
                <span id="shipping">$0.00</span>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Tax</span>
                <span id="tax">$0.00</span>
              </div>
              <hr>
              <div class="d-flex justify-content-between mb-2">
                <strong>Total</strong>
                <strong id="total">$0.00</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ .'/../views/modal/sidebar.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/checkout.js"></script>
  <script src="assets/js/script.js">

  </script>
</body>
</html>