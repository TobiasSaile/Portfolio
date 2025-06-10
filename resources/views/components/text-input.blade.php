@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-backgroundc2 bg-backgroundc1 text-text focus:border-button focus:ring-button rounded-md shadow-sm']) }}>
