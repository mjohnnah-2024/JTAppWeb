 <!-- Comment Form -->
 <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="mx-auto max-w-2xl">
      <div class="text-center">
        <h2 class="text-xl text-violet-800 font-bold sm:text-3xl dark:text-white">
          Fill in the .pg domain registration form below.
                </h2>
      </div>
  
      <!-- Card -->
      <div class="mt-5 p-4 relative z-10 bg-white border border-gray-200 rounded-xl sm:mt-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700">
        <form action="{{ route('domain.create') }}" method="POST" class="space-y-4 sm:space-y-6">  @csrf
          <div class="mb-4 sm:mb-8">
            <label for="domain_type" class="block mb-2 text-sm font-medium dark:text-white">Domain type</label>           
            <select id="domain_type" name="domain_type" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <option value="">Select domain type</option>
              <option value="com.pg">.com.pg</option>
              <option value="net.pg">.net.pg</option>
              <option value="org.pg">.org.pg</option>
              <option value="edu.pg">.ac.pg</option>
              <option value="ac.pg">.edu.pg</option>
              <option value="gov.pg">.gov.pg</option>
              <option value="com">.com</option>
              <option value="net">.net</option>
              <option value="org">.org</option>
              <option value="notlisted">not listed</option>
            </select>
          <div class="mb-4 sm:mb-8">
            <label for="domain_name" class="block mb-2 text-sm font-medium dark:text-white">Domain name</label>
            <input type="text" id="domain_name" name="domain_name" required class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="example.com.pg">
          </div>

          <div class="mb-4 sm:mb-8">
            <label for="company_name" class="block mb-2 text-sm font-medium dark:text-white">Company/Organisation name</label>
            <input type="text" name="company_name" id="company_name" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="John Doe">
          </div>

           <div class="mb-4 sm:mb-8">
            <label for="contact_name" class="block mb-2 text-sm font-medium dark:text-white">Full name</label>
            <input type="text" name="contact_name" id="contact_name" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="John Doe">
          </div>
  
          <div class="mb-4 sm:mb-8">
            <label for="contact_email" class="block mb-2 text-sm font-medium dark:text-white">Email address</label>
            <input type="email" id="contact_email" name="contact_email" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="example@gmail.com">
          </div>

          <div class="mb-4 sm:mb-8">
            <label for="contact_phone" class="block mb-2 text-sm font-medium dark:text-white">Contact Phone number</label>
            <input type="text" id="contact_phone" name="contact_phone" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+675 123 4567">
  
          <div>
              <div class="mb-4 sm:mb-8">
            <label for="ipa_number" class="block mb-2 text-sm font-medium dark:text-white">IPA Registration Number</label>
            <input type="text" id="ipa_number" name="ipa_number" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="1-23466789">
          </div>

            <label for="notes" class="block mb-2 text-sm font-medium dark:text-white">Additional Notes</label>
            <div class="mt-1">
              <textarea id="notes" name="notes" rows="3" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Leave your additional comment here..."></textarea>
            </div>
          </div>
  
          <div class="mt-6 grid">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 focus:outline-hidden focus:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none">Submit</button>
          </div>
        </form>
      </div>
      <!-- End Card -->
    </div>
  </div>
  <!-- End Comment Form -->

  