  <!-- Search -->
  <form action="/all-products"> 
    <div class="hidden mx-10 md:block">
        <div class="w-full max-w-xl search relative flex">
            {{-- <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>

            <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Search"> --}}
       
        <span class="absolute left-4 top-3 text-lg text-gray-400">
      <i class="fa-solid fa-magnifying-glass"></i>
  </span> 
  
  
  <input type="text" name="search" id="search"
      class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none"
      placeholder="search">
  <button type="submit"
      class=" border border-primary text-white px-8 rounded-r-md  hover:text-primary transition">Search</button>

       
          </div>
    </div>

</form>