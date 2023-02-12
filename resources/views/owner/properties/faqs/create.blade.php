<x-app-sidebar-layout>
    @section('title', 'Frequently Asked Questions')
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-medium mb-4">Add Frequently Asked Question</h1>
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('frequently-asked-questions.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input name="property_id" type="hidden" value="{{ $owner_properties->id }}">
                        <!-- questions -->
                        <div>
                            <x-label class="mb-2" for="faq_questions" :value="__('Questions')" />

                            <textarea id="faq_questions" name="faq_questions"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('activity_instruction') }}</textarea>
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-button class="w-full flex items-center justify-center">
                                {{ __('Create Question') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>

            @include('owner.properties.faqs.faqs')
        </div>
    </div>

</x-app-sidebar-layout>