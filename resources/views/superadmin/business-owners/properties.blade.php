<div class="col-span-full xl:col-span-6 bg-white shadow-md rounded-sm border border-slate-200">
    <header class="px-5 pt-4 border-b border-slate-100 flex justify-between items-center">
        <h2 class="font-semibold text-slate-800">{{ $business->name }} Properties</h2>
        @include('superadmin.business-owners.properties.create')
    </header>
    <div class="p-3">
        <div class="grid grid-cols-6 gap-2">
            @foreach ($properties as $property)
            <div class="col-span-6 lg:col-span-3 p-6 rounded-lg border shadow-md bg-gray-800 border-gray-700 relative">
                <span class="text-white absolute top-4 right-4">{{ $property->app_number }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                    style="fill: rgba(217, 203, 203, 1);transform: ;msFilter:;">
                    <path
                        d="M21 7h-6a1 1 0 0 0-1 1v3h-2V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM8 6h2v2H8V6zM6 16H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V6h2v2zm4 8H8v-2h2v2zm0-4H8v-2h2v2zm9 4h-2v-2h2v2zm0-4h-2v-2h2v2z">
                    </path>
                </svg>
                <a href="#" class="mb-2 flex items-center gap-2">
                    <h5 class="text-lg font-semibold tracking-tight  text-white">
                        {{ $property->property_name }}
                    </h5>
                    <span class="text-sm text-white bg-slate-600 py-1 px-4 rounded-md">
                        {{ $property->category->category_name }}
                    </span>
                </a>
                <p class="mb-3 font-normal textsm text-gray-400">
                    {{
                    Str::limit($property->property_description, 95)
                    ?? 'The description of this property is not
                    filled
                    yet.' }}
                </p>
                <div class="flex items-center gap-2">
                    <a href="{{ route('properties.show', $property) }}"
                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        More Details
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="{{ route('legal-documents', $property) }}"
                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Legal Documents
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
