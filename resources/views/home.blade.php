@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold">Hi, I'm Rodrigo M. Dajao</h1>

            <p class="lead text-primary fw-semibold">Web Developer</p>

            <p>I’m a passionate Web Developer who enjoys creating responsive, user-friendly, and functional websites. I have experience working with HTML, CSS, JavaScript, PHP, Laravel, MySQL, and modern web technologies. I’m always eager to learn new skills, solve problems, and build projects that provide meaningful and effective solutions.</p>
            <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg">View My Work</a>
        </div>
        <div class="col-lg-4 text-center">
            {{-- Add your profile image here --}}
            <img src="{{ asset('images/profile.jpg') }}"
     alt="Rodrigo M. Dajao"
     class="img-fluid rounded-circle shadow border border-3 border-primary"
     style="max-width: 250px;">


        </div>
    </div>

    <hr class="my-5">

    <h2 class="text-center mb-4">Skills</h2>
    <div class="row">

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Frontend</h5>
                <p class="mb-0">HTML, CSS, JavaScript, Bootstrap</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Backend</h5>
                <p class="mb-0">PHP, Laravel, MySQL</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Other</h5>
                <p class="mb-0">Git & GitHub, REST API, Figma</p>
            </div>
        </div>
    </div>

</div>


    <hr class="my-5">

<h2 class="text-center mb-4">Skills Proficiency</h2>

<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="mb-4">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold">HTML & CSS</span>
                <span>85%</span>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-primary"
                     role="progressbar"
                     style="width: 85%;"
                     aria-valuenow="85"
                     aria-valuemin="0"
                     aria-valuemax="100">
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold">Laravel</span>
                <span>85%</span>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-warning"
                     role="progressbar"
                     style="width: 85%;"
                     aria-valuenow="85"
                     aria-valuemin="0"
                     aria-valuemax="100">
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold">PHP</span>
                <span>85%</span>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-info"
                     role="progressbar"
                     style="width: 85%;"
                     aria-valuenow="85"
                     aria-valuemin="0"
                     aria-valuemax="100">
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold">JavaScript</span>
                <span>75%</span>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-danger"
                     role="progressbar"
                     style="width: 75%;"
                     aria-valuenow="75"
                     aria-valuemin="0"
                     aria-valuemax="100">
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold">MySQL</span>
                <span>75%</span>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-success"
                     role="progressbar"
                     style="width: 75%;"
                     aria-valuenow="75"
                     aria-valuemin="0"
                     aria-valuemax="100">
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold">Git & GitHub</span>
                <span>70%</span>
            </div>
            <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-secondary"
                     role="progressbar"
                     style="width: 70%;"
                     aria-valuenow="70"
                     aria-valuemin="0"
                     aria-valuemax="100">
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection