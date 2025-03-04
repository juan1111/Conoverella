// const cart = [
//     { name: "Trendy Oversized Blazer", price: 89.99, quantity: 1 },
//     { name: "Leather Weekender Bag", price: 129.99, quantity: 1 },
//   ];

//   function updateOrderSummary() {
//     const orderSummary = document.getElementById('orderSummary');
//     const subtotalElement = document.getElementById('subtotal');
//     const shippingElement = document.getElementById('shipping');
//     const taxElement = document.getElementById('tax');
//     const totalElement = document.getElementById('total');

//     let subtotal = 0;
//     let orderSummaryHTML = '';

//     cart.forEach(item => {
//       const itemTotal = item.price * item.quantity;
//       subtotal += itemTotal;
//       orderSummaryHTML += `
//         <div class="d-flex justify-content-between mb-2">
//           <span>${item.name} x ${item.quantity}</span>
//           <span>$${itemTotal.toFixed(2)}</span>
//         </div>
//       `;
//     });

//     orderSummary.innerHTML = orderSummaryHTML;
//     subtotalElement.textContent = `$${subtotal.toFixed(2)}`;

//     const shipping = 10; // Fixed shipping cost
//     const tax = subtotal * 0.1; // 10% tax rate
//     const total = subtotal + shipping + tax;

//     shippingElement.textContent = `$${shipping.toFixed(2)}`;
//     taxElement.textContent = `$${tax.toFixed(2)}`;
//     totalElement.textContent = `$${total.toFixed(2)}`;
//   }

//   // Initialize order summary
//   updateOrderSummary();

//   // Handle form submission
//   document.getElementById('checkoutForm').addEventListener('submit', function(e) {
//     e.preventDefault();
//     alert('Thank you for your order! This is a demo, so no actual order has been placed.');
//   });

//   paypal.Buttons({

//     createOrder: (data,actions)=>{

//         return actions.order.create({

//             purchase_units: [{
//                 amount: {
//                     value: '200'
//                 }
//             }]
//         })
//     },

//     onApprove: (data,actions)=>{

//         console.log('data' + data);
//         console.log('Action' + actions);

//         return actions.order.capture().then((details)=>{
//             console.log(details.payer.name.given_name);
//         })
//     }

// }).render('#paypal-button-container')

  paypal.Buttons({

    createOrder: (data,actions) =>{

      // console.log("Billing Details:", formdata); // Debugging

      return actions.order.create({
  
        purchase_units:[{
          amount:{
            value: '100'
          }
        }]
      })
  
    },
  
    onApprove: (data,actions) =>{
  
      return actions.order.capture().then((details)=>{
        // console.log(details)

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
            billingDetails: JSON.stringify(formdata)
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
