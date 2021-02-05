@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-sm text-red-600 font-semibold hover:text-red-800 transition'
            : 'text-sm text-gray-600 font-semibold hover:text-red-600 transition';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
