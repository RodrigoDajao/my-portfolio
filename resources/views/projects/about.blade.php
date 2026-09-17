@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="relative overflow-hidden">

    {{-- Background glow --}}
    <div class="pointer-events-none absolute -top-40 -right-40
                h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>

    <div class="mx-auto max-w-6xl px-6 py-20 sm:py-24">

        {{-- Page Header --}}
        <div class="max-w-2xl">

            <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-400">
                Get to know me
            </p>

            <h1 class="mt-3 text-4xl font-black tracking-tight text-white sm:text-5xl">
                About Me
            </h1>

            <p class="mt-5 text-lg leading-8 text-slate-400">
                A little about who I am, what I do, and my journey as an
                Information Technology student and aspiring developer.
            </p>

        </div>


        {{-- =========================
             ABOUT + QUICK INFO
        ========================== --}}
        <div class="mt-14 grid gap-8 lg:grid-cols-3">

            {{-- About --}}
            <div class="lg:col-span-2 rounded-2xl border border-white/10
                        bg-slate-900/60 p-8">

                <div class="flex items-center gap-4">

                    <div class="flex h-11 w-11 items-center justify-center
                                rounded-xl bg-cyan-400/10 text-cyan-400">
                        <i class="bi bi-person text-xl"></i>
                    </div>

                    <h2 class="text-2xl font-bold text-white">
                        Who I Am
                    </h2>

                </div>

                <div class="mt-6 space-y-5 text-base leading-8 text-slate-400">

                    <p>
                        I am an Information Technology student with a strong
                        interest in web development and software development.
                        I enjoy building responsive and user-friendly
                        applications while continuously improving my
                        programming and problem-solving skills.
                    </p>

                    <p>
                        My experience with PHP, Laravel, MySQL, JavaScript,
                        and other web technologies has allowed me to work on
                        projects ranging from personal websites to systems
                        designed to solve real-world problems.
                    </p>

                    <p>
                        I am always eager to learn new technologies, take on
                        new challenges, and grow as a developer.
                    </p>

                </div>

            </div>


            {{-- Quick Info --}}
            <div class="rounded-2xl border border-white/10
                        bg-slate-900/60 p-8">

                <div class="flex items-center gap-4">

                    <div class="flex h-11 w-11 items-center justify-center
                                rounded-xl bg-blue-400/10 text-blue-400">
                        <i class="bi bi-info-circle text-xl"></i>
                    </div>

                    <h2 class="text-2xl font-bold text-white">
                        Quick Info
                    </h2>

                </div>


                <div class="mt-7 space-y-6">

                    {{-- Location --}}
                    <div class="flex gap-4">

                        <i class="bi bi-geo-alt mt-1 text-cyan-400"></i>

                        <div>
                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-slate-500">
                                Location
                            </p>

                            <p class="mt-1 text-sm text-slate-300">
                                Davao City, Philippines
                            </p>
                        </div>

                    </div>


                    {{-- Languages --}}
                    <div class="flex gap-4">

                        <i class="bi bi-translate mt-1 text-cyan-400"></i>

                        <div>
                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-slate-500">
                                Languages
                            </p>

                            <p class="mt-1 text-sm text-slate-300">
                                English, Filipino
                            </p>
                        </div>

                    </div>


                    {{-- Interests --}}
                    <div class="flex gap-4">

                        <i class="bi bi-heart mt-1 text-cyan-400"></i>

                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-slate-500">
                                Hobbies & Interests
                            </p>

                            <div class="mt-2 flex flex-wrap gap-2">

                                <span class="rounded-lg bg-slate-800 px-3 py-1.5
                                             text-xs text-slate-300">
                                    🎬 Movies & Cinema
                                </span>

                                <span class="rounded-lg bg-slate-800 px-3 py-1.5
                                             text-xs text-slate-300">
                                    🔊 Home Theater & Audio
                                </span>

                                <span class="rounded-lg bg-slate-800 px-3 py-1.5
                                             text-xs text-slate-300">
                                    💻 Technology
                                </span>

                                <span class="rounded-lg bg-slate-800 px-3 py-1.5
                                             text-xs text-slate-300">
                                    🎮 Gaming
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================
             EDUCATION
        ========================== --}}
        <div class="mt-20">

            <div class="text-center">

                <p class="text-sm font-semibold uppercase tracking-widest text-cyan-400">
                    My background
                </p>

                <h2 class="mt-3 text-3xl font-bold text-white sm:text-4xl">
                    Education
                </h2>

            </div>


            <div class="relative mx-auto mt-12 max-w-3xl">

                {{-- Timeline line --}}
                <div class="absolute left-8 top-0 hidden h-full w-px
                            bg-gradient-to-b from-cyan-400/50
                            via-blue-500/30 to-transparent sm:block">
                </div>


                {{-- University --}}
                <div class="relative mb-10 sm:pl-20">

                    {{-- Timeline dot --}}
                    <div class="absolute left-[25px] top-7 hidden h-3 w-3
                                rounded-full bg-cyan-400
                                shadow-lg shadow-cyan-400/50 sm:block">
                    </div>


                    <div class="rounded-2xl border border-white/10
                                bg-slate-900/60 p-6
                                transition duration-300
                                hover:border-cyan-400/30
                                hover:shadow-xl hover:shadow-cyan-500/5">

                        <div class="flex flex-col gap-5 sm:flex-row
                                    sm:items-start">

                            <div class="flex h-16 w-16 shrink-0 items-center
                                        justify-center rounded-xl bg-white p-2">

                                <img src="{{ asset('images/education/um-logo.png') }}"
                                     alt="University of Mindanao Logo"
                                     class="h-full w-full object-contain">

                            </div>


                            <div>

                                <p class="text-xs font-semibold uppercase
                                          tracking-widest text-cyan-400">
                                    2020 - Present
                                </p>

                                <h3 class="mt-2 text-xl font-bold text-white">
                                    University of Mindanao
                                </h3>

                                <p class="mt-2 text-sm text-slate-300">
                                    Bachelor of Science in Information Technology
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Senior High School --}}
                <div class="relative sm:pl-20">

                    {{-- Timeline dot --}}
                    <div class="absolute left-[25px] top-7 hidden h-3 w-3
                                rounded-full bg-blue-500
                                shadow-lg shadow-blue-500/50 sm:block">
                    </div>


                    <div class="rounded-2xl border border-white/10
                                bg-slate-900/60 p-6
                                transition duration-300
                                hover:border-blue-400/30
                                hover:shadow-xl hover:shadow-blue-500/5">

                        <div class="flex flex-col gap-5 sm:flex-row
                                    sm:items-start">

                            <div class="flex h-16 w-16 shrink-0 items-center
                                        justify-center rounded-xl bg-white p-2">

                                <img src="{{ asset('images/education/daniel-logo.png') }}"
                                     alt="Daniel R. Aguinaldo National High School Logo"
                                     class="h-full w-full object-contain">

                            </div>


                            <div>

                                <p class="text-xs font-semibold uppercase
                                          tracking-widest text-blue-400">
                                    2018 - 2020
                                </p>

                                <h3 class="mt-2 text-xl font-bold text-white">
                                    Daniel R. Aguinaldo National High School
                                </h3>

                                <p class="mt-2 text-sm text-slate-300">
                                    Information and Communications Technology (ICT)
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =========================
             CERTIFICATES
        ========================== --}}
        <div class="mt-24">

            <div class="text-center">

                <p class="text-sm font-semibold uppercase tracking-widest text-cyan-400">
                    Continuous learning
                </p>

                <h2 class="mt-3 text-3xl font-bold text-white sm:text-4xl">
                    Certificates
                </h2>

                <p class="mx-auto mt-4 max-w-xl text-slate-400">
                    Certifications and learning achievements that represent
                    my continued development in technology.
                </p>

            </div>


            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">


                {{-- Certificate 1 --}}
                <a href="{{ asset('images/certificates/certificate1.png') }}"
                   target="_blank"
                   class="group overflow-hidden rounded-2xl border border-white/10
                          bg-slate-900/60 transition duration-300
                          hover:-translate-y-2 hover:border-cyan-400/30
                          hover:shadow-xl hover:shadow-cyan-500/10">

                    <div class="relative overflow-hidden bg-slate-800">

                        <img src="{{ asset('images/certificates/certificate1.png') }}"
                             alt="Databases Certificate"
                             class="h-56 w-full object-contain
                                    bg-white transition duration-500
                                    group-hover:scale-105">

                        <div class="absolute inset-0 flex items-center justify-center
                                    bg-slate-950/60 opacity-0
                                    transition duration-300
                                    group-hover:opacity-100">

                            <span class="rounded-lg bg-cyan-400 px-4 py-2
                                         text-sm font-semibold text-slate-950">
                                <i class="bi bi-zoom-in mr-1"></i>
                                View Certificate
                            </span>

                        </div>

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold text-white
                                   group-hover:text-cyan-400">
                            Databases
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Certificate
                        </p>

                    </div>

                </a>


                {{-- Certificate 2 --}}
                <a href="{{ asset('images/certificates/certificate2.png') }}"
                   target="_blank"
                   class="group overflow-hidden rounded-2xl border border-white/10
                          bg-slate-900/60 transition duration-300
                          hover:-translate-y-2 hover:border-cyan-400/30
                          hover:shadow-xl hover:shadow-cyan-500/10">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/certificates/certificate2.png') }}"
                             alt="Networking Certificate"
                             class="h-56 w-full object-contain bg-white
                                    transition duration-500
                                    group-hover:scale-105">

                        <div class="absolute inset-0 flex items-center justify-center
                                    bg-slate-950/60 opacity-0
                                    transition duration-300
                                    group-hover:opacity-100">

                            <span class="rounded-lg bg-cyan-400 px-4 py-2
                                         text-sm font-semibold text-slate-950">
                                <i class="bi bi-zoom-in mr-1"></i>
                                View Certificate
                            </span>

                        </div>

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold text-white
                                   group-hover:text-cyan-400">
                            Networking
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Certificate
                        </p>

                    </div>

                </a>


                {{-- Certificate 3 --}}
                <a href="{{ asset('images/certificates/certificate3.png') }}"
                   target="_blank"
                   class="group overflow-hidden rounded-2xl border border-white/10
                          bg-slate-900/60 transition duration-300
                          hover:-translate-y-2 hover:border-cyan-400/30
                          hover:shadow-xl hover:shadow-cyan-500/10">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/certificates/certificate3.png') }}"
                             alt="Network Security Certificate"
                             class="h-56 w-full object-contain bg-white
                                    transition duration-500
                                    group-hover:scale-105">

                        <div class="absolute inset-0 flex items-center justify-center
                                    bg-slate-950/60 opacity-0
                                    transition duration-300
                                    group-hover:opacity-100">

                            <span class="rounded-lg bg-cyan-400 px-4 py-2
                                         text-sm font-semibold text-slate-950">
                                <i class="bi bi-zoom-in mr-1"></i>
                                View Certificate
                            </span>

                        </div>

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold text-white
                                   group-hover:text-cyan-400">
                            Network Security
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Certificate
                        </p>

                    </div>

                </a>


                {{-- Certificate 4 --}}
                <a href="{{ asset('images/certificates/certificate4.png') }}"
                   target="_blank"
                   class="group overflow-hidden rounded-2xl border border-white/10
                          bg-slate-900/60 transition duration-300
                          hover:-translate-y-2 hover:border-cyan-400/30
                          hover:shadow-xl hover:shadow-cyan-500/10">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/certificates/certificate4.png') }}"
                             alt="Cybersecurity Certificate"
                             class="h-56 w-full object-contain bg-white
                                    transition duration-500
                                    group-hover:scale-105">

                        <div class="absolute inset-0 flex items-center justify-center
                                    bg-slate-950/60 opacity-0
                                    transition duration-300
                                    group-hover:opacity-100">

                            <span class="rounded-lg bg-cyan-400 px-4 py-2
                                         text-sm font-semibold text-slate-950">
                                <i class="bi bi-zoom-in mr-1"></i>
                                View Certificate
                            </span>

                        </div>

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold text-white
                                   group-hover:text-cyan-400">
                            Cybersecurity
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Certificate
                        </p>

                    </div>

                </a>


                {{-- Certificate 5 --}}
                <a href="{{ asset('images/certificates/certificate5.png') }}"
                   target="_blank"
                   class="group overflow-hidden rounded-2xl border border-white/10
                          bg-slate-900/60 transition duration-300
                          hover:-translate-y-2 hover:border-cyan-400/30
                          hover:shadow-xl hover:shadow-cyan-500/10">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/certificates/certificate5.png') }}"
                             alt="Git and GitHub and React.js Certificate"
                             class="h-56 w-full object-contain bg-white
                                    transition duration-500
                                    group-hover:scale-105">

                        <div class="absolute inset-0 flex items-center justify-center
                                    bg-slate-950/60 opacity-0
                                    transition duration-300
                                    group-hover:opacity-100">

                            <span class="rounded-lg bg-cyan-400 px-4 py-2
                                         text-sm font-semibold text-slate-950">
                                <i class="bi bi-zoom-in mr-1"></i>
                                View Certificate
                            </span>

                        </div>

                    </div>

                    <div class="p-5">

                        <h3 class="font-semibold text-white
                                   group-hover:text-cyan-400">
                            Git & GitHub and React.js
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Certificate
                        </p>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>

@endsection
