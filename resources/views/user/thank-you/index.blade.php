<x-app-layout>
    @section('title', 'Dasol Tourism - Register Tour')
    <div class="py-0 sm:py-6">
        @include('components.review-message')
        <div class="mt-10 sm:mt-0 relative">
            @if ($registrationData->verified === 1)
            @include('user.thank-you.status-form')
            @endif
            <div class="md:grid relative md:grid-cols-3 md:gap-6 px-8">
                @if ($registrationData->verified === 1)
                <h1
                    class="absolute uppercase text-7xl text-black/10 text-center w-full flex items-center justify-center font-bold top-[50%] left-[50%] transform -translate-x-2/4 -translate-y-2/4">
                    VERIFIED
                </h1>
                @endif
                <div class="md:col-span-1">
                    <div class="sm:px-0  bg-[#F3F1C9] border-black border-2  h-full rounded-[10px]">
                        @if ($registrationData->cancel === 1)
                        <h1
                            class="absolute uppercase text-7xl text-black/10 text-center w-full flex items-center justify-center font-bold top-[50%] left-[50%] transform -translate-x-2/4 -translate-y-2/4">
                            CANCELLED</h1>
                        @endif
                        <div class="p-6 sm:col-span-6 lg:col-span-4 w-full pb-3">
                            <div class="border-b-2 border-black border-dashed">
                                <h5 class="mb-2 text-2xl font-extrabold tracking-tight text-black">
                                    {{ $registrationData->property->property_name }}
                                </h5>
                                <div class="mb-4 flex items-center justify-between">
                                    <div>
                                        <p class="font-normal text-black">Date Registered</p>
                                        <p class="text-md font-mono font-semibold text-gray-900">
                                            {{ \Carbon\Carbon::parse($registrationData->created_at)->isoFormat('MMM D
                                            YYYY')}}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="font-normal text-black">Ticket Number</p>
                                        <p class="text-md font-mono font-semibold text-gray-900">
                                            {{ $registrationData->tour_code }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-black border-2 mt-4">
                                <div class="bg-black text-center p-4">
                                    <h2 class="text-[#F3F1C9] font text-lg font-black">
                                        {{ $registrationData->property->property_name }}
                                    </h2>
                                </div>
                                <div class="p-3 border-black border-b-2">
                                    <p class="text-xs">Contact Person</p>
                                    <p class="font-semibold text-base">
                                        {{ $registrationData->tour_contact_person }}
                                    </p>
                                </div>
                                <div class="p-3 border-black border-b-2">
                                    <p class="text-xs">Contact Number</p>
                                    <p class="font-semibold text-base">
                                        {{ $registrationData->tour_contact_number }}
                                    </p>
                                </div>
                                <div class="p-3">
                                    <p class="text-xs">Type of Tour</p>
                                    <p class="font-semibold text-base">
                                        @if ($registrationData->tour_type === 'day_tour')
                                        Day Tour
                                        @elseif ($registrationData->tour_type === 'overnight')
                                        Overnight
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <span class="text-[.6rem] font-medium uppercase">PLEASE VERIFY THIS TICKET TO OUR
                                STAFF</span>
                        </div>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <h3 class="block text-sm font-medium text-gray-700">Contact Person</h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                        {{ $registrationData->tour_contact_person }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <h3 class="block text-sm font-medium text-gray-700">Contact Number</h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                        {{ $registrationData->tour_contact_number }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <h3 class="block text-sm font-medium text-gray-700">Email Address</h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                        {{ $registrationData->tour_email }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <h3 class="block text-sm font-medium text-gray-700">
                                        Type of Tour
                                    </h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                        @if ($registrationData->tour_type === 'day_tour')
                                        Day Tour
                                        @elseif ($registrationData->tour_type === 'overnight')
                                        Overnight
                                        @endif
                                    </p>
                                </div>
                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <h3 class="block text-sm font-medium text-gray-700">
                                        Adults Guest (Age 13+)
                                    </h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                        {{ $registrationData->number_of_adults }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <h3 class="block text-sm font-medium text-gray-700">
                                        Children Guest (Age 2-12)
                                    </h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                        {{ $registrationData->number_of_children }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <h3 class="block text-sm font-medium text-gray-700">
                                        Infants Guest (Under 2)
                                    </h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                        {{ $registrationData->number_of_infants }}</p>
                                </div>

                                <div class="col-span-6">
                                    <h3 class="block text-sm font-medium text-gray-700">
                                        Message
                                    </h3>
                                    <p
                                        class="mt-1 block w-full rounded-md border p-2 pb-24 border-gray-300 shadow-sm sm:text-sm">
                                        {!! $registrationData->tour_message !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($registrationData->cancel === 0)
        <form method="POST" action="{{ route('cancel.registration') }}" class="px-8 flex justify-end ">
            @csrf
            <input name="tour_code" type="hidden" value="{{ $registrationData->tour_code }}">
            <div class="flex items-start">
                <div class="flex h-5 items-center">
                    <input id="cancel" name="cancel" type="checkbox"
                        class="h-4 w-4 hidden rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" checked>
                </div>
            </div>
            <button type="submit"
                class="inline-flex mt-4 items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                Cancel Registration
            </button>
        </form>
        @endif
    </div>
</x-app-layout>