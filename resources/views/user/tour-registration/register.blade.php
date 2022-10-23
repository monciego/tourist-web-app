<x-app-layout>
    @section('title', 'Dasol Tourism - Register Tour')
    <div class="py-12">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 sm:px-6 lg:px-8" :errors="$errors" />
        <form action="{{ route('tour-registration.store') }}" method="POST" class="max-w-7xl lg:max-w-6xl mx-auto ">
            @csrf
            <h2 class="text-lg font-bold mb-4">
                Tour Registration ({{ $property->property_name }})
            </h2>
            <input type="hidden" name="tour_code">
            <input type="hidden" name="property_id" value="{{ $property->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            {{-- date of tour --}}

            <div>
                <x-label for="tour_date" :value="__('Date of Tour')" />
                <x-input min="{{ $date }}" id="tour_date" class="block mt-1 w-full" type="date" name="tour_date"
                    :value="old('tour_date')" required autofocus />
            </div>
            {{-- contact person --}}
            <div class="mt-4">
                <x-label for="tour_contact_person" :value="__('Contact Person')" />
                <x-input id="tour_contact_person" class="block mt-1 w-full" type="text" value="{{ Auth::user()->name }}"
                    name="tour_contact_person" required autofocus />
            </div>
            {{-- contact number --}}
            <div class="mt-4">
                <x-label for="tour_contact_number" :value="__('Contact Number')" />
                <x-input id="tour_contact_number" class="block mt-1 w-full" type="number" name="tour_contact_number"
                    :value="old('tour_contact_number')" required autofocus />
            </div>
            {{-- email address --}}
            <div class="mt-4">
                <x-label for="tour_email" :value="__('Email Address')" />
                <x-input id="tour_email" class="block mt-1 w-full" type="email" name="tour_email"
                    value="{{ Auth::user()->email }}" required autofocus />
            </div>
            {{-- type of tour --}}
            <div class="mt-4">
                <x-label for="tour_email" :value="__('Type of Tour')" />
                <select name="tour_type" required class="mt-1 focus:ring-indigo-500
focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <option selected disabled hidden>Type of tour</option>
                    <option id="day_tour" value="day_tour">Day Tour</option>
                    <option id="overnight" value="overnight">Overnight</option>
                </select>
            </div>

            {{-- guest --}}
            <div class="mt-4" x-data="{open:false}">
                <label x-on:click="open=!open" class="inline-block text-sm font-medium text-gray-700">Guests</label>
                <div class="relative mt-1">
                    <button type="button" x-on:click="open = !open"
                        class="cursor-pointer z-[900] relative w-full  rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                        aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#444" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            <span class="ml-3 block truncate">Guests</span>
                        </span>
                        <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                            <!-- Heroicon name: mini/chevron-up-down -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>

                    <div x-show="open" x-cloak x-on:click="open = false"
                        class="z-[800] fixed top-0 bottom-0 right-0 left-0">
                    </div>

                    <ul x-show="open" x-cloak
                        class="z-[900] absolute  mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                        tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                        aria-activedescendant="listbox-option-3">
                        <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9"
                            id="listbox-option-0" role="option">
                            <span class="font-bold text-base ml-3 block truncate">Adults</span>
                            <span class="font-normal ml-3 block truncate text-sm">Age 13+</span>
                            <div class="absolute inset-y-0 right-0 flex  items-center pr-4">
                                <!-- Heroicon name: mini/check -->
                                <button type="button" class="h-10  rounded-full w-10 border border-gray-400"
                                    id="adultsBtnDecrement">-</button>
                                <input
                                    class="count text-lg flex items-center  w-14 text-center border-none outline-none"
                                    type="number" name="number_of_adults" id="number_of_adults" value="0" min="0"
                                    readonly>
                                <button type="button" class="h-10 rounded-full w-10 border border-gray-400"
                                    id="adultsBtnIncrement">+</button>
                            </div>
                        </li>

                        <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9"
                            id="listbox-option-0" role="option">
                            <span class="font-bold text-base ml-3 block truncate">Children</span>
                            <span class="font-normal ml-3 block truncate text-sm">Ages 2-2</span>
                            <div class="absolute inset-y-0 right-0 flex  items-center pr-4">
                                <!-- Heroicon name: mini/check -->
                                <button type="button" class="h-10  rounded-full w-10 border border-gray-400"
                                    id="childrenBtnDecrement">-</button>
                                <input
                                    class="count text-lg flex items-center  w-14 text-center border-none outline-none"
                                    type="number" name="number_of_children" id="number_of_children" value="0" min="0"
                                    readonly>
                                <button type="button" class="h-10 rounded-full w-10 border border-gray-400"
                                    id="childrenBtnIncrement">+</button>
                            </div>
                        </li>

                        <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9"
                            id="listbox-option-0" role="option">
                            <span class="font-bold text-base ml-3 block truncate">Infants</span>
                            <span class="font-normal ml-3 block truncate text-sm">Under 2</span>
                            <div class="absolute inset-y-0 right-0 flex  items-center pr-4">
                                <!-- Heroicon name: mini/check -->
                                <button type="button" class="h-10  rounded-full w-10 border border-gray-400"
                                    id="infantsBtnDecrement">-</button>
                                <input
                                    class="count text-lg flex items-center  w-14 text-center border-none outline-none"
                                    type="number" name="number_of_infants" id="number_of_infants" value="0" min="0"
                                    readonly>
                                <button type="button" class="h-10 rounded-full w-10 border border-gray-400"
                                    id="infantsBtnIncrement">+</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- message --}}
            <div class="mt-4">
                <x-label for="tour_message" :value="__('Message(optional)')" />
                <textarea name="tour_message" id="tour_message" autocomplete="tour_message"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('tour_message') }}</textarea>
            </div>
            <x-button class="my-4 w-full flex items-center justify-center ">
                {{ __('Register') }}
            </x-button>
    </div>
    </form>
    </div>
    <script>
        const adultsBtnIncrement = document.querySelector('#adultsBtnIncrement');
            const adultsBtnDecrement = document.querySelector('#adultsBtnDecrement');
             let count = document.getElementById('number_of_adults');
             function handleIncrement() {
                count.stepUp();
            }
            function handleDecrement() {
             count.stepDown();
            }
            adultsBtnIncrement.addEventListener("click", handleIncrement);
            adultsBtnDecrement.addEventListener("click", handleDecrement);
            // children

            const childrenBtnIncrement = document.querySelector('#childrenBtnIncrement');
            const childrenBtnDecrement = document.querySelector('#childrenBtnDecrement');
             let childrenCount = document.getElementById('number_of_children');
             function childrenHandleIncrement() {
                childrenCount.stepUp();
            }
            function childrenHandleDecrement() {
             childrenCount.stepDown();
            }
            childrenBtnIncrement.addEventListener("click", childrenHandleIncrement);
           childrenBtnDecrement.addEventListener("click", childrenHandleDecrement);
            // infants

            const infantsBtnIncrement = document.querySelector('#infantsBtnIncrement');
            const infantsBtnDecrement = document.querySelector('#infantsBtnDecrement');
             let infantsCount = document.getElementById('number_of_infants');
             function infantsHandleIncrement() {
                infantsCount.stepUp();
            }
            function infantsHandleDecrement() {
             infantsCount.stepDown();
            }
            infantsBtnIncrement.addEventListener("click", infantsHandleIncrement);
           infantsBtnDecrement.addEventListener("click", infantsHandleDecrement);
    </script>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    </div>
</x-app-layout>
