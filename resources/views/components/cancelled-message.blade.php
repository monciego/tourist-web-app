@if (session('cancel-message'))
<div x-data="{open:true}" class="inline">
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[1000] fixed top-0 bottom-0 right-0 left-0">
    </div>


    <div x-show="open" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-2/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 1001;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">We're sad to see you go</h2>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>

            <p class="p-4">
                {{ session('cancel-message') }}
            </p>
            <div class="flex items-center justify-center">
                <a href="{{ route('listing.index') }}"
                    class="mb-4 flex w-2/4 items-center  justify-center active:scale-[.98] text-base rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-3">
                    Explore More
                </a>
            </div>

        </div>
    </div>
</div>
@endif