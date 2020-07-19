@extends('layouts.admin')

@section('title')
Manage Gallery
@endsection

@section('title-card')
Tambah Foto
@endsection

@section('menu-gallery')
active
@endsection

@section('menu-gallery-tambah')
active
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <form action="{{route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Judul</label>
                <input name="title" type="text" class=" form-control {{$errors->first('title') ? 'is-invalid':''}}"
                    value="{{old('title')}}" maxlength="190" minlength="3" required>
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">File Foto</label>
                <input type="file" name="photo" class="form-control" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="description" type="text"
                    class="form-control {{$errors->first('description') ? 'is-invalid':''}}"
                    value="{{old('description')}}" required cols="30" rows="7">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-md float-right">Simpan</button>
        </form>
    </div>
</div>
@endsection