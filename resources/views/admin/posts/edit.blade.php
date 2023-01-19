@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/admin/{{$movies->id}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Judul</label>
            <input type="text" class="form-control" id="name" name="name" required autofocus value="{{old('name', $movies->name)}}">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Picture</label>
            <input type="text" class="form-control" id="gambar" name="picUrl" required value="{{$movies->picUrl}}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{$movies->genre}}">
        </div>
        <div class="mb-3">
            <label for="direktor" class="form-label">Director</label>
            <input type="text" class="form-control" id="direktor" name="director" value="{{$movies->director}}">
        </div>
        <div class="mb-3">
            <label for="production" class="form-label">Production</label>
            <input type="text" class="form-control" id="production" name="production" value="{{$movies->production}}">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" value="{{$movies->duration}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$movies->price}}">
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea type="text" class="form-control" id="synopsis" name="synopsis" cols="30" rows="10" value="{{$movies->synopsis}}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection