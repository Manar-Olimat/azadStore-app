@extends('layout')

@section('content')

<x-index-discount-hero/>  
{{-- <x-index-noDiscount-hero/>   --}}



<section class="hotOffers">
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-lg font-bold">Special Offers</h2>

      <p class="text-2xl font-medium text-indigo-600">
        Best Prices for Products
      </p>
    </div>

    <div class="swiper mt-8">
      <div class="swiper-wrapper">
        @foreach ($discountProducts as $item)
           <div class="swiper-slide">
          <x-product-card-discount :item="$item"/>
        </div>
        @endforeach

      

      
       
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

      {{-- display products from database --}}
      @foreach ($products as $item)
<x-product-card :item="$item"/> 
@endforeach
      </div>

  
  </div>
</section>

<section>
  <a href="/signup-new-seller" class="group relative flex h-96 w-full items-end bg-black">
    <img
      alt="Bike"
      src={{asset('images/seller.png')}}
      class="absolute inset-0 h-full w-full object-cover transition-opacity group-hover:opacity-90"
    />
  
    <div
      class="relative w-full become_seller_btn p-6 text-center tracking-widest text-white transition-colors group-hover:bg-black sm:w-2/3"
    >
      <h3 class="text-lg uppercase">Start selling today
        </h3>
  
      <p class="mt-1 text-xs font-medium uppercase">Open your own shop</p>
    </div>
  </a>
  
</section>


{{-- <section>
  <div class="mx-auto max-w-screen-xl px-4 py-8">
    <div class="relative mx-auto max-w-3xl text-center">
      <span
        class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-black/10"
      ></span>

      {{-- <h2
        class="relative inline-block bg-white px-4 text-center text-2xl font-bold"
      >
        Recently Viewed
      </h2> 
    </div>

    <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">

    </div>

  
  </div>
</section> --}}




@endsection