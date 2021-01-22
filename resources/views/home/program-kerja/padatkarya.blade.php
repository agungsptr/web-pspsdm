@extends('layouts.home')

@section('header')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/padatkarya/slider/3.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/padatkarya/slider/4.jpg') }}" class="d-block w-100" alt="...">
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
<h1 class="mb-3 mt-5 text-center" style="font-weight: bold">Program Padat Karya</h1>
<h1 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Labor Intensive Program</h1>
<div class="garis mb-5"></div>

<div id="carouselExampleControls2" class="carousel slide bg-green mb-3 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/padatkarya/1.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/2.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/3.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/4.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/5.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/padatkarya/7.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/8.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/11.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/12.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/13.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/padatkarya/12.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/13.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/14.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/15.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/padatkarya/16.png') }}" alt="Card image cap"
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
<br>
<div class="container" style="font-family: 'Montserrat', sans-serif;">
    <div class="p text-justify mb-5" style="font-weight: bold">
        <p>Padat Karya merupakan kegiatan pembangunan proyek yang lebih banyak menggunakan tenaga manusia dalam jumlah
            banyak. Tujuan utama dari program padat karya adalah membuka lapangan kerja bagi keluarga keluarga miskin
            atau kurang mampu yang mengalami kehilangan penghaslan atau pekerjaan tetap. Dengan masih tingginya
            sumberdaya manusia yang tidak berketerampilan terutama di daerah pedesaan, maka progam ini dapat mengurangi
            angka pengangguran. Salah satu bentuk pekerjaan padat karya yang menyerap tenaga kerja dalam jumlah besar
            dalah pekerjaan konstruksi seperti perbaikan jalan, saluran, dan sebagainya.</p>
        <p>PSPSDM telah menjalankan Program Padat Karya Tunai untuk 323 desa di Propinsi Nusa Tenggara Barat melalui 5
            konsorsium LSM yang didanai oleh Bappenas – World Bank dan Padat Karya Pangan melalui penyaluran 600 ton
            beras (milled rice) untuk desa miskin di 7 kecamatan di Kabupaten Bima dan penyaluran WSB (Weat Soy Bland),
            CSB (Corn Soy Bland) untuk Pemberian Makanan Tambahan (PMT) Balita di Posyandu di Pulau Lombok yang didanai
            oleh CRS Indonesia.</p>
        <p>Untuk keberlanjutan program, PSPSDM membentuk dan memperkuat kapasitas kelembagaan Tim Pembina Desa (Village
            Supervision Tim) di setiap lokasi program yang anggotanya berasal dari tokoh formal dan informal di di
            tingkat dusun dan desa. Anggota Tim Pembina Desa (Village Supervision Team) mendapatkan pendampingan
            intensif dan pelatihan. Kelembagaan ini yang bertanggugjawab mengelola kegiatan proyek dan keberlanjutan
            paska proyek.</p>
    </div>
    <div class="p text-justify mb-5" style="font-style: italic">
        <p>Labor intensive is an activity of project development that mostly employs human labor. The program main goal
            is to open employment for poor or underprivileged families that have lost their income or permanent jobs.
            Due to the high number of unskillful human resources in rural areas, the program can reduce unemployment
            rate. One form of labor-intensive programs that absorbs labor in large numbers is construction, such as road
            or sewer works and so on.</p>
        <p>PSPSDM has been conducted Cash Labor Intensive Program for 323 villages in West Nusa Tenggara Province
            through 5 consortium of NGOs and funded by Bappenas – World Bank and Food Labor Intensive through the
            distribution of 600 ton milled rice for poor villages in 7 sub-districts in Bima Regency and distribution of
            WSB (Weat Soy Bland) and CSB (Corn Soy Bland) for Supplementary Feeding for toddlers in Posyandu in Lombok
            Island that is funded by CRS Indonesia.</p>
        <p>As regards the program sustainability, PSPSDM establishes and strengthens the institutional capacity of
            Village Supervision Tim (VST) in every location of the program whose members are formal and informal figures
            in village and hamlet levels. The VST members receive intensive assistance and training. The institution is
            responsible for managing the project activities and post-project sustainability.</p>
    </div>

</div>
@endsection