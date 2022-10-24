<x-app-sidebar-layout>
    @section('title', 'Dashboard')
    <form action="/dashboard/" class="flex items-center">
        <label for="search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" id="search" name="search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pl-10 p-2.5  placeholder-gray-400  focus:ring-blue-500 focus:border-indigo-700"
                placeholder="Search Ticket Number" autocomplete="off">
        </div>
        <button type="submit"
            class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none ">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="sr-only">Search Ticket Number</span>
        </button>
    </form>


    @forelse ($tickets as $ticket)
    @if ($keyword === $ticket->tour_code )
    <div class="mt-8 relative">
        <h1
            class="absolute uppercase text-7xl text-black/10 text-center w-full flex items-center justify-center font-bold top-[50%] left-[50%] transform -translate-x-2/4 -translate-y-2/4">
            TICKET MATCH</h1>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="sm:px-0 bg-[#F3F1C9] border-black border-2  h-full rounded-[10px]">
                    <div class="p-6 sm:col-span-6 lg:col-span-4 w-full pb-3">
                        <div class="border-b-2 border-black border-dashed">
                            <h5 class="mb-2 text-2xl font-extrabold tracking-tight text-black">
                                {{ $ticket->property->property_name }}
                            </h5>
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <p class="font-normal text-black">Date Registered</p>
                                    <p class="text-md font-mono font-semibold text-gray-900">
                                        {{ \Carbon\Carbon::parse($ticket->created_at)->isoFormat('MMM D
                                        YYYY')}}
                                    </p>
                                </div>
                                <div>
                                    <p class="font-normal text-black">Ticket Number</p>
                                    <p class="text-md font-mono font-semibold text-gray-900">
                                        {{ $ticket->tour_code }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-black border-2 mt-4">
                            <div class="bg-black text-center p-4">
                                <h2 class="text-[#F3F1C9] font text-lg font-black">
                                    {{ $ticket->property->property_name }}
                                </h2>
                            </div>
                            <div class="p-3 border-black border-b-2">
                                <p class="text-xs">Contact Person</p>
                                <p class="font-semibold text-base">
                                    {{ $ticket->tour_contact_person }}
                                </p>
                            </div>
                            <div class="p-3 border-black border-b-2">
                                <p class="text-xs">Contact Number</p>
                                <p class="font-semibold text-base">
                                    {{ $ticket->tour_contact_number }}
                                </p>
                            </div>
                            <div class="p-3">
                                <p class="text-xs">Type of Tour</p>
                                <p class="font-semibold text-base">
                                    @if ($ticket->tour_type === 'day_tour')
                                    Day Tour
                                    @elseif ($ticket->tour_type === 'overnight')
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
                                <p class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                    {{ $ticket->tour_contact_person }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <h3 class="block text-sm font-medium text-gray-700">Contact Number</h3>
                                <p class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                    {{ $ticket->tour_contact_number }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <h3 class="block text-sm font-medium text-gray-700">Email Address</h3>
                                <p class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                    {{ $ticket->tour_email }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <h3 class="block text-sm font-medium text-gray-700">
                                    Type of Tour
                                </h3>
                                <p class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                    @if ($ticket->tour_type === 'day_tour')
                                    Day Tour
                                    @elseif ($ticket->tour_type === 'overnight')
                                    Overnight
                                    @endif
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <h3 class="block text-sm font-medium text-gray-700">
                                    Adults Guest (Age 13+)
                                </h3>
                                <p class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                    {{ $ticket->number_of_adults }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <h3 class="block text-sm font-medium text-gray-700">
                                    Children Guest (Age 2-12)
                                </h3>
                                <p class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                    {{ $ticket->number_of_children }}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <h3 class="block text-sm font-medium text-gray-700">
                                    Infants Guest (Under 2)
                                </h3>
                                <p class="mt-1 block w-full rounded-md border p-2 border-gray-300 shadow-sm sm:text-sm">
                                    {{ $ticket->number_of_infants }}</p>
                            </div>

                            <div class="col-span-6">
                                <h3 class="block text-sm font-medium text-gray-700">
                                    Message
                                </h3>
                                <p
                                    class="mt-1 block w-full rounded-md border p-2 pb-24 border-gray-300 shadow-sm sm:text-sm">
                                    {!! $ticket->tour_message !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="flex-col mt-16 flex items-center justify-center">
        <div>
            <img src="{{ asset('assets/images/search-ticket-number.svg') }}"
                alt="There are currently no listed medicines.">
        </div>
        <div>
            <h1 class="text-center font-bold text-xl mt-8 uppercase">
                search a ticket number
            </h1>
        </div>
    </div>
    @break
    @endif
    @empty
    <div class="flex-col mt-16 flex items-center justify-center">
        <div>
            <img src="{{ asset('assets/images/no match found.svg') }}" alt="There are currently no listed medicines.">
        </div>
        <div>
            <h1 class="text-center font-bold text-xl mt-8 uppercase">
                no match found
            </h1>
        </div>
    </div>
    @endforelse
</x-app-sidebar-layout>
