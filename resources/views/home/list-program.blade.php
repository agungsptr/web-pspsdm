@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="font-body font-justify"><span style="color: #000000;"><strong><span
                    class="font-body-title"><strong>Category Name</strong></span></strong></span></h5>
                    <br>
    {{-- disini nama category --}}
    <div class="card shadow rounded">
        <div class="card-body">
            <h5 class=".card-title">Judul Postingan</h5>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At hic asperiores tempora
                repellendus mollitia voluptas omnis odio fugiat, quidem dignissimos! Ullam, tempora. Non, facilis?
                Recusandae labore beatae cumque distinctio tempore.</p>
            <a href="#" class="card-link">Selengkapnya . .</a>
        </div>
    </div>
</div>
<p>&nbsp;</p>
@endsection