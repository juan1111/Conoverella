$(document).ready(()=>{
    function displayProducts(category = 'all') {    
        const productsGrid = document.getElementById('product-grid');
        productsGrid.innerHTML = '';
    
         $.ajax({
          url: '../Process/products_data.php',
          type: 'GET',
          dataType: 'json',
    
          success: (response) =>{
            products = response;
            console.log(products[0].category);
            console.log(response);

            let filteredProductss;
            let isPages;

            if(products[0].category === "women"){

                const filteredProducts = category === 'all' 
                ? products 
                : products.filter(product => product.Type === category);
                console.log("Hi men");

                filteredProductss = filteredProducts;
            }
            else{
                const filteredProducts = category === 'all' 
                ? products 
                : products.filter(product => product.category === category);
                // console.log(filteredProducts);
                isPages = 'home';
                filteredProductss = filteredProducts;
                console.log("Hi men");
            }

            filteredProductss.forEach(product => {
              const productCard = document.createElement('div');
              productCard.className = 'grid-product-card';
              productCard.innerHTML = `
                <img src="${product.image}" alt="Backless V-Neck Dress" class="product-img">
                <div class="product-title">${product.name}</div>
                <div class="price">${product.price} <span class="product-sold"> 9m+ sold</span></div>
                <div class="rating">
                    <div class="stars">
                        <span class="star filled"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="fas fa-star"></i></span>
                        <span class="star"><i class="fas fa-star"></i></span>
                    </div>
                    <span class="review-count">(41)</span>
                </div>
                <div class="card-footer">
                    <button class="add-to-cart-btn" data-id="${product.id}">ADD TO CART <i class="fas fa-shopping-cart"></i></button>
                    <button class="favorite-btn"><i class="fas fa-heart"></i></button>
                </div>
              `;
              productsGrid.appendChild(productCard);
            });
    
        // Add event listeners to the newly created buttons
        // document.querySelectorAll('.quick-view-btn').forEach(btn => {
        //   btn.addEventListener('click', handleQuickView);
        // });
        
        document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
          btn.addEventListener('click', handleAddToCart);
        });
    
          }
         });
      }

      // document.querySelectorAll('.filter-btn').forEach(btn => {
      //   btn.addEventListener('click', function() {
      //     // Remove active class from all buttons
      //     document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      //     // Add active class to clicked button
      //     this.classList.add('active');
      //     // Display products based on filter
      //     displayProducts(this.getAttribute('data-filter'));
      //   });
      // });

      displayProducts();
});

