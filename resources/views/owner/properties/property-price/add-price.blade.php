<div x-data="{open:false}" class="inline">
    <button x-on:click="open = true" class="text-indigo-700 text-2xl flex gap-2 underline">
        ₱ Add Price
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="open" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md " style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium text-slate-900">Add Price</h2>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class=" p-4" action="{{ route('store-property-price') }}" method="POST">
                @csrf
                <input name="property_id" type="hidden" value="{{ $properties->id }}">
                <div>
                    <x-label for="property_price" :value="__('Property Price')" />
                    <x-input id="property_price" class="block mt-1 w-full" type="number" name="property_price"
                        :value="old('property_price')" required autofocus />
                </div>
                <button
                    class="mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Yes, Create it') }}
                </button>
            </form>
        </div>
    </div>
</div>
