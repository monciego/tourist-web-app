<div x-data="{open:false}" class="inline">
    <button x-on:click="open = true"
        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">

        Delete
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>
    {{-- delete modal --}}
    <div x-show="open" x-cloak>
        <div class="fixed top-2/4 left-2/4" style="z-index: 501; transform: translate(-50%, -50%)">
            <div class="p-4 text-left bg-white shadow-lg rounded-lg" style="width: 35rem">
                <header class="text-sm text-gray-800 font-bold mb-2">
                    Are you sure?
                </header>
                <p class="text-sm">
                    <strong> This action will permanently remove the category and the property.</strong> <br>
                    This cannot be undone.
                </p>
                <div class="flex justify-end gap-2 mt-4">
                    <button x-on:click="open = false" type="submit"
                        class="text-slate-700 bg-white hover:bg-white focus:ring-4 border-2 focus:outline-none focus:ring-white font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Cancel
                    </button>
                    <form method="POST" action="{{ route('categories.destroy', $category) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button data-modal-toggle="popup-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>