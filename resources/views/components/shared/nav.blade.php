<nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8 ">
    <div class="relative md:flex md:items-center md:justify-between">
      <div class="flex items-center justify-between">
        <a class="flex-none focus:outline-hidden focus:opacity-80" href="/">
          <img class="w-50 h-auto" src="{{asset('img/logo.png')}}" alt="Jethrotech Logo">
          <img class="hidden size-10 dark:block" src="{{asset('img/logod.png')}}" alt="Jethro Tech Logo"> 
        </img>
        </a>

        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-page-demo-pricing-collapse" aria-expanded="false" aria-controls="hs-navbar-page-demo-pricing" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-page-demo-pricing">
            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>
      </div>

      <div id="hs-navbar-page-demo-pricing" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-navbar-page-demo-pricing-collapse">
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
          <div class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid dark:divide-neutral-700">
            
            <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] py-3 md:py-4">
              <button id="hs-mega-menu-pdp" type="button" class="flex items-center w-full text-gray-800 hover:text-gray-400 focus:outline-hidden focus:text-gray-400 font-medium dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                Hosting Services
                <svg class="ms-2 size-2.5 text-gray-500 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                </svg>
              </button>

              <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full start-0 min-w-60 bg-white md:shadow-2xl rounded-lg py-2 md:p-4 dark:bg-neutral-900 dark:divide-neutral-700 before:absolute before:-top-5 before:start-0 before:w-full before:h-5" role="menu" aria-orientation="vertical" aria-labelledby="hs-mega-menu-pdp">
                <div class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                  <div class="flex flex-col mx-1 md:mx-0">
                    <a class="group flex gap-x-5 text-violet-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{ route('domain.create') }}">
                      <svg class="shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                      <div class="grow">
                        <p class="font-medium text-violet-800 dark:text-neutral-200">Domains</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 group-focus:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200 dark:group-focus:text-neutral-200">Register and secure business domains today. We support & manage .PG and all other domains.</p>
                      </div>
                    </a>

                    <a class="group flex gap-x-5 text-violet-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{ route('home.plans') }}">
                      <svg class="shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="14" y="3" rx="1"/><path d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3"/></svg>
                      <div class="grow">
                        <p class="font-medium text-violet-800 dark:text-neutral-200">Hosting Plans & Prices</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 group-focus:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200 dark:group-focus:text-neutral-200">Discover our hosting plans and subscribe.</p>
                      </div>
                    </a>

                    <a class="group flex gap-x-5 text-violet-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{ route('home.plans') }}">
                      <svg class="shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 11 2-2-2-2"/><path d="M11 13h4"/><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/></svg>
                      <div class="grow">
                        <p class="font-medium text-violet-800 dark:text-neutral-200">Reseller Hosting</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 group-focus:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200 dark:group-focus:text-neutral-200">Thinking of owning your own web hosting business, we provide reseller plans that allow you to do just that.</p>
                      </div>
                    </a>
                  </div>

                  <div class="flex flex-col mx-1 md:mx-0">
                    <a class="group flex gap-x-5 text-violet-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{ route('home.plans') }}">
                      <svg class="shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                      <div class="grow">
                        <p class="font-medium text-violet-800 dark:text-neutral-200">WordPress Hosting</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 group-focus:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200 dark:group-focus:text-neutral-200">We don't just host your wordpress site, we help you setup your backend including plugin updates, security and backup.</p>
                      </div>
                    </a>

                    <a class="group flex gap-x-5 text-violet-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{ route('home.plans') }}">
                      <svg class="shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"/></svg>
                      <div class="grow">
                        <p class="font-medium text-violet-800 dark:text-neutral-200">VPS Hosting</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 group-focus:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200 dark:group-focus:text-neutral-200">
                        Host your own server in the cloud & manage it remotely.
                        </p>
                      </div>
                    </a>

                    <a class="group flex gap-x-5 text-violet-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="https://client.jethrotech.com.pg/login" target="_blank">
                      <svg class="shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                      <div class="grow">
                        <p class="font-medium text-violet-800 dark:text-neutral-200">Client Area</p>
                        <p class="text-sm text-gray-500 group-hover:text-gray-800 group-focus:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200 dark:group-focus:text-neutral-200">
                          Manage all your Jethrotech products and services including bills more effectively with the client portal.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="flex flex-col pt-4 md:pt-0 mx-1 md:mx-0">
                    <span class="text-sm font-semibold uppercase text-violet-800 dark:text-neutral-200">Customer stories</span>

                    <a class="mt-4 group flex gap-x-5 items-center focus:outline-hidden" href="https://client.jethrotech.com.pg/auth/register" target="_blank">
                      <img class="w-40 h-auto rounded-lg" src="{{asset('img/favicon.png')}}" alt="Avatar">
                      <div class="grow">
                        <p class="text-gray-800 dark:text-neutral-200">Jethrotech Projects has proved to be most efficient cloud based client menagement portal for hosting companies.</p>
                        <p class="mt-3 inline-flex items-center gap-x-2 text-sm font-semibold text-gray-800 dark:text-neutral-200">
                          Learn more by creating an account
                          <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>   
                        
             <a class="py-3 md:py-6 font-medium text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" href="{{ route('home.plans') }}">
              Hosting Plans and Prices
            </a>
            
            <a class="py-3 md:py-6 font-medium text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" href="{{ route('home.contact') }}">
              Contact
            </a>
            
            <div class="pt-3 md:pt-0">
              <a class="py-2.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-violet-900 text-white hover:bg-violet-700 focus:outline-hidden focus:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none" href="https://client.jethrotech.com.pg/login" target="_blank">
                Client Portal
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </nav>