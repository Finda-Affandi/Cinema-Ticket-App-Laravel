<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{asset('/Semantic/semantic.min.css')}}">
    <link rel="stylesheet" href="{{asset('/CSS-Pos/main.about.css')}}">
    <script src="{{asset('/Semantic/semantic.min.js')}}"></script>


    <!-- Site Properties -->
    <title>About</title>


    <style type="text/css">
        .hidden.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 80px;
            padding: 1em 0em;
        }

        .masthead .logo.item img {
            margin-right: 1em;
        }

        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }

        .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }

        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }

        .ui.vertical.stripe {
            padding: 8em 0em;
        }

        .ui.vertical.stripe h3 {
            font-size: 2em;
        }

        .ui.vertical.stripe .button+h3,
        .ui.vertical.stripe p+h3 {
            margin-top: 3em;
        }

        .ui.vertical.stripe .floated.image {
            clear: both;
        }

        .ui.vertical.stripe p {
            font-size: 1.33em;
        }

        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }

        .quote.stripe.segment {
            padding: 0em;
        }

        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .footer.segment {
            padding: 5em 0em;
        }

        .secondary.pointing.menu .toc.item {
            display: none;
        }

        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }

            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
                display: none;
            }

            .secondary.pointing.menu .toc.item {
                display: block;
            }

            .masthead.segment {
                min-height: 350px;
            }

            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }

            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }
    </style>

    <script src="assets/library/jquery.min.js"></script>
    <script src="assets/JS/visibility.js"></script>
    <script src="assets/JS/sidebar.js"></script>
    <script src="assets/JS/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    });

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item');

            });
    </script>
</head>

<body>

    <!-- Following Menu -->
    <div class="ui large top fixed hidden menu">
        <div class="ui container">
            <a class="item">Home</a>
            <a class="item">Work</a>
            <a class="item">Company</a>
            <a class="active item">About</a>
            <div class="right menu">
                <div class="item">
                    <a class="ui primary button">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <div class="ui vertical inverted sidebar menu">
        <a class="item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="active item">About</a>
        <a class="item">Logout</a>
    </div>


    <!-- Page Contents -->
    <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="item" href="{{ url('/main') }}">Home</a>
                <a class="item">Movie</a>
                <a class="item">Blog</a>
                <a class="active item" href="{{ url('/about') }}">About</a>
                <div class="right item">
                    <a class="ui inverted button" href="{{ url('/login') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="ui container">
        <h1>About As</h1>
        <div class="uk-flex uk-flex-center uk-visible@m"><img src="https://go-tix.id/images/about-us-desktop.png" style="width: 1125px; height:552px" alt="About Us"></div>
    </div>

    <br><br>
    <hr>
    <br><br>


    <div class="ui container" id="card">
        <p class="title" id="p1">Discover tons of fun activities that you simply cannot miss!</p>
        <p class="description" id="p2">Select an event that suits your mood, have fun and create unforgettable experience with your loved ones now! Various features of GoTix make it more convenient and easier for you to buy tickets </p>

    </div>
    <br><br>

    <div class="ui inverted vertical footer segment">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="three wide column">
                    <a class="ui inverted header" href="/main">Home</a>
                    {{-- <h4 class="ui inverted header" href="{{ url('/about') }}">About</h4> --}}
                    <div class="ui inverted link list">
                        <a href="{{ url('/adminhome') }}" class="item">Sitemap</a>
                        <a href="#" class="item">Contact Us</a>
                        <a href="#" class="item">Religious Ceremonies</a>
                        <a href="#" class="item">Gazebo Plans</a>
                    </div>
                </div>
                <div class="three wide column">
                    <a class="ui inverted header" href="{{ url('/about') }}">About</a>
                    <div class="ui inverted link list">
                        <a href="#" class="item">Banana Pre-Order</a>
                        <a href="#" class="item">DNA FAQ</a>
                        <a href="#" class="item">How To Access</a>
                        <a href="#" class="item">Favorite X-Men</a>
                    </div>
                </div>
                <div class="seven wide column">
                    <h4 class="ui inverted header">Footer Header</h4>
                    <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>