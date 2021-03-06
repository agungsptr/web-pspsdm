@extends('layouts.home')

@section('header')
<img src="{{ asset('images/hutan.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="font-body font-justify"><span style="color:grey">
            <span class="font-body-title" style="font-size: 18pt;">
                <strong>Daftar Program Kerja</strong>
            </span>
    </h5>
    <br>
    {{-- disini nama category --}}

    <div class="row">
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>103]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/pertanian.png') }}" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pertanian</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>101]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/kesehatan.png') }}" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kesehatan</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>102]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/air-bersih.png') }}" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Air Bersih</h5>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>104]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/pendidikan.png') }}" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pendidikan</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>104]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="https://via.placeholder.com/150" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pemberdayaan perempuan</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>104]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="https://via.placeholder.com/150" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Usaha ekonomi produktif</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>100]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/Agroforestry.png') }}" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hutan Kemasyarakatan</h5>
                    </div>
                </div>
            </a>
        </div>     

        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>105]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/proyek.png') }}" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Padat Karya</h5>
                    </div>
                </div>
            </a>
        </div>  
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="{{ route('home.list-category-post', ['category_id'=>106]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/research.png') }}" class="card-img-top mb-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Penelitian dan Pelatihan</h5>
                    </div>
                </div>
            </a>
        </div>
         
    </div>

</div>

</div>
<p>&nbsp;</p>
@endsection