<x-app-layout>
    @section('title', 'Dasol Tourism - Register Tour')
    <div class="py-12">
        {{-- your ticket --}}
        <div class="flex items-center justify-center px-6 lg:px-8">
            <div class="pb-5 pt-5 grid grid-cols-12 gap-3 w-full">
                {{-- --}}
                @foreach($tickets as $ticket)
                <div
                    class="relative col-span-12 @if ($ticket->cancel === 1) border-red-600   @endif bg-slate-900 border-2  p-6 sm:col-span-6 lg:col-span-4  w-full hover:shadow-md transition-all ease-in-out rounded-md pb-3">
                    @if ($ticket->cancel === 1)
                    <h1
                        class="absolute uppercase text-3xl text-white/30 text-center w-full flex items-center justify-center font-bold top-[50%] left-[50%] transform -translate-x-2/4 -translate-y-2/4">
                        CANCELLED</h1>
                    @endif
                    <h5 class="mb-2 text-2xl font-bold tracking-tight  text-white">
                        {{ $ticket->property->property_name }}
                    </h5>
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <p class="font-normal text-gray-50">Date Registered</p>
                            <p class="text-md text-gray-300">
                                {{ \Carbon\Carbon::parse($ticket->created_at)->isoFormat('MMM D YYYY')}}
                            </p>
                        </div>
                        <div>
                            <p class="font-normal text-gray-50">Ticket Number</p>
                            <p class="text-md text-gray-300">
                                {{ $ticket->tour_code }}
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('thankyou.for.registration', $ticket->id) }}"
                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none  bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                        More Details
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                @endforeach
                {{-- --}}
            </div>
        </div>
    </div>
</x-app-layout>