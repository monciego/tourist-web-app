<div x-data="{open:false}" class="inline">
    <button x-on:click="open = true"
        class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 hover:bg-indigo-600 text-white">
        <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
            <path
                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
        </svg>
        <span class="xs:block text-sm ml-2">Add Properties</span>
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="open" x-cloak>
        <div class="h-3/4  overflow-y-scroll absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-3/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header
                class="sticky left-0 top-0 right-0 flex justify-between items-center  p-4 border rounded-md border-b-1 bg-slate-50 border-gray-200">
                <h2 class="font-medium">Add Property</h2>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class=" p-4" action="{{ route('properties.store') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $business->id }}">

                <div>
                    <x-label for="permit_number" :value="__('Permit Number')" />
                    <x-input id="permit_number" class="block mt-1 w-full" type="text" name="permit_number"
                        :value="old('permit_number')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="property_name" :value="__('Property Name')" />
                    <x-input id="property_name" class="block mt-1 w-full" type="text" name="property_name"
                        :value="old('property_name')" required autofocus />
                </div>

                <!-- Catgories -->
                @if ($categories->count() === 0)
                <a href="{{ route('categories.index') }}"
                    class="mt-4 px-4 py-2 font-medium text-sm flex items-center justify-center  border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="xs:block text-sm ml-2">Add Categories</span>
                </a>

                </a>
                @else
                <div class="mt-4">
                    <x-label for="category_id" :value="__('Categories')" />
                    <select name="category_id"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option disabled selected>Categories</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                @endif

                <div class="mt-4">
                    <x-label class="mb-2" for="property_description" :value="__('Property Description')" />

                    <textarea id="property_description" name="property_description"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('property_description') }}</textarea>
                </div>

                <div class="mt-4">
                    <x-label for="property_address" :value="__('Property Address')" />
                    <x-input id="property_address" class="block mt-1 w-full" type="text" name="property_address"
                        :value="old('property_address')" autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="date_of_registration" :value="__('Property Address')" />
                    <x-input id="date_of_registration" class="block mt-1 w-full" type="date" name="date_of_registration"
                        :value="old('date_of_registration')" autofocus />
                </div>

                <button
                    class="mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Yes, Create it') }}
                </button>
            </form>
        </div>
    </div>
</div>