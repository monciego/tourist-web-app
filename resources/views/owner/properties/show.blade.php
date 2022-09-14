<x-app-sidebar-layout>
    {{-- {{ $ownerProperties }} --}}
    <div class="h-[50vh]">
        <div class="aspect-w-3 h-full  overflow-hidden rounded-lg lg:block ">
            @if(empty($properties->properties_details->feature))
            <div class="border-2 border-gray-300 border-dashed flex items-center justify-center flex-col">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                    aria-hidden="true">
                    <path
                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                    @include('owner.properties.property-feature.index')
                </div>
                <p class="text-xs text-gray-500">PNG, JPG, MP4 up to 10MB</p>
            </div>
            @else
            <video class="h-full w-full object-cover object-center" autoplay muted loop>
                <source src="{{ Storage::url($properties->properties_details->feature) }}" />
            </video>
            <img src="{{ Storage::url($properties->properties_details->feature) }}" onerror="this.style.display='none';"
                alt="{{ $properties->property_name }} image" class="h-full w-full object-cover object-center">
            {{-- @include('owner.properties.property-image.delete.delete-image-one') --}}
            @endif
        </div>
    </div>
    <div class="bg-white">

        <div class="pt-6">
            <p class="px-8 pb-4 text-xl font-semibold">{{ $properties->property_name }}</p>
            <nav aria-label="Breadcrumb">
                <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                    @if(empty($properties->properties_details->property_tag))
                    @include('owner.properties.breadcrumbs-details.add-breadcrumbs-details')
                    @else
                    @include('owner.properties.breadcrumbs-details.properties-breadcrumbs-details')
                    @endif
                </ol>
            </nav>

            <!-- Image gallery -->
            @include('owner.properties.property-image.property-image')

            <div class="flex items-end justify-end my-4 mx-8">
                <button
                    class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-2">
                    <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    Add more photos
                </button>
            </div>

            <!-- More info -->
            <div
                class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:tracking-tight sm:text-3xl">{{
                        $properties->property_name }}
                    </h1>
                </div>

                <!-- Options -->
                <div class="relative mt-4 lg:mt-0 lg:row-span-3">
                    @if(empty($properties->properties_details->property_price))
                    @include('owner.properties.property-price.add-price')
                    @else
                    @include('owner.properties.property-price.property-price')
                    @endif
                </div>

                <div
                    class="relative py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <!-- Description and details -->
                    <div>

                        <h3 class="sr-only">Description</h3>
                        @if(empty($properties->properties_details->property_description))
                        @include('owner.properties.property-description.add-property-description')
                        @else
                        @include('owner.properties.property-description.property-description')
                        @endif
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">What this place offers</h3>

                        <div class="mt-4">
                            <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                                @if(empty($properties->properties_details->property_offers))
                                <li>
                                    @include('owner.properties.property-offers.add-property-offers')
                                </li>
                                @else
                                @include('owner.properties.property-offers.property-offers')
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Details</h2>

                        <div class="mt-4 space-y-6">
                            @if(empty($properties->properties_details->property_details))
                            @include('owner.properties.property-details.add-property-details')
                            @else
                            @include('owner.properties.property-details.property-details')
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-sidebar-layout>
