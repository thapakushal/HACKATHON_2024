<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Manure</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-gray-100">

  <x-header />

  <section class="py-10" x-data="{ quantity: {{ $product->quantity }}, weight: 1 }">
    <div class="max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
      <div class="flex flex-col md:flex-row">
        <!-- Product Image -->
        <div class="w-full md:w-1/2">
          <img 
            src="{{ $product->productImage ? asset('storage/'.$product->productImage) : 'https://dummyimage.com/420x260' }}" 
            alt="{{ $product->productName }}" 
            class="object-cover w-full h-72 md:h-full"
          />
        </div>

        <!-- Product Details -->
        <div class="w-full p-6 md:w-1/2">
          <h2 class="mb-2 text-sm tracking-widest text-gray-500 uppercase">{{ $product->productType }}</h2>
          <h1 class="mb-4 text-2xl font-bold text-gray-900">{{ $product->productName }}</h1>
          
          <!-- Ratings -->
          <div class="flex items-center mb-4">
            @for ($i = 0; $i < 4; $i++)
              <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
            @endfor
            <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="ml-2 text-sm text-gray-600">(4 Reviews)</span>
          </div>

          <!-- Description -->
          <p class="mb-4 text-gray-700">Organic Manure</p>

          <!-- Weight Input -->
          <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-600">Weight (Kg)</label>
            <input 
              type="number" 
              min="1" 
              max=""
              x-model="weight"
              :max="quantity"
              class="w-32 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" 
              placeholder="Enter weight"
            />
            <p class="mt-1 text-xs text-gray-500">Max available: <span x-text="quantity"></span> kg</p>
          </div>

          <!-- Footer -->
          <div class="flex items-center justify-between mt-6">
            <span class="text-2xl font-bold text-gray-900">Rs. {{ $product->price }} per Kg</span>
            
            <!-- Form to submit product data to checkout -->
            <!-- Form to submit product data to checkout -->
@if (Auth::check())
<form action="{{ route('checkout') }}" method="POST">
    @csrf
    <input type="hidden" name="productName" value="{{ $product->productName }}">
    <input type="hidden" name="pricePerKg" value="{{ $product->price }}">
    <input type="hidden" x-bind:value="weight" name="weight">

    <button type="submit" class="px-6 py-2 text-sm font-medium text-white bg-[#2A776F] rounded-md hover:bg-[#2A776F] focus:outline-none focus:ring-2 focus:ring-[#2A776F]">
        Buy Now
    </button>
        </form>
                 @else
             <a href="{{ route('login') }}" class="px-6 py-2 text-sm font-medium text-white bg-[#2A776F] rounded-md hover:bg-[#2A776F] focus:outline-none focus:ring-2 focus:ring-[#2A776F]">
             Login to Buy
        </a>
        @endif

<<<<<<< HEAD
=======
              <button type="submit" class="px-6 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400">
                Buy Now
              </button>
            </form>
>>>>>>> parent of 14a35ae (before the orders dashboard)
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br>

  <x-footer />

</body>
</html>
