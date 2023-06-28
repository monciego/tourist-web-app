<div class="flex gap-4 items-center">
    <div class="flex gap-2 items-center cursor-pointer  font-medium">
        @auth
        @if (Auth::user()->hasRole('user'))
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                </svg>
                <x-homepage-nav-link :href="route('your-tickets.index')"
                    :active="request()->routeIs('your-tickets.index')">
                    {{ __('Tickets') }}
                </x-homepage-nav-link>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <x-homepage-nav-link :href="route('messages')" :active="request()->routeIs('messages')">
                    {{ __('Messages') }}
                </x-homepage-nav-link>
            </div>
        </div>


        @endif
        @if (Auth::user()->hasRole('owner'))
        <x-homepage-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Manage Properties') }}
        </x-homepage-nav-link>
        @endif
        @if (Auth::user()->hasRole('superadministrator'))
        <x-homepage-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-homepage-nav-link>
        @endif
        @if (Auth::user()->hasRole('staff'))
        <x-homepage-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Verify Tickets') }}
        </x-homepage-nav-link>
        @endif
        @endauth
    </div>

    <x-dropdown align="right" width="">
        <x-slot name="trigger">
            <button
                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                <div
                    class="flex items-center gap-2 shadow hover:shadow-md transition-all border border-1 border-gray-200 px-5 py-2 rounded-full cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg viewBox="0 0 32 32" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        role="presentation" focusable="false">
                        <path
                            d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z">
                        </path>
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            @guest
            <x-dropdown-link class="font-bold" :href="route('register')">
                {{ __('Sign up') }}
            </x-dropdown-link>
            <hr>
            <x-dropdown-link :href="route('login')">
                {{ __('Log in') }}
            </x-dropdown-link>
            <hr>
            @endguest
            @auth
            <div
                class="block italic border-b border-gray-200 px-4 py-2 text-sm leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                {{ Auth::user()->name }}
            </div>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                                                                                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            @endauth
            {{-- About --}}
            <span
                class="block font-bold px-4 py-2 text-sm leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                About
            </span>
            <x-dropdown-link class="font-medium ml-4" :href="route('tagline')">
                {{ __('Tagline') }}
            </x-dropdown-link>
            <x-dropdown-link class="font-medium ml-4" :href="route('municipalSeal')">
                {{ __('Municipal Seal') }}
            </x-dropdown-link>
            <x-dropdown-link class="font-medium ml-4" :href="route('historyOfDasol')">
                {{ __('History of Dasol') }}
            </x-dropdown-link>
            <x-dropdown-link class="font-medium ml-4" :href="route('aboutDasol')">
                {{ __('About Dasol') }}
            </x-dropdown-link>
            <hr>
            {{-- Product --}}
            <span
                class="block font-bold px-4 py-2 text-sm leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                Product
            </span>
            <x-dropdown-link class="font-medium ml-4" :href="route('saltProductionAndProcessing')">
                {{ __('Salt Production and Processing') }}
            </x-dropdown-link>
            <x-dropdown-link class="font-medium ml-4" :href="route('dasolSaltIndustry')">
                {{ __('Dasol Salt Industry') }}
            </x-dropdown-link>
            <hr>
            {{-- Municipal Tourism and Cultural Affairs Office --}}
            <span
                class="block font-bold px-4 py-2 text-sm leading-5 text-gray-700  focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                Municipal Tourism and Cultural Affairs Office
            </span>
            <x-dropdown-link class="font-medium ml-4" :href="route('safetyGuidelines')">
                {{ __('Municipal Tourism and Cultural Affairs Office') }}
            </x-dropdown-link>
            <x-dropdown-link class="font-medium ml-4" :href="route('asinFestivalBackStory')">
                {{ __('Asin Festival Back Story') }}
            </x-dropdown-link>
            <x-dropdown-link class="font-medium ml-4" :href="route('missDasol')">
                {{ __('Miss Dasol & Asin Festival History') }}
            </x-dropdown-link>
            <hr>
            <x-dropdown-link class="font-bold" :href="route('listing.index')">
                {{ __('Destinations') }}
            </x-dropdown-link>
            <hr>
            <x-dropdown-link class="font-bold" :href="route('emergency-hotline.index')">
                {{ __('Emergency Hotlines') }}
            </x-dropdown-link>
            <hr>
            <x-dropdown-link class="font-bold" :href="route('contact.index')">
                {{ __('Contact Us') }}
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>
</div>