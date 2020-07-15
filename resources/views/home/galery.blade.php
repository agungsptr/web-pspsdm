@extends('layouts.home')
@section('publikasi-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
        <strong>Galerry</strong></h5><br>
    <div class="garis"></div><br>
<div class="container">
    <div class="row">
        <div class="col-lg-3" style="margin-bottom: 30px"> <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="100px"
                height="200px">
        </div>
        <div class="col-lg-3" style="margin-bottom: 30px"> <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="100px"
                height="200px">
        </div>
        <div class="col-lg-3" style="margin-bottom: 30px"> <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="100px"
                height="200px">
        </div>
        <div class="col-lg-3" style="margin-bottom: 30px"> <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="100px"
                height="200px">
        </div>
        <div class="col-lg-3" style="margin-bottom: 30px"> <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="100px"
                height="200px">
        </div>
    </div>
</div>
<p>&nbsp;</p>
@endsection