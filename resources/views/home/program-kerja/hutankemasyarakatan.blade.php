@extends('layouts.home')

@section('header')
<img src="{{ asset('images/hutan\slider/1.jpg') }}" class="d-block w-100" alt="...">
{{-- content --}}
<h1 class="mb-3 mt-5 text-center" style="font-weight: bold">Program Hutan Kemasyarakatan</h1>
<h1 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Social Forestry Program</h1>
<div class="garis mb-5"></div>
<div id="carouselExampleControls2" class="carousel slide bg-green mb-3 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/hutan/1.jpg') }}" alt="Card image cap" height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/2.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/3.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/4.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/5.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/hutan/6.jpg') }}" alt="Card image cap" height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/7.png') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/9.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/10.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/11.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card-deck">
                <div class="card">
                    <img class="d-block" src="{{ asset('images/hutan/12.jpg') }}" alt="Card image cap" height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/1.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/2.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/3.jpg') }}" alt="Card image cap"
                        height="290cm">
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/hutan/4.jpg') }}" alt="Card image cap"
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
        <p>Program HKm bertujuan meningkatkan kesejahteraan masyarakat setempat melalui pemanfaatan sumberdaya hutan
            secara optimal, adil dan berkelanjutan dengan tetap menjaga kelestarian fungsi hutan dan lingkungan hidup.
            PSPSDM memiliki pengalaman kegiatan HKm dalam bentuk Penyuluhan dan bimbingan teknis pembangunan hutan
            kemasyarakatan seluas 1.500 hektar untuk masyarakat desa hutan di wilayah HKm Sekotong, Sekaroh dan Sambelia
            di Pulau Lombok. Bekerjasama dengan Balai Rehabilitasi Lahan dan Konservasi Tanah Propinsi Nusa Tenggara
            barat dengan bantuan dana hibah dari Overseas Econimic Cooperation Fund (OECF) Jepang.</p>
    </div>
    <div class="p text-justify mb-5" style="font-style: italic">
        <p>Social Forestry (HKm) program aims to improve local community welfare through optimal, fair, and sustainable
            forest resources utilization by maintaining the preservation of forest functions and the environment. PSPSDM
            has experiences in Social Forestry program in the program of extension and technical guidance on social
            forestry development involving 1,500 ha area for forest village communites in HKm areas of Sekotong,
            Sekaroh, and Sambelia in Lombok Island. The program is in cooperation with the Center for Land
            Rehabilitation and Soil Conservation of West Nusa Tenggara Province with grant from Overseas Economic
            Cooperation Fund (OECF) Japan.</p>
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