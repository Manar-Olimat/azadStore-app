@extends('layout')

@section('content')
 
   
@include('partials._all-products-banner');
{{-- @include('partials._all-products-filters'); --}}

   



    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8">
            <div class="relative mx-auto max-w-3xl text-center">
                <span class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-black/10"></span>

                <h2 class="relative inline-block bg-white px-4 text-center text-2xl font-bold">
                    Explore Products
                </h2>
            </div>
            <div class="mt-8 grid grid-cols-2 gap-x-4 gap-y-8 lg:grid-cols-4">

            {{-- display products from database --}}
            @foreach ($products as $item)
 <x-product-card :item="$item"/> 
@endforeach
            </div>
           
            

            <div class="mt-6 p-4">
                {{$products->links()}}
            </div>

        </div>
    </section>
@endsection
