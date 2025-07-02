
<x-layout.app>
   @section('title', content: 'Contact Us')

   <br /> <br /> <br /> <br />                 
 
 
  
</div>
  <!-- Contact Us -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="max-w-2xl lg:max-w-5xl mx-auto">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-violet-800 sm:text-4xl dark:text-white">
        Contact us
      </h1>
      <p class="mt-1 text-gray-600 dark:text-neutral-400">
        We'd love to talk about how we can help you.
      </p>
      <p>
         @if (Session::has('success'))
   <div class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
  <span id="hs-soft-color-success-label" class="font-bold">Success:</span> {{ Session::get('success') }}.
  @endif
      </p>
    </div>

    <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
      <!-- Card -->
      <div class="flex flex-col border border-gray-200 rounded-xl p-4 sm:p-6 lg:p-8 dark:border-neutral-700">
        <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-200">
          Fill in the form
        </h2>

        <form action="{{ route('home.savecontact') }}" method="POST" >
          @csrf
          <div class="grid gap-4">
            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label for="hs-firstname-contacts-1" class="sr-only">First Name</label>
                <input type="text" name="firstname" id="hs-firstname-contacts-1" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="First Name">
                 <div class="mt-2 text-sm text-red-700 dark:text-red-400">
                  @error('firstname')
                    {{ $message }}
                  @enderror
                 </div>
              </div>

              <div>
                <label for="hs-lastname-contacts-1" class="sr-only">Last Name</label>
                <input type="text" name="lastname" id="hs-lastname-contacts-1" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Last Name">
                <div class="mt-2 text-sm text-red-700 dark:text-red-400">
                  @error('lastname')
                    {{ $message }}
                  @enderror
                </div>
              </div>
            </div>
            <!-- End Grid -->

            <div>
              <label for="hs-email-contacts-1" class="sr-only">Email</label>
              <input type="email" name="email" id="hs-email-contacts-1" autocomplete="email" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Email">
              <div class="mt-2 text-sm text-red-700 dark:text-red-400">
                @error('email')
                  {{ $message }}
                @enderror
              </div>
            </div>

            <div>              
              <select name="query" id="inquiry-type" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" >
                <option value="">Select your inquiry type</option>
                <option value="Domain Registration">Domain inquiry</option>
                <option value="Reseller Hosting">Reseller Hosting</option>
                 <option value="Hosting">Shared Hosting</option>
                <option value="Website Development">Website or application Development</option>
                <option value="Domain">Domain inquiry</option>
                 <option value="Email Hosting">Email Hosting</option>
                 <option value="VPS Hosting">VPS Hosting</option>
                 <option value="Dedicated Server">Dedicated Server</option>
                 <option value="Cloud Hosting">Cloud Hosting</option>
                 <option value="SSL Certificates">SSL Certificates</option>
                 <option value="DNS Management">DNS Management</option>
                 <option value="Website Migration">Website Migration</option>
                <option value="Wordpress Hosting">Wordpress Hosting</option>
                 <option value="Other Query">Other Query</option> 
              </select>
              <div class="mt-2 text-sm text-red-700 dark:text-red-400">
                @error('query')
                  {{ $message }}
                @enderror
              </div>
            </div>

            <div>
              <label for="hs-about-contacts-1" class="sr-only">Details</label>
              <textarea id="hs-about-contacts-1" name="message" rows="4" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Details"></textarea>
            </div>
             <div class="mt-2 text-sm text-red-700 dark:text-red-400">
              @error('message')
                {{ $message }}
              @enderror
             </div>
          </div>
          <!-- End Grid -->

          <div class="mt-4 grid">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 focus:outline-hidden focus:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none">Send inquiry</button>
          </div>

          <div class="mt-3 text-center">
            <p class="text-sm text-gray-500 dark:text-neutral-500">
              We'll get back to you in 1-2 business days.
            </p>
          </div>
        </form>
      </div>
      <!-- End Card -->

      <div class="divide-y divide-gray-200 dark:divide-neutral-800">        

        <!-- Icon Block -->
        <div class=" flex gap-x-7 py-6">
          <svg class="shrink-0 size-6 mt-1.5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"/><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"/></svg>
          <div class="grow">
            <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Contact us by email</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">If you wish to write us an email instead please use</p>
            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
              support@jethrotech.com.pg or sales@jethrotech.com.pg
            </a>
          </div>
        </div>
        <!-- End Icon Block -->
      </div>
    </div>
  </div>
</div>
<!-- End Contact Us -->
     

</x-layout.app>