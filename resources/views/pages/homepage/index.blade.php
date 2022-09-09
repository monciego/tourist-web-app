<x-app-layout>
    {{-- <x-slot name="header">
        @auth
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Page of logged in') }}
        </h2>
        @endauth
        @guest
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Page of not logged in') }}
        </h2>
        @endguest
    </x-slot> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-600 h-[50vh] sm:h-[75vh] overflow-hidden m-4 sm:m-0 rounded-lg shadow-sm relative">
                <img src="{{ asset('assets/images/home-bg.jpg') }}" alt="Photo Of Beach During Dawn"
                    class="object-cover h-full w-full">
                <div class="absolute bg-black/20 inset-0"></div>
                <div class="absolute left-1/2 transform -translate-x-1/2 bottom-14 text-center">
                    <h2 class="text-white text-lg text-center mb-3 sm:text-3xl font-bold">
                        @guest
                        Not sure where to go? Perfect.
                        @endguest

                        @auth
                        @if (Auth::user()->hasRole('user'))
                        Let's start your journey, <br>
                        {{ Auth::user()->name }}!
                        @endif
                        @if (Auth::user()->hasRole('superadministrator'))
                        Work less & travel more.
                        @endif
                        @if (Auth::user()->hasRole('owner'))
                        Travel better with us.
                        @endif
                        @endauth
                    </h2>
                    <a href=""
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
    @include('pages.homepage.feature-cards')

    {{-- must log in to show more --}}
    <div class="flex items-center justify-center">
        <button
            class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-1.5">
            Show More
        </button>
    </div>

    @include('pages.homepage.inspiration')


    @auth

    @endauth

</x-app-layout>
