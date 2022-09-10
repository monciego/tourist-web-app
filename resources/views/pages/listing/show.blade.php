<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="pt-6">
                    <p class="px-8 pb-4 text-xl font-semibold">{{ $listing->property_name }}</p>
                    <nav aria-label="Breadcrumb">
                        <ol role="list"
                            class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                            @if(!empty($listing->properties_details->property_tag))
                            @include('pages.listing.breadcrumbs-details')
                            @endif
                        </ol>
                    </nav>
                    <!-- Image gallery -->
                    @include('pages.listing.image-grid')

                    <div class="flex items-end justify-end my-4 mx-8">
                        <button
                            class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-2">
                            View more photos
                        </button>
                    </div>
                    <!-- More info -->
                    <div
                        class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
                        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:tracking-tight sm:text-3xl">{{
                                $listing->property_name }}
                            </h1>
                        </div>
                        <!-- Price -->
                        <div class="relative mt-4 lg:mt-0 lg:row-span-3">
                            @if(empty($listing->properties_details->property_price))
                            Price is not stated
                            @else
                            <p class="tracking-tight text-3xl text-gray-900">
                                ₱ {{ $listing->properties_details->property_price }}
                            </p>
                            @endif
                            {{-- reviews --}}
                            <div class="mt-6">
                                <h3 class="sr-only">Reviews</h3>
                                <div class="flex items-center">
                                    <div class="flex items-center">
                                        <!--
                                            Heroicon name: mini/star

                                            Active: "text-gray-900", Default: "text-gray-200"
                                          -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <!-- Heroicon name: mini/star -->
                                        <svg class="text-gray-200 h-5 w-5 flex-shrink-0"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="sr-only">4 out of 5 stars</p>
                                    <a href="#"
                                        class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                        reviews</a>
                                </div>
                            </div>

                            <button type="submit"
                                class="transform active:scale-[.98] mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-[#DE3151] py-3 px-8 text-base font-medium text-white hover:bg-[#d22544] focus:outline-none focus:ring-2 focus:ring-[#DE3151] focus:ring-offset-2">
                                Reserve
                            </button>
                        </div>


                        {{-- left --}}
                        <div
                            class="relative py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <!-- Description and details -->
                            <div>
                                <h3 class="sr-only">Description</h3>
                                @if(empty($listing->properties_details->property_description))
                                No description
                                @else
                                <div class="space-y-6">
                                    <p class="text-base text-gray-900">
                                        {{ $listing->properties_details->property_description }}
                                    </p>
                                </div>
                                @endif
                            </div>
                            <div class="mt-10">
                                <h3 class="text-sm font-medium text-gray-900">What this place offers</h3>
                                <div class="mt-4">
                                    <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                                        @if(empty($listing->properties_details->property_offers))
                                        <li class="text-gray-700">
                                            No Offers Avalable
                                        </li>
                                        @else
                                        @php
                                        $propertyOffers = explode(',', $listing->properties_details->property_offers);
                                        @endphp
                                        @foreach ($propertyOffers as $propertyOffer)
                                        <li class="text-gray-700">
                                            {{ $propertyOffer }}
                                        </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h2 class="text-sm font-medium text-gray-900">Details</h2>

                                <div class="mt-4 space-y-6">
                                    @if(empty($listing->properties_details->property_details))
                                    <p class="text-sm text-gray-600">
                                        Details not available
                                    </p>
                                    @else
                                    <p class="text-sm text-gray-600">
                                        {{ $listing->properties_details->property_details }}
                                    </p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- --}}
        </div>
    </div>
</x-app-layout>
