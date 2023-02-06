@extends('layout')

@section('content')


{{-- <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
         src={{$product->images}}>
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->name}}</h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-gray-600 ml-3">4 Reviews</span>
            </span>
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
          <p class="leading-relaxed">
            {{$product->description}}</p>
         
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
            <div class="flex">
              <span class="mr-3">{{$product->color}}</span>
              <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
              <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
              <button class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
            </div>

            <div class="flex ml-6 items-center">
                <span class="mr-3">Size</span>
                <div class="relative">
                  <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                    <option>SM</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                  <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 9l6 6 6-6"></path>
                    </svg>
                  </span>
                </div>
              </div>
            
          </div>


          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
            <div class="custom-number-input flex h-10 w-32">
                <label for="custom-input-number" 
                class="w-full text-gray-700 text-sm font-semibold">Quantity
                </label>
                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                  <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl font-thin">−</span>
                  </button>
                  <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0">
                <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                  <span class="m-auto text-2xl font-thin">+</span>
                </button>
              </div>
              </div>

            <div class="flex ml-6 items-center">
                <span class="mr-3">Size</span>
                <div class="relative">
                  <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                    <option>SM</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                  <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 9l6 6 6-6"></path>
                    </svg>
                  </span>
                </div>
              </div>
            
          </div>

          

          <div class="flex">
            @if ($product->discount != null)
            <div class="discount_price">
              <span class="text-sm font-medium text-gray-600 product_price">{{$product->price}}JD</span>
              <span class="text-sm font-medium text-gray-600 product_price_discount">{{$product->price-($product->price*($product->discount/100))}}JD</span>
          </div>
            @else
                            <span class="title-font font-medium text-2xl text-gray-900">{{$product->price}} JD</span>

            @endif
            <form action="/addToCart" method="POST">
              @csrf
              <input type="hidden" name="product_id" id="product_id" value={{$product->id}}>
              <input type="number" name="quantity" id="quantity" >
              
              
            <button type="submit"
            class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Add To Cart</button>
            </form>
            
            <button type="submit" class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  

<section> --}}


<section>
    <div class="relative mx-auto max-w-screen-xl px-4 py-8">
      <div>
        <h1 class="text-2xl font-bold lg:text-3xl">{{$product->name}}</h1>
  
        {{-- <p class="mt-1 text-sm text-gray-500">SKU: #012345</p> --}}
      </div>
  
      <div class="grid gap-8 lg:grid-cols-4 lg:items-start">
        <div class="lg:col-span-3">
          <div class="relative mt-4">
            <img
              alt="Tee"
              src={{$product->images}}
              class="h-72 w-full rounded-xl object-cover lg:h-[540px] "
            />
  
            <div
              class="absolute bottom-4 left-1/2 inline-flex -translate-x-1/2 items-center rounded-full bg-black/75 px-3 py-1.5 text-white"
            >
              <svg
                class="h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"
                />
              </svg>
  
              <span class="ml-1.5 text-xs"> Hover to zoom </span>
            </div>
          </div>
  
          {{-- <ul class="mt-1 flex gap-1">
            <li>
              <img
                alt="Tee"
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="h-16 w-16 rounded-md object-cover"
              />
            </li>
  
            <li>
              <img
                alt="Tee"
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="h-16 w-16 rounded-md object-cover"
              />
            </li>
  
            <li>
              <img
                alt="Tee"
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="h-16 w-16 rounded-md object-cover"
              />
            </li>
  
            <li>
              <img
                alt="Tee"
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="h-16 w-16 rounded-md object-cover"
              />
            </li>
          </ul> --}}
        </div>
  
        <div class="lg:sticky lg:top-0">
            

            
  
            <fieldset>
              <legend class="text-lg font-bold">Category</legend>
  
              <div class="mt-2 flex gap-1">
                                  <span
                    class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"
                  >
                  {{$product->category}}
                  </span>
               
              </div>
            </fieldset>
  
            {{-- <div class="rounded border bg-gray-100 p-4">
              <p class="text-sm">
                <span class="block"> Pay as low as $3/mo with 0% APR. </span>
  
                <a href="" class="mt-1 inline-block underline"> Find out more </a>
              </p>
            </div> --}}
  
            <div>
              <p class="text-xl font-bold mb-8 mt-8">{{$product->price}} JD</p>
            </div>
            <form action="/addToCart" method="POST">
              @csrf
              @method('POST')
              <input type="hidden" name="product_id" id="product_id" value={{$product->id}}>
              <input type="hidden" name="quantity" id="quantity" value='1'>
              
            <button
              type="submit"
              class="w-full mb-8 rounded log_btn px-6 py-3 text-sm font-bold uppercase tracking-wide text-white"
            >
              Add to cart
            </button>
            </form>

            <form action="/wishlistAddNew" method="POST">
              @csrf
              {{-- <input type="hidden" name="user_id" id="user_id" value={{}}> --}}
              <input type="hidden" name="product_id" id="product_id" value={{$product->id}}>
            <button
              type="submit"
              class="w-full rounded border border-gray-300 bg-gray-100 px-6 py-3 text-sm font-bold uppercase tracking-wide"
            >
              Add To Wishlist
            </button>
          </form>
        </div>
  
        <div class="lg:col-span-3">
          <div
            class="prose max-w-none [&>iframe]:mt-6 [&>iframe]:aspect-video [&>iframe]:w-full [&>iframe]:rounded-xl"
          >
            <p>
              {{$product->description}}
            </p>
  
            {{-- <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
              eveniet ipsam mollitia nesciunt illo! Suscipit, corrupti!
            </p>
  
            <h2>Features</h2>
  
            <ul>
              <li>Smooth neck design</li>
              <li>Breathable fabric</li>
              <li>Odour prevention</li>
              <li>Made from recycled materials</li>
            </ul> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  
</section>


{{-- Reviews --}}
{{-- @include('partials._single-product-reviews'); --}}
<x-single-product-reviews :reviews="$reviews" :productid="$product->id" :rateAvg="$rateAvg"/>


  {{-- <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8">
      <div class="relative mx-auto max-w-3xl text-center">
        <span
          class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-black/10"
        ></span>
  
        <h2
          class="relative inline-block bg-white px-4 text-center text-2xl font-bold"
        >
          More From This Seller
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
  
      
    </div>
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
          Explore More
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
  
    </div>
  </section> --}}


 







{{-- counter script --}}
<script>
    function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value--;
    target.value = value;
  }

  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );

  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );

  decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
  });
</script>
@endsection