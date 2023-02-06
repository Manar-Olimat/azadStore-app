@extends('layout')

@section('content')
    


<section>
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
          <div class="w-full bg-white px-10 py-10">
            <div class="flex justify-between border-b pb-8">
              <h1 class="font-semibold text-2xl">Wishlist</h1>
              <h2 class="font-semibold text-2xl">{{$count}} items</h2>
            </div>
            <div class="flex mt-10 mb-5">
              <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
              <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Action</h3>
              {{-- <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3> --}}
            </div>
            @foreach ($products as $item)
                 <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
              <div class="flex w-2/5"> <!-- product -->
                <div class="w-20">
                  <img class="h-24" src={{$item->images}} alt="">
                </div>
                <div class="flex flex-col justify-between ml-4 flex-grow">
                  <span class="font-bold text-sm">{{$item->name}}</span>
                  {{-- <span class="text-red-500 text-xs">Apple</span> --}}
                </div>
              </div>
             
              <span class="text-center w-1/5 font-semibold text-sm">{{$item->price}}</span>
              <span class="text-center w-1/5 font-semibold text-sm">        
                <a href="/removeFromWishlist?id={{$item->id}}" class="font-bold hover:text-red-500 text-gray-500 text-xs">Remove </a>&nbsp&nbsp&nbsp
                <form action="/addToCart" method="POST">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="product_id" id="product_id" value={{$item->id}}>
                  <input type="hidden" name="quantity" id="quantity" value='1'>
                  
                <button class="font-bold hover:text-purple-500 text-gray-500 text-xs">Add To Cart</button>
                </form>
               </span>
            </div>
            @endforeach
           
    
            
    
            
          </div>
    

    
        </div>
      </div> 
  </section>
  

@endsection