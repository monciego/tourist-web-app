<form action="{{ route('update.status') }}" method="POST" class="px-8">
    @csrf
    <input type="hidden" name="tour_code" value="{{ $registrationData->tour_code }}">
    <div class="md:gap-6 mb-2">
        <div class="col-span-6 sm:col-span-3">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" name="status" autocomplete="status"
                class="mt-1 block w-full rounded-md border border-gray-900 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option @if ($registrationData->status === 'still_in_the_area')
                    selected
                    @endif id="still_in_the_area" value="still_in_the_area">Still in the area</option>
                <option @if ($registrationData->status === 'already_left')
                    selected
                    @endif id="already_left" value="already_left">Already left</option>
            </select>
        </div>
    </div>
    <x-button class="mb-4">Save Changes</x-button>
</form>