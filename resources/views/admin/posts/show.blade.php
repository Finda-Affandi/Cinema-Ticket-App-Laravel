@extends('admin.main')

@section('container')

<div class="ui container" id="container">
    <div class="ui stackable two column grid">
        <div class="five wide column">
            <img src="{{$movDetails->picUrl}}" id="pic">
        </div>
        <div class="ten wide column">

            <div class="Name" id="name">Name : {{$movDetails->name}}</div><br>
            <div class="Director" id="dir">Director : {{$movDetails->director}}</div><br>
            <div class="Production" id="pro">Production : {{$movDetails->production}}</div><br>
            <div class="Genre" id="gen">Genre : {{$movDetails->genre}}</div><br>
            <div class="Duration" id="dur">Duration : {{$movDetails->duration}}</div><br><br><br>
            <a href="/admin/posts" class="btn btn-success">Back</a>
            <a href="/admin/{{$movDetails->id}}/edit" class="btn btn-warning">Edit</a>
            <form action="{{$movDetails->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    Delete
                </button>
            </form>

        </div>
    </div>


    <div class="Synopsis" id="syn">Synopsis : {{$movDetails->synopsis}}</div>

</div>
@endsection