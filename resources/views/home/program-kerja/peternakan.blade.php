@extends('layouts.home')

@section('header')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/peternakan/slider/2.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

{{-- content --}}
<h1 class="mt-5 mb-3 text-center" style="font-weight: bold">Program Peternakan</h1>
<h1 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Livestock Program</h1>
<div class="garis mb-5"></div>
<div id="carouselExampleControls2" class="carousel slide bg-green mb-3 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/peternakan/1.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/2.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/3.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/4.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/5.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/peternakan/6.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/7.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/8.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/9.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/10.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/peternakan/11.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/12.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/1.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/2.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/peternakan/3.jpg') }}" alt="Card image cap"
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
        <p>Pada kegiatan program pertanian, program peternakan menjadi salah satu kegiatan penunjang untuk meningkatkan
            pendapatan keluarga tani. Program Pertanian Berkelanjutan pada lahan kering membutuhkan periode waktu yang
            relatif lama untuk dapat meningkatkan kesuburan tanah dan memanen hasil usahataninya. Guna memenuhi
            kebutuhan hidup petani dan keluarganya selama menunggu masa panen tersebut, maka program peternakan (seperti
            budidaya sapi, kambing atau ternak lebah) menjadi salah satu alternatif.</p>
        <p>Budidaya sapi atau kambing pada lahan kering/miring, selain dapat meningkatkan pendapatan petani dan
            keluarganya, kotoran ternak yang dihasilkan dapat bermanfaat menjadi pupuk kandang / organik untuk
            meningkatkan kesuburan tanah yang dapat berdampak pada peningkatan hasil panen. Kotoran ternak dapat juga
            dimanfaatkan sebagai biogass. Bunga dari tanaman penguat teras gamal dan kaliandra (tanaman leguminoceae)
            dapat menjadi sumber pakan ternak lebah.</p>
        <p>PSPSDM memberikan layanan pelatihan dan pendampingan intensif kepada kelompok sasaran dalam pengembangan dan
            pengelolaan budidaya ternak yang baik.</p>
        <p>Donor progam yang telah memberikan dukungan program Peternakan kepada PSPSDM adalah Global Environmental
            Facility / GEF SGP – UNDP, JICA, Millenium Challenge Account (MCA) – Indonesia. Kegiatan ini telah
            dijalankan untuk kelompok dampingan yang tinggal di sektar kawasan hutan Gunung Rinjani di Pulau Lombok
            Propinsi Nusa Tenggara Barat.</p>
    </div>
    <div class="p text-justify mb-5" style="font-style: italic">
        <p>Livestock program is one of supporting activities in agricultural program to increase farmer family income.
            The sustainable agriculture program in dry land requires a relatively long period to enhance soil fertility
            and harvest its produce. The livestock program (such as cattle and goat farming or beekeeping) becomes one
            of alternatives for farmers and their families to meet their needs during the waiting period of harvesting
            time. </p>
        <p>Cattle or goat farming on dry land could increase income of farmers and their family. Moreover, manure
            produced can be utilized as organic fertilizers to improve soil fertility that will have impact on increased
            harvest yield. The manure could also be used as biogas. Flowers of terrace-strengthening plants of gamal
            (Gliricidia sepium) and kaliandra (Calliandra calothyrsus) are sources of beekeeping feed.</p>
        <p>PSPSDM provides services of training and intensive assistance to target groups in good livestock farming
            development and management.</p>
        <p>The program donators that have supported the livestock program of PSPSDM are Global Environmental Facility /
            GEF SGP – UNDP, JICA, Green Prosperity Project Facility - MCA Indonesia. The activities have been carried
            out for assisted groups lived in the surrounding areas of Rinjani Mountain forest on Lombok Island West Nusa
            Tenggara Province.</p>
    </div>

    <div class="card mb-3 shadow">
        <h6 class="mb-3 mt-3 ml-2 card-title" style="font-weight: bold">Program Air Bersih Untuk Lokasi</h6>
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