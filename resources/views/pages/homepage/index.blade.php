<x-app-layout>
    <x-slot name="header">
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
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow m-4 p-4">
        <h2 class="text-lg">
            Destinations
        </h2>
    </div>

    <div class="bg-white shadow m-4 p-4">
        <h2 class="text-lg">
            Destinations
        </h2>
    </div>

    <div class="bg-white shadow m-4 p-4">
        <h2 class="text-lg">
            Destinations
        </h2>
    </div>

    <div class="bg-white shadow m-4 p-4">
        <h2 class="text-lg">
            Destinations
        </h2>
    </div>
    @auth

    @endauth

</x-app-layout>
