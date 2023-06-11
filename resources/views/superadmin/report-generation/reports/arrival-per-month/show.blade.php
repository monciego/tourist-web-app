<x-app-sidebar-layout>
    @section('title', 'Report Generation')
    <header class="flex items-center mb-4 justify-between">
        <h2 class="text-md font-medium">Arrival Per Month</h2>
        <div class="flex items-center gap-2">
            <a href="{{ route('export.month') }}"
                class="inline-flex justify-center rounded-md border border-gray-300 bg-indigo-600 text-white px-4 py-2 text-sm font-medium shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100"
                id="menu-button" aria-expanded="true" aria-haspopup="true">
                Export to word
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                </svg>
            </a>
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
                                    Choose a month
                                    <!-- Heroicon name: mini/chevron-down -->
                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <div x-show="open" x-cloak
                                class="z-[600] max-h-60 overflow-y-scroll absolute right-0  mt-2 w-72 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="category-button" tabindex="-1">
                                @foreach ($arrivals_per_month as $arrival_per_month)
                                <a class="text-gray-700 block px-4 py-3 text-sm hover:bg-slate-100"
                                    href="{{ route('export.per.specific.month', $arrival_per_month->month) }}">
                                    Export {{ Carbon\Carbon::createFromFormat('m-Y',
                                    $arrival_per_month->month)->format('F
                                    Y') }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Table --}}
    @unless ($arrivals_per_month->isEmpty())
    <div class="overflow-x-auto">
        <table class="table-auto w-full">
            {{-- table header --}}
            <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                <tr>
                    <th class="p-2">
                        <div class="font-semibold text-left">Date</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Tourist Number</div>
                    </th>
                </tr>
            </thead>
            {{-- table body --}}
            <tbody class="text-sm font-medium divide-y divide-slate-100">
                {{-- row --}}
                @foreach ($arrivals_per_month as $arrival_per_month)

                <?php
                    $total_of_tourist = $arrival_per_month->total_number_of_adults + $arrival_per_month->total_number_of_children + $arrival_per_month->total_number_of_infants +$arrival_per_month->total_number_of_foreigner;
            $date = $arrival_per_month->month;
                ?>
                <tr>
                    <td class="p-2">
                        <div class="text-slate-800 capitalize">
                            {{ Carbon\Carbon::createFromFormat('m-Y', $date)->format('F Y') }}
                        </div>
                    </td>
                    <td class="p-2 ">
                        {{ $total_of_tourist }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="flex-col flex items-center justify-center">
        <div>
            <img src="{{ asset('assets/images/no match found.svg') }}" alt="There are currently no verified tickets.">
        </div>
        <div>
            <h1 class="text-center font-bold text-xl mt-8 uppercase">
                There are currently no registered tourist
            </h1>
        </div>
    </div>
    @endunless
</x-app-sidebar-layout>