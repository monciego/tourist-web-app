<div x-data="{open:false}" class="inline">
    <button x-on:click="open = true"
        class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 hover:bg-indigo-600 text-white">
        <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
            <path
                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
        </svg>
        <span class="xs:block text-sm ml-2">Add Information</span>
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="open" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md mb-8 top-2/4 left-2/4 w-3/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Owner Information</h2>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class=" p-4" action="{{ route('businesses.store') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $business->id }}">

                <div>
                    <x-label for="name_of_registrant" :value="__('Name of Taxpayer/Registrant')" />
                    <x-input id="name_of_registrant" class="block mt-1 w-full" type="text" name="name_of_registrant"
                        :value="old('name_of_registrant')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="owner_address" :value="__('Owner\'s Address')" />
                    <x-input id="owner_address" class="block mt-1 w-full" type="text" name="owner_address"
                        :value="old('owner_address')" required autofocus />
                </div>

                <div class="mt-4">
                    <label for="owner_gender" class="block text-sm font-medium
                                        text-gray-700">Gender</label>
                    <select id="owner_gender" name="owner_gender" autocomplete="gender"
                        class="mt-1 block w-full py-2 px-3 border
                                        border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
                                        focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm inputs cursor-no-drop">
                        <option selected disabled hidden>Gender</option>
                        <option {{ old('owner_gender')=='male' ? 'selected' : '' }} value="male">
                            Male</option>
                        <option {{ old('owner_gender')=='female' ? 'selected' : '' }} value="female">Female
                        </option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-label for="owner_date_of_birth" :value="__('Date of Birth')" />
                    <x-input id="owner_date_of_birth" class="block mt-1 w-full" type="date" name="owner_date_of_birth"
                        :value="old('owner_date_of_birth')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="owner_contact_number" :value="__('Contact Number')" />
                    <x-input id="owner_contact_number" class="block mt-1 w-full" type="number"
                        name="owner_contact_number" :value="old('owner_contact_number')" required autofocus />
                </div>

                <button
                    class="mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Yes, Create it') }}
                </button>
            </form>
        </div>
    </div>
</div>