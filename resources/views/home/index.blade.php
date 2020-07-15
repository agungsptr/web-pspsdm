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
    <div class="garis mb-5"></div><br>

    {{-- caraousel --}}
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($posts as $berita)
            @if ($loop->iteration == 1)
            <div class="carousel-item active">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            @if (!empty($berita->photos()[0]->photo))
                            <img src="{{ asset('storage/'.$berita->photos()[0]->photo) }}" class="card-img rounded" alt="..."
                                width="300px" height="350px">
                            @endif

                        </div>
                        <div class="col-md-8">
                            <div class="card-body ml-5">
                                <h5 class="card-title"><strong style="color: black">{{$berita->title}}</strong></h5>
                                <p class="card-text ellipsis2" style="max-width: 100%; color: gray">{{$berita->content}}
                                </p>
                                <a href="">
                                    <p class="card-text"><small class="text-muted">selengkapnya . . </small></p>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
            @else
            <div class="carousel-item">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            @if (!empty($berita->photos()[0]->photo))
                            <img src="{{ asset('storage/'.$berita->photos()[0]->photo) }}" class="card-img rounded" alt="..."
                                width="300px" height="350px">
                            @endif

                        </div>
                        <div class="col-md-8">
                            <div class="card-body ml-5">
                                <h5 class="card-title"><strong style="color: black">{{$berita->title}}</strong></h5>
                                <p class="card-text ellipsis2" style="max-width: 100%; color: gray">{{$berita->content}}
                                </p>
                                <a href="">
                                    <p class="card-text"><small class="text-muted">selengkapnya . . </small></p>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <p>&nbsp;</p>
</div>
@endsection