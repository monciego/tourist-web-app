<div x-data="{open:false}" class="inline">
    <div class="absolute top-2/4 left-2/4 w-9/12 -translate-y-2/4 -translate-x-2/4 z-[500]">
        <svg class="mx-auto h-12 w-12 text-gray-200" stroke="currentColor" fill="none" viewBox="0 0 48 48"
            aria-hidden="true">
            <path
                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex items-center justify-center">
            <button x-on:click="open = true"
                class="mb-[6rem] px-4 py-2 cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                Upload a video or image
            </button>
        </div>
    </div>


    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[1000] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="open" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-9/12 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 1001;">
            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Upload a video or an image</h2>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class="px-4 py-2" action="{{ route('store.homepage_image') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{ Auth::user()->id }}">
                {{-- property image --}}
                <div class="text-left">
                    <label for="homepage_image" class="block mb-2 text-sm font-medium text-gray-700">
                        Image
                    </label>
                    <input class="w-full" id="homepage_image" name="homepage_image" type="file" required>
                </div>
                <button
                    class="mt-4 bg-indigo-500 hover:bg-indigo-600 w-full justify-center inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Upload') }}
                </button>
            </form>
        </div>
    </div>
</div>
