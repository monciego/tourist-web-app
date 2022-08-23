<x-app-sidebar-layout>
    <div class="col-span-full xl:col-span-6 bg-white shadow-md rounded-sm border border-slate-200">
        <header class="px-5 py-4 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-semibold text-slate-800">{{ $business->name }}</h2>
            <a href="{{ route('businesses.create') }}"
                class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 hover:bg-indigo-600 text-white">
                <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                    <path
                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="xs:block text-sm ml-2">Add Legal Document</span>
            </a>
        </header>
        <div class="p-3">
            {{ $business->business_owner->business_description ?? '' }}
            @foreach ($business->business_legal_documents as $business_legal_document)
            <div class="bg-slate-700 text-white p-6 mb-4">
                {{ $business_legal_document->legal_document_name ?? 'Not Found' }} <br>
                {{ $business_legal_document->legal_document_file?? 'Not Found'}}

                by: {{ $business->name ?? ''}}
            </div>

            @endforeach
        </div>
    </div>
</x-app-sidebar-layout>
