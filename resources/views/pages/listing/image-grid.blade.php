<div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-4 lg:px-8">
    <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block ">
        @if (!empty($listing->properties_details->image_one))
        <img src="{{ Storage::url($listing->properties_details->image_one) }}" alt="{{ $listing->property_name }} image"
            class="h-full w-full object-cover object-center">
        @else
        <img alt="No Image" src="{{ asset('assets/images/no-image.jpg') }}"
            class="rounded-t-md w-full object-cover max-h-44" />
        @endif
    </div>
    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-4 ">
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
            {{-- image two --}}
            @if (!empty($listing->properties_details->image_two))
            <img src="{{ Storage::url($listing->properties_details->image_two) }}"
                alt="{{ $listing->property_name }} image" class="h-full w-full object-cover object-center">
            @else
            <div class="bg-slate-800">
                <p class="text-lg flex items-center justify-center h-full text-white">Image not available</p>
            </div>
            @endif
        </div>
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
            {{-- image three --}}
            @if (!empty($listing->properties_details->image_three))
            <img src="{{ Storage::url($listing->properties_details->image_three) }}"
                alt="{{ $listing->property_name }} image" class="h-full w-full object-cover object-center">
            @else
            <div class="bg-slate-800">
                <p class="text-lg flex items-center justify-center h-full text-white">Image not available</p>
            </div>
            @endif
        </div>
    </div>
    <div class="aspect-w-4 aspect-h-5 sm:overflow-hidden sm:rounded-lg lg:aspect-w-3 lg:aspect-h-4">
        @if (!empty($listing->properties_details->image_four))
        <img src="{{ Storage::url($listing->properties_details->image_four) }}"
            alt="{{ $listing->property_name }} image" class="h-full w-full object-cover object-center">
        @else
        <div class="bg-slate-800">
            <p class="text-lg flex items-center justify-center h-full text-white">Image not available</p>
        </div>
        @endif
    </div>
</div>
