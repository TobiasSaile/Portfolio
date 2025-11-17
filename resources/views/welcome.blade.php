<x-guest-layout>
    <div class="bg-white">
        <div class="relative">
            <div class="mx-auto max-w-7xl">
                <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block">
                        <polygon points="0,0 90,0 50,100 0,100" />
                    </svg>

                    <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                            <h1 class="text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl">Willkommen zu meinem Portfolio</h1>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Auf dieser Webseite finden sie mehrere Technische Fähigkeiten die ich besitze und was ich bis jetzt gelernt habe.</p>
                            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Als erstes müssen Sie sich anmelden oder registrieren.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="{{ $visitedBefore ? route('login') : route('register') }}"
                                    class="rounded-md px-3.5 py-2.5 bg-indigo-600 text-white rounded-md">
                                    Tour starten
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img src="https://images.unsplash.com/photo-1483389127117-b6a2102724ae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1587&q=80" alt="" class="aspect-3/2 object-cover lg:aspect-auto lg:size-full" />
            </div>
        </div>
    </div>

</x-guest-layout>