@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container py-5">
<h1 class="text-center mb-5">Get In Touch</h1>

<div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">

        {{-- Facebook Messenger --}}
        <div class="card shadow-sm mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="fs-2 me-3">
                    <i class="bi bi-messenger text-primary"></i>
                </div>

                <div>
                    <h5 class="mb-1">Facebook Messenger</h5>
                    <a href="https://www.facebook.com/rodrigo.dajao"
                       target="_blank"
                       class="text-decoration-none">
                        Rodrigo Dajao
                    </a>
                </div>
            </div>
        </div>

        {{-- Instagram --}}
        <div class="card shadow-sm mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="fs-2 me-3">
                    <i class="bi bi-instagram text-danger"></i>
                </div>

                <div>
                    <h5 class="mb-1">Instagram</h5>
                    <a href="https://www.instagram.com/rodrigodajao/"
                       target="_blank"
                       class="text-decoration-none">
                        @rodrigodajao
                    </a>
                </div>
            </div>
        </div>

        {{-- TNT --}}
        <div class="card shadow-sm mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="fs-2 me-3">
                    <i class="bi bi-telephone-fill text-success"></i>
                </div>

                <div>
                    <h5 class="mb-1">TNT</h5>
                    <a href="tel:+63 946 353 3690"
                       class="text-decoration-none">
                        +63 946 353 3690
                    </a>
                </div>
            </div>
        </div>

        {{-- DITO --}}
        <div class="card shadow-sm mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="fs-2 me-3">
                    <i class="bi bi-telephone-fill text-success"></i>
                </div>

                <div>
                    <h5 class="mb-1">DITO</h5>
                    <a href="tel:+63 991 432 0969"
                       class="text-decoration-none">
                        +63 991 432 0969
                    </a>
                </div>
            </div>
        </div>

        {{-- Gmail --}}
        <div class="card shadow-sm mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="fs-2 me-3">
                    <i class="bi bi-envelope-fill text-danger"></i>
                </div>

                <div>
                    <h5 class="mb-1">Gmail</h5>
                    <a href="mailto:r.dajao.519590@umindanao.edu.ph"
                       class="text-decoration-none">
                        r.dajao.519590@umindanao.edu.ph
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

</div> @endsection