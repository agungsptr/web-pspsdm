@extends('layouts.home')
@section('publikasi-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid mb-5" alt="Responsive image">
<h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
    <strong>Galerry</strong></h5>
<div class="garis mb-3"></div><br>
<div class="container mb-5">
    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-lg-3" style="margin-bottom: 30px">
            <img src="{{ asset('storage/'.$photo->photo) }}" class="card-img" width="100px" height="200px">
        <p class="text-bodyb mt-1 bg-green p-3" style="color: white">{{$photo->description}}</p>
        </div>
        @endforeach


        {{-- $photo->title = judul
        $photo->description = deskripsi
        $photo->photo = foto --}}
    </div>
</div>
@endsection