@php
$propertyOffers = explode(',', $properties->properties_details->property_offers);
@endphp
@foreach ($propertyOffers as $propertyOffer)
<li class="text-gray-700">

    @php
    $tokens = explode('(', $propertyOffer);
    $outer = $tokens[0];
    $inner = substr($tokens[1] ?? null, 0, -1);

    @endphp
    {{ $outer }}
    {{-- {{ $output[1] }} --}}
    {{-- {{ $propertyOffer }} --}}
</li>

<div>
    @php
    $a = $propertyOffer;
    preg_match('#\((.*?)\)#', $a ?? null, $match)
    @endphp
    {{ $match[1] ?? null }}
</div>
@endforeach
<div class="flex items-center gap-2 -ml-4">
    <div class="flex items-center">
        @include('owner.properties.property-offers.add-property-offers')
    </div>
    <div class="flex items-center">
        @include('owner.properties.property-offers.delete-offers')
    </div>
</div>