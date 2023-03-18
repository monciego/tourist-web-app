<x-app-sidebar-layout>
    @section('title', 'Verified Tickets')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Verified Ticket Information</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Complete Details for ticket registration of {{
                $ticket->property->property_name }}.</p>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Verified by <strong class="font-bold">{{
                    $ticket->verified_by }}</strong>.</p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Ticket Number</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ticket->tour_code }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Property name</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ticket->property->property_name }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Verified by</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ticket->verified_by }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Date of Tour</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ticket->tour_date }}</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Contact Person</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $ticket->tour_contact_person }}</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Contact Number</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <a href="tel:{{ $ticket->tour_contact_number }}" class="text-indigo-700 underline">{{
                            $ticket->tour_contact_number }}</a>
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Contact Email</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <a href="mailto:{{ $ticket->tour_email }}" class="text-indigo-700 underline">{{
                            $ticket->tour_email }}</a>
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Status</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        @if ($ticket->status === 'still_in_the_area' || $ticket->status === null)
                        <span>
                            Still in the area
                        </span>
                        @elseif ($ticket->status === 'already_left')
                        <span>
                            Already Left
                        </span>
                        @endif
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Type of Tour</dt>
                    <dd class="mt-1 text-sm text-gray-900 capitalize sm:mt-0 sm:col-span-2">
                        {{ $ticket->tour_type }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Number of Adults</dt>
                    <dd class="mt-1 text-sm text-gray-900  sm:mt-0 sm:col-span-2">
                        {{ $ticket->number_of_adults }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Number of Children</dt>
                    <dd class="mt-1 text-sm text-gray-900  sm:mt-0 sm:col-span-2">
                        {{ $ticket->number_of_children }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Number of Infants</dt>
                    <dd class="mt-1 text-sm text-gray-900  sm:mt-0 sm:col-span-2">
                        {{ $ticket->number_of_infants }}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Message</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{!! $ticket->tour_message !!}
                    </dd>
                </div>

            </dl>
        </div>
    </div>

    </x-app-layout>