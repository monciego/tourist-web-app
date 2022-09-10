<div class="mt-4" x-data="{open:false}">
    <label x-on:click="open=!open" class="inline-block text-sm font-medium text-gray-700">Guests</label>
    <div class="relative mt-1">
        <button type="button" x-on:click="open = !open"
            class="cursor-pointer z-[900] relative w-full  rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
            aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
            <span class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#444"
                    class="w-6 h-6">
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

        <div x-show="open" x-cloak x-on:click="open = false" class="z-[800] fixed top-0 bottom-0 right-0 left-0">
        </div>

        <ul x-show="open" x-cloak
            class="z-[900] absolute  mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
            tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
            <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9" id="listbox-option-0"
                role="option">
                <span class="font-bold text-base ml-3 block truncate">Adults</span>
                <span class="font-normal ml-3 block truncate text-sm">Age 13+</span>
                <div class="absolute inset-y-0 right-0 flex  items-center pr-4">
                    <!-- Heroicon name: mini/check -->
                    <button class="h-10  rounded-full w-10 border border-gray-400" id="adultsBtnDecrement">-</button>
                    <input class="count text-lg flex items-center  w-14 text-center border-none outline-none"
                        type="number" name="adults_guest" id="adults_guest" value="0" min="0" disabled>
                    <button class="h-10 rounded-full w-10 border border-gray-400" id="adultsBtnIncrement">+</button>
                </div>
            </li>

            <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9" id="listbox-option-0"
                role="option">
                <span class="font-bold text-base ml-3 block truncate">Children</span>
                <span class="font-normal ml-3 block truncate text-sm">Ages 2-2</span>
                <div class="absolute inset-y-0 right-0 flex  items-center pr-4">
                    <!-- Heroicon name: mini/check -->
                    <button class="h-10  rounded-full w-10 border border-gray-400" id="childrenBtnDecrement">-</button>
                    <input class="count text-lg flex items-center  w-14 text-center border-none outline-none"
                        type="number" name="children_guest" id="children_guest" value="0" min="0" disabled>
                    <button class="h-10 rounded-full w-10 border border-gray-400" id="childrenBtnIncrement">+</button>
                </div>
            </li>

            <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9" id="listbox-option-0"
                role="option">
                <span class="font-bold text-base ml-3 block truncate">Infants</span>
                <span class="font-normal ml-3 block truncate text-sm">Under 2</span>
                <div class="absolute inset-y-0 right-0 flex  items-center pr-4">
                    <!-- Heroicon name: mini/check -->
                    <button class="h-10  rounded-full w-10 border border-gray-400" id="infantsBtnDecrement">-</button>
                    <input class="count text-lg flex items-center  w-14 text-center border-none outline-none"
                        type="number" name="infants_guest" id="infants_guest" value="0" min="0" disabled>
                    <button class="h-10 rounded-full w-10 border border-gray-400" id="infantsBtnIncrement">+</button>
                </div>
            </li>
        </ul>
    </div>
</div>


<script>
    const adultsBtnIncrement = document.querySelector('#adultsBtnIncrement');
    const adultsBtnDecrement = document.querySelector('#adultsBtnDecrement');
     let count = document.getElementById('adults_guest');
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
     let childrenCount = document.getElementById('children_guest');
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
     let infantsCount = document.getElementById('infants_guest');
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
