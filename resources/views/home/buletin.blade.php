@extends('layouts.home')
@section('publikasi-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid mb-5" alt="Responsive image">

<h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
    <strong>Buletin</strong></h5>
<div class="garis mb-5"></div>
<div class="container">
    <ul class="list-unstyled">
        <div class="row">
            @foreach ($files as $file)
            {{-- <a target="_blank" href="{{ asset('storage/'.$file->document) }}">
            <li class="media">
                <div class="media-body">
                    <i class="fas fa-file-pdf fa-2x mr-3" style="color: red"></i>
                    <span class="mt-0 mb-1 text-black" style="font-size: 14pt">{{$file->title}}</span>
                </div>
            </li>
            </a> --}}
            <div class="card" style="width: 12rem;">
                <img class="card-img-top" src="{{ asset('storage/'.$file->cover_doc) }}" alt="cover" height="150px">
                <div class="card-body">
                    <h5 class="card-title">{{$file->title}}</h5>
                </div>
                <div class="card-footer">
                    <a href="{{ asset('storage/'.$file->document) }}" class="btn btn-primary">Download</a>
                </div>
            </div>
            @endforeach
        </div>
    </ul>

    <div class="row justify-content-center">
        {{ $files->links() }}
    </div>
</div>
<p>&nbsp;</p>
@endsection