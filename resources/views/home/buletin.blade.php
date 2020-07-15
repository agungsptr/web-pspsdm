@extends('layouts.home')
@section('publikasi-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
    <strong>Buletin</strong></h5><br>
<div class="garis"></div><br>
<div class="container">
    <div class="row">
        <div class="col-lg-3" style="margin-bottom: 30px">
            <a href="{{ asset('images/hutan.png') }}" download>
                <figure class="figure">
                    <img src="{{ asset('images/hutan.png') }}" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">Buletin name in this.</figcaption>
                </figure>
            </a>
        </div>
        <div class="col-lg-3" style="margin-bottom: 30px">
            <a href="{{ asset('images/header1.png') }}" download>
                <figure class="figure">
                    <img src="{{ asset('images/hutan.png') }}" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">Buletin name in this.</figcaption>
                </figure>
            </a>
        </div>

    </div>
</div>
<p>&nbsp;</p>
@endsection