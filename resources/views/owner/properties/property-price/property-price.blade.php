<p class="tracking-tight text-3xl text-gray-900">
    ₱ {{ $properties->properties_details->property_price }}
</p>
<div class="flex flex-wrap gap-2 mt-2">
    <div class="flex items-center">
        @include('owner.properties.property-price.add-price')
    </div>
    <div class="flex items-center">
        @include('owner.properties.property-price.delete-price')
    </div>
</div>
