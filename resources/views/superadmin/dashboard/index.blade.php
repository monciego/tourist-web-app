<x-app-sidebar-layout>
    @section('title', 'Dashboard')
    <header class="flex items-center mb-4 justify-between">
        <h2 class="text-md font-medium">Dashboard</h2>
        <div class="flex items-center" x-data="{open:false}">
            <div class="relative inline-block text-left">
                <div>
                    <div x-show="open" x-cloak x-on:click="open = false"
                        class="z-[500] fixed top-0 bottom-0 right-0 left-0">
                    </div>
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" x-on:click="open = !open"
                                class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-indigo-600 text-white px-4 py-2 text-sm font-medium shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100"
                                id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Export Data
                                <!-- Heroicon name: mini/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div x-show="open" x-cloak
                            class="z-[600] max-h-60 overflow-y-scroll absolute right-0  mt-2 w-72 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="category-button" tabindex="-1">
                            <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                href="{{ route('export.month') }}">
                                Export Arrival Per Month
                            </a>
                            <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                href="{{ route('export.arrival-per-year') }}">
                                Export Arrival Per Year
                            </a>
                            <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                href="{{ route('export.tourists') }}">
                                Export Number Of Tourist
                            </a>
                            <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                href="{{ route('export.day-tourists') }}">
                                Export Number Of Day Tourist
                            </a>
                            <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                href="{{ route('export.night-tourists') }}">
                                Export Number Of Night Tourist
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="grid grid-cols-12 gap-4">
        @include('superadmin.dashboard.stat-cards')
    </div>

    <h2 class="text-md font-medium my-4">Analytics</h2>

    @include('superadmin.dashboard.analytics.registered-users')
    @include('superadmin.dashboard.analytics.tourist-per-year')
</x-app-sidebar-layout>