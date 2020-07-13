@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h5><strong>{{$post->title}}</strong></h5>
            <small class="text-right">{{$post->date}}</small>
            <p class="font-body text-justify" style="color: #000000; word-wrap: break-word;">{{$par}}</p>
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('images/img_profile.jpeg') }}" class="rounded mx-auto d-block" alt="..." width="350px"
                height="150px">
        </div>
    </div>
</div>
<p>&nbsp;</p>
@endsection