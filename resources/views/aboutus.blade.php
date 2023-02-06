@extends('layout')

@section('content')
<section class="bg-white dark:bg-gray-900">
    {{-- <div class={styles.bg_header}> --}}
   {{-- <h2 class={styles.home_header}>About Us </h2> --}}
   
      
   </div>
 <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
     <img class="w-full dark:hidden" src="https://i.etsystatic.com/inv/d9a824/4551230567/inv_620x495.4551230567_dh1tfpy2.jpg?version=0" alt="dashboard image"/>
     {{-- {/* <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image"/> */} --}}
     <div class="mt-4 md:mt-0">
         <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"> Azad Store</h2>
         <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
            Azad Store is the global marketplace for unique and creative goods. It’s home to a universe of special, extraordinary items, from unique handcrafted pieces to vintage treasures.
         </p>
         <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
             Get started
             <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </a>
     </div>
 </div>
 <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
    
 <div class="mt-4 md:mt-0">
         <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Why Us?</h2>
         <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
            In a time of increasing automation, it’s our mission to keep human connection at the heart of commerce. That’s why we built a place where creativity lives and thrives because it’s powered by people. We help our community of sellers turn their ideas into successful businesses. Our platform connects them with millions of buyers looking for an alternative—something special with a human touch, for those moments in life that deserve imagination.
         </p>
     
     </div>
 
     <img class="w-full dark:hidden" src="https://i.etsystatic.com/inv/7f9000/4586484992/inv_425x340.4586484992_sb9tz1an.jpg?version=0" alt="dashboard image"/>
     {{-- {/* <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image"/> */} --}}
    </div> 
</section>

@endsection