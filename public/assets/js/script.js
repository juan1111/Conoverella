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
  
      // Add to cart functionality
      function handleAddToCart() {
        const productId = parseInt(this.getAttribute('data-id'));
        addProductToCart(productId, 1);
        updateCart();
      }
  
      // Add product to cart from modal
  
      // Quantity controls in modal
  
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
                <div class="cart-product">
                    <div class="product-selector">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="product-card">
                        <p class="product-name">${item.name}</p>
                        <p>c2
                        </p>
                        <p class="product-price">${item.quantity} × $${item.price.toFixed(2)}</p>
                    </div>
                    <div class="cart-btn">
                        <div class="product-manage">
                            <button class="remove-item-btn" data-id="${item.id}"><img src="assets/images/cart-pics/trash.png" alt="trashbin"></button>
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
      