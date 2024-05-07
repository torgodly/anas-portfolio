@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pb-2 border-b-2 text-3xl border-snapchat-yellow `font-bold leading-5 text-snapchat-yellow focus:outline-none focus:border-snapchat-yellow transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pb-2 text-white font-light text-3xl leading-5 hover:text-gray-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
