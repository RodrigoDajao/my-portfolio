@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">My Projects</h1>

    <div class="row">

        {{-- Project 1 --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/project1.png') }}"
     class="card-img-top"
     alt="Personal Portfolio"
     style="height: 220px; object-fit: cover;">


                <div class="card-body">
                    <h5 class="card-title">Personal Portfolio</h5>

                    <p class="card-text">
                        A responsive personal portfolio website showcasing my projects, technical skills, education, certifications, and contact information.
                    </p>

                    <p>
                        <strong>Technologies:</strong>
                        Laravel, PHP, Bootstrap, MySQL
                    </p>

                   
                </div>
            </div>
        </div>

        {{-- Project 2 --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
               <img src="{{ asset('images/project2.png') }}"
     class="card-img-top"
     alt="Accudocs"
     style="height: 220px; object-fit: cover;">


                <div class="card-body">
                    <h5 class="card-title">Accudocs</h5>

                    <p class="card-text">
                        QR-BASED TRACKING WEB APPLICATION FOR
DISBURSEMENT DOCUMENT WITH DESCRIPTIVE 
ANALYTICS AT DOLE XI REGIONAL OFFICE 
ACCOUNTING DEPARTMENT
                    </p>

                    <p>
                        <strong>Technologies:</strong>
                        PHP, Laravel, MySQL, Tailwind CSS, Chart.js
                    </p>

                   
                </div>
            </div>
        </div>

        {{-- Project 3 --}}
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
               <img src="{{ asset('images/project3.png') }}"
     class="card-img-top"
     alt="IMS"
     style="height: 220px; object-fit: cover;">


                <div class="card-body">
                    <h5 class="card-title">IMS</h5>

                    <p class="card-text">
                        A web-based Inventory Management System for managing products, monitoring stock levels, and organizing inventory records.
                    </p>

                    <p>
                        <strong>Technologies:</strong>
                        Laravel, Tailwind CSS, JavaScript
                    </p>

                    
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
