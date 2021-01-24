@extends('layouts.home')

@section('header')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/pendidikan/slider/1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pendidikan/slider/2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pendidikan/slider/3.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pendidikan/slider/4.jpg') }}" class="d-block w-100" alt="...">
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
<h1 class="mt-5 mb-3 text-center" style="font-weight: bold">Program Pendidikan</h1>
<h2 class="mb-3 text-center" style="font-weight: bold; font-style: italic">Education Programs</h2>
<div class="garis mb-5"></div>


{{-- content --}}
<div class="container" style="font-family: 'Montserrat', sans-serif;">
    <div class="p text-justify mb-5" style="font-weight: bold">
        <p>Dalam rangka ikut berkontribuss dalam pembangunan sumberdaya manusia berkelanjutan di Indonesia, PSPSDM telah
            melakukan beberapa program terkait pendidikan formal dan non- formal diantaranya :</p>
        <p>
            <ul id="datalist" class="point-list">
                <li class="point-list"><span style="color: #000000;">Meningkatan akses serta pemerataan pendidikan
                        melalui pembangunan sarana dan prasarana Sekolah Dasar serta Pendidikan Anak Usia Dini
                        (PAUD).</span>
                </li>
                <li class="point-list"><span style="color: #000000;">Peningkatan Minat Baca melalui Pengembangan
                        Perpustakaan Sekolah dan Perpustakaan Masyarakat.</span>
                </li>
                <li class="point-list"><span style="color: #000000;">Pengembangan kurikulum sekolah alam PAUD.</span>
                </li>
                <li class="point-list"><span style="color: #000000;">Pendidikan Keaksaraan Fungsional (PKF) untuk
                        Perempuan. Pendidikan Keaksaraan dijadikan pintuk masuk untuk meningkatkan kemampuan usaha
                        ekonomi kelompok perempuan (Kegiatan Fungsional) melalui pengembangan kegiatan usaha ekonomi
                        produktif.</span>
                </li>
            </ul>
        </p>
        <p>Untuk meningkatkan kapasitas Kelembagaan Komite Sekolah, guru, pengelola perpustakaan sekolah dan masyarakat
            serta Kelompok Perempuan PKF dan keberlanjutan program, PSPSDM memberikan layanan pelatihan dan pendampingan
            intensif.</p>
        <p>Donor progam yang telah memberikan dukungan program Pendidikan adalah Dinas Perpustakaan dan Kearsipan
            Propinsi Nusa Tenggara Barat bekerjasama dengan World Bank, Access-AusAid dan Program Grassroots Pemerintah
            Jepang.</p>
    </div>
    <div class="mb-5 text-justify" style="font-style: italic">
        <p>In order to contribute to the development of sustainable human resources in Indonesia, PSPSDM has caried out
            several programs related to formal and non-formal education, including : </p>
        <p>
            <ul id="datalist" class="point-list">
                <li class="point-list">Increase access and equity of education through
                    development of facilities and infrastructures of primary schools and early child education
                    (PAUD).
                </li>
                <li class="point-list">Increased reading interest through the development of school libraries and public
                    libraries
                </li>
                <li class="point-list">Development of natural school curriculum of PAUD.
                </li>
                <li class="point-list">4. Functional Literacy Education for women. The literacy education is dedicated
                    as an entry to increase economic business skills of women groups (functional activities) through the
                    development of productive economic business activities.
                </li>
            </ul>
        </p>
        <p>To strenthening institutional capacity of the school committee, teachers, school and public library
            management, and women groups of Functional Literacy Education, PSPSDM provide services of training and
            intensive assistance.</p>
        <p>The program donator that has supported the education program of PSPSDM are Regional Office of Libraries and
            Archives of West Nusa Tenggara Province in cooperation with the World Bank, Access-AusAid and Grassroots
            Program the Government of Japan.</p>
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