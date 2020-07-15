@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
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
            <a href="{{ route('home.list-category-post', ['category_id'=>104]) }}" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/pendidikan.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pendidikan</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/kesehatan.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kesehatan</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/research.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Penelitian dan Pelatihan</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/proyek.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Proyek Padat Karya</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/pertanian.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pertanian</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/air-bersih.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Air Bersih</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 15px">
            <a href="" style="text-decoration: none">
                <div class="card shadow" style="width: 15rem;">
                    <img src="{{ asset('images/Agroforestry.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Agroforestry</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

</div>
<p>&nbsp;</p>
@endsection