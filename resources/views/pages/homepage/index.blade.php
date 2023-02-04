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
        <div class="px-6 pt-5">
            {{-- <img src="http://openweathermap.org/img/wn/{{ $currentWeather['weather'][0]['icon'] }}@2x.png"
                alt="icon"> --}}
            <p>Dasol Weather: {{ round($currentWeather['main']['temp']) }}&#176;C</p>
            <p>Feels like: {{ round($currentWeather['main']['feels_like']) }}&#176;C</p>
            <p>Description: {{ ucfirst($currentWeather['weather'][0]['description']) }}</p>
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

</x-app-layout>