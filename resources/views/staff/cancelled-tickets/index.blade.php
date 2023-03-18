<x-app-sidebar-layout>
    @section('title', 'Cancelled Tickets')
    <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
        <header class="px-5 py-4 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-semibold text-slate-800">Cancelled Tickets</h2>
            {{-- @include('pages.admin.medicine.create-medicine') --}}
        </header>
        <div class="p-3">
            {{-- @include('pages.admin.medicine.medicine-table') --}}
            @include('staff.cancelled-tickets.table')
        </div>
    </div>

    <div class="mt-4">
        {{ $tickets->links() }}
    </div>

    </x-app-layout>