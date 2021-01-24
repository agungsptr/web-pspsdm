@extends('layouts.home')

@section('header')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/pemberdayaanadat/slider/1.jpg') }}" class="d-block w-100" alt="...">
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
<h1 class="mb-3 mt-5 text-center" style="font-weight: bold">Pemberdayaan Masyarakat Adat</h1>
<h2 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Indigenous Community Empowerment Program
</h2>
<div class="garis mb-5"></div>

<div id="carouselExampleControls2" class="carousel slide bg-green mb-3 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/pemberdayaanadat/1.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/2.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/3.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/4.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/5.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/pemberdayaanadat/6.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/7.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/8.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/9.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/10.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/pemberdayaanadat/11.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/12.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/13.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/10.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/pemberdayaanadat/8.jpg') }}" alt="Card image cap"
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
        <p>Komunitas Adat Desa Gumantar merupakan salah satu dari 23 komunitas adat yang ada di Kabupaten Lombok Utara.
            Mereka tinggal berbatasan dengan kawasan hutan Gunung Rinjani. Dalam kehidupan sehari-hari, komunitas adat
            ini memegang teguh pranata adat dan awiq-awiq adat yang diwariskan secara turun menurun. Sebagian besar mata
            pencaharian mereka adalah petani, dengan pola pertanian tadah hujan.</p>
        <p>PSPSDM memberikan layanan dampingan pengelolaan pertanian lahan kering dan budidaya ternak lebah untuk petani
            dan pengolahan hasil usaha tani untuk perempuan. Mereka mendapatkan pelatihan dan pendamping intensif dari
            PSPSDM, termasuk peningkatan kesetaraan Gender.</p>
        <p>Donor progam yang telah memberikan dukungan program Pemberdayaan Perempuan adalah Green Prosperity Project
            Facility - MCA Indonesia.</p>
    </div>
    <div class="text-justify" style="font-style: italic">
        <p>Indigenous community in Gumantar Village is one of the 23 Indigenous communities in North Lombok Regency.
            They live in the border of Rinjani Mountain forest areas. The community adheres to customary institutions
            and awiq-awiq (local wisdom) in their daily life that are inherited for generations. Most of them work as
            farmer with rainfed agricultural patterns.</p>
        <p>PSPSDM provides services in dry land agricultural and beekeeping management for farmers and productive
            economic business activities of farming yield processing for women. They receive intensive training and
            assistance from PSPSDM including gender equality improvement.</p>
        <p>The program donator that has supported the women empowermwnt program of PSPSDM is Green Prosperity Project
            Facility - MCA Indonesia.</p>
    </div>

    @foreach ($posts as $post)
    <div class="card mb-3 shadow">
        <h6 class="mb-3 mt-3 ml-2 card-title" style="font-weight: bold">{{$post->title}}</h6>
        @if(count(json_decode($post->content_photos)) > 0)
        <div id="carouselExampleControls" class="card-body carousel slide bg-transparent" data-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 0; $i < count(json_decode($post->content_photos)); $i +=4)
                    <div class="carousel-item {{$i < 4 ? 'active':''}}">
                        <div class="card-deck">
                            @isset(json_decode($post->content_photos)[$i])    
                            <div class="card">
                                <img class="card-img-top"
                                    src="{{ asset('storage/'.json_decode($post->content_photos)[$i]) }}"
                                    alt="Card image cap" height="240px">
                            </div>
                            @endisset
                            @isset(json_decode($post->content_photos)[$i+1])
                            <div class="card">
                                <img class="card-img-top"
                                    src="{{ asset('storage/'.json_decode($post->content_photos)[$i+1]) }}"
                                    alt="Card image cap" height="240px">
                            </div>
                            @endisset
                            @isset(json_decode($post->content_photos)[$i+2])  
                            <div class="card">
                                <img class="card-img-top"
                                    src="{{ asset('storage/'.json_decode($post->content_photos)[$i+2]) }}"
                                    alt="Card image cap" height="240px">
                            </div>
                            @endisset
                            @isset(json_decode($post->content_photos)[$i+3])   
                            <div class="card">
                                <img class="card-img-top"
                                    src="{{ asset('storage/'.json_decode($post->content_photos)[$i+3]) }}"
                                    alt="Card image cap" height="240px">
                            </div>
                            @endisset
                        </div>
                    </div>
                @endfor
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
        @endif
    </div>
    @endforeach
    {{$posts->links()}}
</div>
@endsection