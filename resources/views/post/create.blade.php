@extends('layouts.admin')

@section('title')
Manage User
@endsection

@section('title-card')
Tambah User
@endsection

@section('menu-post')
active
@endsection

@section('menu-post-tambah')
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

        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
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
                <label for="">Sub Judul</label>
                <input name="subtitle" type="text"
                    class=" form-control {{$errors->first('subtitle') ? 'is-invalid':''}}" value="{{old('subtitle')}}"
                    maxlength="190" minlength="3">
                @error('subtitle')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="datetime-local" required class="form-control {{$errors->first('date') ? 'is-invalid':''}}"
                    name="date">
                @error('date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <select name="category_id" id="" required class="form-control">
                    @if ($categories->isNotEmpty())
                    <option value="">Pilih kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                    @else
                    <option value="">Anda belum membuat kategori</option>
                    @endif
                </select>
                @error('category_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Foto 1</label>
                <input type="file" name="photo_1" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <label for="">Foto 2</label>
                <input type="file" name="photo_2" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <label for="">Foto 3</label>
                <input type="file" name="photo_3" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <label for="">Dokumen Pdf</label>
                <input type="file" class="form-control" name="document" accept="application/pdf">
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                <textarea name="content" id="" cols="30" rows="15" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-md float-right">Simpan</button>
        </form>
    </div>
</div>
@endsection