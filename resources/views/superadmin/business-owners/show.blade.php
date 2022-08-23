<x-app-sidebar-layout>
    <div class="col-span-full xl:col-span-6 bg-white shadow-md rounded-sm border border-slate-200">
        <header class="px-5 py-4 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-semibold text-slate-800">{{ $business->name }}</h2>
            <a href="{{ route('legal-documents-create', $business) }}"
                class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-500 hover:bg-indigo-600 text-white">
                <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                    <path
                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="xs:block text-sm ml-2">Add Legal Document</span>
            </a>
        </header>
        <div class="p-3">
            <div class="grid grid-cols-12 gap-2">
                @foreach ($business->business_legal_documents as $business_legal_document)
                <div class="bg-slate-800 rounded-md text-white p-6 mb-4 col-span-12 lg:col-span-4">
                    <span class="mb-2 block">{{ $business_legal_document->legal_document_name ?? 'Not Found' }}</span>
                    <dd class="mt-1 text-sm text-gray-100 sm:mt-0 sm:col-span-2">
                        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                <div class="w-0 flex-1 flex items-center">
                                    <!-- Heroicon name: solid/paper-clip -->
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 flex-1 w-0 truncate"> {{
                                        $business_legal_document->legal_document_file }} </span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="{{ url('/download',$business_legal_document->legal_document_file) }}"
                                        class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                                </div>
                            </li>
                        </ul>
                    </dd>

                </div>

                @endforeach
            </div>
        </div>
    </div>
</x-app-sidebar-layout>
