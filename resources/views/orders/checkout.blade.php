@extends('layout')

@section('content')
    
<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<section>
    <h1 class="sr-only">Checkout</h1>
  
    <div class="relative mx-auto max-w-screen-2xl">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="bg-gray-50 py-12 md:py-24">
          <div class="mx-auto max-w-lg px-4 lg:px-8">
            <div class="flex items-center">
              {{-- <span class="h-10 w-10 rounded-full bg-blue-900"></span> --}}
  
              {{-- <h2 class="ml-4 font-medium">BambooYou</h2> --}}
            </div>
  
            {{-- <div class="mt-8">
              <p class="text-2xl font-medium tracking-tight">{{$total}}</p>
              <p class="mt-1 text-sm text-gray-500">For the purchase of</p>
            </div> --}}
  
            <div class="mt-12">
              <div class="flow-root">
                <ul class="-my-4 divide-y divide-gray-200">
                  
                  @foreach ($products as $item)
                      
                 
                  <li class="flex items-center justify-between py-4">
                    <div class="flex items-start">
                      <img
                        alt="Trainer"
                        src={{$item['products']->images}}
                        class="h-16 w-16 flex-shrink-0 rounded-lg object-cover"
                      />
  
                      <div class="ml-4">
                        <p class="text-sm">{{$item['products']->name}}</p>
  
                       
                      </div>
                    </div>
  
                    <div>
                      <p class="text-sm">
                        {{$item['products']->price}}JD
                        <small class="text-gray-500">x{{$item['quantity'][0]->quantity}}</small>
                      </p>
                    </div>
                  </li>
   @endforeach
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
  
        <div class="bg-white py-12 md:py-24">
          <div class="mx-auto max-w-lg px-4 lg:px-8">
            <form class="grid grid-cols-6 gap-4" action="/">
              <div class="col-span-3">
                <label class="mb-1 block text-sm text-gray-600" for="first_name">
                  First Name
                </label>
  
                <input
                  class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm"
                  type="text"
                  id="first_name" required
                />
              </div>
  
              <div class="col-span-3">
                <label class="mb-1 block text-sm text-gray-600" for="last_name">
                  Last Name
                </label>
  
                <input
                  class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm"
                  type="text"
                  id="last_name"required
                />
              </div>
  
              <div class="col-span-6">
                <label class="mb-1 block text-sm text-gray-600" for="email">
                  Email
                </label>
  
                <input
                  class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm"
                  type="email"
                  id="email"required
                />
              </div>
  
              <div class="col-span-6">
                <label class="mb-1 block text-sm text-gray-600" for="phone">
                  Phone
                </label>
  
                <input
                  class="w-full rounded-lg border-gray-200 p-2.5 text-sm shadow-sm"
                  type="tel"
                  id="phone"required
                />
              </div>
  
              <fieldset class="col-span-6">
                <legend class="mb-1 block text-sm text-gray-600">
                  Card Details
                </legend>
  
                <div class="-space-y-px rounded-lg bg-white shadow-sm">
                  <div>
                    <label class="sr-only" for="card-number">Card Number</label>
  
                    <input
                      class="relative w-full rounded-t-lg border-gray-200 p-2.5 text-sm placeholder-gray-400 focus:z-10"
                      type="text"
                      name="card-number"
                      id="card-number"
                      placeholder="Card number"required
                    />
                  </div>
  
                  <div class="flex -space-x-px">
                    <div class="flex-1">
                      <label class="sr-only" for="card-expiration-date">
                        Expiration Date
                      </label>
  
                      <input
                        class="relative w-full rounded-bl-lg border-gray-200 p-2.5 text-sm placeholder-gray-400 focus:z-10"
                        type="text"
                        name="card-expiration-date"
                        id="card-expiration-date"
                        placeholder="MM / YY"required
                      />
                    </div>
  
                    <div class="flex-1">
                      <label class="sr-only" for="card-cvc">CVC</label>
  
                      <input
                        class="relative w-full rounded-br-lg border-gray-200 p-2.5 text-sm placeholder-gray-400 focus:z-10"
                        type="text"
                        name="card-cvc"
                        id="card-cvc"required
                        placeholder="CVC"
                      />
                    </div>
                  </div>
                </div>
              </fieldset>
  
              <fieldset class="col-span-6">
                <legend class="mb-1 block text-sm text-gray-600">
                  Billing Address
                </legend>
  
                <div class="-space-y-px rounded-lg bg-white shadow-sm">
                  <div>
                    <label class="sr-only" for="country">Country</label>
  
                    <select
                      class="relative w-full rounded-t-lg border-gray-200 p-2.5 text-sm focus:z-10"
                      id="country"
                      name="country"
                      autocomplete="country-name"required
                    >
                      <option>Jordan</option>
                      <option>Wales</option>
                      <option>Scotland</option>
                      <option>France</option>
                      <option>Belgium</option>
                      <option>Japan</option>
                    </select>
                  </div>
  
                  <div>
                    <label class="sr-only" for="postal-code">
                      ZIP/Post Code
                    </label>
  
                    <input
                      class="relative w-full rounded-b-lg border-gray-200 p-2.5 text-sm placeholder-gray-400 focus:z-10"
                      type="text"
                      name="postal-code"
                      id="postal-code"required
                      autocomplete="postal-code"
                      placeholder="ZIP/Post Code"
                    />
                  </div>
                </div>
              </fieldset>
  
              <div class="col-span-6">
                <a href="/pay">
                  <button
                  class="block w-full rounded-lg bg-black p-2.5 text-sm text-white"
                  type="submit"
                ></a>
                  Pay Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection