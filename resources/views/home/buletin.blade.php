@extends('layouts.home')

@section('header')
<img src="https://via.placeholder.com/1500x500?text=Header" class="img-fluid mb-5" alt="Responsive image">
{{-- content --}}
{{-- <div class="container mb-5"> --}}
    <h4 class="font-weight-bold text-center">Bulettin Title</h4>
    <div id="carouselExampleControls" class="carousel slide mb-3 p-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="https://via.placeholder.com/150x250/000000/FFFFFF/?text=IPaddress.net"
                            alt="Card image cap">
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://via.placeholder.com/150x250/000000/FFFFFF/?text=IPaddress.net"
                            alt="Card image cap">
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://via.placeholder.com/150x250/000000/FFFFFF/?text=IPaddress.net"
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
    <nav aria-label="Page navigation example" class="justify-content-center">
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
{{-- </div> --}}
@endsection