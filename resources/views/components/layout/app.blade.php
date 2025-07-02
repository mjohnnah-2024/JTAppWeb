<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layout.head />

<body>
    <!-- ========== Main content ========== -->
<main id="content">
     <div class="overflow-hidden">   
    <x-layout.header />
     <hr class="border-t border-gray-200 dark:border-gray-700" /> 
      <!-- Gradients -->
      <div aria-hidden="true" class="flex -z-1 absolute -top-48 start-0">
        <div class="bg-purple-200 opacity-30 blur-3xl w-[1036px] h-150 dark:bg-purple-900 dark:opacity-20"></div>
        <div class="bg-gray-200 opacity-90 blur-3xl w-[577px] h-75 transform translate-y-32 dark:bg-neutral-800/60"></div>
      </div>
      <!-- End Gradients --> 

   
  
    {{ $slot }} 

     </div>
</main>
 <!-- ========== Footer ========== -->
 <br /> <br />  <br /> <br />
 <hr class="border-t border-gray-200 dark:border-gray-700" />
<x-layout.footer />
</body>
</html>