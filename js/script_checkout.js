$(document).ready(() =>{
      // Cart functionality
      let cart = JSON.parse(localStorage.getItem("cartLocal")) || [];
      const cartCount = document.getElementById('cartCount');
      const cartItems = document.getElementById('cartItems');
      const emptyCartMessage = document.getElementById('emptyCartMessage');
      const cartFooter = document.getElementById('cartFooter');
      const cartSubtotal = document.getElementById('cartSubtotal');
      const clearCartBtn = document.getElementById('clearCartBtn');
      const orderSummary = document.getElementById('orderSummary');
      const subtotalElement = document.getElementById('subtotal');
      const shippingElement = document.getElementById('shipping');
      const taxElement = document.getElementById('tax');
      const totalElement = document.getElementById('total');
      let totalPrice;


    function updateOrderSummary() {
    
        let subtotal = 0;
        let orderSummaryHTML = '';

        cart.forEach(item => {
          const itemTotal = item.price * item.quantity;
          subtotal += itemTotal;
          orderSummaryHTML += `
            <div class="d-flex justify-content-between mb-2">
              <span>${item.name} x ${item.quantity}</span>
              <span>$${itemTotal.toFixed(2)}</span>
            </div>
          `;
        });
    
        orderSummary.innerHTML = orderSummaryHTML;
        subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
    
        const shipping = 10; // Fixed shipping cost
        const tax = subtotal * 0.1; // 10% tax rate
        const total = subtotal + shipping + tax;
        totalPrice = total.toFixed(2);
    
        shippingElement.textContent = `$${shipping.toFixed(2)}`;
        taxElement.textContent = `$${tax.toFixed(2)}`;
        totalElement.textContent = `$${total.toFixed(2)}`;
      }

      updateOrderSummary();

      function saveCart(){
        localStorage.setItem("cartLocal", JSON.stringify(cart));
      }
     
      // Update cart display
      function updateCart() {
                // Update cart count
                const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
                cartCount.textContent = totalItems;

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
                updateOrderSummary();
              }
          
              // Clear cart
              clearCartBtn.addEventListener('click', function() {
                cart = [];
                saveCart();
                updateCart();
                updateOrderSummary();
              });
          
             updateCart();

             paypal.Buttons({

                onInit: function(data, actions) {
                    actions.disable(); // Disable button initially
            
                    // Function to check if all fields are filled
                    function checkFields() {
                        let isFilled = $('#firstName').val() && $('#lastName').val() &&
                                       $('#email').val() && $('#address').val() &&
                                       $('#city').val() && $('#state').val() &&
                                       $('#zip').val();
                        if (isFilled) {
                            actions.enable();
                        } else {
                            actions.disable();
                        }
                    }
            
                    // Attach event listener to input fields
                    $('input').on('input', checkFields);
                },

                createOrder: (data,actions) =>{

                  return actions.order.create({

                    purchase_units:[{
                      amount:{
                        value: totalPrice,
                        currency_code: "USD",
                        breakdown:{
                          item_total: {value: totalPrice, currency_code: "USD"}
                        }
                      }
                    }]
                  })
                },
              
                onApprove: (data,actions) =>{

                  return actions.order.capture().then((details)=>{
                    let formdata = {
                      firstname: $('#firstName').val(),
                      lastname: $('#lastName').val(),
                      email: $('#email').val(),
                      address: $('#address').val(),
                      city: $('#city').val(),
                      state: $('#state').val(),
                      zip: $('#zip').val()
                    };
            
                    $.ajax({
              
                      url: '../Process/save_payment.php',
                      type: "POST",
                      data: {
                        orderID: data.orderID,
                        payerID: data.payerID,
                        paymentDetails: JSON.stringify(details),
                        billingDetails: JSON.stringify(formdata),
                        orderDetails: JSON.stringify(cart)
                      },
              
                      success: (response)=>{
                        let result = typeof response === "string" ? JSON.parse(response) : response;
              
                        if(result.status === "success"){
                          alert("Payment Successful! Order saved.");
                        }
                        else{
                          alert("Payment Successful! But order saving failed.");
                        }
              
                      },
                      error: (xhr,status,error)=>{
                        console.error("Ajax Error:", error);
              
                      }
                    })
                  })
                },
            
                onCancel: function(data) {
                  alert('Payment was canceled. Please try again or choose a different payment method.');
                  console.log('Payment canceled:', data);
              },
            
              onError: function(err) {
                  alert('An error occurred during the payment process. Please try again.');
                  console.error('PayPal error:', err);
              }
            
              }).render('#paypal-button-container')
    
  })