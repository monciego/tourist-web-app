<div class="space-y-6">
    <p class="text-base text-gray-900">
        {{ $properties->properties_details->property_description }}
    </p>
</div>
<div class="flex mt-2 items-center gap-2">
    <div class="flex items-center">
        @include('owner.properties.property-description.add-property-description')
    </div>
    <div class="flex items-center">
        @include('owner.properties.property-description.delete-description')
    </div>
</div>
