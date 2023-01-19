@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/admin/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Judul</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        {{-- <div class="mb-3">
            <label for="formFile" class="form-label">Picture</label>
            <input class="form-control" type="file" id="formFile" name="picUrl">
        </div> --}}
        <div class="mb-3">
            <label for="gambar" class="form-label">Picture</label>
            <input type="text" class="form-control" id="gambar" name="picUrl">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
        </div>
        <div class="mb-3">
            <label for="direktor" class="form-label">Director</label>
            <input type="text" class="form-control" id="direktor" name="director">
        </div>
        <div class="mb-3">
            <label for="production" class="form-label">Production</label>
            <input type="text" class="form-control" id="production" name="production">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea type="text" class="form-control" id="synopsis" name="synopsis" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Create</button>
    </form>
</div>
@endsection