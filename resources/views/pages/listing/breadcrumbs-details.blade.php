<li>
    <div class="flex items-center">
        <a href="#" class="mr-2 text-sm font-medium text-gray-900">
            {{ $listing->properties_details->property_tag }}
        </a>
        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" class="w-4 h-5 text-gray-300">
            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
        </svg>
    </div>
</li>

<li>
    <div class="flex items-center">
        <a href="#" class="mr-2 text-sm font-medium text-gray-900">
            EST. {{ $listing->properties_details->property_est }}
        </a>
        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" class="w-4 h-5 text-gray-300">
            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
        </svg>
    </div>
</li>

<li>
    <div class="flex items-center">
        <a href="#" class="mr-2 text-sm font-medium text-gray-900">
            {{ $listing->properties_details->property_address }}
        </a>
    </div>
</li>
