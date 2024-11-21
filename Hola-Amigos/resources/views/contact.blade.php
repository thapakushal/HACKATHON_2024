<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>



<x-header />
    
<section class="relative text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col w-full mb-12 text-center">
      <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Contact Us</h1>
      <p class="mx-auto text-base leading-relaxed lg:w-2/3">From Rural Manure to Urban Gardens – Join the Sustainable Revolution Today!</p>
    </div>
    <div class="mx-auto lg:w-1/2 md:w-2/3">
      <div class="flex flex-wrap -m-2">
        <div class="w-1/2 p-2">
          <div class="relative">
            <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200">
          </div>
        </div>
        <div class="w-1/2 p-2">
          <div class="relative">
            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200">
          </div>
        </div>
        <div class="w-full p-2">
          <div class="relative">
            <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200"></textarea>
          </div>
        </div>
        <div class="w-full p-2">
          <button class="flex px-8 py-2 mx-auto text-lg text-white bg-green-500 border-0 rounded focus:outline-none hover:bg-green-600">Send Message</button>
        </div>
        <div class="w-full p-2 pt-8 mt-8 text-center border-t border-gray-200">
          <a class="text-green-500">malbasketnp@email.com</a>
          <p class="my-5 leading-normal">
           
          </p>
          <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500" href="www.facebook.com">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>


<x-footer />
</body>
</html>