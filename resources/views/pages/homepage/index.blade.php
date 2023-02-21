<x-app-layout>
    @section('title', 'Dasol Tourism - Home')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @guest
            @include('pages.homepage.user.index')
            @endguest
            @auth
            @if (Auth::user()->hasRole('user'))
            @include('pages.homepage.user.index')
            @endif
            @if (Auth::user()->hasRole('superadministrator'))
            @include('pages.homepage.superadmin.index')
            @endif
            @if (Auth::user()->hasRole('owner'))
            @include('pages.homepage.owner.index')
            @endif
            @endauth
        </div>
    </div>
    @include('pages.homepage.feature-cards')

    @if ($properties->count() != 0)
    <div class="flex items-center justify-center">
        <a href="{{ route('listing.index') }}"
            class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-1.5">
            Show More
        </a>
    </div>
    @endif
    @include('pages.homepage.inspiration')
    @auth
    @endauth
    <footer class="p-4 bg-white shadow md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0">
                <x-application-logo class="block" />
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0">
                <li>
                    <a href="https://dasolpangasinan.gov.ph/" target="__blank"
                        class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="{{ route('listing.index') }}" class="mr-4 hover:underline md:mr-6">Destinations</a>
                </li>
                <li>
                    <a href="{{ route('emergency-hotline.index') }}" class="mr-4 hover:underline md:mr-6 ">Emergeny
                        Hotlines</a>
                </li>
                <li>
                    <a href="tel:099412415" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center">© Dasol. All Rights Reserved.
        </span>
    </footer>
</x-app-layout>