<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <a href="{{ route('announcements.show', $announcement) }}" class="flex-shrink-0">
        <img class="h-48 w-full object-cover" src="{{ Storage::url($announcement->article_image) }}"
            alt="{{ $announcement->title }}">
    </a>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
                <span>{{ $announcement->category }} </span>
            </p>
            <a href="{{ route('announcements.show', $announcement) }}" class="block mt-2">
                <p class="hover:underline text-xl font-semibold text-gray-900">{{ $announcement->title }}</p>
            </a>
        </div>
        <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
                <a href="#">
                    <span class="sr-only">Roel Aufderehar</span>
                    <img class="h-10 w-10 rounded-full" src="{{ asset('assets/images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900">
                    <a href="#" class="hover:underline"> Dasol </a>
                </p>
                <div class="flex space-x-1 text-sm text-gray-500">
                    <time datetime="2020-03-16"> {{ \Carbon\Carbon::parse($announcement->updated_at)->isoFormat('MMM
                        D YYYY')}} </time>
                    <span aria-hidden="true"> &middot; </span>
                    <span> {{ $announcement->updated_at->diffForHumans() }} </span>
                </div>
            </div>
        </div>
        <div class="mt-4 flex gap-2">
            @include('superadmin.announcement.edit')
            @include('superadmin.announcement.delete')
        </div>
    </div>
</div>