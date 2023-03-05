<div class="mt-6 flex items-center justify-center px-6 lg:px-8">
    <div class="pb-5 pt-5 grid grid-cols-12 gap-3 w-full">

        <div class="col-span-12">
            <p class="text-gray-800 text-3xl font-semibold">Inspiration for your next trip</p>
        </div>

        <div class="col-span-12 sm:col-span-6 lg:col-span-3  bg-rose-700 rounded-xl pb-16">
            <!-- Image -->
            <img src="{{ asset('assets/images/beach-inspiration.webp') }}"
                class="rounded-t-xl object-cover max-h-44 w-full" />
            <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Beaches </p>
            <!-- Distance -->
            {{-- <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-16"> 117 kilometers away </p> --}}
        </div>

        <div class="col-span-12 sm:col-span-6 lg:col-span-3 bg-red-500 rounded-xl pb-16">
            <!-- Image -->
            <img src="{{ asset('assets/images/theme-park-inspiration.webp') }}"
                class="rounded-t-xl object-cover max-h-44 w-full" />
            <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Theme Parks </p>

            <!-- Distance -->
            {{-- <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-16"> 109 kilometers away </p> --}}
        </div>

        <div class="col-span-12 sm:col-span-6 lg:col-span-3 bg-pink-700 rounded-xl pb-16">
            <!-- Image -->
            <img src="{{ asset('assets/images/resort-inspiration.webp') }}"
                class="rounded-t-xl object-cover max-h-44 w-full" />
            <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Resorts </p>

            <!-- Distance -->
            {{-- <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-16"> 406 kilometers away </p> --}}
        </div>

        <div class="col-span-12 sm:col-span-6 lg:col-span-3 bg-rose-600 rounded-xl pb-16">
            <!-- Image -->
            <img src="{{ asset('assets/images/waterfall-inspiration.webp') }}"
                class="rounded-t-xl object-cover max-h-44 w-full" />

            <!-- City Name -->
            <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Waterfalls </p>

            <!-- Distance -->
            {{-- <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-16"> 78 kilometers away </p> --}}
        </div>
    </div>
</div>
