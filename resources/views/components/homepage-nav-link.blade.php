@props(['active'])

@php
$classes = ($active ?? false)
? 'text-xs md:text-sm border-b-2 border-black pt-1'
: 'text-xs md:text-sm';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>