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
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Kategori</label>
                        <input type="hidden" name="category_id" value="{{$post->category_id}}">
                        <input disabled name="" type="text" required
                            class="form-control {{$errors->first('category_id') ? 'is-invalid':''}}"
                            value="{{$post->category()}}">
                        @error('category_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Judul</label>
                <input id="title" name="title" type="text"
                    class=" form-control {{$errors->first('title') ? 'is-invalid':''}}" value="{{$post->title}}"
                    maxlength="190" minlength="3" required>
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Sub Judul</label>
                <input id="subtitle" name="subtitle" type="text"
                    class=" form-control {{$errors->first('subtitle') ? 'is-invalid':''}}" value="{{$post->subtitle}}"
                    maxlength="190" minlength="3">
                @error('subtitle')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4">
                        <label id="date" for="">Tanggal</label>
                        <input type="datetime-local" required
                            class="form-control {{$errors->first('date') ? 'is-invalid':''}}" name="date"
                            value="{{str_replace(" ","T",$post->date)}}">
                        @error('date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            @if (!($post->category_id == 101 || $post->category_id == 102))
            <div class="form-group">
                <label for="">Foto Header</label>
                <div class="row">
                    @for ($i = 0; $i < 3; $i++) <div class="col-sm-4">
                        Slide {{$i+1}}
                        <input type="file" id="ph{{$i+1}}" name="photo_{{$i+1}}" class="form-control mb-2"
                            accept="image/*">
                        @if (isset($post->photos()[$i]->photo))
                        <a href="{{ asset('storage/'.$post->photos()[$i]->photo) }}">
                            <img src="{{ asset('storage/'.$post->photos()[$i]->photo) }}" alt="photo_{{$i+1}}"
                                width="200px">
                        </a>
                        <input type="hidden" name="photo_id_{{$i+1}}" value="{{$post->photos()[$i]->id}}">
                        @endif
                </div>
                @endfor
            </div>
    </div>
    @endif
    
    @if ($post->category_id == 101 || $post->category_id == 102)
    <div class="form-group">
        <label for="">Foto</label>
        <input id="photos" type="file" name="photos[]" multiple="multiple" class="form-control" accept="image/*">
    </div>
    @endif

    @if (!($post->category_id == 101 || $post->category_id == 102))
    <div class="form-group">
        <label for="">Dokumen</label>
        <div class="row">
            <div class="col-sm-6">
                File Pdf
                @if ($post->document)
                <a href="{{ asset('storage/' . $post->document) }}"><strong>File dokumen</strong></a>
                @endif
                <input type="file" class="form-control" name="document" accept="application/pdf">
            </div>
            <div class="col-sm-6">
                Cover Dokumen
                <input type="file" class="form-control mb-2" name="cover_doc" accept="image/*">
                @if ($post->cover_doc)
                <a href="{{ asset('storage/' . $post->cover_doc) }}">
                    <img src="{{ asset('storage/' . $post->cover_doc) }}" alt="cover_img" width="200px">
                </a>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">Konten</label>
        <textarea class="ckeditor {{$errors->first('content') ? 'is-invalid':''}}" id="ckedtor"
            name="content">{{$content}}</textarea>
        @error('content')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    @endif
    <button type="submit" class="btn btn-primary btn-md float-right">Simpan</button>
    <a href="{{ route('post.index') }}" class="btn btn-secondary btn-md float-right mr-2">Kembali</a>
    </form>
</div>
</div>
@endsection