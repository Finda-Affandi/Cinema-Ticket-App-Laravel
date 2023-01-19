@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

@if(session()->has('success'))
<div class="alert a;ert-success">
    {{session('success')}}
</div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/admin/posts/create">
        <div class="mini ui blue vertical animated button" tabindex="0">
            <div class="hidden content">Create</div>
            <div class="visible content">
                <i class="plus icon"></i>
            </div>
        </div>
    </a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Genre</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->genre }}</td>
                <td>
                    <a href="/admin/posts/{{$data->id }}">
                        <div class="mini ui green vertical animated button" tabindex="0">
                            <div class="hidden content">View</div>
                            <div class="visible content">
                                <i class="eye icon"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('admin.edit', $data->id) }}">
                        <div class="mini ui yellow vertical animated button" tabindex="0">
                            <div class="hidden content">Edit</div>
                            <div class="visible content">
                                <i class="pencil alternate icon"></i>
                            </div>
                        </div>
                    </a>
                    <form action="/admin/posts/{{$data->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="border-0" onclick="return confirm('Are you sure?')">
                            <div class="mini ui red vertical animated button " tabindex="0">
                                <div class="hidden content">Delete</div>
                                <div class="visible content">
                                    <i class="trash icon"></i>
                                </div>
                            </div>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection