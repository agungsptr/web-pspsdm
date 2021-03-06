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
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Kategori</label>
                        <select name="category_id" id="" required class="form-control"
                            onchange="changeAction(this.value)">
                            @if ($categories->isNotEmpty())
                            <option value="">Pilih kategori</option>
                            @foreach ($categories as $category)
                            <option {{old('category_id') == $category->id ? 'selected':''}} value="{{$category->id}}">
                                {{$category->category}}</option>
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
                </div>
            </div>
            <div class="form-group">
                <label for="">Judul</label>
                <input id="title" name="title" type="text"
                    class=" form-control {{$errors->first('title') ? 'is-invalid':''}}" value="{{old('title')}}"
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
                    class=" form-control {{$errors->first('subtitle') ? 'is-invalid':''}}" value="{{old('subtitle')}}"
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
                            value="{{old('date')}}">
                        @error('date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="">Foto Header</label>
                    <div class="row">
                        <div class="col-sm-4">
                            Slide 1
                            <input id="ph1" type="file" name="photo_1" class="form-control" accept="image/*">
                        </div>
                        <div class="col-sm-4">
                            Slide 2
                            <input id="ph2" type="file" name="photo_2" class="form-control" accept="image/*">
                        </div>
                        <div class="col-sm-4">
                            Slide 3
                            <input id="ph3" type="file" name="photo_3" class="form-control" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input id="photos" type="file" name="photos[]" multiple="multiple" class="form-control"
                    accept="image/*">
            </div>
            <div class="">
                <div class="form-group">
                    <label for="">Dokumen</label>
                    <div class="row">
                        <div class="col-sm-6">
                            File Pdf
                            <input id="file" type="file" class="form-control" name="document" accept="application/pdf">
                        </div>
                        <div class="col-sm-6">
                            Cover Dokumen
                            <input id="file_cover" type="file" class="form-control" name="cover_doc" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                <textarea class="ckeditor form-control {{$errors->first('date') ? 'is-invalid':''}}" id="ckedtor"
                    name="content" required></textarea>
                @error('content')
                <div class="small mt-1" style="color: red">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-md float-right">Simpan</button>
        </form>
    </div>
</div>
@endsection