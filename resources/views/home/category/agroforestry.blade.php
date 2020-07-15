@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="container">
   
    <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" class="rounded mx-auto d-block w-100" alt="img1"
        height="300px">


    <div class="row mt-4 mb-5">
        <div class="col">
            <span class="display-3"><strong>{{$post->title}}</strong></span>
            <h5 class="mb-5">{{$post->subtitle}}</h5>
    </div>
</div>
@endsection