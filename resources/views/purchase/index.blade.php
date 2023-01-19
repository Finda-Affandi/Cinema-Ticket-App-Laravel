<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h2>Select Seat</h2>
        <br>
        {{$movName}}
        <form action="{{route('transaction.index')}}" method="post">
            <h3>Select Time</h3>
                @foreach ($availSeat as $data)
                    <input type="radio" name="time" id="" value="{{$data->time}}">{{$data->time}}
                @endforeach
            <br>
            <input type="submit" value="Enter">
        </form>
    </body>
</html>
