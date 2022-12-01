@extends('layout')

@section('content')

<x-index-discount-hero/>  
{{-- <x-index-noDiscount-hero/>   --}}

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<section class="hotOffers">
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-lg font-bold">Special Offers</h2>

      <p class="text-2xl font-medium text-indigo-600">
        Best Prices for Gadgets
      </p>
    </div>

    <div class="swiper mt-8">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="#" class="relative block border border-gray-100">
            <button
              type="button"
              class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
            >
              <span class="sr-only">Wishlist</span>
              <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
              </svg>
            </button>

            <img
              alt="Toy"
              src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
              class="h-56 w-full object-contain lg:h-72"
            />

            <div class="p-6">
              <span
                class="inline-block bg-yellow-400 px-3 py-1 text-xs font-medium"
              >
                New
              </span>

              <h3 class="mt-4 text-lg font-bold">Robot Toy</h3>

              <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p>

              <button
                type="button"
                class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
              >
                <span class="text-sm font-medium"> Add to Cart </span>

                <svg
                  class="ml-1.5 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                  />
                </svg>
              </button>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#" class="relative block border border-gray-100">
            <button
              type="button"
              class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
            >
              <span class="sr-only">Wishlist</span>
              <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
              </svg>
            </button>

            <img
              alt="Toy"
              src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
              class="h-56 w-full object-contain lg:h-72"
            />

            <div class="p-6">
              <span
                class="inline-block bg-yellow-400 px-3 py-1 text-xs font-medium"
              >
                New
              </span>

              <h3 class="mt-4 text-lg font-bold">Robot Toy</h3>

              <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p>

              <button
                type="button"
                class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
              >
                <span class="text-sm font-medium"> Add to Cart </span>

                <svg
                  class="ml-1.5 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                  />
                </svg>
              </button>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#" class="relative block border border-gray-100">
            <button
              type="button"
              class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
            >
              <span class="sr-only">Wishlist</span>
              <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
              </svg>
            </button>

            <img
              alt="Toy"
              src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
              class="h-56 w-full object-contain lg:h-72"
            />

            <div class="p-6">
              <span
                class="inline-block bg-yellow-400 px-3 py-1 text-xs font-medium"
              >
                New
              </span>

              <h3 class="mt-4 text-lg font-bold">Robot Toy</h3>

              <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p>

              <button
                type="button"
                class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
              >
                <span class="text-sm font-medium"> Add to Cart </span>

                <svg
                  class="ml-1.5 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                  />
                </svg>
              </button>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#" class="relative block border border-gray-100">
            <button
              type="button"
              class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
            >
              <span class="sr-only">Wishlist</span>
              <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
              </svg>
            </button>

            <img
              alt="Toy"
              src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
              class="h-56 w-full object-contain lg:h-72"
            />

            <div class="p-6">
              <span
                class="inline-block bg-yellow-400 px-3 py-1 text-xs font-medium"
              >
                New
              </span>

              <h3 class="mt-4 text-lg font-bold">Robot Toy</h3>

              <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p>

              <button
                type="button"
                class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
              >
                <span class="text-sm font-medium"> Add to Cart </span>

                <svg
                  class="ml-1.5 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                  />
                </svg>
              </button>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#" class="relative block border border-gray-100">
            <button
              type="button"
              class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
            >
              <span class="sr-only">Wishlist</span>
              <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
              </svg>
            </button>

            <img
              alt="Toy"
              src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
              class="h-56 w-full object-contain lg:h-72"
            />

            <div class="p-6">
              <span
                class="inline-block bg-yellow-400 px-3 py-1 text-xs font-medium"
              >
                New
              </span>

              <h3 class="mt-4 text-lg font-bold">Robot Toy</h3>

              <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p>

              <button
                type="button"
                class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
              >
                <span class="text-sm font-medium"> Add to Cart </span>

                <svg
                  class="ml-1.5 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                  />
                </svg>
              </button>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="#" class="relative block border border-gray-100">
            <button
              type="button"
              class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
            >
              <span class="sr-only">Wishlist</span>
              <svg
                class="h-4 w-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                ></path>
              </svg>
            </button>

            <img
              alt="Toy"
              src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
              class="h-56 w-full object-contain lg:h-72"
            />

            <div class="p-6">
              <span
                class="inline-block bg-yellow-400 px-3 py-1 text-xs font-medium"
              >
                New
              </span>

              <h3 class="mt-4 text-lg font-bold">Robot Toy</h3>

              <p class="mt-2 text-sm font-medium text-gray-600">$14.99</p>

              <button
                type="button"
                class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
              >
                <span class="text-sm font-medium"> Add to Cart </span>

                <svg
                  class="ml-1.5 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                  />
                </svg>
              </button>
            </div>
          </a>
        </div>

       
      </div>

      <div class="swiper-pagination !relative !bottom-0 mt-12"></div>
    </div>
  </div>
</section>

<script>
  new Swiper('.swiper', {
    loop: true,
    spaceBetween: 32,
    slidesPerView: 1,
    autoplay:true,
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  })
</script>


<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8">
    <div class="relative mx-auto max-w-3xl text-center">
      <span
        class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-black/10"
      ></span>

      <h2
        class="relative inline-block bg-white px-4 text-center text-2xl font-bold"
      >
        Explore Products
      </h2>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>
    </div>

  
  </div>
</section>

<section>
  <a href="#" class="group relative flex h-96 w-full items-end bg-black">
    <img
      alt="Bike"
      src="https://images.unsplash.com/photo-1605008585816-03ab23ce80af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
      class="absolute inset-0 h-full w-full object-cover transition-opacity group-hover:opacity-90"
    />
  
    <div
      class="relative w-full bg-red-700 p-6 text-center tracking-widest text-white transition-colors group-hover:bg-black sm:w-2/3"
    >
      <h3 class="text-lg uppercase">Become a Seller</h3>
  
      <p class="mt-1 text-xs font-medium uppercase">Design your own</p>
    </div>
  </a>
  
</section>


<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8">
    <div class="relative mx-auto max-w-3xl text-center">
      <span
        class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-black/10"
      ></span>

      <h2
        class="relative inline-block bg-white px-4 text-center text-2xl font-bold"
      >
        Recently Viewed
      </h2>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">
      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>

      <a href="#" class="relative block border border-gray-100">
        <button
          type="button"
          class="absolute right-4 top-4 rounded-full bg-black p-2 text-white"
        >
          <span class="sr-only">Wishlist</span>
          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            ></path>
          </svg>
        </button>

        <img
          alt="Toy"
          src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
          class="h-56 w-full object-contain"
        />

        <div class="p-6">
          <p class="text-sm font-medium text-gray-600">$14.99</p>

          <h3 class="mt-1 text-lg font-bold">Robot Toy</h3>

          <button
            type="button"
            class="mt-4 flex w-full items-center justify-center rounded-sm bg-yellow-500 px-8 py-4"
          >
            <span class="text-sm font-medium"> Add to Cart </span>

            <svg
              class="ml-1.5 h-5 w-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              />
            </svg>
          </button>
        </div>
      </a>
    </div>

    <div class="mt-4 text-center">
      <button type="button" class="text-xs text-gray-500 underline">
        Clear Recently Viewed
      </button>
    </div>
  </div>
</section>




@endsection