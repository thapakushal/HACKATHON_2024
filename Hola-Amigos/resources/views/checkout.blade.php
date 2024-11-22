<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <x-header />
  <main class="container px-4 mx-auto mt-8">
    <h1 class="checkout-title">Checkout</h1>
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
      <!-- Customer Details Section -->
      <section class="details-section">
        <h2 class="section-title">Details</h2>
        <form action="{{ route('orders.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-input" placeholder="Enter your name" required>
          </div>

          <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <textarea id="address" name="address" class="form-input" rows="4" placeholder="Enter your full address" required></textarea>
          </div>

          <div class="form-group">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-input" placeholder="e.g., 9876543210" required>
          </div>

          <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="e.g., example@mail.com" required>
          </div>

          <!-- Hidden Fields for Order Details -->
          <input type="hidden" name="product" value="{{ session('productName') }}">
          <input type="hidden" name="weight" value="{{ session('weight') }}">
          <input type="hidden" name="price_per_kg" value="{{ session('pricePerKg') }}">
          <input type="hidden" name="delivery_charge" value="300">
          <input type="hidden" name="subtotal" value="{{ session('weight') * session('pricePerKg') }}">
          <input type="hidden" name="total" value="{{ (session('weight') * session('pricePerKg')) + 300 }}">
      </section>

      <!-- Order Summary and Payment Section -->
      <section class="summary-section">
        <h2 class="section-title">Order Summary</h2>
        <div class="summary-card">
          <p class="summary-item">
            <span>Product:</span> <span>{{ session('productName') }}</span>
          </p>
          <p class="summary-item">
            <span>Weight:</span> <span>{{ session('weight') }} Kg</span>
          </p>
          <p class="summary-item">
            <span>Price per Kg:</span> <span>Rs. {{ session('pricePerKg') }}</span>
          </p>
          <p class="summary-item">
            <span>Subtotal:</span> <span id="subtotal">Rs. {{ session('weight') * session('pricePerKg') }}</span>
          </p>
          <p class="summary-item">
            <span>Delivery Charge:</span> <span id="deliveryCharge">Rs. 300</span>
          </p>
          <p class="summary-total">
            <span>Total Amount:</span>
            <span id="totalAmount">Rs. {{ (session('weight') * session('pricePerKg')) + 300 }}</span>
          </p>
        </div>

        <!-- Payment Options Section -->
        <div class="mt-4 payment-section">
          <h2 class="section-title">Payment Options</h2>
          <div class="form-group">
            <label class="form-label">Select a payment method:</label>
            <div>
              <input type="radio" id="cash" name="payment_method" value="cash" required>
              <label for="cash">Cash on Delivery</label>
            </div>
          </div>
        </div>

        <button type="submit" class="mt-6 checkout-button">Place Order</button>
      </section>
      </form>
    </div>
  </main>
  <script src="{{ asset('js/checkout.js') }}"></script>
  <x-footer />
</body>
</html>
