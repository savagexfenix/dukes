@extends('layouts.app')

@section('content')
    <div class="row m-0">
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/img/carousel/1.png') }}" alt="" class="w-100 d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/img/carousel/2.jpg') }}" alt="" class="w-100 d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/img/carousel/3.png') }}" alt="" class="w-100 d-block">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container-fluid d-flex flex-wrap gap-2 justify-content-around align-items-center p-2"
                id="main-img">
                <a href=""><img src="{{ asset('storage/img/carousel/1.png') }}" alt="" class="img-fluid"></a>
                <a href=""><img src="{{ asset('storage/img/carousel/2.jpg') }}" alt="" class="img-fluid"></a>
                <a href=""><img src="{{ asset('storage/img/carousel/3.png') }}" alt="" class="img-fluid"></a>
                <a href=""><img src="{{ asset('storage/img/carousel/4.jpg') }}" alt="" class="img-fluid"></a>
                <a href=""><img src="{{ asset('storage/img/carousel/5.jpg') }}" alt="" class="img-fluid"></a>
                <a href=""><img src="{{ asset('storage/img/carousel/6.jpg') }}" alt="" class="img-fluid"></a>
                <a href=""><img src="{{ asset('storage/img/carousel/7.png') }}" alt="" class="img-fluid"></a>

            </div>
        </div>
    </div>

    <div class="container-fluid text-center my-3 py-5 fs-4" id="principal">
        <h1 class="p-2">DUKES COUNTY BUILDERS</h1>
        <p>We have over 15 years of experience in conception, design & development of architectural projects. </p>
    </div>

    <div class="row m-0 p-2" id="features">
        <div class="col-md-6 text-center p-3">
            <div class="container-fluid" id="offer">
                <h2>WHAT WE OFFER </h2>
                <p>We specialize in the following areas:</p>
                <ul>
                    <li>Residential Construction </li>
                    <li>Public Housing </li>
                    <li>Commercial Building </li>
                    <li>Industrial Facility </li>
                    <li>Restoration</li>
                </ul>
            </div>
        </div>
        <hr class="d-md-none">
        <div class="col-md-6 text-center p-3 lh-lg">
            <h2>OUR SERVICES </h2>
            <p>We got you covered from drafting, planing, application for construction permit, site management, to a call
                for tendors.
                <br>
                If need be, we also offer building valuations.
            </p>
        </div>
    </div>

    <figure class="text-center py-5 fs-4" id="blockquote">
        <blockquote class="blockquote">
            <p>We are regarded as industry leaders, focused on delivering unsurpassed customer experience.</p>
        </blockquote>
        <figcaption class="blockquote-footer text-light"> Gene Erez, Founder </figcaption>
    </figure>
@endsection
