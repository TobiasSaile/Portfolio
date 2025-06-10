<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-backgroundc1">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <main class="mt-6">
                        <!-- Laravel-Style Card -->
                        <div class="bg-backgroundc2 rounded-xl shadow-2xl overflow-hidden animate-fade-in opacity-0 max-w-6xl mx-auto">
                            <div class="flex flex-col md:flex-row">
                                <!-- Content Section -->
                                <div class="md:w-1/2 p-12 flex flex-col justify-center">
                                    <!-- Title -->
                                    <h1 class="text-3xl font-bold text-text mb-4 animate-slide-up opacity-0" style="animation-delay: 0.3s;">
                                        Willkommen!
                                    </h1>
                                    
                                    <!-- Description -->
                                    <div class="text-text/80 mb-6 space-y-3 animate-slide-up opacity-0" style="animation-delay: 0.6s;">
                                        <p class="text-lg leading-relaxed">
                                            Hallo! Ich bin Tobi, ein leidenschaftlicher Entwickler mit einem Fokus auf moderne Webtechnologien.
                                        </p>
                                        <p>
                                            Ich spezialisiere mich auf Laravel, PHP und Frontend-Entwicklung. 
                                            Meine Projekte kombinieren funktionale Eleganz mit benutzerfreundlichem Design.
                                        </p>
                                        <p>
                                            Schauen Sie sich gerne mein Portfolio an und entdecken Sie meine neuesten Arbeiten!
                                        </p>
                                    </div>
                                    
                                    <!-- Login Button -->
                                    <div class="animate-slide-up opacity-0" style="animation-delay: 0.9s;">
                                        <a href="{{ route('login') }}" 
                                           class="inline-flex items-center px-6 py-3 bg-button hover:bg-buttonh text-backgroundc1 font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                            </svg>
                                            Zum Login
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Image Section -->
                                <div class="md:w-1/2 p-12 flex justify-center items-center">
                                    <img src="{{ asset('images/_R5_5117-frei.png') }}" 
                                         alt="Tobi stehend" 
                                         class="w-80 h-auto object-contain rounded-lg shadow-lg animate-scale-in opacity-0">
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
