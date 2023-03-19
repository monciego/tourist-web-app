<x-app-sidebar-layout>
    @section('title', 'Verified Tickets')
    <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
        <header class="px-5 py-4 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-semibold text-slate-800">Verified Tickets</h2>
            @include('staff.verified-tickets.search')
        </header>
        <div class="p-3">
            @include('staff.verified-tickets.table')
        </div>
    </div>

    <div class="mt-4">
        {{ $tickets->links() }}
    </div>

    </x-app-layout>