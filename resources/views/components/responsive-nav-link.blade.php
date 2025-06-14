@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-button text-start text-base font-medium text-text bg-backgroundc3 focus:outline-none focus:text-text focus:bg-backgroundc3 focus:border-buttonh transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-text/70 hover:text-text hover:bg-backgroundc3 hover:border-backgroundc3 focus:outline-none focus:text-text focus:bg-backgroundc3 focus:border-backgroundc3 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
