<x-app-sidebar-layout>
    @section('title', 'Categories')
    <div class="col-span-full xl:col-span-6 bg-white shadow-md rounded-sm border border-slate-200">
        <header class="px-5 pt-4 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-semibold text-slate-800">Add Categories</h2>
            @include('categories.create')
        </header>
        <div class="p-3">
            <div class="grid grid-cols-6 gap-2">
                @foreach ($categories as $category)
                <div class="col-span-6 lg:col-span-3 p-6 rounded-lg border shadow-md bg-gray-800 border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight  text-white">
                            {{ $category->category_name }}
                        </h5>
                    </a>

                    <div class="mt-4 flex items-center gap-2">
                        @include('categories.edit')
                        @include('categories.delete')
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-app-sidebar-layout>