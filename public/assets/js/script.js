    // Product data
    let products = [];
  
      // Cart functionality
      let cart = JSON.parse(localStorage.getItem("cartLocal")) || [];
      const cartCount = document.getElementById('cartCount');
      const cartItems = document.getElementById('cartItems');
      const emptyCartMessage = document.getElementById('emptyCartMessage');
      const cartFooter = document.getElementById('cartFooter');
      const cartSubtotal = document.getElementById('cartSubtotal');
      const clearCartBtn = document.getElementById('clearCartBtn');

      // Display products
      // Filter products

      // Quick view functionality
      function handleQuickView() {
        const productId = parseInt(this.getAttribute('data-id'));
        const product = products.find(p => p.id === productId);
        console.log(product.name);
        if (product) {
          document.getElementById('modalProductTitle').textContent = product.name;
          document.getElementById('modalProductPrice').textContent = `$${parseFloat(product.price).toFixed(2)}`;
          document.getElementById('modalProductImage').src = product.image;
          document.getElementById('modalProductDescription').textContent = product.description;
          document.getElementById('productQuantity').value = 1;
          
          // Set the product ID on the Add to Cart button
          document.getElementById('addToCartModalBtn').setAttribute('data-id', productId);
          
          // Show the modal
          const quickViewModal = new bootstrap.Modal(document.getElementById('quickViewModal'));
          quickViewModal.show();
        }
      }
  
      // Add to cart functionality
      function handleAddToCart() {
        const productId = parseInt(this.getAttribute('data-id'));
        addProductToCart(productId, 1);
        updateCart();
      }
  
      // Add product to cart from modal
      document.getElementById('addToCartModalBtn').addEventListener('click', function() {
        const productId = parseInt(this.getAttribute('data-id'));
        const quantity = parseInt(document.getElementById('productQuantity').value);
        addProductToCart(productId, quantity);
        
        // Close the modal
        const quickViewModal = bootstrap.Modal.getInstance(document.getElementById('quickViewModal'));
        quickViewModal.hide();
      });
  
      // Quantity controls in modal
      document.getElementById('decreaseQuantity').addEventListener('click', function() {
        const quantityInput = document.getElementById('productQuantity');
        let quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
          quantityInput.value = quantity - 1;
        }
      });
  
      document.getElementById('increaseQuantity').addEventListener('click', function() {
        const quantityInput = document.getElementById('productQuantity');
        let quantity = parseInt(quantityInput.value);
        quantityInput.value = quantity + 1;
      });
  
      // Add product to cart
      function addProductToCart(productId, quantity) {
        const product = products.find(p => p.id === productId);
        if (product) {
          // Check if product is already in cart
          const existingItem = cart.find(item => item.id === productId);
          
          if (existingItem) {
            existingItem.quantity += quantity;
          } else {
            cart.push({
              id: product.id,
              name: product.name,
              price: product.price,
              image: product.image,
              quantity: quantity
            });
          }

          saveCart();
          updateCart();
          // Show a toast or some feedback
          alert(`${product.name} added to cart!`);
        }
      }

      function saveCart(){
        localStorage.setItem("cartLocal", JSON.stringify(cart));
      }
  
      // Update cart display
      function updateCart() {
        // Update cart count
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        cartCount.textContent = totalItems;

        // console.log(cartLocal);
        
        // Update cart items
        if (cart.length === 0) {
          emptyCartMessage.style.display = 'block';
          cartFooter.style.display = 'none';
          cartItems.innerHTML = emptyCartMessage.outerHTML;
        } else {
          emptyCartMessage.style.display = 'none';
          cartFooter.style.display = 'block';
          
          let cartHTML = '';
          let subtotal = 0;
          
          cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            
            cartHTML += `
              <div class="d-flex align-items-center mb-3">
                <img src="${item.image}" alt="${item.name}" style="width: 60px; height: 60px; object-fit: cover;" class="me-3">
                <div class="flex-grow-1">
                  <h6 class="mb-0">${item.name}</h6>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">${item.quantity} × $${item.price.toFixed(2)}</small>
                    <button class="btn btn-sm text-danger remove-item-btn" data-id="${item.id}">
                      <i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </div>
            `;
          });
          
          cartItems.innerHTML = cartHTML;
          cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
          
          // Add event listeners to remove buttons
          document.querySelectorAll('.remove-item-btn').forEach(btn => {
            btn.addEventListener('click', function() {
              const productId = parseInt(this.getAttribute('data-id'));
              removeFromCart(productId);
            });
          });
        }
        saveCart();
      }
  
      // Remove item from cart
      function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        saveCart();
        updateCart();
      }
  
      // Clear cart
      clearCartBtn.addEventListener('click', function() {
        cart = [];
        saveCart();
        updateCart();
      });
  
      // Initialize the page
      // displayProducts();
      updateCart();
      