<nav x-data="{ open: false }" class="bg-white border-b border-slate-200 z-30">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between lg:justify-end h-16">
            <div class="shrink-0 flex items-center">
                <a href="/">
                    <x-application-logo class="lg:hidden block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden lg:block mt-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
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
                            {{ __('Safety Guidelines') }}
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

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="lg:hidden fixed left-0 right-0 z-50 bg-white shadow">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                @if (Auth::user()->hasRole('owner|superadministrator'))
                {{ __('Dashboard') }}
                @endif
                @if (Auth::user()->hasRole('staff'))
                {{ __('Verify Tickets') }}
                @endif
            </x-responsive-nav-link>
            {{-- superadmin --}}
            @if (Auth::user()->hasRole('superadministrator'))
            <x-responsive-nav-link :href="route('register-owner-account')"
                :active="request()->routeIs('register-owner-account')">
                {{ __('Create Owner Account') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('businesses.index')" :active="request()->routeIs('businesses.index')">
                {{ __('Business Owners') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                {{ __('Categories') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('announcements.index')"
                :active="request()->routeIs('announcements.index')">
                {{ __('Announcements') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register.staff')" :active="request()->routeIs('register.staff')">
                {{ __('Create Staff Account') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('report-generation.index')"
                :active="request()->routeIs('report-generation.index')">
                {{ __('Report Generation') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('review-and-rating.index')"
                :active="request()->routeIs('review-and-rating.index')">
                {{ __('Review and Rating') }}
            </x-responsive-nav-link>
            @endif

            {{-- owner --}}
            @if (Auth::user()->hasRole('owner'))
            <x-responsive-nav-link :href="route('owner-properties.index')"
                :active="request()->routeIs('owner-properties.index')">
                {{ __('Properties') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('messages')" :active="request()->routeIs('messages')">
                {{ __('Messages') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('change-password.index')"
                :active="request()->routeIs('change-password.index')">
                {{ __('Change Password') }}
            </x-responsive-nav-link>
            @endif

            {{-- staff --}}
            @if (Auth::user()->hasRole('staff'))
            <x-responsive-nav-link :href="route('staff.index')" :active="request()->routeIs('staff.index')">
                {{ __('Verified Tickets') }}
            </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>