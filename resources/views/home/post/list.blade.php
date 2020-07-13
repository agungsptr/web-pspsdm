@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="font-body font-justify"><span style="color:grey">
            <span class="font-body-title" style="font-size: 18pt;">
                <strong>Post dengan kategori "{{$category->category}}"</strong>
            </span>
    </h5>
    <br>
    {{-- disini nama category --}}

    
    @foreach ($posts as $post)
    <a href="{{route('home.detail-post', ['post_id' => $post->id])}}" style="text-decoration: none">
        <div class="card shadow mb-2">
            <div class="card-body">
                <h5 class="card-title" style="color: black; font-weight: bold">{{$post->title}}</h5>
                <p class="card-text ellipsis" style="color: grey">{{$post->content}}</p>
            </div>
        </div>
    </a>
    @endforeach
</div>

</div>
<p>&nbsp;</p>
@endsection

