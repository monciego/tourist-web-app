<x-app-sidebar-layout>
    @section('title', 'Announcements')
    <header class="flex items-center mb-4 justify-between">
        <h2 class="text-md font-medium">Announcements</h2>
        @include('superadmin.announcement.create')
    </header>
    <div class=" max-w-7xl mx-auto">
        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
            @foreach ($announcements as $announcement)
            @include('superadmin.announcement.partials.announcement')
            @endforeach
        </div>
    </div>
</x-app-sidebar-layout>