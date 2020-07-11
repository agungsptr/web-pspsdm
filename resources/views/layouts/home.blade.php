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
                    {{-- <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0"> --}}
                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5 class="text-white">Contact Us</h5>
                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                            {{-- sub link --}}
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa  fa-phone-alt mr-2"></i>
                                        <span class="media-body">+62 817 5780 009</span>
                                    </span>
                                </a>
                            </li>
                            {{-- end sublink --}}
                            {{-- sub link --}}
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa  fa-paper-plane mr-2"></i>
                                        <span class="media-body">pspsdm.lombok@gmail.com</span>
                                    </span>
                                </a>
                            </li>
                            {{-- end sublink --}}
                            {{-- sub link --}}
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa  fa-map-marker-alt mr-2"></i>
                                        <span class="media-body">Jl. Madiun 14 BTN Taman Baru - Mataram, NTB</span>
                                    </span>
                                </a>
                            </li>
                            {{-- end sublink --}}
                        </ul>
                        <!-- End Nav Link -->
                    </div>
                    {{-- </div> --}}

                    {{-- <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0"> --}}
                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5 class="text-white">Social media</h5>
                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                            {{-- sub link --}}
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <span class="media align-items-center">
                                        <i class="fab  fa-instagram fa-2x mr-2"></i>
                                        <i class="fab  fa-facebook fa-2x mr-2"></i>
                                    </span>
                                </a>
                            </li>
                            {{-- end sublink --}}
                        </ul>
                        <!-- End Nav Link -->
                    </div>
                    {{-- </div> --}}
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