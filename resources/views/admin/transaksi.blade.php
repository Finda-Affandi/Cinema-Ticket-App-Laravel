@extends('admin.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Transaksi</h1>
</div>

@if(session()->has('success'))
<div class="alert a;ert-success">
    {{session('success')}}
</div>
@endif

<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Movies</th>
                <th scope="col">NO Order</th>
                <th scope="col">Time</th>
                <th scope="col">seat</th>
                <th scope="col">bill</th>
                <th scope="col">time Stamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaction as $tra)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $tra->movName }}</td>
                <td>{{ $tra->orderNo }}</td>
                <td>{{ $tra->time }}</td>
                <td>{{ $tra->seatNo }}</td>
                <td>{{ $tra->bill }}</td>
                <td>{{ $tra->timeStamp }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection