<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSPSDM</title>

    {{-- font awesome --}}
    <link rel="stylesheet" href="{{asset('vendor/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    {{-- icon logo --}}
    <link rel="icon" href="{{ asset('images/pspsdm-logo.png') }}" type="image/x-icon">
    {{-- stysheet --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- font family --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <style>
        .ellipsis {
            white-space: nowrap;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .ellipsis2 {
            overflow: hidden;
            text-overflow: Ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            width: 100%;
            -webkit-box-orient: vertical;
        }
    </style>
</head>

<body class="bg-white" style="font-family: 'Montserrat', sans-serif;">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-green  shadow-sm tew">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/pspsdm-logo.png') }}" width="50" height="50" class="d-inline-block align-top"
                    alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item @yield('home-active')">

                    </li>
                    <li class="nav-item dropdown @yield('tentangkami-active')">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('home.sejarah') }}">Sejarah</a>
                            <a class="dropdown-item" href="{{ route('home.visi-misi') }}">Visi & Misi</a>
                            <a class="dropdown-item" href="{{ route('home.pengalaman-proyek') }}">Pengalaman Proyek</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown @yield('tentangkami-active')">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program kerja
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('home.pk.pertanian') }}">Pertanian</a>
                            <a class="dropdown-item" href="{{ route('home.pk.kesehatan') }}">Kesehatan</a>
                            <a class="dropdown-item" href="{{ route('home.pk.airbersih') }}">Air bersih</a>
                            <a class="dropdown-item" href="{{ route('home.pk.pendidikan') }}">Pendidikan</a>
                            <a class="dropdown-item" href="{{ route('home.pk.pp') }}">Pemberdayaan perempuan</a>
                            <a class="dropdown-item" href="{{ route('home.pk.uep') }}">Peternakan</a>
                            <a class="dropdown-item" href="{{ route('home.pk.hkm') }}">Hutan Kemasyarakatan</a>
                            <a class="dropdown-item" href="{{ route('home.pk.padatkarya') }}">Padat Karya</a>
                            <a class="dropdown-item" href="{{ route('home.pk.pma') }}">Pemberdayaan Masyarakat Adat</a>
                            <a class="dropdown-item" href="{{ route('home.pk.pdp') }}">Penelitian dan pelatihan</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown  @yield('publikasi-active')">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publikasi
                        </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('home.buletin') }}">Bulettin</a>
            </div> --}}
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('home.list-category-post', ['category_id'=>100]) }}">Berita</a>
            </div>
            </li>

            </ul>
        </div>
        </div>
    </nav>

    {{-- content --}}
    @yield('header')

    {{-- Footer --}}
    <footer class="bg-green">
        <div class="container">
            <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <ul class="list-group list-group-flush text-white">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600 follow-us font-body-title"
                                style="font-size:16px; font-weight: normal;"><span style="color: white">Informasi</span>
                            </div>
                            <small>&nbsp;</small>
                            <li class="list-unstyled">
                                <span class="media">
                                    <span class="fas fa-location-arrow mt-1 mr-2" style="color: white"></span>
                                    <span class="media-body" style="color: white">
                                        Jl. Madiun 14 BTN Taman Baru - Mataram, NTB
                                    </span>
                                </span>
                            </li>
                            <li class="list-unstyled">
                                <span class="media">
                                    <span class="fas fa-phone-alt mt-1 mr-2" style="color: white"></span>
                                    <span class="media-body" style="color: white">
                                        +628 175 78 0009
                                    </span>
                                </span>
                            </li>
                            <li class="list-unstyled">
                                <span class="media">
                                    <span class="fas fa-paper-plane mt-1 mr-2" style="color: white"></span>
                                    <span class="media-body" style="color: white">
                                        pspsdm.lombok@gmail.com
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-3 col-lg mb-5 mb-lg-0">
                        <ul class="list-group list-group-flush text-white" style="font-size:16px; font-weight: normal;">
                            {{-- <li class="list-unstyled">
                                <a href="{{ route('home.gallery') }}" style="color: white">GALERY</a>
                            </li> --}}
                            {{-- <small>&nbsp;</small>
                            <li class="list-unstyled">
                                <a href="{{ route('home.program-kerja') }}" style="color: white">PROGRAM</a>
                            </li> --}}
                            {{-- <small>&nbsp;</small>
                            <li class="list-unstyled">
                                <a href="{{ route('home.buletin') }}" style="color: white">BULETIN</a>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-lg mb-5 mb-lg-0 text-center">
                        <div class="widget-title alt-font text-white text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600 follow-us font-body-title"
                            style="font-size:16px; font-weight: normal;"><span style="color: white">DIREKTUR
                                PSPSDM</span>
                        </div>
                        <small>&nbsp;</small>
                        <div class="text-center">
                            <img src="{{ asset('images/direktur-pspsdm.jpeg') }}" width="150px" height="200px">
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="opacity-xs my-0" style="border-color: white">
            <br>
            <div class="space-1">
                <div class="row align-items-md-center mb-7">
                    <div class="col-md-10 mb-4 mb-md-0">
                        <span style="color: white">© 2020 Pusat Study Dan Pengembangan Sumber Daya
                            Manusia - PSPSDM</span>
                    </div>
                    {{-- <div class="col-md-2 text-md-right">
                        <ul class="list-group list-group-horizontal-sm ">
                            <li class="list-unstyled m-auto">
                                <a href="https://www.facebook.com/" class="text-white"><span
                                        class="fab fa-facebook fa-2x mt-1 mr-2" style="color: white"></span></a>
                                <a href="instagram.com" class="text-white"><span
                                        class="fab fa-instagram fa-2x mt-1 mr-2" style="color: white"></span></a>
                                <a href="instagram.com" class="text-white"><span class="fab fa-youtube fa-2x mt-1 mr-2"
                                        style="color: white"></span></a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>

    {{-- call js --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
</body>

</html>