@extends('layouts.home')
@section('publikasi-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/hutan.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
    <strong>Buletin</strong></h5><br>
<div class="garis"></div><br>
<div class="container">
    <ul class="list-unstyled">
        <a href="" download>
            <li class="media">
                <div class="media-body">
                    <i class="fas fa-file-pdf fa-2x mr-3"></i>
                    <span class="mt-0 mb-1 text-black" style="font-size: 14pt">Document name</span>
                </div>
            </li>
        </a>
    </ul>
</div>
<p>&nbsp;</p>
@endsection