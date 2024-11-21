// Constants
const pricePerKg = 100; 
const weight = 20; 
const deliveryCharge = 200; 


const subtotal = pricePerKg * weight;
const totalAmount = subtotal + deliveryCharge;


document.getElementById('subtotal').textContent = `Rs. ${subtotal}`;
document.getElementById('deliveryCharge').textContent = `Rs. ${deliveryCharge}`;
document.getElementById('totalAmount').textContent = `Rs. ${totalAmount}`;



const placeOrderButton = document.querySelector('.checkout-button');


placeOrderButton.addEventListener('click', function() {
  
    alert('Order placed successfully!');
    
   
    window.location.href = '../about_us.html'; 
});
