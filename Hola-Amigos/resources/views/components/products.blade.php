<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <!-- Include Header -->
    <x-header />

    <!-- Hero Section -->
    <div class="relative w-full bg-center bg-no-repeat bg-cover h-96" style="background-image: url('{{ asset('images/WhatsApp Image 2024-11-21 at 12.12.41_7f844a91.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 flex items-center justify-center">
            <!-- Rounded Block -->
            <div class="p-8 bg-green-600 rounded-lg shadow-lg bg-opacity-90">
                <!-- Text -->
                <h1 class="text-xl font-extrabold leading-tight text-center text-white sm:text-2xl md:text-3xl">
                    From Rural Manure to Urban Gardens – Join the Sustainable Revolution Today!
                </h1>
            </div>
        </div>
    </div>

    <!-- Subtitle Section -->
    <div class="p-2">
        <p class="p-1 mt-10 text-3xl font-bold text-center my-15">
          Ek Manure, Dui Faida – Gaun Safa, Sahar Hariyo!
        </p>
    </div>

    <!-- Product Section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-16 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($products as $product)
                <div class="w-full p-4 lg:w-1/4 md:w-1/2">
                    <a class="relative block h-48 overflow-hidden rounded">
                        <img alt="ecommerce" class="block object-cover object-center w-full h-full" 
                             src="{{ $product->productImage ? asset('storage/'.$product->productImage) : 'https://dummyimage.com/420x260' }}">
                    </a>
                    <div class="mt-4">
                        <h3 class="mb-1 text-xs tracking-widest text-gray-500 title-font">{{ $product->productName }}</h3>
                        <h2 class="text-lg font-medium text-gray-900 title-font">{{ $product->productType }}</h2>
                        <p class="mt-1 quantity">{{ $product->quantity }} kg</p>
                        <p class="mt-1 price">Rs. {{ $product->price }} per Kg</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <x-footer />

</body>
</html>
