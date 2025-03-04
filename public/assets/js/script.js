    // Product data
    const products = [
        {
          id: 1,
          name: "Floral Summer Dress",
          price: 49.99,
          image: "https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?q=80&w=1976",
          category: "women",
          description: "A beautiful floral summer dress perfect for warm days. Made from lightweight, breathable fabric with a flattering cut."
        },
        {
          id: 2,
          name: "Classic Denim Jacket",
          price: 79.99,
          image: "https://images.unsplash.com/photo-1576871337622-98d48d1cf531?q=80&w=1974",
          category: "men",
          description: "A timeless denim jacket that never goes out of style. Features a comfortable fit with practical pockets and durable construction."
        },
        {
          id: 3,
          name: "Leather Crossbody Bag",
          price: 59.99,
          image: "https://images.unsplash.com/photo-1590874103328-eac38a683ce7?q=80&w=2076",
          category: "accessories",
          description: "A stylish leather crossbody bag with multiple compartments. Perfect for everyday use with adjustable straps and secure closures."
        },
        {
          id: 4,
          name: "Slim Fit Chinos",
          price: 45.99,
          image: "https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?q=80&w=1974",
          category: "men",
          description: "Comfortable slim fit chinos in a versatile color. Made from stretch cotton for all-day comfort and style."
        },
        {
          id: 5,
          name: "Bohemian Maxi Skirt",
          price: 39.99,
          image: "https://images.unsplash.com/photo-1551163943-3f7fffb9d770?q=80&w=1974",
          category: "women",
          description: "A flowing bohemian maxi skirt with vibrant patterns. Perfect for creating a relaxed yet stylish summer look."
        },
        {
          id: 6,
          name: "Minimalist Watch",
          price: 89.99,
          image: "https://images.unsplash.com/photo-1524805444758-089113d48a6d?q=80&w=1976",
          category: "accessories",
          description: "A sleek minimalist watch with a leather strap. Features a clean dial design and reliable quartz movement."
        },
        {
          id: 7,
          name: "Oversized Knit Sweater",
          price: 65.99,
          image: "https://images.unsplash.com/photo-1434389677669-e08b4cac3105?q=80&w=2005",
          category: "women",
          description: "A cozy oversized knit sweater perfect for layering. Made from soft yarn with a comfortable relaxed fit."
        },
        {
          id: 8,
          name: "Casual Oxford Shirt",
          price: 55.99,
          image: "https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?q=80&w=1974",
          category: "men",
          description: "A versatile oxford shirt for any occasion. Features a classic cut with quality cotton construction for durability and comfort."
        }
      ];
  
      // Cart functionality
      let cart = [];
      const cartCount = document.getElementById('cartCount');
      const cartItems = document.getElementById('cartItems');
      const emptyCartMessage = document.getElementById('emptyCartMessage');
      const cartFooter = document.getElementById('cartFooter');
      const cartSubtotal = document.getElementById('cartSubtotal');
      const clearCartBtn = document.getElementById('clearCartBtn');
  
      // Display products
      function displayProducts(category = 'all') {
        const productsGrid = document.getElementById('productsGrid');
        productsGrid.innerHTML = '';
        
        const filteredProducts = category === 'all' 
          ? products 
          : products.filter(product => product.category === category);
        
        filteredProducts.forEach(product => {
          const productCard = document.createElement('div');
          productCard.className = 'col-md-6 col-lg-3';
          productCard.innerHTML = `
            <div class="card product-card h-100">
              <span class="badge bg-dark category-badge">${product.category}</span>
              <img src="${product.image}" class="card-img-top" alt="${product.name}" style="height: 250px; object-fit: cover;">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">${product.name}</h5>
                <p class="card-text text-muted mb-0">$${product.price.toFixed(2)}</p>
                <div class="d-flex mt-auto pt-3">
                  <button class="btn btn-outline-dark flex-grow-1 me-2 quick-view-btn" data-id="${product.id}">Quick View</button>
                  <button class="btn btn-dark flex-grow-1 add-to-cart-btn" data-id="${product.id}">Add to Cart</button>
                </div>
              </div>
            </div>
          `;
          productsGrid.appendChild(productCard);
        });
        
        // Add event listeners to the newly created buttons
        document.querySelectorAll('.quick-view-btn').forEach(btn => {
          btn.addEventListener('click', handleQuickView);
        });
        
        document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
          btn.addEventListener('click', handleAddToCart);
        });
      }
  
      // Filter products
      document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
          // Remove active class from all buttons
          document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
          // Add active class to clicked button
          this.classList.add('active');
          // Display products based on filter
          displayProducts(this.getAttribute('data-filter'));
        });
      });
  
      // Quick view functionality
      function handleQuickView() {
        const productId = parseInt(this.getAttribute('data-id'));
        const product = products.find(p => p.id === productId);
        
        if (product) {
          document.getElementById('modalProductTitle').textContent = product.name;
          document.getElementById('modalProductPrice').textContent = `$${product.price.toFixed(2)}`;
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


          updateCart();
          saveCart();
          // Show a toast or some feedback
          alert(`${product.name} added to cart!`);
        }
      }

      let cartLocal = JSON.parse(localStorage.getItem("cartLocal")) || [];

      function saveCart(){
        localStorage.setItem("cartLocal", JSON.stringify(cart));
      }
  
      // Update cart display
      function updateCart() {
        // Update cart count
        cartLocal = JSON.parse(localStorage.getItem("cartLocal"));
        const totalItems = cartLocal.reduce((total, item) => total + item.quantity, 0);
        cartCount.textContent = totalItems;



        console.log(cartLocal);
        
        // Update cart items
        if (cartLocal.length === 0) {
          emptyCartMessage.style.display = 'block';
          cartFooter.style.display = 'none';
          cartItems.innerHTML = emptyCartMessage.outerHTML;
        } else {
          emptyCartMessage.style.display = 'none';
          cartFooter.style.display = 'block';
          
          let cartHTML = '';
          let subtotal = 0;
          
          cartLocal.forEach(item => {
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
      }
  
      // Remove item from cart
      function removeFromCart(productId) {
        cart = cartLocal.filter(item => item.id !== productId);
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
      displayProducts();
      updateCart();
      