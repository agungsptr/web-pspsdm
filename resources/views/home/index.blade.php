@extends('layouts.home')
@section('header')
{{-- slider --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/home/1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/home/2.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/home/3.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/home/4.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/home/5.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/home/6.jpg') }}" class="d-block w-100" alt="...">
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

{{-- <img src={{ asset('images/home/1.jpg') }} class="img-fluid" alt="Responsive image"> --}}
<p>&nbsp;</p>
<div class="container">
    <h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
        <strong>Berita</strong></h5>
    <div class="garis mb-5"></div>

    {{-- caraousel Content--}}
    <div class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($posts as $berita)
            @if ($loop->iteration == 1)
            <div class="carousel-item active">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        @if (!empty($berita->photos()[0]->photo))
                        <img src="{{ asset('storage/'.$berita->photos()[0]->photo) }}" class="card-img rounded"
                            alt="..." width="300px" height="350px">
                        @endif

                    </div>
                    <div class="col-md-8">
                        <div class="card-body ml-5">
                            <h5 class="card-title"><strong style="color: black">{{$berita->title}}</strong></h5>

                            <p class="card-text ellipsis2 text-justify mb-5" style="max-width: 100%; color: gray">
                                {!!strip_tags($berita->content)!!}
                            </p>
                            <a href="{{route('home.detail-post', ['post_id' => $berita->id])}}" class="float-right"
                                style="color: #039564;">
                                <small>Selengkapnya</small>
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
                        <img src="{{ asset('storage/'.$berita->photos()[0]->photo) }}" class="card-img rounded"
                            alt="..." width="300px" height="350px">
                        @endif

                    </div>
                    <div class="col-md-8">
                        <div class="card-body ml-5">
                            <h5 class="card-title"><strong style="color: black">{{$berita->title}}</strong></h5>
                            <p class="card-text ellipsis2 text-justify mb-5" style="max-width: 100%; color: gray">
                                {!!strip_tags($berita->content)!!}
                            </p>
                            <a href="{{route('home.detail-post', ['post_id' => $berita->id])}}" class="float-right"
                                style="color: #039564;">
                                <small>Selengkapnya</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    {{-- Work Area Article --}}
    <h5 class="judul-section" style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
        <strong>Lokasi Kerja</strong></h5>
    <div class="garis mb-5"></div>
    <img src="https://via.placeholder.com/1500x500?text=Lokasi Kerja" class="img-fluid mb-5" alt="Responsive image">


</div>
@endsection