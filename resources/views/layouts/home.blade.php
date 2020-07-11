<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSPSDM</title>

    {{-- font awesome --}}
    <link rel="stylesheet" href="{{asset('vendor/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    {{-- stysheet --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">PSPSDM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item @yield('home-active')">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown @yield('tentangkami-active')">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('home.sejarah') }}">Sejarah</a>
                            <a class="dropdown-item" href="{{ route('home.visi-misi') }}">Visi & Misi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publikasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Berita</a>
                            <a class="dropdown-item" href="#">Galery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Progrma Kerja</a>
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
                    {{-- col-6 col-md-3 col-lg mb-5 mb-lg-0 --}}
                    <div class="col-lg-5 col-md-3 col-lg mb-5 mb-lg-0">
                        <ul class="list-group list-group-flush text-white">
                            <div class="widget-title alt-font text-white text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600 follow-us font-body-title"
                                style="font-family:PFDinTextCompPro-Medium;font-size:16px; font-weight: normal;">
                                Informasi</div>
                            <small>&nbsp;</small>
                            <li class="list-unstyled"> <span class="media">
                                    <span class="fas fa-location-arrow mt-1 mr-2"></span>
                                    <span class="media-body">
                                        Jl. Madiun 14 BTN Taman Baru - Mataram, NTB
                                    </span>
                                </span></li>
                            <li class="list-unstyled"> <span class="media">
                                    <span class="fas fa-phone-alt mt-1 mr-2"></span>
                                    <span class="media-body">
                                        +628 175 78 0009
                                    </span>
                                </span></li>
                            <li class="list-unstyled"> <span class="media">
                                    <span class="fas fa-paper-plane mt-1 mr-2"></span>
                                    <span class="media-body">
                                        pspsdm.lombok@gmail.com
                                    </span>
                                </span></li>
                        </ul>
                    </div>
                    {{-- end col-6 col-md-3 col-lg mb-5 mb-lg-0 --}}

                    {{-- col-6 col-md-3 col-lg mb-5 mb-lg-0 --}}
                    <div class="col-lg-4 col-md-3 col-lg mb-5 mb-lg-0">
                        <ul class="list-group list-group-flush text-white"
                            style="font-family:PFDinTextCompPro-Medium;font-size:16px; font-weight: normal;">
                            <li class="list-unstyled">
                                <a href="" class="text-white">TENTANG KAMI</a>
                            </li>
                            <small>&nbsp;</small>
                            <li class="list-unstyled">
                                <a href="" class="text-white">GALERY</a>
                            </li>
                            <small>&nbsp;</small>
                            <li class="list-unstyled">
                                <a href="" class="text-white">PROGRAM</a>
                            </li>
                        </ul>
                    </div>
                    {{-- end col-6 col-md-3 col-lg mb-5 mb-lg-0 --}}

                    {{-- col-6 col-md-3 col-lg mb-5 mb-lg-0 --}}
                    <div class="col-lg-3 col-md-3 col-lg mb-5 mb-lg-0 text-center">
                        <div class="widget-title alt-font text-white text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600 follow-us font-body-title"
                            style="font-family:PFDinTextCompPro-Medium;font-size:16px; font-weight: normal;">
                            DIREKTUR PSPSDM</div>
                        <small>&nbsp;</small>
                        <div class="text-center">
                            <img src="{{ asset('images/img_profile.jpeg') }}" width="150px" height="200px">
                        </div>
                        </ul>
                    </div>
                    {{-- end col-6 col-md-3 col-lg mb-5 mb-lg-0 --}}
                </div>
            </div>
            <hr class="opacity-xs my-0" style="border-color: white">
            <br>
            <div class="space-1">
                <div class="row align-items-md-center mb-7">
                    <div class="col-md-9 mb-4 mb-md-0">
                        <span class="text-white">© 2020 Pusat Study Dan Pengembangan Sumber Daya Manusia</span>
                    </div>
                    <div class="col-md-3 text-md-right">
                        <ul class="list-group list-group-horizontal-sm ">
                            <li class="list-unstyled m-auto">
                                <a href="https://www.facebook.com/" class="text-white"><span
                                        class="fab fa-facebook fa-2x mt-1 mr-2"></span></a>
                                <a href="instagram.com" class="text-white"><span
                                        class="fab fa-instagram fa-2x mt-1 mr-2"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- call js --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>