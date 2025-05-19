
<x-layout.app>
    
<x-shared.breadcrumb />

<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center mx-auto">
      <div>
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white sm:text-4xl">Domain Lists</h2>
        <p class="mt-4 text-gray-600 dark:text-neutral-400">Here is a list of your registered domains.</p>
    </div>
        <div class="flex justify-end mt-8">
            <a href="{{ route('domain.create') }}" class="inline-flex items-center gap-x-2 text-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 border border-transparent rounded-lg py-3 px-4">Register a new domain</a>
        </div>

     @if ($domains->isEmpty())
        <div class="max-w-2xl mx-auto text-center mb-10">
          <h4 class="text-3xl leading-tight font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight bg-clip-text bg-linear-to-r from-violet-600 to-fuchsia-700 text-transparent">No domains found</h4>
          <p class="mt-2 lg:text-lg text-gray-800 dark:text-neutral-200">Please check back later.</p>
        </div>
        @else
     
       <!--list of domains-->
       <table class="min-w-full divide-y divide-gray-200 ">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Domain Name</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Domain Type</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Requested By</th>
             <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Name</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Email</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IPA Number</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
             @foreach ($domains as $dname)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dname->domain_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dname->domain_type }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dname->company_name }}</td>
             <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dname->contact_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dname->contact_email }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dname->status }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dname->ipa_number }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Action</td>
          </tr>
           @endforeach
        </tbody>
      </table>
          
      @endif
    </div>
    </div>
    <!-- End Grid -->  
</div>
</x-layout.app>