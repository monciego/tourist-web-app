<x-app-layout>
    @section('title', 'Explore')
    <div class="py-12">
        @foreach ($categories as $category )
        <a href="{{ route('listing.index') }}/?category={{$category->id}}">{{ $category->category_name }}</a>
        @endforeach


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
                            {{ Illuminate\Support\Str::limit($property->properties_details->property_description, 140)
                            }}
                            @else
                            “We travel not to escape life, but for life not to escape us.” – Unknown
                            @endif
                        </p>
                        @if (!empty($property->properties_details->property_price))
                        <p class="my-2 text-md md:text-xl font-bold">₱{{ $property->properties_details->property_price
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
