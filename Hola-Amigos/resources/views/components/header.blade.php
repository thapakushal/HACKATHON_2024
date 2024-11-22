<<<<<<< HEAD
<!-- Add Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<header class="text-white body-font bg-[#2A776F] sticky top-0 z-50" style="font-family: 'Poppins', sans-serif;">
=======
<header class="text-white body-font bg-[#21A350] sticky top-0 z-50">
>>>>>>> parent of fcdeca1 (order database and header changed)
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
        <a class="flex items-center mb-4 font-medium title-font md:mb-0">
            <img 
                alt="Logo" 
                class="block object-contain h-12 p-2 w-13" 
                src="{{ asset('images/logo.png') }}">
            <a href="{{ url('/')}}"><span class="ml-3 text-xl">मल Basket</span></a>
        </a>
        <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto">
            <a href="{{ url('/') }}" class="mr-5 hover:text-gray-300">Home</a>
            <a href="{{ route('about') }}" class="mr-5 hover:text-gray-300">About Us</a> 
            <a href="{{ route('contact') }}" class="mr-5 hover:text-gray-300">Contact Us</a>
        </nav>
        
        <!-- Link to the login page -->
<<<<<<< HEAD
        <a href="{{ route('login') }}" class="ml-8">
            <button class="inline-flex items-center px-4 py-2 mt-4 text-white bg-[#2A776F] rounded-full shadow-md hover:bg-[#0E5C2E] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2A776F] transition duration-300 md:mt-0">
                SELLER LOGIN
                <img 
                    class="w-5 h-5 ml-2"
                    src="https://img.icons8.com/pulsar-color/48/login-rounded-right.png" 
                    alt="login-rounded-right"/>
=======
        <a href="{{ route('login') }}">
            <button class="inline-flex items-center px-3 py-1 mt-4 text-base text-black bg-gray-100 border-0 rounded focus:outline-none hover:bg-gray-200 md:mt-0">
                Login as Seller
                {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg> --}}
                <img width="32" height="32 " src="https://img.icons8.com/pulsar-color/48/login-rounded-right.png" alt="login-rounded-right"/>

                
>>>>>>> parent of fcdeca1 (order database and header changed)
            </button>
            
        </a>
    </div>
</header>
