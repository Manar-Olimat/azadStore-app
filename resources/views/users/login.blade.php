@extends('layout')

@section('content')
    


<section class="w-full register_bg dark:bg-gray-900 ">
  <div class="flex flex-col items-center  justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
     
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Welcome Back
              </h1>
              <form class="space-y-4 md:space-y-6" action="/users/authenticate" method="POST">
                  @csrf
                  <p class="text-lg font-medium">Sign in to your account</p>
                  <button type="button" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                      <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                      Sign in with Google
                    </button>
                    <button type="button" class="text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2 mb-2">
                      <svg class="mr-2 -ml-1 w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
                      Sign in with Apple
                    </button> 
                  
                  <div>
                      <label for="email" class="block text-start mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input
                       type="email" 
                        name="email" 
                        id="email"
                        value="{{old('email')}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Manar" required minLength='3'/>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p> 
                        @enderror
               
                        </div>
                  <div>
                      <label for="password" class="block text-start mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input 
                      type="password"
                        name="password"
                         id="password"
                          placeholder="••••••••" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Manar" required minLength='3'/>
                          @error('password')
                          <p class="text-red-500 text-xs mt-1">
                              {{$message}}
                          </p>     
                                  @enderror
 
                                  </div>

                                  <a href="/forget-password"> forget password?</a>
                                  <button
                                    type="submit"
                                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white"
                                  >
                                    Sign in
                                  </button>
                            
                               
                              
               

                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                  New User? <a href="/signup-new-user" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up Here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>


@endsection
