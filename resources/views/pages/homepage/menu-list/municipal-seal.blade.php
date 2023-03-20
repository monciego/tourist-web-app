<x-app-layout>
    @section('title', 'Dasol Tourism - Home')

    <div class="bg-white py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Municipal Seal</p>
            </div>

            <p class="text-center my-4 font-bold">
                MEANING OF MUNICIPAL SEAL
            </p>

            <div class="flex items-center justify-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="my-2 h-[10rem] w-[10rem]">
            </div>

            <p class="mb-2 mt-4">
                <span class="font-semibold">Shield</span>- Derived from provincial seal of Pangasinan where the town
                geographically belongs
            </p>
            <div class="mb-2"><span class="font-semibold">Arrow</span>- Signifies boarder horizon in search for
                development
                of the economic,
                religious and political aspects
                of living of
                the townspeople.</div>
            <div class="mb-2">
                <span class="font-semibold">Circle Ring</span>- Denotes commitments to safeguard the general interest of
                the
                townspeople.
            </div>
            <div class="mb-2">
                <span class="font-semibold">Blue Color</span>- Blue Color Means prosperity.
            </div>
            <div class="mb-2">
                <span class="font-semibold">Red Color</span>- Symbolizes high protection towards the development of the
                well
                being of the people.
            </div>
            <div class="mb-2">
                <span class="font-semibold">White Color</span>- Stands for zealous vision.
            </div>

        </div>
    </div>
</x-app-layout>