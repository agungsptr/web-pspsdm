@extends('layouts.home')
@section('home-active')
active
@endsection
@section('header')
{{-- slider --}}
<img src="{{ asset('images/Header1.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="judul-section " style="font-family:OpenSans-Bold;font-size:25px; font-weight: normal;">
        <strong>Berita</strong></h5><br>
    <div class="garis"></div><br>

    {{-- caraousel --}}
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="200px"
                                height="200px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Post Name</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                                    molestiae,
                                    expedita commodi, odit neque dolore quod omnis nemo laboriosam asperiores ab
                                    recusandae
                                    praesentium doloribus voluptates quam maxime fugiat error optio!</p>
                                <a href="">
                                    <p class="card-text"><small class="text-muted">selengkapnya . . </small></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="200px"
                                height="200px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Post Name</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                                    molestiae,
                                    expedita commodi, odit neque dolore quod omnis nemo laboriosam asperiores ab
                                    recusandae
                                    praesentium doloribus voluptates quam maxime fugiat error optio!</p>
                                <a href="">
                                    <p class="card-text"><small class="text-muted">selengkapnya . . </small></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('images/hutan.png') }}" class="card-img" alt="..." width="200px"
                                height="200px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Post Name</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                                    molestiae,
                                    expedita commodi, odit neque dolore quod omnis nemo laboriosam asperiores ab
                                    recusandae
                                    praesentium doloribus voluptates quam maxime fugiat error optio!</p>
                                <a href="">
                                    <p class="card-text"><small class="text-muted">selengkapnya . . </small></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>&nbsp;</p>
</div>
@endsection