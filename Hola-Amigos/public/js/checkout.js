const placeOrderButton = document.querySelector('.checkout-button');

placeOrderButton.addEventListener('click', function() {
    alert('Order placed successfully!');
    
    // Redirect to the default home page
    window.location.href = '/';  // This points to the '/' route which is the home page
});
