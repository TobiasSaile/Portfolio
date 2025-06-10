<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-text ring-1 ring-transparent transition hover:text-button focus:outline-none focus-visible:ring-button"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="rounded-md px-3 py-2 text-text ring-1 ring-transparent transition hover:text-button focus:outline-none focus-visible:ring-button"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-text ring-1 ring-transparent transition hover:text-button focus:outline-none focus-visible:ring-button"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
