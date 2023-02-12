<div class="flex justify-center gap-4 items-center mt-4">
    @foreach ($owner_properties->frequently_questions as $item)
    <div class="block p-6 rounded-lg shadow-lg bg-white w-full">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $item->faq_questions }}</h5>
        @if (!empty($item->frequently_answer->faq_answers))
        <p class="text-gray-700 text-base mb-4">
            {{ $item->frequently_answer->faq_answers }}
        </p>

        @else
        <a href="{{ route('create.answers', $item->id) }}"
            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
            Add Answer
        </a>
        @endif
    </div>
    @endforeach
</div>