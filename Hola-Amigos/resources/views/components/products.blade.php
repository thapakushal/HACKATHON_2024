<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" {{ asset('css/product.css') }}"> <!-- Link to the external CSS file -->
  <title>MAL Basket</title>
  <style>
  

  </style>
</head>
<body>
    <x-header />

    <!-- Hero Section with a Single Image -->
    <div class="relative w-full h-[89vh] bg-gray-100">
        <img 
            src="{{ asset('images/hero.jpg') }}" 
            alt="Hero Image" 
            class="absolute inset-0 object-cover w-full h-full"
        >
    </div>
    
    <br>
    <!-- Subtitle Section -->
    <div class="relative flex items-center justify-center p-2 mt-10">
        <div class="absolute inset-0 rounded-lg" style="background-color: #2A776F; opacity: 0.2;"></div>
        <p class="relative z-10 p-4 text-3xl font-semibold text-center" style="color: #2A776F;">
            Products
        </p>
    </div>

    <!-- Product Section -->
    <div class="cart">
        <section class="text-gray-600 body-font">
            <div class="container px-10 py-16 mx-auto">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach($products as $product)
                    <div class="overflow-hidden transition-transform transform border rounded-lg shadow hover:scale-105 hover:shadow-lg fade-up">
                        <!-- Image Section with Hover Effect -->
                        <a href="{{ route('buy', ['id' => $product->id]) }}" class="block h-48 overflow-hidden">
                            <img alt="ecommerce" class="block object-cover object-center w-full h-full transition-transform transform hover:scale-105" 
                                 src="{{ $product->productImage ? asset('storage/'.$product->productImage) : 'https://dummyimage.com/420x260' }}">
                        </a>
                        
                        <!-- Text Section -->
                        <div class="p-4 bg-white">
                            <h3 class="mb-1 text-xs font-semibold tracking-widest text-gray-500">{{ $product->productName }}</h3>
                            <h2 class="text-lg font-medium text-gray-900">{{ $product->productType }}</h2>
                            <p class="mt-1 text-sm font-light text-gray-600">{{ $product->quantity }} kg</p>
                            <p class="mt-1 text-sm font-semibold text-[#2A776F]">Rs. {{ $product->price }} per Kg</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- View More Button -->
    <a href="{{ url('/') }}">
        <button class="px-6 py-3 font-semibold text-white rounded-md bg-[#2A776F] hover:bg-[#226357] mx-auto block">
            View More
        </button>
    </a>

    <br><br><br>

    <!-- Include Footer -->
    <x-footer />

    <script>
        // Intersection Observer to detect when elements are in view for smooth fade-up animation
        const fadeElements = document.querySelectorAll('.fade-up');
        
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        fadeElements.forEach(element => {
            observer.observe(element);
        });
    </script>
</body>
</html>
