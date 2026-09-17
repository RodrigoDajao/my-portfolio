{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Rodrigo M. Dajao - Portfolio')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/jpeg" href="{{ asset('images/profile.jpg') }}">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-slate-100 antialiased">

    {{-- Navigation --}}
    <nav class="fixed top-0 left-0 right-0 z-50 border-b border-white/10 bg-slate-950/80 backdrop-blur-xl">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">

            {{-- Logo --}}
            <a href="{{ route('home') }}"
               class="group flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl
                            bg-gradient-to-br from-cyan-400 to-blue-600
                            font-bold text-slate-950 shadow-lg shadow-cyan-500/20
                            transition duration-300 group-hover:scale-105">
                    RMD
                </div>

                <div class="hidden sm:block">
                    <span class="block text-sm font-semibold text-white">
                        Rodrigo M. Dajao
                    </span>
                    <span class="block text-xs text-slate-400">
                        Web Developer
                    </span>
                </div>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden items-center gap-8 md:flex">

                <a href="{{ route('home') }}"
                   class="text-sm font-medium text-slate-300 transition hover:text-cyan-400">
                    Home
                </a>

                <a href="{{ route('projects.index') }}"
                   class="text-sm font-medium text-slate-300 transition hover:text-cyan-400">
                    Projects
                </a>

                <a href="{{ route('about') }}"
                   class="text-sm font-medium text-slate-300 transition hover:text-cyan-400">
                    About
                </a>

                <a href="{{ route('contact') }}"
                   class="rounded-full border border-cyan-400/40 px-5 py-2
                          text-sm font-medium text-cyan-400
                          transition duration-300
                          hover:bg-cyan-400 hover:text-slate-950">
                    Contact
                </a>

            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-button"
                    type="button"
                    class="flex h-10 w-10 items-center justify-center rounded-lg
                           border border-white/10 text-slate-300
                           transition hover:border-cyan-400 hover:text-cyan-400
                           md:hidden"
                    aria-label="Toggle navigation">

                <i class="bi bi-list text-xl"></i>
            </button>

        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu"
             class="hidden border-t border-white/10 bg-slate-950 md:hidden">

            <div class="mx-auto max-w-6xl space-y-1 px-6 py-4">

                <a href="{{ route('home') }}"
                   class="block rounded-lg px-4 py-3 text-sm text-slate-300
                          transition hover:bg-white/5 hover:text-cyan-400">
                    Home
                </a>

                <a href="{{ route('projects.index') }}"
                   class="block rounded-lg px-4 py-3 text-sm text-slate-300
                          transition hover:bg-white/5 hover:text-cyan-400">
                    Projects
                </a>

                <a href="{{ route('about') }}"
                   class="block rounded-lg px-4 py-3 text-sm text-slate-300
                          transition hover:bg-white/5 hover:text-cyan-400">
                    About
                </a>

                <a href="{{ route('contact') }}"
                   class="block rounded-lg px-4 py-3 text-sm text-slate-300
                          transition hover:bg-white/5 hover:text-cyan-400">
                    Contact
                </a>

            </div>
        </div>
    </nav>


    {{-- Main Content --}}
    <main class="min-h-screen pt-20">
        @yield('content')
    </main>


    {{-- Footer --}}
    <footer class="border-t border-white/10 bg-slate-950">

        <div class="mx-auto flex max-w-6xl flex-col items-center
                    justify-between gap-4 px-6 py-8
                    sm:flex-row">

            <p class="text-sm text-slate-500">
                © {{ date('Y') }} Rodrigo M. Dajao. All Rights Reserved.
            </p>

            <div class="flex items-center gap-5">

                <a href="#"
                   class="text-slate-500 transition hover:text-cyan-400"
                   aria-label="GitHub">
                    <i class="bi bi-github text-lg"></i>
                </a>

                <a href="#"
                   class="text-slate-500 transition hover:text-cyan-400"
                   aria-label="LinkedIn">
                    <i class="bi bi-linkedin text-lg"></i>
                </a>

                <a href="#"
                   class="text-slate-500 transition hover:text-cyan-400"
                   aria-label="Email">
                    <i class="bi bi-envelope text-lg"></i>
                </a>

            </div>

        </div>

    </footer>


    {{-- Mobile Menu Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const button = document.getElementById('mobile-menu-button');
            const menu = document.getElementById('mobile-menu');

            if (button && menu) {
                button.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }

        });
    </script>

</body>
</html>
