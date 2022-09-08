<div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-4 lg:px-8">
    <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block ">
        @if(empty($properties->properties_details->image_one))
        <div class="border-2 border-gray-300 border-dashed flex items-center justify-center flex-col">
            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                aria-hidden="true">
                <path
                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex text-sm text-gray-600">
                @include('owner.properties.property-image.add-image-one')
            </div>
            <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
        </div>
        @else
        <img src="{{ Storage::url($properties->properties_details->image_one) }}"
            alt="{{ $properties->property_name }} image" class="h-full w-full object-cover object-center">
        @include('owner.properties.property-image.delete.delete-image-one')
        @endif
    </div>
    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-4 ">
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
            {{-- image two --}}
            @if(empty($properties->properties_details->image_two))
            <div class="border-2 border-gray-300 border-dashed flex items-center justify-center flex-col">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                    aria-hidden="true">
                    <path
                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                    @include('owner.properties.property-image.add-image-two')
                </div>
                <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
            </div>
            @else
            <img src="{{ Storage::url($properties->properties_details->image_two) }}"
                alt="{{ $properties->property_name }} image" class="h-full w-full object-cover object-center">
            @include('owner.properties.property-image.delete.delete-image-two')
            @endif
        </div>
        <div class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg">
            {{-- image three --}}
            @if(empty($properties->properties_details->image_three))
            <div class="border-2 border-gray-300 border-dashed flex items-center justify-center flex-col">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                    aria-hidden="true">
                    <path
                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                    @include('owner.properties.property-image.add-image-three')
                </div>
                <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
            </div>
            @else
            <img src="{{ Storage::url($properties->properties_details->image_three) }}"
                alt="{{ $properties->property_name }} image" class="h-full w-full object-cover object-center">
            @include('owner.properties.property-image.delete.delete-image-three')
            @endif
        </div>
    </div>
    <div class="aspect-w-4 aspect-h-5 sm:overflow-hidden sm:rounded-lg lg:aspect-w-3 lg:aspect-h-4">
        @if(empty($properties->properties_details->image_four))
        <div class="border-2 border-gray-300 border-dashed flex items-center justify-center flex-col">
            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                aria-hidden="true">
                <path
                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex text-sm text-gray-600">
                @include('owner.properties.property-image.add-image-four')
            </div>
            <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
        </div>
        @else
        <img src="{{ Storage::url($properties->properties_details->image_four) }}"
            alt="{{ $properties->property_name }} image" class="h-full w-full object-cover object-center">
        @include('owner.properties.property-image.delete.delete-image-four')
        @endif
    </div>
</div>
