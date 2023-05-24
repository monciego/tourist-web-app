<x-app-layout>
    @section('title', 'Dasol Tourism - Home')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @guest
            @include('pages.homepage.user.index')
            @endguest
            @auth
            @if (Auth::user()->hasRole('user'))
            @include('pages.homepage.user.index')
            @endif
            @if (Auth::user()->hasRole('superadministrator'))
            @include('pages.homepage.superadmin.index')
            @endif
            @if (Auth::user()->hasRole('owner'))
            @include('pages.homepage.owner.index')
            @endif
            @endauth
        </div>
    </div>
    @include('pages.homepage.feature-cards')

    @if ($properties->count() != 0)
    <div class="flex items-center justify-center">
        <a href="{{ route('listing.index') }}"
            class="flex items-center gap-2 justify-center active:scale-[.98] text-sm rounded text-right text-white bg-indigo-600 hover:bg-indigo-800 px-4 py-1.5">
            Show More
        </a>
    </div>
    @endif
    @include('pages.homepage.inspiration')
    @auth
    @endauth

    @if(empty($announcements->title))
    <div class="sm:px-6 my-10 lg:px-8">
        <p class="text-gray-800 text-3xl font-semibold">Announcements and News</p>
        <div class="my-4 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none ">
            @foreach ($announcements as $announcement)
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <a href="{{ route('announcements.and.news', $announcement) }}" class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ Storage::url($announcement->article_image) }}"
                        alt="{{ $announcement->title }}">
                </a>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-indigo-600">
                            <span>{{ $announcement->category }} </span>
                        </p>
                        <a href="{{ route('announcements.and.news', $announcement) }}" class="block mt-2">
                            <p class="hover:underline text-xl font-semibold text-gray-900">{{ $announcement->title }}
                            </p>
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
                                <time datetime="2020-03-16"> {{
                                    \Carbon\Carbon::parse($announcement->updated_at)->isoFormat('MMM
                                    D YYYY')}} </time>
                                <span aria-hidden="true"> &middot; </span>
                                <span> {{ $announcement->updated_at->diffForHumans() }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">
        {{ $announcements->links() }}
    </div>
    </div>
    @endif


    <footer class="p-4 bg-white shadow md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0">
                <x-application-logo class="block" />
            </a>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center">© Dasol. All Rights Reserved.
        </span>
    </footer>
</x-app-layout>