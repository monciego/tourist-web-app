<div x-data="{open:false}" class="inline">
    <button x-on:click="open = true"
        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
        Upload an image
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="open" x-cloak>
        <div class="absolute bg-slate-50 h-2/4 shadow-md rounded-md top-2/4 left-2/4 w-full -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Upload Image</h2>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class="px-4 py-2" action="{{ route('store-image-one') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- property image --}}
                <input name="property_id" type="hidden" value="{{ $properties->id }}">
                <div class="text-left">
                    <label for="image_one" class="block mb-2 text-sm font-medium text-gray-700">
                        Image One
                    </label>
                    <input class="w-full" id="image_one" name="image_one" type="file" required>
                </div>


                <button
                    class="mt-4 bg-indigo-500 hover:bg-indigo-600 w-full justify-center inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Upload Image') }}
                </button>
            </form>
        </div>
    </div>
</div>
