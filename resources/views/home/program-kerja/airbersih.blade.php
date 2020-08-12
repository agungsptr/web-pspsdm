@extends('layouts.home')

@section('header')
<div class="container mt-5">
    @foreach ($posts as $post)
    <div class="row">
        @if (!empty($post->content_photos))
            @foreach (json_decode($post->content_photos) as $p)
            <div class="col">
                <img src="{{ asset('storage/'.$p) }}" alt="" width="200px">
            </div>
            @endforeach
        @endif
    </div>
    @endforeach
</div>
@endsection