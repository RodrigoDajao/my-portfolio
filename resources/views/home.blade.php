@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- =========================
     HERO SECTION
========================= --}}
<section class="relative overflow-hidden">

    {{-- Background glow --}}
    <div class="pointer-events-none absolute -top-40 -left-40 h-96 w-96 rounded-full
                bg-cyan-500/10 blur-3xl"></div>

    <div class="pointer-events-none absolute top-20 -right-40 h-96 w-96 rounded-full
                bg-blue-600/10 blur-3xl"></div>

    <div class="mx-auto max-w-6xl px-6 py-20 sm:py-28 lg:py-32">

        <div class="grid items-center gap-14 lg:grid-cols-2">

            {{-- Hero Text --}}
            <div>

                <p class="mb-4 flex items-center gap-3 text-sm font-semibold
                          uppercase tracking-[0.25em] text-cyan-400">
                    <span class="h-px w-8 bg-cyan-400"></span>
                    Welcome to my portfolio
                </p>

                <h1 class="text-4xl font-black leading-tight tracking-tight
                           text-white sm:text-5xl lg:text-6xl">

                    Hi, I'm
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-500
                                 bg-clip-text text-transparent">
                        Rodrigo M. Dajao
                    </span>
                </h1>

                <h2 class="mt-5 text-xl font-semibold text-slate-300 sm:text-2xl">
                    Web Developer
                </h2>

                <p class="mt-6 max-w-xl text-base leading-8 text-slate-400 sm:text-lg">
                    I’m a passionate Web Developer who enjoys creating responsive,
                    user-friendly, and functional websites. I have experience working
                    with HTML, CSS, JavaScript, PHP, Laravel, MySQL, and modern web
                    technologies.
                </p>

                <p class="mt-4 max-w-xl text-base leading-8 text-slate-400">
                    I’m always eager to learn new skills, solve problems, and build
                    projects that provide meaningful and effective solutions.
                </p>

                {{-- Buttons --}}
                <div class="mt-8 flex flex-col gap-4 sm:flex-row">

                    <a href="{{ route('projects.index') }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl
                              bg-gradient-to-r from-cyan-400 to-blue-500
                              px-6 py-3.5 font-semibold text-slate-950
                              shadow-lg shadow-cyan-500/20
                              transition duration-300
                              hover:-translate-y-1 hover:shadow-cyan-500/30">

                        View My Work
                        <i class="bi bi-arrow-right"></i>

                    </a>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl
                              border border-slate-700 bg-slate-900/50
                              px-6 py-3.5 font-semibold text-slate-200
                              transition duration-300
                              hover:border-cyan-400 hover:text-cyan-400">

                        Let's Talk
                        <i class="bi bi-chat-dots"></i>

                    </a>

                </div>

                {{-- Tech Stack --}}
                <div class="mt-10">

                    <p class="mb-4 text-xs font-semibold uppercase tracking-widest
                              text-slate-500">
                        Technologies I work with
                    </p>

                    <div class="flex flex-wrap gap-3">

                        <span class="rounded-lg border border-orange-400/20
                                     bg-orange-400/5 px-3 py-2 text-sm text-orange-300">
                            <i class="bi bi-filetype-html mr-1"></i>
                            HTML
                        </span>

                        <span class="rounded-lg border border-blue-400/20
                                     bg-blue-400/5 px-3 py-2 text-sm text-blue-300">
                            <i class="bi bi-filetype-css mr-1"></i>
                            CSS
                        </span>

                        <span class="rounded-lg border border-yellow-400/20
                                     bg-yellow-400/5 px-3 py-2 text-sm text-yellow-300">
                            <i class="bi bi-filetype-js mr-1"></i>
                            JavaScript
                        </span>

                        <span class="rounded-lg border border-red-400/20
                                     bg-red-400/5 px-3 py-2 text-sm text-red-300">
                            <i class="bi bi-filetype-php mr-1"></i>
                            PHP
                        </span>

                        <span class="rounded-lg border border-red-400/20
                                     bg-red-400/5 px-3 py-2 text-sm text-red-300">
                            Laravel
                        </span>

                        <span class="rounded-lg border border-cyan-400/20
                                     bg-cyan-400/5 px-3 py-2 text-sm text-cyan-300">
                            MySQL
                        </span>

                    </div>

                </div>

            </div>


            {{-- Profile Image --}}
            <div class="flex justify-center lg:justify-end">

                <div class="relative">

                    {{-- Outer glow --}}
                    <div class="absolute inset-0 scale-110 rounded-full
                                bg-gradient-to-r from-cyan-400/20 to-blue-600/20
                                blur-3xl"></div>

                    {{-- Image container --}}
                    <div class="relative rounded-full p-2
                                bg-gradient-to-br from-cyan-400 to-blue-600
                                shadow-2xl shadow-cyan-500/20">

                        <div class="rounded-full bg-slate-950 p-2">

                            <img src="{{ asset('images/profile.jpg') }}"
                                 alt="Rodrigo M. Dajao"
                                 class="h-64 w-64 rounded-full object-cover
                                        sm:h-80 sm:w-80">

                        </div>

                    </div>

                    {{-- Floating badge --}}
                    <div class="absolute -bottom-4 -left-4 rounded-2xl
                                border border-white/10 bg-slate-900/90
                                px-5 py-3 shadow-xl backdrop-blur">

                        <div class="flex items-center gap-3">

                            <span class="flex h-3 w-3">
                                <span class="absolute inline-flex h-3 w-3
                                             animate-ping rounded-full bg-emerald-400
                                             opacity-75"></span>

                                <span class="relative inline-flex h-3 w-3
                                             rounded-full bg-emerald-500"></span>
                            </span>

                            <span class="text-sm font-medium text-slate-200">
                                Available for work
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     SKILLS SECTION
========================= --}}
<section class="border-t border-white/5 bg-slate-900/40">

    <div class="mx-auto max-w-6xl px-6 py-20">

        <div class="mx-auto max-w-2xl text-center">

            <p class="text-sm font-semibold uppercase tracking-widest text-cyan-400">
                What I use
            </p>

            <h2 class="mt-3 text-3xl font-bold text-white sm:text-4xl">
                My Skills
            </h2>

            <p class="mt-4 text-slate-400">
                Technologies and tools I use to build modern and functional
                web applications.
            </p>

        </div>


        <div class="mt-12 grid gap-6 md:grid-cols-3">

            {{-- Frontend --}}
            <div class="group rounded-2xl border border-white/10
                        bg-slate-900/70 p-7 transition duration-300
                        hover:-translate-y-2 hover:border-cyan-400/30
                        hover:shadow-xl hover:shadow-cyan-500/5">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl
                            bg-cyan-400/10 text-cyan-400">

                    <i class="bi bi-code-slash text-2xl"></i>

                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Frontend
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    Building responsive and user-friendly interfaces using
                    modern frontend technologies.
                </p>

                <div class="mt-5 flex flex-wrap gap-2">

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        HTML
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        CSS
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        JavaScript
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        Bootstrap
                    </span>

                </div>

            </div>


            {{-- Backend --}}
            <div class="group rounded-2xl border border-white/10
                        bg-slate-900/70 p-7 transition duration-300
                        hover:-translate-y-2 hover:border-blue-400/30
                        hover:shadow-xl hover:shadow-blue-500/5">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl
                            bg-blue-400/10 text-blue-400">

                    <i class="bi bi-server text-2xl"></i>

                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Backend
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    Developing reliable backend systems and database-driven
                    web applications.
                </p>

                <div class="mt-5 flex flex-wrap gap-2">

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        PHP
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        Laravel
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        MySQL
                    </span>

                </div>

            </div>


            {{-- Other --}}
            <div class="group rounded-2xl border border-white/10
                        bg-slate-900/70 p-7 transition duration-300
                        hover:-translate-y-2 hover:border-purple-400/30
                        hover:shadow-xl hover:shadow-purple-500/5">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl
                            bg-purple-400/10 text-purple-400">

                    <i class="bi bi-tools text-2xl"></i>

                </div>

                <h3 class="mt-6 text-xl font-bold text-white">
                    Tools & Others
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    Tools and technologies that help me manage projects,
                    APIs, design, and development workflows.
                </p>

                <div class="mt-5 flex flex-wrap gap-2">

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        Git
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        GitHub
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        REST API
                    </span>

                    <span class="rounded-md bg-slate-800 px-3 py-1.5 text-xs text-slate-300">
                        Figma
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     PROFICIENCY SECTION
========================= --}}
<section>

    <div class="mx-auto max-w-4xl px-6 py-20">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-widest text-cyan-400">
                My experience
            </p>

            <h2 class="mt-3 text-3xl font-bold text-white sm:text-4xl">
                Skills Proficiency
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-slate-400">
                A quick overview of my current familiarity with the technologies
                I use in web development.
            </p>

        </div>


        <div class="mt-12 space-y-7">

            {{-- HTML & CSS --}}
            <div>

                <div class="mb-2 flex justify-between">
                    <span class="font-semibold text-slate-200">
                        HTML & CSS
                    </span>

                    <span class="text-sm text-cyan-400">
                        85%
                    </span>
                </div>

                <div class="h-2 overflow-hidden rounded-full bg-slate-800">
                    <div class="h-full w-[85%] rounded-full
                                bg-gradient-to-r from-cyan-400 to-blue-500">
                    </div>
                </div>

            </div>


            {{-- Laravel --}}
            <div>

                <div class="mb-2 flex justify-between">
                    <span class="font-semibold text-slate-200">
                        Laravel
                    </span>

                    <span class="text-sm text-red-400">
                        85%
                    </span>
                </div>

                <div class="h-2 overflow-hidden rounded-full bg-slate-800">
                    <div class="h-full w-[85%] rounded-full
                                bg-gradient-to-r from-red-500 to-orange-400">
                    </div>
                </div>

            </div>


            {{-- PHP --}}
            <div>

                <div class="mb-2 flex justify-between">
                    <span class="font-semibold text-slate-200">
                        PHP
                    </span>

                    <span class="text-sm text-indigo-400">
                        85%
                    </span>
                </div>

                <div class="h-2 overflow-hidden rounded-full bg-slate-800">
                    <div class="h-full w-[85%] rounded-full
                                bg-gradient-to-r from-indigo-500 to-purple-500">
                    </div>
                </div>

            </div>


            {{-- JavaScript --}}
            <div>

                <div class="mb-2 flex justify-between">
                    <span class="font-semibold text-slate-200">
                        JavaScript
                    </span>

                    <span class="text-sm text-yellow-400">
                        75%
                    </span>
                </div>

                <div class="h-2 overflow-hidden rounded-full bg-slate-800">
                    <div class="h-full w-[75%] rounded-full
                                bg-gradient-to-r from-yellow-400 to-orange-400">
                    </div>
                </div>

            </div>


            {{-- MySQL --}}
            <div>

                <div class="mb-2 flex justify-between">
                    <span class="font-semibold text-slate-200">
                        MySQL
                    </span>

                    <span class="text-sm text-emerald-400">
                        75%
                    </span>
                </div>

                <div class="h-2 overflow-hidden rounded-full bg-slate-800">
                    <div class="h-full w-[75%] rounded-full
                                bg-gradient-to-r from-emerald-400 to-cyan-500">
                    </div>
                </div>

            </div>


            {{-- Git & GitHub --}}
            <div>

                <div class="mb-2 flex justify-between">
                    <span class="font-semibold text-slate-200">
                        Git & GitHub
                    </span>

                    <span class="text-sm text-slate-400">
                        70%
                    </span>
                </div>

                <div class="h-2 overflow-hidden rounded-full bg-slate-800">
                    <div class="h-full w-[70%] rounded-full
                                bg-gradient-to-r from-slate-400 to-slate-200">
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     CTA SECTION
========================= --}}
<section class="border-t border-white/5">

    <div class="mx-auto max-w-6xl px-6 py-20">

        <div class="relative overflow-hidden rounded-3xl border border-cyan-400/20
                    bg-gradient-to-br from-cyan-500/10 via-slate-900 to-blue-500/10
                    px-6 py-14 text-center sm:px-12">

            <div class="pointer-events-none absolute -top-20 left-1/2
                        h-40 w-40 -translate-x-1/2 rounded-full
                        bg-cyan-400/10 blur-3xl"></div>

            <h2 class="relative text-3xl font-bold text-white sm:text-4xl">
                Have a project in mind?
            </h2>

            <p class="relative mx-auto mt-4 max-w-xl text-slate-400">
                I'm always interested in learning, building, and working
                on meaningful web projects.
            </p>

            <a href="{{ route('contact') }}"
               class="relative mt-8 inline-flex items-center gap-2 rounded-xl
                      bg-cyan-400 px-6 py-3.5 font-semibold text-slate-950
                      transition duration-300
                      hover:-translate-y-1 hover:bg-cyan-300
                      hover:shadow-lg hover:shadow-cyan-400/20">

                Get In Touch
                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>

    </div>

</section>

@endsection
