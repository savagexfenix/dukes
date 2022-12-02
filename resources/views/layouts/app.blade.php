<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('storage/css/app.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>

<body style="background-color: #EEEAE1">
    <nav class="navbar navbar-expand-lg mb-3 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center me-5" href="{{ url('/') }}">
                <img src="{{ asset('storage/img/bg-logo1.png') }}" alt="" style="height: 40px">
                <div class="ps-2 d-flex flex-column align-items-start" id="logo-text">
                    <h1 class="m-0">Dukes</h1>
                    <p>County Builders</p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ url('/') }}">HOME</a>
                    </li>

                    <li class="dropdown nav-item">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PORTFOLIO
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('house.show',2) }}">EDGARTOWN ROAD</a></li>
                            <li><a class="dropdown-item" href="#">CHILMARK- MARTHAS VINEYARD</a></li>
                            <li><a class="dropdown-item" href="#">HUTKER- MARTHAS VINEYARD</a></li>
                            <li><a class="dropdown-item" href="#">ESTATE- MARTHAS VINEYARD</a></li>
                            <li><a class="dropdown-item" href="#">HOUSE EDGARTOWN</a></li>
                            <li><a class="dropdown-item" href="#">HOUSE OAK BLUFFS</a></li>
                            <li><a class="dropdown-item" href="#">WEST GROVE</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="row m-0 p-4">
            <div class="col-md-4">

                <div class="container-fluid d-flex align-items-center justify-content-center" id="footer-logo">
                    <img src="{{ asset('storage/img/bg-logo1.png') }}" alt="">
                    <div class="ps-2 d-flex flex-column align-items-start">
                        <h1 class="m-0">Dukes</h1>
                        <p>County Builders</p>
                    </div>
                </div>
                <hr class="d-md-none">
            </div>

            <div class="col-md-4 fs-4">
                <h2 class="text-center">ABOUT US</h2>
                <p>We have over 15 years of experience in conception, design & development of architectural projects.
                </p>

                <p>We got you covered from drafting, planing, application for construction permit, site management,
                    and, vendors.</p>

                <p>If need be, we also offer building valuations.</p>
                <hr>

                <div class="container-fluid d-flex align-items-center justify-content-center" id="footer-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-pin-map" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                        <path fill-rule="evenodd"
                            d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                    </svg>
                    <div class="ps-2 d-flex flex-column align-items-start">
                        <h2>PO BOX 2547 <br>
                            OAK BLUFFS, MA 02557
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 fs-4">
                <h2 class="fw-semibold text-center"> geneerez@gmail.com </h2>
                <hr class="my-3">
                <p>Please email me if are looking for more information on the current listings or future projects. </p>
                <p>I'll get back to you as soon as possible. </p>
            </div>
        </div>
    </footer>
</body>

</html>
