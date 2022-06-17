@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 text-blue-600 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 text-sm font-medium leading-5 text-gray-500 hover:text-blue-600 font-medium focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
