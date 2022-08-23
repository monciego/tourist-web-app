<x-app-sidebar-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('upload-document') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="property_id" value="{{ $property->id }}">

            <!-- Legal Document Name -->
            <div>
                <x-label for="legal_document_name" :value="__('Legal Document Name')" />

                <x-input id="legal_document_name" class="block mt-1 w-full" type="text" name="legal_document_name"
                    :value="old('legal_document_name')" required autofocus />
            </div>

            <!-- Legal Document File -->
            <div class="mt-4">
                <x-label for="legal_document_file" :value="__('Legal Document File')" />

                <x-input id="legal_document_file" class="block mt-1 w-full" type="file" name="legal_document_file"
                    :value="old('legal_document_file')" required />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button class="w-full flex items-center justify-center">
                    {{ __('Add Legal Document') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-sidebar-layout>
