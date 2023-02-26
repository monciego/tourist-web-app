<div x-on:click="searchOpen = !searchOpen" :class="searchOpen ? 'hidden' : 'inline-flex'" class="items-center px-1">
    <div
        class="flex items-center cursor-pointer border-1 transition-all rounded-full py-2 border hover:shadow-md border-gray-300 shadow bg-white 500 text-gray-600">
        <div class="text-gray-800 font-medium px-5 pr-28 text-sm">
            <span>Let's begin your journey!</span>
        </div>
        <button type="submit" class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
    </div>
</div>