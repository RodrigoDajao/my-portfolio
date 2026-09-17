@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<section class="relative overflow-hidden">

    {{-- Background glow --}}
    <div class="pointer-events-none absolute -top-40 left-1/2
                h-96 w-96 -translate-x-1/2 rounded-full
                bg-cyan-500/10 blur-3xl"></div>

    <div class="mx-auto max-w-6xl px-6 py-20 sm:py-24">

        {{-- Page Header --}}
        <div class="mx-auto max-w-2xl text-center">

            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-400">
                My Work
            </p>

            <h1 class="mt-3 text-4xl font-black tracking-tight text-white sm:text-5xl">
                Featured Projects
            </h1>

            <p class="mt-5 leading-7 text-slate-400">
                Here are some of the web applications and projects I have
                worked on using modern web technologies.
            </p>

        </div>


        {{-- Projects Grid --}}
        <div class="mt-14 grid gap-8 md:grid-cols-2 lg:grid-cols-3">


            {{-- =================================
                 PROJECT 1
            ================================== --}}
            <article class="group flex h-full flex-col overflow-hidden rounded-2xl
                            border border-white/10 bg-slate-900/70
                            transition duration-500
                            hover:-translate-y-2
                            hover:border-cyan-400/30
                            hover:shadow-2xl hover:shadow-cyan-500/10">

                {{-- Image --}}
                <div class="relative overflow-hidden">

                    <img src="{{ asset('images/project1.png') }}"
                         alt="Personal Portfolio"
                         class="h-56 w-full object-cover transition duration-700
                                group-hover:scale-105">

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t
                                from-slate-950/70 via-transparent to-transparent">
                    </div>

                    {{-- Project Number --}}
                    <span class="absolute left-4 top-4 rounded-lg
                                 border border-white/10 bg-slate-950/80
                                 px-3 py-1 text-xs font-bold text-cyan-400
                                 backdrop-blur">
                        01
                    </span>

                </div>


                {{-- Content --}}
                <div class="flex flex-1 flex-col p-6">

                    <h2 class="text-xl font-bold text-white
                               transition group-hover:text-cyan-400">
                        Personal Portfolio
                    </h2>

                    <p class="mt-3 flex-1 text-sm leading-7 text-slate-400">
                        A responsive personal portfolio website showcasing
                        my projects, technical skills, education,
                        certifications, and contact information.
                    </p>


                    {{-- Technologies --}}
                    <div class="mt-5">

                        <p class="mb-3 text-xs font-semibold uppercase
                                  tracking-widest text-slate-500">
                            Technologies
                        </p>

                        <div class="flex flex-wrap gap-2">

                            <span class="rounded-md bg-red-400/10 px-3 py-1.5
                                         text-xs font-medium text-red-300">
                                Laravel
                            </span>

                            <span class="rounded-md bg-indigo-400/10 px-3 py-1.5
                                         text-xs font-medium text-indigo-300">
                                PHP
                            </span>

                            <span class="rounded-md bg-cyan-400/10 px-3 py-1.5
                                         text-xs font-medium text-cyan-300">
                                MySQL
                            </span>

                            <span class="rounded-md bg-blue-400/10 px-3 py-1.5
                                         text-xs font-medium text-blue-300">
                                Bootstrap
                            </span>

                        </div>

                    </div>

                </div>

            </article>


            {{-- =================================
                 PROJECT 2
            ================================== --}}
            <article class="group flex h-full flex-col overflow-hidden rounded-2xl
                            border border-white/10 bg-slate-900/70
                            transition duration-500
                            hover:-translate-y-2
                            hover:border-cyan-400/30
                            hover:shadow-2xl hover:shadow-cyan-500/10">

                {{-- Image --}}
                <div class="relative overflow-hidden">

                    <img src="{{ asset('images/project2.png') }}"
                         alt="Accudocs"
                         class="h-56 w-full object-cover transition duration-700
                                group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t
                                from-slate-950/70 via-transparent to-transparent">
                    </div>

                    <span class="absolute left-4 top-4 rounded-lg
                                 border border-white/10 bg-slate-950/80
                                 px-3 py-1 text-xs font-bold text-cyan-400
                                 backdrop-blur">
                        02
                    </span>

                </div>


                {{-- Content --}}
                <div class="flex flex-1 flex-col p-6">

                    <h2 class="text-xl font-bold text-white
                               transition group-hover:text-cyan-400">
                        Accudocs
                    </h2>

                    <p class="mt-3 flex-1 text-sm leading-7 text-slate-400">
                        QR-based tracking web application for disbursement
                        documents with descriptive analytics for the
                        DOLE XI Regional Office Accounting Department.
                    </p>


                    {{-- Technologies --}}
                    <div class="mt-5">

                        <p class="mb-3 text-xs font-semibold uppercase
                                  tracking-widest text-slate-500">
                            Technologies
                        </p>

                        <div class="flex flex-wrap gap-2">

                            <span class="rounded-md bg-indigo-400/10 px-3 py-1.5
                                         text-xs font-medium text-indigo-300">
                                PHP
                            </span>

                            <span class="rounded-md bg-red-400/10 px-3 py-1.5
                                         text-xs font-medium text-red-300">
                                Laravel
                            </span>

                            <span class="rounded-md bg-cyan-400/10 px-3 py-1.5
                                         text-xs font-medium text-cyan-300">
                                MySQL
                            </span>

                            <span class="rounded-md bg-teal-400/10 px-3 py-1.5
                                         text-xs font-medium text-teal-300">
                                Tailwind CSS
                            </span>

                            <span class="rounded-md bg-orange-400/10 px-3 py-1.5
                                         text-xs font-medium text-orange-300">
                                Chart.js
                            </span>

                        </div>

                    </div>

                </div>

            </article>


            {{-- =================================
                 PROJECT 3
            ================================== --}}
            <article class="group flex h-full flex-col overflow-hidden rounded-2xl
                            border border-white/10 bg-slate-900/70
                            transition duration-500
                            hover:-translate-y-2
                            hover:border-cyan-400/30
                            hover:shadow-2xl hover:shadow-cyan-500/10">

                {{-- Image --}}
                <div class="relative overflow-hidden">

                    <img src="{{ asset('images/project3.png') }}"
                         alt="Inventory Management System"
                         class="h-56 w-full object-cover transition duration-700
                                group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t
                                from-slate-950/70 via-transparent to-transparent">
                    </div>

                    <span class="absolute left-4 top-4 rounded-lg
                                 border border-white/10 bg-slate-950/80
                                 px-3 py-1 text-xs font-bold text-cyan-400
                                 backdrop-blur">
                        03
                    </span>

                </div>


                {{-- Content --}}
                <div class="flex flex-1 flex-col p-6">

                    <h2 class="text-xl font-bold text-white
                               transition group-hover:text-cyan-400">
                        Inventory Management System
                    </h2>

                    <p class="mt-3 flex-1 text-sm leading-7 text-slate-400">
                        A web-based Inventory Management System for managing
                        products, monitoring stock levels, and organizing
                        inventory records.
                    </p>


                    {{-- Technologies --}}
                    <div class="mt-5">

                        <p class="mb-3 text-xs font-semibold uppercase
                                  tracking-widest text-slate-500">
                            Technologies
                        </p>

                        <div class="flex flex-wrap gap-2">

                            <span class="rounded-md bg-red-400/10 px-3 py-1.5
                                         text-xs font-medium text-red-300">
                                Laravel
                            </span>

                            <span class="rounded-md bg-teal-400/10 px-3 py-1.5
                                         text-xs font-medium text-teal-300">
                                Tailwind CSS
                            </span>

                            <span class="rounded-md bg-yellow-400/10 px-3 py-1.5
                                         text-xs font-medium text-yellow-300">
                                JavaScript
                            </span>

                        </div>

                    </div>

                </div>

            </article>

        </div>


        {{-- Bottom CTA --}}
        <div class="mt-20 text-center">

            <p class="text-slate-400">
                Interested in working together?
            </p>

            <a href="{{ route('contact') }}"
               class="mt-4 inline-flex items-center gap-2 rounded-xl
                      bg-cyan-400 px-6 py-3 font-semibold text-slate-950
                      transition duration-300
                      hover:-translate-y-1 hover:bg-cyan-300
                      hover:shadow-lg hover:shadow-cyan-400/20">

                Get In Touch
                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

</section>

@endsection
