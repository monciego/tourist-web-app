<x-app-sidebar-layout>
    @section('title', 'Categories')
    <div class="col-span-full xl:col-span-6 bg-white shadow-md rounded-sm border border-slate-200">
        <header class="px-5 pt-4 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-semibold text-slate-800">{{ $category->category_name }}</h2>
            <a href="{{ route('print.category', $category) }}"
                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Print
            </a>
        </header>
        <div class="p-3">
            <div class="grid grid-cols-6 gap-2">
                @foreach ($category->properties as $category)
                <div class="col-span-6 lg:col-span-3 p-6 rounded-lg border shadow-md bg-gray-800 border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight  text-white">
                            {{ $category->property_name }}
                        </h5>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-app-sidebar-layout>