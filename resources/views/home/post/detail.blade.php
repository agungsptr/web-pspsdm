@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid mb-5" alt="Responsive image">

<div class="container">


    <div class=" mt-4 mb-5">
        <p class="font-weight-bold mb-3" style="font-size: 2.5rem; font-weight: 300; line-height: 1.2;">
            {{$post->title}}</p>
        <h5 class="mb-4">{{$post->subtitle}}</h5>

        Author :
        <small class="ml-2 mr-5" style="color: grey; font-weight: bold; font-size: 12pt">{{$post->user()}}</small>

        <small class="float-right mr-2">{{$post->date()}}</small>

        <div class="garis2 mt-3 "></div>
    </div>


    @if ($post->photos()->count() > 1)
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @isset($post->photos()[0]->photo)
            <div class="carousel-item active">
                <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img1" height="500px">
            </div>
            @endisset
            @isset($post->photos()[1]->photo)
            <div class="carousel-item">
                <img src="{{ asset('storage/'.$post->photos()[1]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img2" height="500px">
            </div>
            @endisset
            @isset($post->photos()[2]->photo)
            <div class="carousel-item">
                <img src="{{ asset('storage/'.$post->photos()[2]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img3" height="500px">
            </div>
            @endisset
        </div>
    </div>
    @else
    <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" class="rounded mx-auto d-block w-100" alt="img1"
        height="500px">
    @endif


    {{-- content body --}}

    <p class="font-body text-justify mt-4" style="color: #000000; word-wrap: break-word; font-size: 14pt">
        {{print_r($post->content)}}</p>



    <div class="mb-5">
        @if (!empty($post->document))
        <a href="{{ asset('storage/'.$post->document) }}" download>
            <li class="media">
                <div class="media-body">
                    <i class="fas fa-file-pdf fa-2x mr-3" style="color: red"></i>
                    <span class="mt-0 mb-1 text-black" style="font-size: 14pt">{{$post->title}}</span>
                </div>
            </li>
        </a>
        @endif
    </div>

</div>
@endsection