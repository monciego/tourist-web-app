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
                <p x-on:click="searchOpen = !searchOpen" :class="searchOpen ? 'block' : 'hidden'"
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

        <div class="flex items-center justify-center mt-4">
            <div x-show="searchOpen" class="inline-flex rounded-md shadow" role="group">
                <button type="button" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-l-lg border
                    border-gray-300 hover:bg-gray-300
                 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    Where you want to go?
                </button>
                <button type="button"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 border-r bg-transparent border-t border-b border-gray-300 hover:bg-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd" />
                    </svg>
                    <input class="text-xs w-[11rem]" type="text" name="daterange" />
                </button>

                <button type="button"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-300 hover:bg-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                    Add Guests
                </button>
                <button type="button"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium bg-gray-900 text-white  rounded-r-md border border-gray-300 hover:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-4 h-4" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                    Search
                </button>
            </div>
        </div>


    </div>

</nav>

<script>
    $(function() {
  $('input[name="daterange"]').daterangepicker({
    "showDropdowns": true,
    "minDate": "07/17/2022",
   "locale": {
    "format": "MM-D-YYYY",
    "separator": " to ",
    }
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
});

});


</script>
<style>
    .header__search {
        display: inline-flex;
        border-radius: 24px;
        overflow: hidden;
        align-items: center;
        border: 1px solid #ddd;
        transition: box-shadow 0.2s ease;

    }

    .header__search:hover {
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.18);

    }

    .header__search button {
        background: transparent;
        height: 48px;
        padding: 0 16px;
        display: flex;
        align-items: center;
        border: none;
        cursor: pointer;
    }

    .header__search:first-of-type {
        padding-left: 24px;
    }

    .header__search:last-of-type {
        padding-right: 7px;
    }

    .header__search span {
        width: 1px;
        height: 24px;
        background: #ddd;
    }


    .header__searchIcon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--pink);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 16px;

    }
</style>
