<x-app-sidebar-layout>
    @section('title', 'Dasol Tourism')

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white">
                {{ $property->property_name }}
                <p class="mt-1 text-sm font-normal text-gray-500">
                    {{ $property->property_description }}
                </p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3 text-white">
                        Date of App.
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        App #
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Permit #
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Name of Establishment
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Business Address
                    </th>
                    <th scope="col" class="px-6 py-3 text-white">
                        Date of Reg.
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class="border-b bg-gray-800 border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-gray-300">
                        {{ \Carbon\Carbon::parse($property->date_of_app)->isoFormat('MMM
                        D YYYY')}}
                    </th>
                    <td class="px-6 py-4 font-medium  whitespace-nowrap text-gray-300">
                        {{ $property->app_number }}
                    </td>
                    <td class="px-6 py-4 font-medium  whitespace-nowrap text-gray-300">
                        {{ $property->permit_number }}
                    </td>
                    <td class="px-6 py-4 font-medium  whitespace-nowrap text-gray-300">
                        {{ $property->property_name }}
                    </td>
                    <td class="px-6 py-4 font-medium  whitespace-nowrap text-gray-300">
                        {{ $property->property_address }}
                    </td>
                    <td class="px-6 py-4 font-medium  whitespace-nowrap text-gray-300">
                        {{ \Carbon\Carbon::parse($property->date_of_registration)->isoFormat('MMM
                        D YYYY')}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-sidebar-layout>