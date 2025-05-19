<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layout.head />

<body>
    <!-- ========== Main content ========== -->
<main id="content">
     <div class="overflow-hidden">   
    <x-layout.header />
     <hr class="border-t border-gray-200 dark:border-gray-700" />  
  
    {{ $slot }} 

     </div>
</main>
 <!-- ========== Footer ========== -->
 <br /> <br />  <br /> <br />
 <hr class="border-t border-gray-200 dark:border-gray-700" />
<x-layout.footer />
</body>
</html>