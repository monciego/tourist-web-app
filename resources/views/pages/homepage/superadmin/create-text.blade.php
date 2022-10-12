<div x-data="{open:false}" class="">
    {{-- @if(empty($properties->properties_details->property_price)) --}}
    <div class="absolute bottom-8 left-2/4 -translate-x-2/4">
        @if ($homepage_datas->count() === 0)
        <button x-on:click="open = true" class="relative text-center cursor-pointer  text-2xl flex gap-2 ">
            <span class="text-white text-lg text-center mb-3 sm:text-3xl font-bold underline">
                Add Tagline
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff"
                class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
        </button>
        @endif
        @foreach ($homepage_datas as $homepage_data)
        <button x-on:click="open = true" class="relative text-center cursor-pointer  text-2xl flex gap-2 ">
            <span class="text-white text-lg text-center mb-3 sm:text-3xl font-bold underline">
                @if(!empty($homepage_data->homepage_tagline))
                <h2 class="text-white text-lg text-center mb-3 sm:text-3xl font-bold">
                    {{ $homepage_data->homepage_tagline }}
                </h2>
                @else
                Add Tagline
                @endif
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffff"
                class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
        </button>

        @endforeach

        <div class="flex items-center justify-center">
            <a href="{{ route('listing.index') }}"
                class="text-primary inline-flex items-center gap-2 active:scale-[.95] text-sm px-4 py-1 sm:text-lg sm:px-7 sm:py-2 rounded-lg shadow-md bg-white hover:bg-gray-200 font-bold">
                Start Exploring
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>


    {{-- @else
    <button x-on:click="open = true"
        class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-1.5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        Edit Price
    </button>
    @endif --}}

    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[1000] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="open" x-cloak
        class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4  w-[75%]  -translate-y-2/4 -translate-x-2/4"
        style="z-index: 1001;">
        <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
            <h2 class="font-medium text-base text-slate-900">Add Tagline</h2>
            <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                <path
                    d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                </path>
            </svg>
        </header>
        <form class="p-4" action="{{ route('store.homepage_tagline') }}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{ Auth::user()->id }}">
            <div>
                <x-label for="homepage_tagline" :value="__('Tagline')" />
                {{-- @if(empty($properties->properties_details->property_price)) --}}
                <x-input id="homepage_tagline" class="block mt-1 w-full" type="text" name="homepage_tagline" required
                    autofocus />
                {{-- @else
                <x-input id="property_price" class="block mt-1 w-full" type="number" name="property_price"
                    :value="old('property_price', $properties->properties_details->property_price)" required
                    autofocus />
                @endif --}}

            </div>
            <button
                class="mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Yes, Create it') }}
            </button>
        </form>
    </div>
</div>
