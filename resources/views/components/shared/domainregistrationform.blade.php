 <!-- Comment Form -->
 <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="mx-auto max-w-2xl">
      <div class="text-center">
        <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
          Register your domain
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
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Submit</button>
          </div>
        </form>
      </div>
      <!-- End Card -->
    </div>
  </div>
  <!-- End Comment Form -->

  <!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7 dark:bg-neutral-900">
    <form>
      <!-- Section -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <div class="sm:col-span-12">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
            Submit your application
          </h2>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Full name
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="sm:flex">
            <input id="af-submit-application-full-name" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            <input type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Email
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-email" type="email" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="af-submit-application-phone" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
              Phone
            </label>
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-phone" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

          <p class="mt-3">
            <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500" href="../docs/index.html">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
              Add phone
            </a>
          </p>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="af-submit-application-current-company" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
              Current Company
            </label>
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-current-company" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Section -->

      <!-- Section -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <div class="sm:col-span-12">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
            Profile
          </h2>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Resume/CV
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
          <input type="file" name="af-submit-application-resume-cv" id="af-submit-application-resume-cv" class="block w-full border border-gray-200 shadow-sm rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
            file:bg-gray-50 file:border-0
            file:bg-gray-100 file:me-4
            file:py-2 file:px-4
            dark:file:bg-neutral-700 dark:file:text-neutral-400">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="af-submit-application-bio" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
              Personal summary
            </label>
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <textarea id="af-submit-application-bio" class="py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Add a cover letter or anything else you want to share."></textarea>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Section -->

      <!-- Section -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <div class="sm:col-span-12">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
            Links
          </h2>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-linkedin-url" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            LinkedIn URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-linkedin-url" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-twitter-url" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Twitter URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-twitter-url" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-github-url" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Github URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-github-url" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-portfolio-url" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Portfolio URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-portfolio-url" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-other-website" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Other website
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-other-website" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <div class="sm:col-start-4 sm:col-span-8">
          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500" href="../docs/index.html">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
            Add URL
          </a>
        </div>
      </div>
      <!-- End Section -->

      <!-- Section -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <div class="sm:col-span-12">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
            Before sending your application, please let us know...
          </h2>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-desired-salary" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Desired salary
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-desired-salary" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-available-start-date" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Available start date
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-available-start-date" type="text" class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Section -->

      <!-- Section -->
      <div class="py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
          Submit application
        </h2>
        <p class="mt-3 text-sm text-gray-600 dark:text-neutral-400">
          In order to contact you with future jobs that you may be interested in, we need to store your personal data.
        </p>
        <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
          If you are happy for us to do so please click the checkbox below.
        </p>

        <div class="mt-5 flex">
          <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-sm text-blue-600 checked:border-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-submit-application-privacy-check">
          <label for="af-submit-application-privacy-check" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Allow us to process your personal information.</label>
        </div>
      </div>
      <!-- End Section -->

      <button type="button" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
        Submit application
      </button>
    </form>
  </div>
  <!-- End Card -->
</div>
<!-- End Card Section -->