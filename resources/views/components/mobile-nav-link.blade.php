@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-sm text-red-600 hover:text-red-800 transition font-semibold'
            : 'text-sm text-gray-500 hover:text-red-600 transition font-semibold';
@endphp


<div class="border-b border-gray-200 py-2">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</div>
