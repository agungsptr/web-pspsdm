@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="container">
    @if ($post->photos()->count() > 1)
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @isset($post->photos()[0]->photo)
            <div class="carousel-item active">
                <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img1" height="300px">
            </div>
            @endisset
            @isset($post->photos()[1]->photo)
            <div class="carousel-item">
                <img src="{{ asset('storage/'.$post->photos()[1]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img2" height="300px">
            </div>
            @endisset
            @isset($post->photos()[2]->photo)
            <div class="carousel-item">
                <img src="{{ asset('storage/'.$post->photos()[2]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img3" height="300px">
            </div>
            @endisset
        </div>
    </div>
    @else
    <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" class="rounded mx-auto d-block w-100" alt="img1"
        height="300px">
    @endif

    <div class="row mt-4 mb-5">
        <div class="col">
            <span class="display-3"><strong>{{$post->title}}</strong></span>
            <h5 class="mb-5">{{$post->subtitle}}</h5>
            <div class="row mb-3">
                <div class="col-lg-6">
                    Author :
                    <small class="text-left"
                        style="color: grey; font-weight: bold; font-size: 12pt">{{$post->user()}}</small>
                </div>
                <div class="col-lg-6">
                    <small style="color: grey; font-size: 12pt">{{$post->date()}}</small>
                </div>
            </div>
            <p class="font-body text-justify" style="color: #000000; word-wrap: break-word; font-size: 14pt">
                {{print_r($post->content)}}</p>
        </div>
    </div>

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