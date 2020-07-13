@extends('layouts.home')
@section('home-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="judul-section text-center" style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
        Berita</h5><br>
    <div class="garis"></div><br>
    <div class="cbp-wrapper-outer">
        <div class="cbp-wrapper">
            <div class="cbp-item landings" style="width: 273px; left: 0px; top: 0px;">
                <div class="cbp-item-wrapper">
                    <a class="cbp-caption" href="index.html">
                        <div class="bg-white shadow-sm rounded overflow-hidden p-1 m-3">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('images/img_profil.jpeg') }}" alt="Image Description">
                            </div>
                        </div>
                        <div class="text-center p-3">
                            <span class="d-block h4 mb-0">Agency <span class="small text-body">(Current
                                    page)</span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection