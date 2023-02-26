<x-app-sidebar-layout>
    @section('title', 'Dashboard')
    <h2 class="text-md font-medium mb-4">Dashboard</h2>
    <div class="grid grid-cols-12 gap-4">
        @include('superadmin.dashboard.stat-cards')
    </div>

    <h2 class="text-md font-medium my-4">Analytics</h2>

    @include('superadmin.dashboard.analytics.registered-users')
    @include('superadmin.dashboard.analytics.tourist-per-year')
</x-app-sidebar-layout>