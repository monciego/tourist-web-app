@php
$propertyOffers = explode(',', $properties->properties_details->property_offers);
@endphp
@foreach ($propertyOffers as $propertyOffer)
<li class="text-gray-700">
    {{ $propertyOffer }}
</li>
@endforeach
<div class="flex items-center gap-2 -ml-4">
    <div class="flex items-center">
        @include('owner.properties.property-offers.add-property-offers')
    </div>
    <div class="flex items-center">
        @include('owner.properties.property-offers.delete-offers')
    </div>
</div>
