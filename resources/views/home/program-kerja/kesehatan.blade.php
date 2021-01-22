@extends('layouts.home')

@section('header')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/kesehatan/slider/1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/kesehatan/slider/2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/kesehatan/slider/3.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/kesehatan/slider/4.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/kesehatan/slider/5.jpg') }}" class="d-block w-100" alt="...">
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
<h1 class="mt-5 mb-3 text-center" style="font-weight: bold">Program Kesehatan</h1>
<h2 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Program Kesehatan</h2>
<div class="garis mb-5"></div>
{{-- content --}}
<div class="container" style="font-family: 'Montserrat', sans-serif;">
    <div class="p text-justify mb-5" style="font-weight: bold">
        <p>Program kesehatan Ibu dan Anak (KIA) merupakan salah satu prioritas utama pembangunan kesehatan di Indonesia.
            Program ini bertanggungjawab terhadap pelayanan kesehatan bagi ibu hamil, ibu bersalin dan bayi neonatal.
            Salah satu tujuan program ini adalah menurunkan kematian dan kejadian sakit pada ibu dan anak melalui
            peningkatan mutu pelayanan dan menjaga kesinambungan pelayanan kesehatan ibu dan prenatal di tingkat
            pelayanan dasar dan pelayanan rujukan primer. Angka Kematian Ibu (AKI) dan Angka Kematian Bayi (AKB)
            merupakan salah satu indikator status Kesehatan Ibu dan Anak (KIA) yang dapat menggambarkan kualitas dan
            aksesbiltias fasiltas pelayanan kesehatan.</p>
        <p>Program Kesehatan Ibu Anak yang dijalankan PSPSDM bertujuan menurunkan AKI, AKB, gizi kurang / gizi buruk
            pada Balita (anak dibawah usia 5 tahun) dengan memperkuat kapasitas kelembagaan layanan dasar Posyandu (Pos
            Pelayanan Terpadu) di daerah pedesaan, memfasilitasi pembangunan Polindes (Pondok Persalinan Desa) dan Rumah
            Bersalin Puskesmas daerah terpencil untuk meningkatkan akses layanan kelompok sasaran ke Pusat Layanan
            Kesehatan terdekat.</p>
        <p>Untuk keberlanjutan program, PSPSDM memperkuat kapasitas kelembagaan Posyandu. Kader Posyandu, orangtua
            Balita, ibu hamil dan tokoh formal / informal mendapat pendampingan intensif dan pelatihan.</p>
        <p>Donor progam yang telah memberikan dukungan program Kesehatan Ibu Anak kepada PSPSDM selama ini adalah JICA,
            Program Grassroots dari Pemerintah Jepang. Implementasi program telah dijalankan di Pulau Lombok Propinsi
            Nusa Tenggara Barat dan Jawa Timur. </p>
    </div>
    <div class="p text-justify mb-5" style="font-style: italic">
        <p>Mother and child health (KIA) program is one of priorities in health development in Indonesia. The program is
            responsible for health services for pregnant women, mother in labor, and neonatal infants. One of the
            program goals is to improve health services quality and maintain health services sustainability for mother
            and prenatal in basic service level and primary referral services. Maternal mortality rate (AKI) and
            neonatal mortality rate (AKB) are indicators for mother and child health status that could illustrate the
            quality and accessibility of the health service facilities.</p>
        <p>The mother and child health program run by PSPSDM aims to reduce AKI, AKB, mal-nutrient among toddlers by
            reinforcing Posyandu (integrated healthcare center at the humlet) basic service institutional capacities in
            rural areas and facilitating the construction of Polindes (village maternity clinic), and maternity clinic
            of Puskesmas (community health center at sub district) in remote areas to improve access to service for
            target groups to the closest health service center.</p>
        <p>For the program sustainability, PSPSDM strengthens the institutional capacity of Posyandu. The Posyandu kader
            (volunteers), elderly people, toddlers, pregnant women, and formal/informal figures receive intensive
            assistance and training.</p>
        <p>The program donator that has supported the mother and child health program of PSPSDM are JICA, Grassroots
            Program from Government of Japan. The program implementation has been carried out in Lombok Island, West
            Nusa Tenggara Province, and East Java Province.</p>
    </div>

    <div class="card mb-3 shadow">
        <h6 class="mb-3 mt-3 ml-2 card-title" style="font-weight: bold">Program Kesehatan Untuk Lokasi</h6>
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