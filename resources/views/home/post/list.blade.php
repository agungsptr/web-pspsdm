@extends('layouts.home')

@section('header')
{{-- <img src="https://via.placeholder.com/1500x500?text=Header" class="img-fluid mb-5" alt="Responsive image"> --}}
{{-- content --}}
<div class="container mt-5">
    <h5 class="font-body font-justify"><span style="color:grey">
            <span class="font-body-title" style="font-size: 18pt;">
                <strong>"{{$category->category}}"</strong>
            </span>
    </h5>
    <br>
    {{-- disini nama category --}}

    @if ($posts->count() > 0)
    <div class="list-group">
        @foreach ($posts as $post)
        <a href="{{route('home.detail-post', ['post_id' => $post->id])}}"
            class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row mb-3 ">
                <div class="col-lg-10">
                    <div class="d-flex w-100 justify-content-between mb-3">
                        <h4 style="color: black;"><strong>{{$post->title}}</strong></h4>
                    </div>
                    <p class="text-justify ellipsis2">{!!strip_tags($post->content)!!}.</p>
                </div>
                <div class="col-lg-2">
                    @if($post->photos()->count() > 0)
                    <img src="{{ asset('storage/'.$post->photos()[0]->photo) }}" width="150" height="110">
                    @endif
                </div>
            </div>
            <span class="mr-4" style="color: #039564; font-weight: bold;">Author : {{$post->user()}}</span>
            <i class="far fa-clock mr-2"></i>
            <small>{{$post->date()}}</small>
        </a>
        @endforeach

        <div class="row justify-content-center mt-3">
            {{ $posts->links() }}
        </div>
    </div>
    @else
    <h3 style="font-size: 14pt; color: grey">No data</h3>
    @endif

    
</div>

</div>
<p>&nbsp;</p>
@endsection