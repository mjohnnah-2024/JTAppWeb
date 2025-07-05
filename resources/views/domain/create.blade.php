<x-layout.app>

  <!-- Hero -->
    <div class="relative">
      <!-- Gradients -->
      <div aria-hidden="true" class="flex -z-1 absolute -top-48 start-0">
        <div class="bg-purple-200 opacity-30 blur-3xl w-[1036px] h-150 dark:bg-purple-900 dark:opacity-20"></div>
        <div class="bg-gray-200 opacity-90 blur-3xl w-[577px] h-75 transform translate-y-32 dark:bg-neutral-800/60"></div>
      </div>
      <!-- End Gradients -->

      <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 lg:pt-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10">
          <h2 class="text-3xl leading-tight font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight bg-clip-text bg-linear-to-r from-violet-600 to-fuchsia-700 text-transparent">Register PNG Domain</h2>
          <p class="mt-2 lg:text-lg text-gray-800 dark:text-neutral-200">Start the process of registering your .pg domain by submitting the form below</p>
           <p class="mt-2 lg:text-sm text-gray-800 dark:text-neutral-200">To register other types of domains click
          <a href="https://client.jethrotech.com.pg/order/shop?catid=7052d137-e08d-241e-55da-5495163789e6" target="_blank">
            <span class="text-violet-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500">
              <strong>here</strong>
            </span>         
         </a>
          to instantly register your domain using the client portal.
          </p>
        </div>
        <!-- End Title -->       

         <!-- Announcement Banner -->
        <div class="flex justify-center">
         <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-xs text-gray-600 p-2 px-3 rounded-full transition hover:border-gray-300 focus:outline-hidden focus:border-gray-300 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="{{ route('home.plans') }}">
          If you alreday have a domain and just need hosting 
          <span class="flex items-center gap-x-1">
            <span class="border-s border-gray-200 text-blue-600 ps-2 dark:text-blue-500 dark:border-neutral-700">Clik here to subscrible to a hosting plan</span>
            <svg class="shrink-0 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </span>
         </a>        
      </div>
      <!-- End Announcement Banner -->

         <x-shared.domainregistrationform />

      <div class="absolute top-1/2 start-1/2 -z-1 transform -translate-y-1/2 -translate-x-1/2 w-85 h-85 border border-dashed border-violet-200 rounded-full dark:border-violet-900/60"></div>
      <div class="absolute top-1/2 start-1/2 -z-1 transform -translate-y-1/2 -translate-x-1/2 w-[575px] h-[575px] border border-dashed border-violet-200 rounded-full opacity-80 dark:border-violet-900/60"></div>
      <div class="absolute top-1/2 start-1/2 -z-1 transform -translate-y-1/2 -translate-x-1/2 w-[840px] h-[840px] border border-dashed border-violet-200 rounded-full opacity-60 dark:border-violet-900/60"></div>
      <div class="absolute top-1/2 start-1/2 -z-1 transform -translate-y-1/2 -translate-x-1/2 w-[1080px] h-[1080px] border border-dashed border-violet-200 rounded-full opacity-40 dark:border-violet-900/60"></div>
    </div>
    </div>
    
    <!-- End Hero --> 
</x-layout.app>
