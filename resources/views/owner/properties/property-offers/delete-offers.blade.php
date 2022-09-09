<div x-data="{open:false}" class="inline">

    <button x-on:click="open = true"
        class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-red-600 hover:bg-red-800 px-4 py-1.5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>
        Delete Offers
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>
    {{-- delete modal --}}
    <div x-show="open" x-cloak>
        <div class="fixed top-2/4 left-2/4" style="z-index: 501; transform: translate(-50%, -50%)">
            <div class="p-4 text-left bg-white shadow-lg rounded-lg" style="width: 28rem">
                <header class="text-sm text-gray-800 font-bold mb-2">
                    Are you sure?
                </header>
                <p class="text-xs">
                    This action will permanently remove the offers.
                    This cannot be undone.
                </p>
                <div class="flex justify-end gap-2 mt-4">
                    <div x-on:click="open = false"
                        class="text-xs py-1 px-4 cursor-pointer text-gray-600 border border-gray-400 bg-gray-50 hover:border-gray-600 rounded-md">
                        Cancel
                    </div>
                    <form method="POST"
                        action="{{ route('remove.offers', $properties->properties_details->property_id) }}">
                        @csrf
                        <button type="submit"
                            class="text-xs cursor-pointer py-1 px-4 bg-red-500 hover:bg-red-600 text-white rounded-md">
                            Yes, Delete it
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
