@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="font-body font-justify"><span style="color:black">
            <span class="font-body-title" style="font-size: 18pt;">
                <strong>Daftar Kategori</strong>
            </span>
    </h5>
    <br>
    {{-- disini nama category --}}

    @foreach ($categories as $category)
    <a href="{{route('home.list-category-post', ['category_id'=>$category->id])}}" style="text-decoration: none">
        <div class="card mb-2 shadow">
            <h5 class="card-body mt-2">
                {{$category->category}}
            </h5>
        </div>
    </a>
    @endforeach
</div>

</div>
<p>&nbsp;</p>
@endsection