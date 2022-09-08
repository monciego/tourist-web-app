<p class="text-sm text-gray-600">
    {{ $properties->properties_details->property_details }}
</p>
<div class="flex items-center gap-2">
    <div class="flex items-center">
        @include('owner.properties.property-details.add-property-details')
    </div>
    <div class="flex items-center">
        @include('owner.properties.property-details.delete-details')
    </div>
</div>
