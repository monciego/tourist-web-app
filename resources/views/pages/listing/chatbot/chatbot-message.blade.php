<div x-show="open" x-cloak class="z-[1000] fixed bottom-12 right-10">
    <div class="h-[24rem]  w-[26rem] overflow-scroll flex flex-col bg-white shadow-lg rounded-lg">
        <div
            class="bg-gray-200 flex items-center justify-between sticky top-0 right-0 left-0 text-gray-700 text-lg font-medium px-6 py-4">
            <span>
                {{
                $listing->property_name
                }}
            </span>
            <svg x-cloak x-on:click="open = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>

        <div class="flex justify-between border-b items-center px-6 py-4">
            <div
                class="bg-orange-600 text-xs uppercase px-2 py-1 rounded-full border border-gray-200 text-gray-200 font-bold">
                Frequently Asked Questions
            </div>
            <div class="text-sm">{{\Carbon\Carbon::now()->format('d-m-Y')}}</div>
        </div>

        {{-- answer and question --}}
        @foreach ($listing->frequently_questions as $question)
        <div>
            <div data-target="#question{{ $question->id }}" class="px-6 py-2 border-gray-200">
                <div class="border rounded-lg p-4 cursor-pointer bg-gray-300 z-[1000]">
                    {{ $question->faq_questions }}
                </div>
            </div>

            <div id="question{{ $question->id }}" class="answer px-6 ml-auto pb-6 border-b border-gray-200">
                <div class="border rounded-lg p-4 bg-gray-100">
                    @if (!empty($question->frequently_answer->faq_answers))
                    {{ $question->frequently_answer->faq_answers }}
                    @else
                    Please message us so we can answer your question
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    const btns = document.querySelectorAll("[data-target]");
    const overlay = document.getElementById("overlay");
    console.log(btns)

    btns.forEach((btn) => {
    btn.addEventListener("click", () => {
        console.log(btn.dataset.target);
        document.querySelector(btn.dataset.target).classList.toggle("active");
    });
    });
</script>

<style>
    .answer {
        display: none;
    }

    .answer.active {
        display: block;
    }
</style>