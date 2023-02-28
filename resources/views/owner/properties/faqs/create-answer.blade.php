<x-app-sidebar-layout>
    @section('title', 'Answers')
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-medium mb-4">Answer</h1>
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('faq-answers.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input name="question_id" type="hidden" value="{{ $question->id }}">
                        <!-- questions -->
                        <div>
                            <x-label class="mb-2" for="faq_answers" :value="__($question->faq_questions)" />

                            <textarea id="faq_answers" name="faq_answers"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('faq_answers') }}</textarea>
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-button class="w-full flex items-center justify-center">
                                {{ __('Add Answer') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-sidebar-layout>