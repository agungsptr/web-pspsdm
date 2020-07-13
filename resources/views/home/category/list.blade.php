@extends('layouts.home')

@section('header')
{{-- slider --}}
<img src="{{ asset('images/header.png') }}" class="img-fluid" alt="Responsive image">
<p>&nbsp;</p>
<div class="container">
    <h5 class="font-body font-justify"><span style="color:grey">
            <span class="font-body-title" style="font-size: 18pt;">
                <strong>Daftar Kategori</strong>
            </span>
    </h5>
    <br>
    {{-- disini nama category --}}

    @if ($categories->count() > 0)
        @foreach ($categories as $category)
        <a href="{{route('home.list-category-post', ['category_id'=>$category->id])}}" style="text-decoration: none">
            <div class="card mb-2 shadow">
                <h5 class="card-body mt-2">
                    {{$category->category}}
                </h5>
            </div>
        </a>
        @endforeach
    @else
        <h3 style="font-size: 14pt; color: grey">No data</h3>
    @endif
</div>

</div>
<p>&nbsp;</p>
@endsection