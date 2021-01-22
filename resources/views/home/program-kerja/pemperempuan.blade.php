@extends('layouts.home')

@section('header')
<img src="{{ asset('images/pemberdayaanperempuan\slider/1.jpg') }}" class="d-block w-100" alt="...">

{{-- content --}}
<h1 class="mb-3 mt-5 text-center" style="font-weight: bold">Program Pemberdayaan Perempuan</h1>
<h2 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Women Empowerment Program </h2>
<div class="garis mb-5"></div>

<div id="carouselExampleControls2" class="carousel slide bg-green mb-3 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/pemberdayaanperempuan/1.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/2.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/3.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/4.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/5.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/pemberdayaanperempuan/6.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/7.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/8.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/9.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/10.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/pemberdayaanperempuan/11.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/1.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/2.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/3.jpg') }}" alt="Card image cap"
                    height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanperempuan/4.jpg') }}" alt="Card image cap"
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
        <p>Pemberdayaan Perempuan bertujuan untuk membangun kesadaran perempuan tentang kesetaraan gender agar mampu mengembangkan potensi yang ada pada dirinya, sehingga perempuan dapat mandiri dan berpartisipasi dalam pembangunan.</p>
        <p>Program pemberdayaan perempuan yang telah dilaksanakan PSPSDM adalah pemberdayaan kelompok perempuan tani pada desa hutan Gunung Rinjani, termasuk untuk kelompok perempuan masyarakat adat.  Mereka mendapat layanan pendampingan dan pelatihan pengelolaan hasil paska panen seperti pengolahan minyak kelapa murni (Virgin Coconut Oil / VCO), pengolahan kopi dan serbat jahe, serta pengolahan hasil panen lainnya (keripik pisang, nangka, jagung). Dampingan yang diberikan berupa penguatan kapasitas kelembagaan kelompok, peningkatan kualitas produk, pengemasan/packaging dan pengembangan kerjasama jaringan pemasaran.</p>
        <p>Donor progam yang telah memberikan dukungan program Pemberdayaan Perempuan adalah  Green Prosperity Project Facility - MCA Indonesia.</p>
    </div>

    <div class="p text-justify mb-5" style="font-style: italic">
        <p>Women empowerment aims to establish women awareness on gender equality to be able to develop their own potential so they could be independent and participate in the development.</p>
        <p>The women empowerment programs that have been conducted by PSPSDM are women farmer group empowerment in forest villages of Rinjani Mountain including women groups of indigenous people. They receive assistance and training services of post-harvest yield management, such as Virgin Coconut Oil (VCO) processing, coffee and ginger processing and other harvest yield processing (banana, jackfruit, and corn chips), product quality improvement, packaging, and cooperation development of marketing network.</p>
        <p>The program donator that has supported the mother and child health program of PSPSDM  is Green Prosperity Project Facility - MCA Indonesia.</p>
    </div>
</div>
@endsection