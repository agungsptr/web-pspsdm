@extends('layouts.home')

@section('header')
{{-- slider --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/airbersih\slider/1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/airbersih\slider/2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/airbersih\slider/3.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/airbersih\slider/4.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/airbersih\slider/5.jpg') }}" class="d-block w-100" alt="...">
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
<h1 class="mb-3 mt-5 text-center" style="font-weight: bold">Program Air Bersih</h1>
<h2 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Clean Water Program</h2>
<div class="garis mb-5"></div>

{{-- content --}}
<div class="container" style="font-family: 'Montserrat', sans-serif;">
    <div class="p text-justify mb-5" style="font-weight: bold">
        <p>Air merupakan salah satu kebutuhan dasar bagi kualitas dan keberlanjutan hidup manusia. Ketersediaan air
            minum dan sanitasi berkaitan erat dengan pengentasan kemiskinan. Tidak memadainya prasarana dan sarana air
            minum dan sanitasi khususnya di daerah pedesaan berpengaruh buruk pada kondisi lingkungan yang memiliki
            dampak lanjutan terhadap tingkat perekonomin keluarga dan derajad kesehatan masyarakat. Penyakit diare dan
            penyakit lain yang ditularkan melalui air dan lingkungan masih merupakan masalah kesehatan terutama di
            daerah pedesaaan yang berpenghasilan rendah.</p>
        <p>Program Penyediaan Sarana Air Bersih yang dijalankan PSPSDM bertujuan memenuhi kebutuhan air bersih
            masyarakat di daerah pedesaan untuk kebutuhan air minum, MCK (mandi, cuci, kakus) dan kebutuhan rumah tangga
            mereka melalui pembangunan jaringan perpipaan air bersih dari sumber air ke pemukimaan mereka dengan
            melibatkan partisipasi aktif masyarakat. </p>
        <p>Untuk keberlanjutan program, PSPSDM membentuk dan memperkuat kapasitas kelembagaan Himpunan Pemakai Air Minum
            (HIPAM) di tingkat desa untuk mengelola pemanfaatan sarana air bersih yang telah dibangun oleh masyarakat.
            Anggota HIPAM dan pengurus Kelompok Pemakai Air (KPA) yang ada di setiap bangunan bak pembagi (dusun)
            mendapatkan pendampingan intensif dan pelatihan.</p>
        <p>Donor progam yang telah memberikan dukungan program Kesehatan Ibu Anak kepada PSPSDM selama ini adalah
            Program Grassroots dari Pemerintah Jepang. Implementasi program telah dijalankan di Pulau Lombok, Pulau
            Sumbawa di Propinsi Nusa Tenggara Barat, Pulau Flores Propinsi Nusa Tenggara Timur dan Propinsi Jawa Timur.
        </p>
    </div>
    <div class="text-justify" style="font-style: italic">
        <p>Water is one of basic needs for human life quality and sustainability. Drinking water and sanitation
            availability is closely related to poverty alleviation. Inadequate drinking water and sanitation facilities
            and infrastructures in rural areas have a bad effect on environment with further impact on family economic
            level and public health level. Diarrhea and other waterborne diseases or diseases transmitted through
            environment are the primary health issues in low-income rural areas.</p>
        <p>Clean Water Program run by PSPSDM aims at fulfilling the community need for clean water in rural areas for
            drinking water, MCK (bathing, washing, and toilet), and their household needs through the construction of
            clean water piping networks from water sources to their residential areas by involving community active
            participation.</p>
        <p>For the program sustainability, PSPSDM establish and strengthen the institutional capacity of the Association
            of Drinking Water Users (HIPAM) at the village level to manage the utilization of clean water facilities
            built by the communities. The HIPAM members and administrators of Water User Group (KPA) in each divider tub
            building (in the hamlet level) receive intensive assistance and training.</p>
        <p>The program donator that has supported the Clean Water Facilities Provision Program of PSPSDM is Grassroots
            Program from the Government of Japan. The program implementation carried out in Lombok Island and Sumbawa
            Island in West Nusa Tenggara Province, Flores Island in East Nusa Tenggara Province, and East Java Province.
        </p>
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