<div>
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
                            {{-- <li><a class="dropdown-item" href="{{ route('house.show', 2) }}">EDGARTOWN ROAD</a></li>
                            <li><a class="dropdown-item" href="#">CHILMARK- MARTHAS VINEYARD</a></li>
                            <li><a class="dropdown-item" href="#">HUTKER- MARTHAS VINEYARD</a></li>
                            <li><a class="dropdown-item" href="#">ESTATE- MARTHAS VINEYARD</a></li>
                            <li><a class="dropdown-item" href="#">HOUSE EDGARTOWN</a></li>
                            <li><a class="dropdown-item" href="#">HOUSE OAK BLUFFS</a></li>
                            <li><a class="dropdown-item" href="#">WEST GROVE</a></li> --}}
                            @foreach ($houses as $house)
                                <li><a class="dropdown-item" href="{{route('house.show',$house)}}">{{$house->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
