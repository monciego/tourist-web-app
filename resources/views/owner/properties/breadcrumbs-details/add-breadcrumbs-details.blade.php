<div x-data="{breadCrumbsOpen:false}" class="inline">
    @if(empty($properties->properties_details->property_tag))
    <button x-on:click="breadCrumbsOpen = true"
        class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 hover:bg-indigo-600 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        <span class="xs:block text-sm ml-2">Add More Details</span>
    </button>
    @else

    <button x-on:click="breadCrumbsOpen = true"
        class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-1.5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        Edit
    </button>
    @endif

    <div x-show="breadCrumbsOpen" x-cloak x-on:click="breadCrumbsOpen = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    {{-- create modal --}}
    <div x-show="breadCrumbsOpen" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-3/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Add More Details</h2>
                <svg x-on:click="breadCrumbsOpen = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16"
                    fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class=" p-4" action="{{ route('store-breadcrumbs') }}" method="POST">
                @csrf
                <input name="property_id" type="hidden" value="{{ $properties->id }}">
                <div>
                    <x-label for="property_tag" :value="__('Property Tag')" />
                    @if(empty($properties->properties_details->property_tag))
                    <x-input id="property_tag" class="block
                        mt-1 w-full" type="text" name="property_tag" required autofocus />
                    @else
                    <x-input id="property_tag" class="block
                                            mt-1 w-full" type="text" name="property_tag"
                        :value="old('property_tag', $properties->properties_details->property_tag)" required
                        autofocus />
                    @endif
                </div>
                <div class="mt-4">
                    <x-label for="property_est" :value="__('Year Established')" />
                    @if(empty($properties->properties_details->property_est))
                    <x-input id=" property_est" class="block mt-1 w-full" type="text" name="property_est" required
                        autofocus />
                    @else
                    <x-input id=" property_est" class="block mt-1 w-full" type="text" name="property_est"
                        :value="old('property_est', $properties->properties_details->property_est)" required
                        autofocus />
                    @endif
                </div>
                <div class="mt-4">
                    <x-label for="property_address" :value="__('Property Address')" />
                    @if(empty($properties->properties_details->property_address))
                    <x-input id="property_address" class="block mt-1 w-full" type="text" name="property_address"
                        required autofocus />
                    @else
                    <x-input id="property_address" class="block mt-1 w-full" type="text" name="property_address"
                        :value="old('property_address', $properties->properties_details->property_address)" required
                        autofocus />
                    @endif
                </div>


                <button class=" mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border
                        border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest
                        active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300
                        disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Yes, Create it') }}
                </button>
            </form>
        </div>
    </div>
</div>
