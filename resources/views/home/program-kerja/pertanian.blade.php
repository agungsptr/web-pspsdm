@extends('layouts.home')

@section('header')
{{-- slider --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/pertanian\slider/6.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pertanian\slider/2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pertanian\slider/3.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pertanian\slider/4.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pertanian\slider/5.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pertanian\slider/1.jpg') }}" class="d-block w-100" alt="...">
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
<h1 class="mb-3 mt-5 text-center" style="font-weight: bold">Program Pertanian</h1>
<h2 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Agriculture Program </h2>
<div class="garis mb-5"></div>
{{-- content --}}
<div class="container" style="font-family: 'Montserrat', sans-serif;">
    <div class="p text-justify mb-5" style="font-weight: bold">
        <p>Model Program Pertanian yang dijalankan PSPSDM adalah Pengelolaan Pertanian Lahan Kering melalui promosi
            kegiatan terassering dan budidaya lorong. Lokasi program pada umumnya adalah lahan kering / lahan miring
            milik petani yang tinggal di sekitar daerah penyangga kawasan hutan. Tanaman semusim, tanaman MPTS
            (Multipurpose Tree Spesies) dan tanaman kayu / tanaman kehutanan termasuk tanaman unggulan Gaharu (Gyrinops
            versteegii) ditanam pada satu bidang usahatani. Program ini selain dapat meningkatkan pendapatan petani
            lahan kering, juga dapat meminimalkan tekanan terhadap kawasan hutan oleh masyarakat sekitar hutan dan turut
            berkontribusi mengurangi emisi karbon (pemanasan global).</p>
        <p>Untuk keberlanjutan program, PSPSDM memperkuat kapasitas kelembagaan kelompok tani. Petani dan istri petani
            mendapatkan pendampingan intensif dan pelatihan. Kelompok wanita tani (istri petani) mendapatkan
            pendampingan Kegiatan Usaha Ekonomi Produktif (KUEP) dalam pengolahan dan pemasaran hasil paska panen.</p>
        <p>Donor progam yang telah memberikan dukungan program Pertanian Berkelanjutan kepada PSPSDM selama ini adalah
            Global Environmental Facility / GEF SGP – UNDP, PLAN International, ACCESS AUSAID, CRS Indonesia, Millenium
            Challenge Account (MCA) – Indonesia, Pemerintah Indonesia (Dinas Transmigrasi, Dinas Kehutanan, Dinas
            Perkebunan, Dinas Peternakan, Bappeda). Implementasi program telah dijalankan di Pulau Lombok dan Pulau
            Sumbawa Propinsi Nusa Tenggara Barat.</p>
    </div>
    <div class="p text-justify mb-5" style="font-style: italic">
        <p>Agricultural program model carried out by PSPSDM is dry land agricultural management through promotion of
            terracing and alley cropping activities. The program locations are generally in farmers’ dry land or sloping
            land located around the forest area buffer zones. Seasonal crops, MPTS (Multipurpose Tree Species) crops,
            and timber plants or forestry crops including superior crops of Gaharu (Gyrinops versteegii) are planted in
            one farming field. The program could improve dry land farmer income as well, minimize pressure on forest
            areas by the surrounding communities and contribute to carbon emission (global warming).</p>
        <p>As regards the program sustainability, PSPSDM strengthens institutional capacity of farmer groups. Farmers
            and farmer wife acquire intensive assistance and trainings. Farmer women groups (farmer wife) receive
            assistance in Productive Economic Business Activities (KUEP) in post-harvest yield processing and marketing.
        </p>
        <p>The program donators that have supported theSsustainable Agricultural programs of PSPSDM are Global
            Environmental Facility / GEF SGP – UNDP, PLAN International, ACCESS AusAID, CRS Indonesia, Green Prosperity
            Project Facility - MCA Indonesia, Government of Indonesia (Regional Office of Transmigration, Forestry,
            Plantation, Animal Husbandry, Development Planning Agency of West Nusa Tenggara Province).</p>
    </div>

    <div class="card mb-3 shadow">
        <h6 class="mb-3 mt-3 ml-2 card-title" style="font-weight: bold">Program Pertanian</h6>
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