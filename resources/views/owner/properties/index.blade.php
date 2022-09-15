<x-app-sidebar-layout>
    @section('title', 'Properties')
    <h2 class="mb-4 font-medium">Properties of {{ Auth::user()->name }}</h2>
    <div class="grid grid-cols-6 gap-2">
        @foreach ($properties as $property )
        <div class="col-span-6 lg:col-span-3 p-6 w-full rounded-lg border shadow-md bg-gray-800 border-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                style="fill: rgba(217, 203, 203, 1);transform: ;msFilter:;">
                <path
                    d="M21 7h-6a1 1 0 0 0-1 1v3h-2V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM8 6h2v2H8V6zM6 16H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V6h2v2zm4 8H8v-2h2v2zm0-4H8v-2h2v2zm9 4h-2v-2h2v2zm0-4h-2v-2h2v2z">
                </path>
            </svg>
            <a href="{{ route('owner-properties.show', $property) }}">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight  text-white">{{ $property->property_name }}
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-400">
                {{ $property->business_owner->business_description ?? 'The description of this property is not
                filled
                yet.'}}
            </p>
            <a href="{{ route('owner-properties.show', $property) }}"
                class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        @endforeach
    </div>
</x-app-sidebar-layout>
