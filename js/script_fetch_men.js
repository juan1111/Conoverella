$(document).ready(()=>{
    function displayProducts(category = 'all') {    
        const productsGrid = document.getElementById('productsGrid');
        productsGrid.innerHTML = '';
    
         $.ajax({
          url: '../Process/men_data.php',
          type: 'GET',
          dataType: 'json',
    
          success: (response) =>{
            products = response;
            // console.log(products);
            const filteredProducts = category === 'all' 
            ? products 
            : products.filter(product => product.Type === category);
            console.log(filteredProducts);
            filteredProducts.forEach(product => {
              const productCard = document.createElement('div');
              productCard.className = 'col-md-6 col-lg-3';
              productCard.innerHTML = `
                <div class="card product-card h-100">
                  <span class="badge bg-dark category-badge">${product.Type}</span>
                  <img src="${product.image}" class="card-img-top" alt="${product.name}" style="height: 250px; object-fit: cover;">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title">${product.name}</h5>
                      <p class="card-text text-muted mb-0">${parseFloat(product.price).toFixed(2)}</p>                    <div class="d-flex mt-auto pt-3">
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
         });
      }

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

      displayProducts();
});

