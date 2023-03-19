<x-app-layout>
    @section('title', 'Review and Rating')
    <div class=" flex flex-col justify-center py-12  sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <h2 class="font-bold">{{ $property->properties_details->property_name }}</h2>
                <form class="space-y-6" action="{{ route('reviews.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700"> Please Rate Us (0 - 5)
                        </label>
                        <div class="mt-1">
                            <input id="rating" min="0" max="5" name="rating" type="number" autocomplete="rating"
                                required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="review" class="block text-sm font-medium text-gray-700">Leave us your
                            experience</label>
                        <div class="mt-1">
                            <textarea rows="4" name="review" id="review"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                    </div>


                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>