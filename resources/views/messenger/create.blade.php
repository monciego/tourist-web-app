<x-app-layout>
    @section('title', 'Create Message')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-md mb-2 font-semibold leading-tight text-gray-800">
                {{ $properties->property_name }}
            </h2>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('messages.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <!-- Subject Form Input -->
                            <div>
                                <x-label for="subject" :value="__('Subject')" />
                                <x-input id="subject" class="block w-full mt-1" type="text" name="subject"
                                    :value="old('subject')" required />
                            </div>

                            <!-- Recipients list -->
                            <div class="mt-4">
                                <x-label for="recipient" :value="__('Recipient')" />
                                <select name="recipient" required
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="{{ $properties->user_id }}">{{ $properties->property_name }}
                                    </option>
                                </select>
                            </div>

                            <!-- Message Form Input -->
                            <div class="mt-4">
                                <x-label for="message" :value="__('Message')" />
                                <textarea name="message" rows="10" required
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('message') }}</textarea>
                            </div>

                            <!-- Submit Form Input -->
                            <div class="mt-4">
                                <x-button class="flex items-center gap-2">
                                    <span>Send</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>
                                </x-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
