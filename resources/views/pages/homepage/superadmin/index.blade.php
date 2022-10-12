<div class="bg-slate-600 h-[50vh] sm:h-[75vh] overflow-hidden m-4 sm:m-0 rounded-lg shadow-sm relative">
    <div class="aspect-w-3  border-2 border-gray-300 border-dashed flex items-center justify-center flex-col h-full">
        {{-- if you reading this code i'm sorry hehehehe this is rush and i admit this code is so complicated to read :)
        --}}

        @if ($homepage_datas->count() === 0)
        <div class="flex text-sm text-gray-600">
            @include('pages.homepage.superadmin.create')
        </div>
        @endif

        @foreach ($homepage_datas as $homepage_data)
        <div class="flex text-sm text-gray-600">
            @include('pages.homepage.superadmin.create')
        </div>
        @if(!empty($homepage_data->homepage_image))
        <video class="h-full w-full object-cover" autoplay muted loop>
            <source src="{{ Storage::url($homepage_data->homepage_image) }}" />
        </video>
        <img src="{{ Storage::url($homepage_data->homepage_image) }}" onerror="this.style.display='none';" alt="image"
            class="object-cover h-full w-full object-center">
        @endif
        @endforeach
        @include('pages.homepage.superadmin.create-text')
    </div>
</div>
