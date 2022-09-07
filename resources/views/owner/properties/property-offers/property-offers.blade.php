@php
$propertyOffers = explode(',', $properties->properties_details->property_offers);
@endphp
@foreach ($propertyOffers as $propertyOffer)
<li class="text-gray-700">
    {{ $propertyOffer }}
</li>
@endforeach
