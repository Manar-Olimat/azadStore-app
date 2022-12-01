@extends('layout')

@section('content')
    <!--
      This component uses @tailwindcss/line-clamp

      yarn add @tailwindcss/line-clamp
      npm install @tailwindcss/line-clamp

      plugins: [require('@tailwindcss/line-clamp')]
    -->

    {{-- <article class="flex bg-white transition hover:shadow-xl">
        <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
            <time datetime="2022-10-10"
                class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                <span>2022</span>
                <span class="w-px flex-1 bg-gray-900/10"></span>
                <span>Oct 10</span>
            </time>
        </div>

        <div class="hidden sm:block sm:basis-56">
            <img alt="Guitar"
                src="https://images.unsplash.com/photo-1609557927087-f9cf8e88de18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                class="aspect-square h-full w-full object-cover" />
        </div>

        <div class="flex flex-1 flex-col justify-between">
            <div class="border-l border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                <a href="#">
                    <h3 class="font-bold uppercase text-gray-900">
                        Finding the right guitar for your style - 5 tips
                    </h3>
                </a>

                <p class="mt-2 text-sm leading-relaxed text-gray-700 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                    dolores, possimus pariatur animi temporibus nesciunt praesentium dolore
                    sed nulla ipsum eveniet corporis quidem, mollitia itaque minus soluta,
                    voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
                    Molestias explicabo corporis voluptatem?
                </p>
            </div>

            <div class="sm:flex sm:items-end sm:justify-end">
                <a href="#"
                    class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400">
                    Read Blog
                </a>
            </div>
        </div>
    </article> --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>
    
                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt, laudantium
                    quia tempore delect
                </p>
            </div>
    
            <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2">
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96" src="https://images.unsplash.com/photo-1644018335954-ab54c83e007f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
    
                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#" class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            All the features you want to know
                        </a>
    
                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                            laudantium quia tempore delect
                        </p>
    
                        <p class="mt-3 text-sm text-blue-500">21 October 2019</p>
                    </div>
                </div>
    
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96" src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
    
                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a href="#" class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            How to use sticky note for problem solving
                        </a>
    
                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                            laudantium quia tempore delect
                        </p>
    
                        <p class="mt-3 text-sm text-blue-500">20 October 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            <span
  class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-sm text-purple-500"
>
  Live
</span>
        <!-- drawer component -->
        <div id="drawer-disabled-backdrop" class="fixed z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800"
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
                <ul class="space-y-2">
                    <li>
                        {{-- <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                       <span class="ml-3">Dashboard</span>
                    </a> --}}
                        <div>
                            <div class="flex space-x-2 text-gray-800 dark:text-white">
                                {{-- <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials"/>
                           <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials"/> --}}
                                <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Material</p>
                            </div>
                            <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">

                                <div
                                    class="flex space-x-2 md:justify-center md:items-center ml-6 items-center justify-start">
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Leather" name="Leather"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Cotton" name="Cotton"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Fabric" name="Fabric"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Crocodile" name="Crocodile"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Wool" name="Wool"
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
                        {{-- <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                       <span class="ml-3">Dashboard</span>
                    </a> --}}
                        <div>
                            <div class="flex space-x-2 text-gray-800 dark:text-white">
                                {{-- <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials"/>
                           <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials"/> --}}
                                <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Material</p>
                            </div>
                            <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">

                                <div
                                    class="flex space-x-2 md:justify-center md:items-center ml-6 items-center justify-start">
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Leather" name="Leather"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Cotton" name="Cotton"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Fabric" name="Fabric"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Crocodile" name="Crocodile"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Wool" name="Wool"
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
                        {{-- <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                       <span class="ml-3">Dashboard</span>
                    </a> --}}
                        <div>
                            <div class="flex space-x-2 text-gray-800 dark:text-white">
                                {{-- <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials"/>
                           <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials"/> --}}
                                <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Material</p>
                            </div>
                            <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">

                                <div
                                    class="flex space-x-2 md:justify-center md:items-center ml-6 items-center justify-start">
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Leather" name="Leather"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Cotton" name="Cotton"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Fabric" name="Fabric"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Crocodile" name="Crocodile"
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
                                    <input class="w-4 h-4 mr-2" type="checkbox" id="Wool" name="Wool"
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
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated
                        link</a>
                </div>
            </div>

        </div>


    </div>



    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8">
            <div class="relative mx-auto max-w-3xl text-center">
                <span class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-black/10"></span>

                <h2 class="relative inline-block bg-white px-4 text-center text-2xl font-bold">
                    Explore Products
                </h2>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
                <a href="/product-details" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>

                <a href="#" class="relative block border border-gray-100">
                    <button type="button" class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                        <span class="sr-only">Wishlist</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>

                    <img alt="Toy"
                        src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                        class="h-56 w-full object-contain" />

                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-600">$14.99</p>

                        <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

                        <button type="button"
                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4">
                            <span class="text-sm font-medium"> Add to Cart </span>

                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </button>
                    </div>
                </a>
            </div>


        </div>
    </section>
@endsection
