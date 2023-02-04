@props(['item'])




{{-- <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4"> --}}
    <span  class="relative block border border-gray-100">
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
            {{-- src="https://images.unsplash.com/photo-1603356033288-acfcb54801e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" --}}
            src={{$item->images}}
            {{-- src='https://theelegance.pk/wp-content/uploads/2022/04/WHITE-FRIENDS-MALE-600x600-1.jpg' --}}
            class=" product_img " />

        <div class="p-6">
            <div class="discount_price">
                <span class="text-sm font-medium text-gray-600 product_price">{{$item->price}}JD</span>
                <span class="text-sm font-medium text-gray-600 product_price_discount">{{$item->price-($item->price*($item->discount/100))}}JD</span>
            </div>
<a href="/product-details/{{$item->id}}">
            <h3 class="mt-1 text-lg font-bold ">{{$item->name}}</h3>
</a>
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
    </span>

{{-- </div> --}}