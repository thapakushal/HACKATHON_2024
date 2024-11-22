<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <x-header />


  
    <section class="text-gray-600 body-font">
      <div class="container flex flex-col items-center px-5 py-24 mx-auto md:flex-row">
        <div class="w-5 mb-13 lg:max-w-lg lg:w-full md:w-1/4 md:mb-0">
          {{-- <img class="object-cover object-center rounded" alt="Manure" src="images/manure1.webp"> --}}
          <img class="object-cover object-center rounded" alt="Manure" src="{{('https://img.freepik.com/premium-photo/beautiful-view-lettuce-farm-concept-lettuce-fields-agriculture-farming-greenery-scenic-view_864588-123235.jpg') }}">

        </div>
        <div class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 md:items-start md:text-left">
          <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">From Rural Manure to Urban Gardens
            <br class="hidden lg:inline-block">Join the Sustainable Revolution Today!
          </h1>
          <p class="mb-8 leading-relaxed">Welcome to मल Basket, a platform dedicated to fostering sustainable agricultural practices and building a bridge between Nepal's rural farmers and urban gardeners. We believe in creating a greener, more connected world by empowering farmers and supporting urban farming initiatives. 

            At मल Basket, we aim to tackle two pressing challenges in Nepal: the lack of market access for rural farmers to sell their organic manure and the growing demand for eco-friendly fertilizers among urban terrace farmers. By providing a seamless, user-friendly platform, we enable farmers to monetize their organic waste while helping urban gardeners grow healthier crops using sustainable resources.
            
            <br> Our mission is to promote a circular economy where organic resources are reused efficiently, contributing to environmental sustainability and economic resilience. We are committed to empowering rural communities, supporting urban agriculture, and fostering a culture of collaboration between villages and cities.
            
            Join us as we grow together — from rural roots to urban heights — for a sustainable and prosperous Nepal. Let’s cultivate a future where every farmer and every gardener thriveray.</p>
          <div class="flex justify-center">
            <button class="inline-flex px-6 py-2 text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600">Sign Up Now</button>
            
        </div>
      </div>
    </section>


  <x-footer />
    
</body>
</html>