@extends('layouts.admin')

@section('title')
Manajemen Post
@endsection

@section('title-card')
Edit Post
@endsection

@section('menu-post')
active
@endsection

@section('menu-post-daftar')
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

        <form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
                <label for="">Judul</label>
                <input name="title" type="text" class=" form-control {{$errors->first('title') ? 'is-invalid':''}}"
                    value="{{$post->title}}" maxlength="190" minlength="3" required>
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Sub Judul</label>
                <input name="subtitle" type="text"
                    class=" form-control {{$errors->first('subtitle') ? 'is-invalid':''}}" value="{{$post->subtitle}}"
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
                    name="date" value="{{str_replace(" ","T",$post->date)}}">
                @error('date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <select name="category_id" id="" required
                    class="form-control {{$errors->first('category_id') ? 'is-invalid':''}}"">
                    @if ($categories->isNotEmpty())
                        <option value="">Pilih kategori</option>
                        @foreach ($categories as $category)
                            <option {{ $category->id == $post->category_id ? 'selected':''}} value="
                    {{$category->id}}">{{$category->category}}</option>
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
            <div class="row">
                @for ($i = 0; $i < 3; $i++) <div class="col-4">
                    <div class="form-group">
                        <label for="">Foto {{$i+1}}</label>
                        <input type="file" name="photo_{{$i+1}}" class="form-control mb-2" accept="image/*">
                        @if (isset($post->photos()[$i]->photo))
                        <a href="{{ asset('storage/'.$post->photos()[$i]->photo) }}">
                            <img src="{{ asset('storage/'.$post->photos()[$i]->photo) }}" alt="photo_{{$i+1}}"
                                width="200px">
                        </a>
                        <input type="hidden" name="photo_id_{{$i+1}}" value="{{$post->photos()[$i]->id}}">
                        @endif
                    </div>
            </div>
            @endfor
    </div>
    <div class="form-group">
        <label for="">Dokumen Pdf</label><br>
        @if ($post->document)
        <a href="{{ asset('storage/' . $post->document) }}"><strong>File dokumen</strong></a>
        @endif
        <input type="file" class="form-control" name="document" accept="application/pdf">
    </div>
    <div class="form-group">
        <label for="">Cover Dokumen</label><br>
        @if ($post->cover_doc)
        <a href="{{ asset('storage/' . $post->cover_doc) }}">
            <img src="{{ asset('storage/' . $post->cover_doc) }}" alt="cover_img" width="200px">
        </a>
        @endif
        <input type="file" class="form-control" name="cover_doc" accept="image/*">
    </div>
    <div class="form-group">
        <label for="">Konten</label>
        <textarea class="ckeditor {{$errors->first('content') ? 'is-invalid':''}}" id="ckedtor"
            name="content">{{$content}}</textarea>
        {{-- <textarea name="content" id="" cols="30" rows="15" class="form-control {{$errors->first('content') ? 'is-invalid':''}}"">{{$content}}</textarea>
        --}}
        @error('content')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-md float-right">Simpan</button>
    <a href="{{ route('post.index') }}" class="btn btn-secondary btn-md float-right mr-2">Kembali</a>
    </form>
</div>
</div>
@endsection