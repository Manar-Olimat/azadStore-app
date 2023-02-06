<div class="filter flex">
       

    <!-- drawer init and toggle -->
    <div class="text-center drawer_filter">
        <button
            class="text-white flex bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            type="button" data-drawer-target="drawer-disabled-backdrop" data-drawer-show="drawer-disabled-backdrop"
            data-drawer-backdrop="false" aria-controls="drawer-disabled-backdrop">
            <img class="dark:hidden"src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1.svg"
                alt="filter" />
            <img class="hidden dark:block"src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1dark.svg"
                alt="filter" />
            Filters
        </button>


    </div>
        {{-- <span
class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-sm text-purple-500"
>
Live
</span> --}}
    <!-- drawer component -->
    <div id="drawer-disabled-backdrop" 
    class="fixed z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-disabled-backdrop-label">
        <h5 id="drawer-disabled-backdrop-label"
            class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
        <button type="button" data-drawer-dismiss="drawer-disabled-backdrop" aria-controls="drawer-disabled-backdrop"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <form action="/all-products">
            <ul class="space-y-2">
                <li>
                 
                    <div>
                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                            {{-- <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials"/>
                       <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials"/> --}}
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Category</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">

                            <div
                                class="flex space-x-2 md:justify-center md:items-center ml-6 items-center justify-start">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="necklace" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Leather">cloth</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="cloth" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Cotton">shoes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-end">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="list" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Fabric">earrings</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="Crocodile" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Crocodile">accessories</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="Wool" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Wool">bedroom</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                </li>

                <li>
                  
                    <div>
                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                            {{-- <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials"/>
                       <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials"/> --}}
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Rating</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">

                            <div
                            class="flex space-x-2 md:justify-center md:items-center ml-6 items-center justify-start">
                            <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                value="Leather" />
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-center items-center">
                                    <label
                                        class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                        for="Leather">Leather</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                value="Cotton" />
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-center items-center">
                                    <label
                                        class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                        for="Cotton">Cotton</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-end">
                            <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                value="Fabric" />
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-center items-center">
                                    <label
                                        class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                        for="Fabric">Fabric</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                            <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                value="Crocodile" />
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-center items-center">
                                    <label
                                        class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                        for="Crocodile">Crocodile</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                value="Wool" />
                            <div class="inline-block">
                                <div class="flex space-x-6 justify-center items-center">
                                    <label
                                        class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                        for="Wool">Wool</label>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                </li>

                <li>
                 
                    <div>
                        <div class="flex space-x-2 text-gray-800 dark:text-white">
                           <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Discount</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">

                            <div
                                class="flex space-x-2 md:justify-center md:items-center ml-6 items-center justify-start">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="Leather" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Leather">Leather</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="Cotton" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Cotton">Cotton</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-end">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="Fabric" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Fabric">Fabric</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="Crocodile" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Crocodile">Crocodile</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                                <input class="w-4 h-4 mr-2" type="checkbox" id="filter_drawer" name="filter_drawer"
                                    value="Wool" />
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                        <label
                                            class="mr-2 text-sm leading-3 dark:text-gray-300 font-normal text-gray-600"
                                            for="Wool">Wool</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />
                </li>

            </ul>
            <button
                                    type="submit"
                                    class="block log_btn w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
                                  >
                                    Filter
                                  </button>
        </form>
        </div>
    </div>



    <div class="drop_filter">

        <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Sort By: 
            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>

        <!-- Dropdown menu -->
        <div id="dropdownDivider"
            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
           
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                <li>
                    <a href="?drop_filter=normal"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> Featured</a>
              {{-- <input type="hidden" name="drop_filter" value="Featured"> --}}
                    </li>
                
                <li>
                    <a href="?drop_filter=price_h_l"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Price (High to Low)</a>
               
                        {{-- <input type="hidden" name="drop_filter" value="Price (High to Low)"> --}}
                         </li>
                <li>
                    <a href="/all-products?drop_filter=price_l_h"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Price (Low to High)
                        {{-- <input type="hidden" name="drop_filter" value="Price (Low to High)">--}}
                        </a> 
                    </li>
                
                <li>
                    <a href="/all-products?drop_filter=newest"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Newest Arrivals</a>
                        {{-- <input type="hidden" name="drop_filter" value="Newest Arrivals"> --}}
                    </li>
            </ul>
        
        </div>

    </div>


</div>