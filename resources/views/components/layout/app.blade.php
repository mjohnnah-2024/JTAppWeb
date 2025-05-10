<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layout.head />

<body>
    <!-- ========== MAIN CONTENT ========== -->
<main id="content">
   
    <x-layout.header />
  
    {{ $slot }} 

</main>

<x-layout.footer />
</body>
</html>