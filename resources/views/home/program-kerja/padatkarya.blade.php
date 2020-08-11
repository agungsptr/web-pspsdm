@extends('layouts.home')

@section('header')
<img src="https://via.placeholder.com/1500x500?text=Header" class="img-fluid mb-5" alt="Responsive image">
{{-- content --}}
<h1 class="mb-3 text-center" style="font-weight: bold">Program Padat Karya</h1>
<div class="garis mb-5"></div>
<div id="carouselExampleControls" class="carousel slide bg-green mb-3 p-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                        alt="Card image cap">
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                        alt="Card image cap">
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                        alt="Card image cap">
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                        alt="Card image cap">
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                        alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
    {{-- previus and next --}}
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- content --}}
<div class="container" style="font-family: 'Montserrat', sans-serif;">
    <div class="p text-justify mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, nostrum.
        Possimus
        quod quae,
        earum et animi nulla, pariatur repellendus debitis error saepe non numquam quidem repudiandae modi quaerat,
        deleniti quisquam?<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem pariatur iusto
            dolorem iste, ex reprehenderit officia quod recusandae. Ullam dolorem quasi nulla necessitatibus velit odit
            deleniti vero eius enim ipsa?<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolore
                placeat mollitia excepturi voluptatum, est officiis quos veritatis ullam voluptates, quibusdam ipsa
                consequuntur eveniet ea sunt veniam reiciendis labore totam?</p>
            deleniti vero eius enim ipsa?<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolore
                placeat mollitia excepturi voluptatum, est officiis quos veritatis ullam voluptates, quibusdam ipsa
                consequuntur eveniet ea sunt veniam reiciendis labore totam?</p>
        </p>
    </div>

    <div class="card mb-3 shadow">
        <h6 class="mb-3 mt-3 ml-2 card-title" style="font-weight: bold">Program Padat Karya</h6>
        <p class="card-text ml-3">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        <div id="carouselExampleControls" class="card-body carousel slide bg-transparent" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top"
                                src="https://via.placeholder.com/125/000000/FFFFFF/?text=IPaddress.net"
                                alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
            {{-- previus and next --}}
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
@endsection