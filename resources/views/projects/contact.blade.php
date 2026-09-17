@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="relative min-h-[calc(100vh-5rem)] overflow-hidden">

    {{-- Background glow --}}
    <div class="pointer-events-none absolute -top-40 left-1/2
                h-96 w-96 -translate-x-1/2 rounded-full
                bg-cyan-500/10 blur-3xl"></div>

    <div class="pointer-events-none absolute bottom-0 -right-40
                h-96 w-96 rounded-full
                bg-blue-600/10 blur-3xl"></div>


    <div class="relative mx-auto max-w-5xl px-6 py-20 sm:py-24">

        {{-- Header --}}
        <div class="mx-auto max-w-2xl text-center">

            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-400">
                Let's connect
            </p>

            <h1 class="mt-3 text-4xl font-black tracking-tight text-white sm:text-5xl">
                Get In Touch
            </h1>

            <p class="mt-5 text-base leading-8 text-slate-400 sm:text-lg">
                Have a project idea, opportunity, or simply want to connect?
                Feel free to reach out through any of the platforms below.
            </p>

        </div>


        {{-- Contact Cards --}}
        <div class="mx-auto mt-14 grid max-w-3xl gap-4">


            {{-- Facebook Messenger --}}
            <a href="https://www.facebook.com/rodrigo.dajao"
               target="_blank"
               rel="noopener noreferrer"
               class="group flex items-center gap-5 rounded-2xl
                      border border-white/10 bg-slate-900/70 p-5
                      transition duration-300
                      hover:-translate-y-1
                      hover:border-blue-400/30
                      hover:bg-slate-900
                      hover:shadow-xl hover:shadow-blue-500/5">

                <div class="flex h-14 w-14 shrink-0 items-center justify-center
                            rounded-xl bg-blue-500/10 text-blue-400
                            transition duration-300
                            group-hover:bg-blue-500/20">

                    <i class="bi bi-messenger text-2xl"></i>

                </div>

                <div class="min-w-0 flex-1">

                    <p class="text-xs font-semibold uppercase tracking-widest
                              text-slate-500">
                        Facebook Messenger
                    </p>

                    <h2 class="mt-1 font-semibold text-white
                               transition group-hover:text-blue-400">
                        Rodrigo Dajao
                    </h2>

                </div>

                <i class="bi bi-arrow-up-right text-slate-600
                          transition duration-300
                          group-hover:-translate-y-1
                          group-hover:text-blue-400">
                </i>

            </a>


            {{-- Instagram --}}
            <a href="https://www.instagram.com/rodrigodajao/"
               target="_blank"
               rel="noopener noreferrer"
               class="group flex items-center gap-5 rounded-2xl
                      border border-white/10 bg-slate-900/70 p-5
                      transition duration-300
                      hover:-translate-y-1
                      hover:border-pink-400/30
                      hover:bg-slate-900
                      hover:shadow-xl hover:shadow-pink-500/5">

                <div class="flex h-14 w-14 shrink-0 items-center justify-center
                            rounded-xl bg-pink-500/10 text-pink-400
                            transition duration-300
                            group-hover:bg-pink-500/20">

                    <i class="bi bi-instagram text-2xl"></i>

                </div>

                <div class="min-w-0 flex-1">

                    <p class="text-xs font-semibold uppercase tracking-widest
                              text-slate-500">
                        Instagram
                    </p>

                    <h2 class="mt-1 font-semibold text-white
                               transition group-hover:text-pink-400">
                        @rodrigodajao
                    </h2>

                </div>

                <i class="bi bi-arrow-up-right text-slate-600
                          transition duration-300
                          group-hover:-translate-y-1
                          group-hover:text-pink-400">
                </i>

            </a>


            {{-- TNT --}}
            <a href="tel:+639463533690"
               class="group flex items-center gap-5 rounded-2xl
                      border border-white/10 bg-slate-900/70 p-5
                      transition duration-300
                      hover:-translate-y-1
                      hover:border-emerald-400/30
                      hover:bg-slate-900
                      hover:shadow-xl hover:shadow-emerald-500/5">

                <div class="flex h-14 w-14 shrink-0 items-center justify-center
                            rounded-xl bg-emerald-500/10 text-emerald-400
                            transition duration-300
                            group-hover:bg-emerald-500/20">

                    <i class="bi bi-telephone-fill text-xl"></i>

                </div>

                <div class="min-w-0 flex-1">

                    <p class="text-xs font-semibold uppercase tracking-widest
                              text-slate-500">
                        TNT
                    </p>

                    <h2 class="mt-1 font-semibold text-white
                               transition group-hover:text-emerald-400">
                        +63 946 353 3690
                    </h2>

                </div>

                <i class="bi bi-telephone text-slate-600
                          transition group-hover:text-emerald-400">
                </i>

            </a>


            {{-- DITO --}}
            <a href="tel:+639914320969"
               class="group flex items-center gap-5 rounded-2xl
                      border border-white/10 bg-slate-900/70 p-5
                      transition duration-300
                      hover:-translate-y-1
                      hover:border-emerald-400/30
                      hover:bg-slate-900
                      hover:shadow-xl hover:shadow-emerald-500/5">

                <div class="flex h-14 w-14 shrink-0 items-center justify-center
                            rounded-xl bg-emerald-500/10 text-emerald-400
                            transition duration-300
                            group-hover:bg-emerald-500/20">

                    <i class="bi bi-telephone-fill text-xl"></i>

                </div>

                <div class="min-w-0 flex-1">

                    <p class="text-xs font-semibold uppercase tracking-widest
                              text-slate-500">
                        DITO
                    </p>

                    <h2 class="mt-1 font-semibold text-white
                               transition group-hover:text-emerald-400">
                        +63 991 432 0969
                    </h2>

                </div>

                <i class="bi bi-telephone text-slate-600
                          transition group-hover:text-emerald-400">
                </i>

            </a>


            {{-- Gmail --}}
            <a href="mailto:r.dajao.519590@umindanao.edu.ph"
               class="group flex items-center gap-5 rounded-2xl
                      border border-white/10 bg-slate-900/70 p-5
                      transition duration-300
                      hover:-translate-y-1
                      hover:border-red-400/30
                      hover:bg-slate-900
                      hover:shadow-xl hover:shadow-red-500/5">

                <div class="flex h-14 w-14 shrink-0 items-center justify-center
                            rounded-xl bg-red-500/10 text-red-400
                            transition duration-300
                            group-hover:bg-red-500/20">

                    <i class="bi bi-envelope-fill text-xl"></i>

                </div>

                <div class="min-w-0 flex-1">

                    <p class="text-xs font-semibold uppercase tracking-widest
                              text-slate-500">
                        Email
                    </p>

                    <h2 class="mt-1 break-all font-semibold text-white
                               transition group-hover:text-red-400">
                        r.dajao.519590@umindanao.edu.ph
                    </h2>

                </div>

                <i class="bi bi-arrow-up-right text-slate-600
                          transition duration-300
                          group-hover:-translate-y-1
                          group-hover:text-red-400">
                </i>

            </a>

        </div>


        {{-- Bottom Message --}}
        <div class="mx-auto mt-14 max-w-2xl text-center">

            <div class="inline-flex items-center gap-2 rounded-full
                        border border-emerald-400/20 bg-emerald-400/5
                        px-4 py-2 text-sm text-emerald-400">

                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                Open to opportunities

            </div>

            <p class="mt-5 text-sm leading-7 text-slate-500">
                Whether it's a web development project, collaboration,
                internship opportunity, or just a conversation about
                technology, I'd be happy to hear from you.
            </p>

        </div>

    </div>

</section>

@endsection
