@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h5><strong>Content name</strong></h5>
            <small class="text-right">Post date</small>
            <p class="font-body text-justify"><span style="color: #000000;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequuntur maiores et ratione alias
                    dicta optio, facilis atque, iste doloremque nostrum ab consectetur molestias. Numquam eligendi dicta
                    nisi nostrum laborum.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia ea ducimus, modi voluptatem dicta
                    eos et debitis. Quibusdam incidunt itaque error qui sed eveniet amet, explicabo saepe, reiciendis
                    recusandae perspiciatis?
                </span></p>
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('images/img_profile.jpeg') }}" class="rounded mx-auto d-block" alt="..." width="350px"
                height="150px">
        </div>
    </div>
</div>
<p>&nbsp;</p>
@endsection