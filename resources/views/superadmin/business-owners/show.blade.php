<x-app-sidebar-layout>
    @section('title', isset($business) ? $business->name : 'Dasol Tourism')

    @include('superadmin.business-owners.properties')
    @include('superadmin.business-owners.owner-information')

</x-app-sidebar-layout>