<div x-data="{open:false}" class="inline">
    <button x-on:click="open = true"
        class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-1.5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        Edit
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="open" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-3/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Edit Announcement</h2>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class="p-4" action="{{ route('announcements.update', $announcement) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div>
                    <x-label for="title" :value="__('Title')" />
                    <x-input id="title" value="{{ $announcement->title }}" class="block mt-1 w-full" type="text"
                        name="title" required autofocus />
                </div>
                <div class="mt-4">
                    <x-label for="category" :value="__('Category')" />
                    <x-input id="category" value="{{ $announcement->category }}" class="block mt-1 w-full" type="text"
                        name="category" required autofocus />
                </div>
                <div class="mt-4">
                    <x-label for="details" :value="__('Details')" />
                    <textarea name="details" id="details" autocomplete="details"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $announcement->details }}</textarea>
                </div>

                <div class="mt-4">
                    <x-label for="article_image" :value="__('Image')" />
                    <input class="mt-1 w-full" id="article_image" name="article_image" type="file">
                    <div x-data="{open:false}">
                        <div class="mt-1 text-base text-indigo-600 underline cursor-pointer" x-on:click="open = !open"
                            x-text="open ? 'Hide product image': 'Show product image'">
                        </div>
                        <div x-show="open" x-cloak class="h-60">
                            @if ($announcement->article_image)
                            <img class="rounded-t-lg h-full w-full object-cover"
                                src="{{ Storage::url($announcement->article_image) }}" alt="{{ $announcement->title }}">
                            @else
                            <img class="rounded-t-lg h-full w-full object-cover"
                                src="{{ asset('assets/images/no-image.jpg') }}" alt="No Image">
                            @endif
                        </div>
                    </div>
                </div>

                <button
                    class="mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Save Changes') }}
                </button>
            </form>
        </div>
    </div>
</div>