<x-app-sidebar-layout>
    @section('title', 'Register a tour')

    <div class="mt-4 sm:mt-0">
        <div class="md:grid  md:grid-cols-3 w-full mx-auto md:w-3/4 md:gap-6">
            <div class="mt-5 md:col-span-3 md:mt-0">
                <form action="{{ route('register-a-tour.store') }}" method="POST">
                    @csrf
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <h2 class="text-lg mb-4 font-bold">Register a tour</h2>
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="property_name"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Property Name
                                    </label>
                                    <input type="text" name="property_name" id="property_name"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="contact_person"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Contact Person
                                    </label>
                                    <input type="text" name="contact_person" id="contact_person"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="date_registered"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Date of Registration
                                    </label>
                                    <input type="date" name="date_registered" id="date_registered"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="time_in" class="block text-sm font-medium leading-6 text-gray-900">
                                        Time in
                                    </label>
                                    <input type="time" name="time_in" id="time_in"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="time_out" class="block text-sm font-medium leading-6 text-gray-900">
                                        Time Out
                                    </label>
                                    <input type="time" name="time_out" id="time_out"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="entance_fee" class="block text-sm font-medium leading-6 text-gray-900">
                                        Entrance Fee (if any)
                                    </label>
                                    <input type="text" name="entance_fee" id="entance_fee"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="environment_fee"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Environment Fee (if any)
                                    </label>
                                    <input type="text" name="environment_fee" id="environment_fee"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="number_of_adults"
                                        class="block text-sm font-medium leading-6 text-gray-900">Number of Aduts
                                        <span class="text-xs">(ages 13+)</span>
                                    </label>
                                    <input type="number" min="0" name="number_of_adults" id="number_of_adults"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="number_of_children"
                                        class="block text-sm font-medium leading-6 text-gray-900">Number of Children
                                        <span class="text-xs">(ages 2-12)</span></label>
                                    <input type="number" min="0" name="number_of_children" id="number_of_children"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="number_of_infants"
                                        class="block text-sm font-medium leading-6 text-gray-900">Number of Infants
                                        <span class="text-xs">(under 2)</span> </label>
                                    <input type="number" min="0" name="number_of_infants" id="number_of_infants"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="number_of_foreigners"
                                        class="block text-sm font-medium leading-6 text-gray-900">Number of Foreigners
                                    </label>
                                    <input type="number" min="0" name="number_of_foreigners" id="number_of_foreigners"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-sidebar-layout>