<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Orders</title>
  <link rel="stylesheet" href="{{ asset('css/customer_dashboard_style.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <x-header />
  <main class="container px-4 mx-auto mt-8">
    <h1 class="orders-title">My Orders</h1>
    <div class="orders-table">
      <table class="w-full border-collapse table-auto">
        <thead>
          <tr>
            <th class="p-2 border-b-2">Order ID</th>
            <th class="p-2 border-b-2">Product</th>
            <th class="p-2 border-b-2">Quantity</th>
            <th class="p-2 border-b-2">Order Date</th>
            <th class="p-2 border-b-2">Status</th>
            <th class="p-2 border-b-2">Total Amount</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ORD12345</td>
            <td>Cow Manure</td>
            <td>20 Kg</td>
            <td>2024-11-20</td>
            <td><span class="order-status status-shipped">Shipped</span></td>
            <td>Rs. 2300</td>
            
          </tr>
          <tr>
            <td>ORD12346</td>
            <td>Hen's Manure</td>
            <td>20 Kg</td>
            <td>2024-11-18</td>
            <td><span class="order-status status-pending">Pending</span></td>
            <td>Rs. 2500</td>
            
          </tr>
          <tr>
            <td>ORD12347</td>
            <td>Organic Fertilizer </td>
            <td>50 Kg</td>
            <td>2024-11-15</td>
            <td><span class="order-status status-delivered">Delivered</span></td>
            <td>Rs. 5000</td>
           
          </tr>
        </tbody>
      </table>
    </div>
  </main>


  <br><br><br><br><br><br><br><br>
  <x-footer />
</body>
</html>
