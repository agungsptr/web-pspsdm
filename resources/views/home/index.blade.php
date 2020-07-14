@extends('layouts.home')
@section('home-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/Header1.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
        <strong>Berita</strong></h5><br>
    <div class="garis"></div><br>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection