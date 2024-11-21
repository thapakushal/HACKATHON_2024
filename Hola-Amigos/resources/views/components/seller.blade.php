<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seller Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ asset('css/seller_style.css') }}">

</head>
<body>
  <main class="container px-4 mx-auto mt-8">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
      <!-- Create Listing Form for mal basket seller -->
      <section class="form-section">
        <h2 class="section-title">Create a Listing</h2>
        
        
        <form action="{{ route('datasubmit') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="productType" class="form-label">Manure Type</label>
            <select id="productType" name="productType" class="form-select">
              <option value="cow">Cow Manure</option>
              <option value="buffalo">Buffalo Manure</option>
              <option value="compost">Compost Manure</option>
              <option value="Chicken">Hen's Manure</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" id="productName" name="productName" class="form-input" placeholder="e.g., Premium Organic Manure">
          </div>

          <div class="form-group">
            <label for="quantity" class="form-label">Available Quantity (in kg)</label>
            <input type="number" id="quantity" name="quantity" class="form-input" placeholder="e.g., 50">
          </div>

          <div class="form-group">
            <label for="price" class="form-label">Price (per kg)</label>
            <input type="number" id="price" name="price" class="form-input" placeholder="e.g., 100">
          </div>

          <!-- New Field for Product Image Upload -->
          <div class="form-group">
            <label for="productImage" class="form-label">Product Image</label>
            <input type="file" id="productImage" name="productImage" class="form-input">
          </div>

          <button type="submit" class="submit-button">Create Listing</button>
        </form>


        
      </section>

      <!-- View Order Status for seller -->
      <section class="order-status-section">
        <h2 class="section-title">Order Status</h2>
        <div class="table-container">
          <table class="order-table">
            <thead class="table-header">
              <tr>
                <th class="table-cell">Order ID</th>
                <th class="table-cell">Product</th>
                <th class="table-cell">Quantity</th>
                <th class="table-cell">Status</th>
              </tr>
            </thead>
            <tbody class="table-body">
              <tr>
                <td class="table-cell text-center">#1234</td>
                <td class="table-cell">Cow Manure</td>
                <td class="table-cell text-center">25 kg</td>
                <td class="table-cell text-center">
                  <span class="status-pending">Pending</span>
                </td>
              </tr>
              <tr>
                <td class="table-cell text-center">#1235</td>
                <td class="table-cell">Compost Manure</td>
                <td class="table-cell text-center">50 kg</td>
                <td class="table-cell text-center">
                  <span class="status-delivered">Delivered</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </main>
</body>
</html>
