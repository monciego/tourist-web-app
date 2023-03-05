<nav x-data="{ open: false, searchOpen: false }"
    class="bg-white border-b fixed left-0 right-0 top-0 border-gray-100 z-[999]">
    <div x-show="searchOpen" x-cloak x-on:click="searchOpen = false"
        class="bg-black/50 z-[100] fixed top-0 bottom-0 right-0 left-0">
    </div>
    <!-- Primary Navigation Menu -->
    <div :class="searchOpen ? 'sm:pb-6 transition-all ease-in-out' : 'sm:pb-0'"
        class="relative z-[900] bg-white   w-full mx-auto sm:py-1 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('homepage') }}">
                    <x-application-logo class="hidden sm:block" />
                    <x-application-logo-icon class="block sm:hidden" />
                </a>
            </div>

            <!-- Search-->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 lg:flex ">
                @include('partials.__search')
                <p x-cloak x-on:click="searchOpen = !searchOpen" :class="searchOpen ? 'block' : 'hidden'"
                    class="text-base  font-medium ">Find
                    the best place to
                    enjoy your time</p>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                @include('partials.__right-nav_links')
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </div>



                @auth
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center ">
                    <button @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
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
                @endauth
            </div>
        </div>

        <div class=" mt-4">
            <div x-show="searchOpen" x-cloak class=" rounded-md gap-4" role="group">
                <div class="w-full rounded-xl relative">
                    <img src="{{ asset('assets/images/navigation-image.jpeg') }}"
                        class="rounded-xl object-cover max-h-72 w-full" />
                    <a href="{{ route('listing.index') }}"
                        class="uppercase rounded-md hover:bg-green-700 text-bold absolute bottom-4 right-4 px-6 py-2 text-white bg-green-600">Begin
                        your
                        journey</a>
                </div>
            </div>
        </div>
    </div>
</nav>
