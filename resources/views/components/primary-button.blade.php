<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-button border border-transparent rounded-md font-semibold text-xs text-backgroundc1 uppercase tracking-widest hover:bg-buttonh focus:bg-buttonh active:bg-buttonh focus:outline-none focus:ring-2 focus:ring-button focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
