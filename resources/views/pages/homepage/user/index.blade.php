<div class="bg-slate-600 h-[50vh] sm:h-[75vh] overflow-hidden m-4 sm:m-0 rounded-lg shadow-sm relative">
    <div class="aspect-w-3  flex items-center justify-center flex-col h-full">
        @foreach ($homepage_datas as $homepage_data)
        <video class="h-full w-full object-cover" autoplay muted loop>
            <source src="{{ Storage::url($homepage_data->homepage_image) }}" />
        </video>
        <img src="{{ Storage::url($homepage_data->homepage_image) }}" onerror="this.style.display='none';" alt="image"
            class="object-cover h-full w-full object-center">
        @if(empty($homepage_data->homepage_image))
        <img src="{{ asset('assets/images/home-bg.jpg') }}" onerror="this.style.display='none';" alt="image"
            class="object-cover h-full w-full object-center">
        @endif
        @endforeach

        @if ($homepage_datas->count() === 0)
        <img src="{{ asset('assets/images/home-bg.jpg') }}" onerror="this.style.display='none';" alt="image"
            class="object-cover h-full w-full object-center">
        @endif


        <div>
            <div class="absolute bottom-14 left-2/4 -translate-x-2/4">
                @foreach ($homepage_datas as $homepage_data)
                <h2 class="text-white text-lg cursor-default text-center mb-3 sm:text-3xl font-bold">
                    {{ $homepage_data->homepage_tagline }}
                </h2>
                @if(empty($homepage_data->homepage_tagline))
                <h2 class="text-white text-lg cursor-default text-center mb-3 sm:text-3xl font-bold">
                    Not sure where to go? Perfect
                </h2>
                @endif
                @endforeach
                @if ($homepage_datas->count() === 0)
                <h2 class="text-white text-lg cursor-default text-center mb-3 sm:text-3xl font-bold">
                    Not sure where to go? Perfect
                </h2>
                @endif
                <div class="flex items-center justify-center">
                    <a href="{{ route('listing.index') }}"
                        class="text-primary inline-flex items-center gap-2 active:scale-[.95] text-sm px-4 py-1 sm:text-lg sm:px-7 sm:py-2 rounded-lg shadow-md bg-white hover:bg-gray-200 font-bold">
                        Start Exploring
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
