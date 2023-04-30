<x-app-sidebar-layout>
    @section('title', 'Report Generation')
    <header class="flex items-center mb-4 justify-between">
        <h2 class="text-md font-medium">Highest Tourist Arrival</h2>
        <a href="{{ route('export.highest.tourist.arrival') }}"
            class="inline-flex justify-center rounded-md border border-gray-300 bg-indigo-600 text-white px-4 py-2 text-sm font-medium shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100"
            id="menu-button" aria-expanded="true" aria-haspopup="true">
            Export to word
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
            </svg>
        </a>
    </header>

    {{-- Table --}}
    @unless ($most_visited_places->isEmpty())
    <div class="overflow-x-auto">
        <table class="table-auto w-full">
            {{-- table header --}}
            <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                <tr>
                    <th class="p-2">
                        <div class="font-semibold text-left">Rank</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Name of Establishment</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Tourist Number</div>
                    </th>
                </tr>
            </thead>
            {{-- table body --}}
            <tbody class="text-sm font-medium divide-y divide-slate-100">
                {{-- row --}}
                @foreach ($most_visited_places as $most_visited_place)

                <?php
                    $total_of_tourist = $most_visited_place->total_number_of_adults + $most_visited_place->total_number_of_children + $most_visited_place->total_number_of_infants +$most_visited_place->total_number_of_foreigner;
            // $date = $most_visited_place->month;
                ?>
                <tr>
                    <td class="p-2">
                        <div class="text-slate-800 capitalize">
                            {{ $loop->iteration }}
                        </div>
                    <td class="p-2">
                        <div class="text-slate-800 capitalize">
                            {{ $most_visited_place->property_name }}
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