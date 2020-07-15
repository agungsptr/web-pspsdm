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
<div class="container mb-5">
    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-lg-3" style="margin-bottom: 30px">
            <img src="{{ asset('storage/'.$photo->photo) }}" class="card-img" width="100px" height="200px">
        </div>
        @endforeach
    </div>
</div>
@endsection