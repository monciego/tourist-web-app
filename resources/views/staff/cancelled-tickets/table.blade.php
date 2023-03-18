{{-- Table --}}
@unless ($tickets->isEmpty())
<div class="overflow-x-auto">
    <table class="table-auto w-full">
        {{-- table header --}}
        <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
            <tr>
                <th class="p-2">
                    <div class="font-semibold text-left">Ticket Number</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Property</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Contact Person</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Contact Number</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Date of Tour</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Status</div>
                </th>
            </tr>
        </thead>
        {{-- table body --}}
        <tbody class="text-sm font-medium divide-y divide-slate-100">
            {{-- row --}}
            @foreach ($tickets as $ticket)
            <tr>
                <td class="p-2">
                    <div class="text-slate-800 capitalize">
                        {{ $ticket->tour_code }}
                    </div>
                </td>
                <td class="p-2 ">
                    {{ $ticket->property->property_name }}
                </td>
                <td class="p-2 ">
                    <div>
                        {{ $ticket->tour_contact_person }}
                    </div>
                </td>
                <td class="p-2 ">
                    <div>
                        {{ $ticket->tour_contact_number }}
                    </div>
                </td>
                <td class="p-2 ">
                    {{ \Carbon\Carbon::parse($ticket->tour_date)->isoFormat('MMM D YYYY')}}
                </td>
                <td class="p-2 ">
                    <span class="bg-red-600 text-white px-4 py-2 rounded">
                        Cancelled
                    </span>
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
            There are currently no verfied tickets
        </h1>
    </div>
</div>
@endunless