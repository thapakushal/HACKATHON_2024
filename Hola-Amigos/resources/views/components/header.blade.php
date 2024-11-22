<!-- Add Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<header class="text-white body-font bg-[#21A350] sticky top-0 z-50" style="font-family: 'Poppins', sans-serif;">
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
        <a class="flex items-center mb-4 font-medium title-font md:mb-0">
            <img 
                alt="Logo" 
                class="block object-contain h-12 p-2 w-13" 
                src="{{ asset('images/logo.png') }}"/>
            <a href="{{ url('/') }}">
                <span class="ml-3 text-xl font-semibold">मल BASKET</span>
            </a>
        </a>
        <nav class="flex flex-wrap items-center justify-center space-x-8 text-base md:ml-auto">
            <!-- Removed hover:underline -->
            <a href="{{ url('/') }}" class="font-bold transition hover:text-gray-300">HOME</a>
            <a href="{{ route('about') }}" class="font-bold transition hover:text-gray-300">ABOUT</a>
            <a href="{{ route('contact') }}" class="font-bold transition hover:text-gray-300">CONTACT</a>
        </nav>
        
        <!-- Link to the login page -->
        <a href="{{ route('login') }}" class="ml-8">
            <button class="inline-flex items-center px-4 py-2 mt-4 text-white bg-[#147F3F] rounded-full shadow-md hover:bg-[#0E5C2E] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#21A350] transition duration-300 md:mt-0">
                SELLER LOGIN
                <img 
                    class="w-5 h-5 ml-2"
                    src="https://img.icons8.com/pulsar-color/48/login-rounded-right.png" 
                    alt="login-rounded-right"/>
            </button>
        </a>
    </div>
</header>
