<x-app-layout>
    @section('title', 'Explore')
    <div class="py-12">
        <div class="px-6 lg:px-8 flex items-baseline justify-between border-b border-gray-200 pb-6">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">Explore Dasol</h1>
            <div class="flex items-center" x-data="{open:false}">
                <div class="relative inline-block text-left">
                    <div>
                        <div x-show="open" x-cloak x-on:click="open = false"
                            class="z-[500] fixed top-0 bottom-0 right-0 left-0">
                        </div>
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button" x-on:click="open = !open"
                                    class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Filter
                                    <!-- Heroicon name: mini/chevron-down -->
                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <div x-show="open" x-cloak
                                class="z-[600] max-h-60 overflow-y-scroll absolute right-0  mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="category-button" tabindex="-1">
                                <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                    href="{{ route('listing.index') }}">
                                    All
                                </a>
                                @foreach ($categories as $category )
                                <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                    href="{{ route('listing.index') }}/?category={{$category->id}}">{{
                                    $category->category_name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center px-6 lg:px-8">
            <div class="pb-5 pt-5 grid grid-cols-12 gap-3 w-full">
                @foreach ($properties as $property)
                @if (!empty($property->properties_details->property_id))
                <a href="{{ route('listing.show', $property->properties_details->property_id) }}"
                    class="col-span-12 sm:col-span-6 lg:col-span-3  w-full border-gray-300 hover:shadow-md transition-all ease-in-out rounded-md pb-3">
                    <!-- Image -->
                    @if (!empty($property->properties_details->image_one))
                    <img alt="{{ $property->property_name }}"
                        src="{{ Storage::url($property->properties_details->image_one) }}"
                        class="rounded-t-md w-full object-cover max-h-44" />
                    @else
                    <img alt="No Image" src="{{ asset('assets/images/no-image.jpg') }}"
                        class="rounded-t-md w-full object-cover max-h-44" />
                    @endif

                    {{-- Details --}}
                    <div class="p-2">
                        <p class="text-lg md:text-lg text-slate-900 font-medium"> {{
                            Illuminate\Support\Str::limit($property->property_name, 23) }} </p>
                        <p class="text-sm text-slate-800">
                            @if (!empty($property->properties_details->property_description))
                            {{ Illuminate\Support\Str::limit($property->properties_details->property_description,
                            140)
                            }}
                            @else
                            “We travel not to escape life, but for life not to escape us.” – Unknown
                            @endif
                        </p>
                        @if (!empty($property->properties_details->property_price))
                        <p class="my-2 text-md md:text-xl font-bold">₱{{
                            $property->properties_details->property_price
                            }}</p>
                        @else
                        <p class="my-2 text-md md:text-xl font-bold">NO STATED PRICE</p>

                        @endif
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
