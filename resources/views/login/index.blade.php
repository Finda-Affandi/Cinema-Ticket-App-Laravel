<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/Semantic/semantic.min.css')}}">
    <link rel="stylesheet" href="{{asset('/CSS-Pos/login.index.css')}}">
    <script src="{{asset('/Semantic/semantic.min.js')}}"></script>
    <title>Login Page</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "arial", heletica, sans-serif;
            font-size: 12px;
            background: #2980b9 url('https://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
            -webkit-animation: 10s linear 0s normal none infinite animate;
            -moz-animation: 10s linear 0s normal none infinite animate;
            -ms-animation: 10s linear 0s normal none infinite animate;
            -o-animation: 10s linear 0s normal none infinite animate;
            animation: 10s linear 0s normal none infinite animate;

        }

        @-webkit-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @-moz-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @-ms-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @-o-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }
    </style>

</head>

<body>

    <div class="ui container">
        <div class="col"></div>
        <div class="ui card" id="card">
            <h1 id="login">Login</h1>
            <form role="form" action="" method="post">
                @csrf
                <div class="ui input" id="user">
                    <input type="text" placeholder="Username" name="name">
                </div>
                <br>
                <div class="ui input" id="pass">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <br>
                <button class="ui blue button" type="submit" id="submit">Enter</button>
            </form>
            <h5 id="h5">Not Registerd? <a href="{{ url('/signup') }}">Sign Up</a></h5>
            
            <div class="col"></div>
        </div>
    </div>

</body>

</html>