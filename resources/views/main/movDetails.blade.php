<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/Semantic/semantic.min.css')}}">
    <link rel="stylesheet" href="{{asset('/CSS-Pos/main.movdet.css')}}">
    <script src="{{asset('/Semantic/semantic.min.js')}}"></script>
    <title>Details</title>
</head>

<body>
    <!-- Sidebar Menu -->
    <div class="ui vertical inverted sidebar menu">
        <a class="active item">Home</a>
        <a class="item">Movie</a>
        <a class="item">Blog</a>
        <a class="item">About</a>
        <a class="item">Logout</a>
    </div>


    <!-- Page Contents -->
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="active item">Home</a>
                <a class="item">Movie</a>
                <a class="item" href="{{ url('/admin') }}">Blog</a>
                <a class="item" href="{{ url('/about') }}">About</a>
                <div class="right item">
                    <a class="ui inverted button" href="{{ url('/login') }}">Logout</a>
                </div>
            </div>
        </div>

        <div class="ui container">
            <div class="ui stackable two column grid">
                <div class="four wide column">
                    <img src="{{$movDetails->picUrl}}" id="pic">
                </div>
                <div class="ten wide column">

                    <div class="Name" id="name">Name : {{$movDetails->name}}</div><br>
                    <div class="Director" id="dir">Director : {{$movDetails->director}}</div><br>
                    <div class="Production" id="pro">Production : {{$movDetails->production}}</div><br>
                    <div class="Genre" id="gen">Genre : {{$movDetails->genre}}</div><br>
                    <div class="Duration" id="dur">Duration : {{$movDetails->duration}}</div><br><br><br>
                    <a href="{{route('seat.show', $movDetails->name)}}" id="buy">
                        <div class="ui animated button" tabindex="0">
                            <div class="visible content">Buy Now</div>
                            <div class="hidden content">
                                <i class="right arrow icon"></i>
                            </div>
                        </div>
                    </a>

                </div>
            </div>


            <div class="Synopsis" id="syn">Synopsis : {{$movDetails->synopsis}}</div>

        </div>
    </div>
</body>

</html>
