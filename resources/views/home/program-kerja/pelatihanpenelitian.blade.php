@extends('layouts.home')

@section('header')
<img src="{{ asset('images/penelitian\slider/1.jpg') }}" class="d-block w-100" alt="...">
{{-- content --}}
<br>
<h1 class="mb-3 text-center" style="font-weight: bold">Program Pelatihan Dan Penelitian</h1>
<h2 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Research and Training Programs</h2>
<div class="garis mb-5"></div>

<div id="carouselExampleControls2" class="carousel slide bg-green mb-3 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/penelitian/1.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/2.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/3.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/4.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/5.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/penelitian/6.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/7.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/8.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/9.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/10.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/penelitian/11.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/12.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/13.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/10.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/penelitian/8.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>
    </div>
    {{-- previus and next --}}
    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{-- content --}}
<div class="container" style="font-family: 'Montserrat', sans-serif;">
    <div class="p text-justify mb-5" style="font-weight: bold">
        <p>PSPSDM memiliki pengalaman penelitian tentang (1). Penyusunan Rencana Teknis Pembinaan (Rentekbin) di 9
            Unit Pemukiman Transmigrasi pada 4 Kabupaten di Pulau Sumbawa, bekerjasama dengan Dinas Transmigrasi
            Propinsi Nusa Tenggara Barat, (2). Penelitian Identifikasi Varietas Padi dan Palawija Lokal di Pulau
            Sumbawa, bekerjasama dengan Plan Intenational dan (3). Survey Gender, Kesuburan Tanah dan Pendapatan
            Masyarakat yang tinggal di sekitar kawasan hutan Gunung Rinjani, bekerjasama dengan Green Prosperity
            Project Facility - MCA Indonesia.</p>
        <p>Guna meningkatkan pengetahuan (knowledge), keterampilan (skill) dan perilaku (attitude) kelompok
            dampingan, PSPSDM secara rutin memberikan pelatihan dan pendampingan intensif dalam setiap kegiatan
            program yang dilaksanakan untuk meningkatkan kapasitas individu dan kelompok dampingan.</p>
    </div>
    <div class="p text-justify mb-5" style="font-style: italic">
        <p>PSPSDM has carried out research on (1). Formulation of technical guidance plan in nine transmigration
            settlement units in four regencies in Sumbawa Island in cooperation with the Regional Office of
            Transmigration West Nusa Tenggara Province, (2). Identification of local rice and “palawija” (corn and
            soybean) varieties in Sumbawa Island in cooperation with Plan International, and (3). Survey of gender, soil
            fertility and income of community who live around the Rinjani Mountain forest areas in cooperation with
            Green Prosperity Project Facility - MCA Indonesia.</p>
        <p>To improve knowledge, skill, and attitude of the assisted groups, PSPSDM routinely provides training and
            intensive assistance in every program activity conducted to enhance individual and assisted group capacity.
        </p>
    </div>

    <div class="card mb-3 shadow">
        <h6 class="mb-3 mt-3 ml-2 card-title" style="font-weight: bold">Program Pelatihan dan penelitian</h6>
        <p class="card-text ml-3">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        <div id="carouselExampleControls" class="card-body carousel slide bg-transparent" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            {{-- previus and next --}}
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
@endsection