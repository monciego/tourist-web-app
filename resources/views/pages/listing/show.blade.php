<x-app-layout>
    @section('title', isset($listing) ? $listing->property_name : 'Dasol Tourism')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="h-[60vh]">
                <div class="aspect-w-3 h-full  overflow-hidden rounded-lg lg:block ">
                    @if(empty($listing->properties_details->feature))
                    <div class="bg-slate-800">
                        <p class="text-3xl font-bold flex items-center justify-center h-full text-white">{{
                            $listing->property_name
                            }}</p>
                    </div>
                    @else
                    <video class="h-full w-full object-cover object-center" autoplay muted loop>
                        <source src="{{ Storage::url($listing->properties_details->feature) }}" />
                    </video>
                    <img src="{{ Storage::url($listing->properties_details->feature) }}"
                        onerror="this.style.display='none';" alt="{{ $listing->property_name }} image"
                        class="h-full w-full object-cover object-center">
                    {{-- @include('owner.properties.property-image.delete.delete-image-one') --}}
                    @endif
                </div>
            </div>

            <p class="my-4">
                @if(empty($listing->properties_details->latitude || $listing->properties_details->longitude ))
                Distance not specified
                @else
                @foreach ($distance as $item)
                {{ number_format($item->distance) }} KM away from you
                @endforeach
                @endif
            </p>

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
                            {{-- <div class="mt-6">
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

                            <div class="w-full gap-2 flex  mt-4">
                                <div class="flex flex-col">
                                    <label for="check_in" class="mb-1 text-sm block truncate">Check In</label>
                                    <input class="w-full cursor-pointer rounded text-sm" type="text" name="check_in"
                                        id="check_in" />
                                </div>
                                <div class="flex flex-col">
                                    <label for="check_out" class="mb-1 text-sm block truncate">Check Out</label>
                                    <input class="w-full cursor-pointer  rounded text-sm" type="text" name="check_out"
                                        id="check_out" />
                                </div>
                            </div>

                            @include('pages.listing.guest-dropdown') --}}

                            <a href="{{ route('register.tour', $listing) }}"
                                class="transform active:scale-[.98] mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-700 py-3 px-8 text-base font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-offset-2">
                                Register a tour
                            </a>
                            <a href="{{ route('messages.create', $listing->id) }}"
                                class="transform active:scale-[.98] mt-4 flex w-full items-center justify-center rounded-md border border-transparent bg-[#DE3151] py-3 px-8 text-base font-medium text-white hover:bg-[#d22544] focus:outline-none focus:ring-2 focus:ring-[#DE3151] focus:ring-offset-2">
                                Message
                            </a>

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



<script>
    console.log(new Date());
    $(function() {
        $('input[name="check_in"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minDate:new Date(),
        });
    });
    $(function() {
        $('input[name="check_out"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minDate:new Date(),
        });
    });


    // image lightbox
    const lightbox = document.createElement("div");
    lightbox.id = "lightbox";
    document.body.appendChild(lightbox);

    const images = document.querySelectorAll("img");
    images.forEach((image) => {
    image.addEventListener("click", (e) => {
    lightbox.classList.add("active");
    const img = document.createElement("img");
    img.src = image.src;
    while (lightbox.firstChild) {
    lightbox.removeChild(lightbox.firstChild);
    }
    lightbox.appendChild(img);
    });
    });

    lightbox.addEventListener("click", (e) => {
    if (e.target !== e.currentTarget) return;
    lightbox.classList.remove("active");
    });
</script>

<style>
    #lightbox {
        position: fixed;
        z-index: 1000;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: none;
    }

    #lightbox.active {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #lightbox img {
        width: 90%;
        object-fit: cover;
        max-height: 30rem;
        padding: 2px;
        border-radius: 10px;

    }
</style>