<x-app-sidebar-layout>
    @section('title', 'Review and Rating')
    <header class="flex items-center mb-4 justify-between">
        <h2 class="text-md font-medium">Review and rating</h2>
    </header>

    <div class="grid grid-cols-6 gap-2">
        @foreach ($properties as $property )
        <a href="{{ route('review-and-rating.show', $property->id) }}"
            class="col-span-6 relative lg:col-span-3 p-6 w-full rounded-lg border shadow-md bg-gray-800 border-gray-700">
            @if ($loop->first)
            <div class="text-white absolute top-4 right-4 bg-indigo-700 px-4 py-1 rounded">
                Most Reviewed Place
            </div>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                style="fill: rgba(217, 203, 203, 1);transform: ;msFilter:;">
                <path
                    d="M21 7h-6a1 1 0 0 0-1 1v3h-2V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM8 6h2v2H8V6zM6 16H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V6h2v2zm4 8H8v-2h2v2zm0-4H8v-2h2v2zm9 4h-2v-2h2v2zm0-4h-2v-2h2v2z">
                </path>
            </svg>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight  text-white">
                {{ $property->property_name }}
            </h5>
            <h2 class="text-3xl text-white font-medium">
                {{ $property->reviews->count() }} reviews
            </h2>
        </a>
        @endforeach
    </div>

    <h2 class="text-md my-4 font-medium">Most Visited Places</h2>

    <div class="grid grid-cols-6 gap-2">
        @foreach ($most_visited_places as $most_visited_place )
        <a href=""
            class="relative col-span-6 lg:col-span-3 p-6 w-full rounded-lg border shadow-md bg-gray-800 border-gray-700">
            @if ($loop->first)
            <div class="text-white absolute top-4 right-4 bg-indigo-700 px-4 py-1 rounded">
                Most Visited Place
            </div>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                style="fill: rgba(217, 203, 203, 1);transform: ;msFilter:;">
                <path
                    d="M21 7h-6a1 1 0 0 0-1 1v3h-2V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM8 6h2v2H8V6zM6 16H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V6h2v2zm4 8H8v-2h2v2zm0-4H8v-2h2v2zm9 4h-2v-2h2v2zm0-4h-2v-2h2v2z">
                </path>
            </svg>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight  text-white">
                {{ $most_visited_place->property_name }}
            </h5>
            <h2 class="text-3xl text-white font-medium">
                {{ $most_visited_place->total_number_of_adults + $most_visited_place->total_number_of_children +
                $most_visited_place->total_number_of_infants + $most_visited_place->total_number_of_foreigner }}
                Tourists
            </h2>
        </a>
        @endforeach
    </div>


</x-app-sidebar-layout>