<x-app-sidebar-layout>
    @section('title', 'Report Generation')
    <header class="flex items-center mb-4 justify-between">
        <h2 class="text-md font-medium">Report Generation</h2>
    </header>

    <div class="grid grid-cols-12 gap-4">
        @include('superadmin.report-generation.reports.arrival-per-day.index')
        @include('superadmin.report-generation.reports.arrival-per-month.index')
        @include('superadmin.report-generation.reports.arrival-per-year.index')
        @include('superadmin.report-generation.reports.all-tourist-arrival.index')
        @include('superadmin.report-generation.reports.arrival-night-tourist.index')
    </div>


</x-app-sidebar-layout>