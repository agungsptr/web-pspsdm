@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    @if ($post->photos()->count() > 1)
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @isset($post->photos()[0]->photo)
            <div class="carousel-item active">
                <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img1" height="600px">
            </div>
            @endisset
            @isset($post->photos()[1]->photo)
            <div class="carousel-item">
                <img src="{{ asset('storage/'.$post->photos()[1]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img2" height="600px">
            </div>
            @endisset
            @isset($post->photos()[2]->photo)
            <div class="carousel-item">
                <img src="{{ asset('storage/'.$post->photos()[2]->photo) }}" class="rounded mx-auto d-block w-100"
                    alt="img3" height="600px">
            </div>
            @endisset
        </div>
    </div>
    @else
    <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" class="rounded mx-auto d-block w-100" alt="img1"
        height="600px">
    @endif
    <div class="row mt-4 mb-5">
        <div class="col">
            <p class="display-3"><strong>{{$post->title}}</strong></p>
            <h1 class="mb-5">{{$post->subtitle}}</h1>
            <div class="row mb-3">
                <div class="col">
                    Author :
                    <p class="text-left" style="color: grey; font-weight: bold; font-size: 14pt">{{$post->user()}}</p>
                </div>
                <div class="col">
                    <p class="text-right" style="color: grey; font-size: 14pt">{{$post->date()}}</p>
                </div>
            </div>
            <p class="font-body text-justify" style="color: #000000; word-wrap: break-word; font-size: 14pt">
                {{print_r($post->content)}}</p>
        </div>
    </div>
</div>
@endsection