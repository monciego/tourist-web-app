<x-app-layout>
    @section('title', 'Dasol Tourism - Home')
    <div class="py-14">

        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">{{
                        $announcement->category }}</span>
                    <span
                        class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        {{ $announcement->title }}
                    </span>
                </h1>
            </div>
            <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                <div class="h-[20rem]  w-full rounded-md">
                    <img class="object-cover h-full w-full rounded-md"
                        src="{{ Storage::url($announcement->article_image) }}" alt="{{ $announcement->title }}">
                </div>

                <p class="mt-4">
                    {!! $announcement->details !!}
                </p>
            </div>

            <a href="{{ route('homepage') }}" class="block text-indigo-600 mt-6 text-center">
                ← Go back
            </a>
        </div>
    </div>
</x-app-layout>