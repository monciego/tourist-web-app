<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-md m-2 font-semibold leading-tight text-gray-800">
                {{ __('Messages') }}
            </h2>
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                    <div class="w-full px-5 py-4 mb-5 bg-green-100 border-l-4 border-green-500">
                        {{ $message }}
                    </div>
                    @endif

                    <div class="grid grid-cols-9 gap-x-4">
                        <div class="col-span-9">
                            <table class="min-w-full leading-normal">
                                <thead class="border-b bg-gray-50">
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                        Sender</th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                        Subject</th>
                                    <th
                                        class="px-3 py-3 text-xs font-normal text-left text-gray-500 uppercase align-middle">
                                    </th>
                                </thead>
                                <tbody>
                                    @each('messenger.partials.thread', $threads, 'thread',
                                    'messenger.partials.no-threads')
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
