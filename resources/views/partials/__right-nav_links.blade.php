<div class="flex gap-4 items-center">
    <div class="flex gap-2 items-center cursor-pointer underline font-medium">
        @guest
        <svg viewBox="0 0 16 16" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
            role="presentation" focusable="false">
            <path
                d="m8.002.25a7.77 7.77 0 0 1 7.748 7.776 7.75 7.75 0 0 1 -7.521 7.72l-.246.004a7.75 7.75 0 0 1 -7.73-7.513l-.003-.245a7.75 7.75 0 0 1 7.752-7.742zm1.949 8.5h-3.903c.155 2.897 1.176 5.343 1.886 5.493l.068.007c.68-.002 1.72-2.365 1.932-5.23zm4.255 0h-2.752c-.091 1.96-.53 3.783-1.188 5.076a6.257 6.257 0 0 0 3.905-4.829zm-9.661 0h-2.75a6.257 6.257 0 0 0 3.934 5.075c-.615-1.208-1.036-2.875-1.162-4.686l-.022-.39zm1.188-6.576-.115.046a6.257 6.257 0 0 0 -3.823 5.03h2.75c.085-1.83.471-3.54 1.059-4.81zm2.262-.424c-.702.002-1.784 2.512-1.947 5.5h3.904c-.156-2.903-1.178-5.343-1.892-5.494l-.065-.007zm2.28.432.023.05c.643 1.288 1.069 3.084 1.157 5.018h2.748a6.275 6.275 0 0 0 -3.929-5.068z">
            </path>
        </svg>
        <a target="_blank" class="text-sm" href="https://dasolpangasinan.gov.ph/">About Dasol</a>
        @endguest
        @auth
        @if (Auth::user()->hasRole('user'))
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
        </svg>
        <a class="text-sm" href="{{ route('your-tickets.index') }}">Tickets</a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
        </svg>
        <a class="text-sm" href="{{ route('messages') }}">Messages</a>
        @endif
        @if (Auth::user()->hasRole('owner'))
        <a class="text-sm" href="{{ route('dashboard') }}">Manage Properties</a>
        @endif
        @if (Auth::user()->hasRole('superadministrator'))
        <a class="text-sm" href="{{ route('dashboard') }}">Dashboard</a>
        @endif
        @endauth
    </div>

    <x-dropdown align="right" width="48">
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
        </x-slot>
    </x-dropdown>
</div>
