<x-app-sidebar-layout>
    @section('title', 'Most Visited Place')
    <header class="flex items-center mb-4 justify-between">
        <h2 class="text-md font-medium">Most Visited Place</h2>
    </header>

    {{-- Table --}}
    @unless ($mostVisitedPlaces->isEmpty())
    <div class="overflow-x-auto mt-10">
        <table class="table-auto w-full">
            {{-- table header --}}
            <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                <tr>
                    <th class="p-2">
                        <div class="font-semibold text-left">Tour Code</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Tourist Name</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Contact Number</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Contact Person</div>
                    </th>
                    <th class="p-2">
                        <div class="font-semibold text-left">Tour Type</div>
                    </th>
                </tr>
            </thead>
            {{-- table body --}}
            <tbody class="text-sm font-medium divide-y divide-slate-100">
                {{-- row --}}
                @foreach ($mostVisitedPlaces as $mostVisitedPlace)
                <tr>
                    <td class="p-2 ">
                        {{ $mostVisitedPlace->tour_code }}
                    </td>
                    <td class="p-2">
                        <div class="text-slate-800 capitalize">
                            {{ $mostVisitedPlace->user->name }}
                        </div>
                    </td>
                    <td class="p-2 ">
                        <div>
                            {{ $mostVisitedPlace->tour_contact_number }}
                        </div>
                    </td>
                    <td class="p-2 ">
                        <div>
                            {{ $mostVisitedPlace->tour_contact_person }}
                        </div>
                    </td>
                    <td class="p-2 ">

                        @if ($mostVisitedPlace->tour_type === 'day_tour')
                        Day Tour
                        @elseif(($mostVisitedPlace->tour_type === 'overnight'))
                        Overnight
                        @endif

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
                There are currently no registered day tourist
            </h1>
        </div>
    </div>
    @endunless
</x-app-sidebar-layout>