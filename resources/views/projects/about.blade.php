@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="container py-5">
<h1 class="mb-4">About Me</h1>

{{-- About Me & Quick Info --}}
<div class="row">

    <div class="col-md-8">
        <p>
            I am an Information Technology student with a strong interest in web development and software development. I enjoy building responsive and user-friendly applications while continuously improving my programming and problem-solving skills. My experience with PHP, Laravel, MySQL, JavaScript, and other web technologies has allowed me to work on projects ranging from personal websites to systems designed to solve real-world problems. I am always eager to learn new technologies, take on new challenges, and grow as a developer.
        </p>

        <h4 class="mt-4 mb-4">Education</h4>

{{-- University --}}

<div class="d-flex align-items-start mb-4"> <div class="me-3"> <img src="{{ asset('images/education/um-logo.png') }}" alt="University of Mindanao Logo" style="width: 70px; height: 70px; object-fit: contain;"> </div>
<div>
    <h5 class="mb-1">University of Mindanao</h5>
<p class="mb-1">
    <strong>Bachelor of Science in Information Technology</strong>
</p>
<p class="text-muted mb-0">
    2020 - Present
</p>

</div>

</div> <hr>

{{-- Senior High School --}}

<div class="d-flex align-items-start mt-4"> <div class="me-3"> <img src="{{ asset('images/education/daniel-logo.png') }}" alt="Daniel R. Aguinaldo National High School Logo" style="width: 70px; height: 70px; object-fit: contain;"> </div>
<div>
    <h5 class="mb-1">Daniel R. Aguinaldo National High School</h5>
<p class="mb-1">
    <strong>Information and Communications Technology (ICT)</strong>
</p>
<p class="text-muted mb-0">
    2018 - 2020
</p>


</div>

</div>
    </div>

    {{-- Quick Info --}}
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5 class="card-title">Quick Info</h5>

                <p>
                    <strong>Location:</strong><br>
                    Davao City, Philippines
                </p>

                <p>
                    <strong>Languages:</strong><br>
                    English, Filipino
                </p>

                <p class="mb-0">
                    <strong>Hobbies & Interests:</strong><br>
                    🎬 Movies & Cinema<br>
                    🔊 Home Theater & Audio<br>
                    💻 Technology & Programming<br>
                    🎮 Gaming
                </p>
            </div>
        </div>
    </div>

</div>

{{-- Certificates --}}
<hr class="my-5">

<h2 class="text-center mb-4">Certificates</h2>

<div class="row justify-content-center">

    {{-- Certificate 1 --}}
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">

            <a href="{{ asset('images/certificates/certificate1.png') }}"
               target="_blank">
                <img src="{{ asset('images/certificates/certificate1.png') }}"
     class="card-img-top"
     alt="Databases Certificate"
     style="height: 220px; object-fit: contain; background-color: #f8f9fa;">

            </a>

            <div class="card-body text-center">
                <h5 class="card-title">Databases</h5>
                
            </div>

        </div>
    </div>

    {{-- Certificate 2 --}}
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">

            <a href="{{ asset('images/certificates/certificate2.png') }}"
               target="_blank">
                <img src="{{ asset('images/certificates/certificate2.png') }}"
     class="card-img-top"
     alt="Networking Certificate"
     style="height: 220px; object-fit: contain; background-color: #f8f9fa;">

            </a>

            <div class="card-body text-center">
                <h5 class="card-title">Networking</h5>
               
            </div>

        </div>
    </div>

    {{-- Certificate 3 --}}
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">

            <a href="{{ asset('images/certificates/certificate3.png') }}"
               target="_blank">
                <img src="{{ asset('images/certificates/certificate3.png') }}"
                     class="card-img-top"
                     alt="Network Security Certificate"
                     style="height: 220px; object-fit: contain; background-color: #f8f9fa;">
            </a>

            <div class="card-body text-center">
                <h5 class="card-title">Network Security</h5>
                
            </div>

        </div>
    </div>

    {{-- Certificate 4 --}}
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">

            <a href="{{ asset('images/certificates/certificate4.png') }}"
               target="_blank">
                <img src="{{ asset('images/certificates/certificate4.png') }}"
                     class="card-img-top"
                     alt="Cybersecurity Certificate"
                     style="height: 220px; object-fit: contain; background-color: #f8f9fa;">
            </a>

            <div class="card-body text-center">
                <h5 class="card-title">Cybersecurity</h5>
                
            </div>

        </div>
    </div>

    {{-- Certificate 5 --}}
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">

            <a href="{{ asset('images/certificates/certificate5.png') }}"
               target="_blank">
                <img src="{{ asset('images/certificates/certificate5.png') }}"
                     class="card-img-top"
                     alt="Git & GitHub and React.js Certificate"
                     style="height: 220px; object-fit: contain; background-color: #f8f9fa;">
            </a>

            <div class="card-body text-center">
                <h5 class="card-title">Git & GitHub and React.js</h5>
                
            </div>

        </div>
    </div>

</div>

</div> @endsection