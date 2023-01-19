<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/Semantic/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/CSS-Pos/main.index.css') }}">
    <script src="{{ asset('/Semantic/semantic.min.js') }}"></script>


    <!-- Site Properties -->
    <title>Homepage</title>


    <style type="text/css">
        .hidden.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 400px;
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

        .wrapper {
            width: 100%;
            display: flex;
            animation: slide 16s infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(0);
            }

            30% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(-100%);
            }

            55% {
                transform: translateX(-200%);
            }

            75% {
                transform: translateX(-200%);
            }

            80% {
                transform: translateX(-300%);
            }

            100% {
                transform: translateX(-300%);
            }
        }

        img {
            width: 100%;
            height: 700px;
        }
    </style>
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
            <a class="active item">Home</a>
            <a class="item">Movie</a>
            <a class="item">Blog</a>
            <a class="item">About</a>
            <div class="right menu">
                <div class="item">
                    <a class="ui primary button">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
                <a class="item" href="{{ url('/adminhome') }}">Blog</a>
                <a class="item" href="{{ url('/about') }}">About</a>
                <div class="right item">
                    <a class="ui inverted button">Logout</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="wrapper">
                <img src="https://images3.alphacoders.com/551/551456.jpg">
                <img src="https://www.themoviedb.org/t/p/w1000_and_h563_face/sOUbKrT7tY33nouezzYNCJJXIHK.jpg">
                <img
                    src="https://cdn06.pramborsfm.com/storage/app/media/Prambors/Editorial/Film%20Fall-20220816150214.jpg">
                <img
                    src="https://cdf.orami.co.id/unsafe/cdn-cas.orami.co.id/parenting/images/2_IDtd2V8.width-800.jpegquality-80.png">
            </div>
        </div>
    </div>

    <h1>Movie List</h1>
    <div class="ui container">
        <div class="ui labeled button" tabindex="0">
            <div class="ui button" id="pilih">
                <h3 style="color: white;">Locations</h3>
            </div>
            <a class="ui basic label">
                <div class="select-twenty">
                    <select class="custom-select" for="pilih">
                        <option value="77">AMBON</option>
                        <option value="79">BALIKPAPAN</option>
                        <option value="12">BANDUNG</option>
                        <option value="76">BANJARMASIN</option>
                        <option value="27">BATAM</option>
                        <option value="36">BEKASI</option>
                        <option value="81">BENGKULU</option>
                        <option value="26">BOGOR</option>
                        <option value="104">CIKARANG</option>
                        <option value="59">CILEGON</option>
                        <option value="61">CIREBON</option>
                        <option value="56">DENPASAR</option>
                        <option value="110">DEPOK</option>
                        <option value="106">DUMAI</option>
                        <option value="97">GARUT</option>
                        <option value="85">GORONTALO</option>
                        <option value="100">GRESIK</option>
                        <option value="3">JAKARTA</option>
                        <option value="47">JAMBI</option>
                        <option value="84">JAYAPURA</option>
                        <option value="102">JEMBER</option>
                        <option value="91">KARAWANG</option>
                        <option value="103">KEDIRI</option>
                        <option value="98">KISARAN</option>
                        <option value="94">KUPANG</option>
                        <option value="48">LAMPUNG</option>
                        <option value="54">MAKASSAR</option>
                        <option value="23">MALANG</option>
                        <option value="62">MANADO</option>
                        <option value="108">MANOKWARI</option>
                        <option value="89">MATARAM</option>
                        <option value="25">MEDAN</option>
                        <option value="90">PADANG</option>
                        <option value="80">PALANGKARAYA</option>
                        <option value="50">PALEMBANG</option>
                        <option value="86">PALU</option>
                        <option value="105">PANGKAL PINANG</option>
                        <option value="99">PEKALONGAN</option>
                        <option value="73">PEKANBARU</option>
                        <option value="69">PONTIANAK</option>
                        <option value="101">RANTAU PRAPAT</option>
                        <option value="109">ROKAN HILIR</option>
                        <option value="52">SAMARINDA</option>
                        <option value="20" selected="">SEMARANG</option>
                        <option value="95">SIDOARJO</option>
                        <option value="87">SINGKAWANG</option>
                        <option value="70">SOLO</option>
                        <option value="107">SORONG</option>
                        <option value="93">SUMEDANG</option>
                        <option value="55">SURABAYA</option>
                        <option value="35">TANGERANG</option>
                        <option value="92">TANJUNG PINANG</option>
                        <option value="82">TASIKMALAYA</option>
                        <option value="96">TERNATE</option>
                        <option value="75">YOGYAKARTA</option>
                    </select>
                </div>
            </a>
        </div>
        <br><br>

        <div class="ui four stackable cards">
            @foreach ($movies as $data)
                <a href="{{ route('movies.show', $data->id) }}">
                    <div class="ui link card" id="movCard">
                        <div class="image">
                            <img id="image" src="{{ $data->picUrl }}">
                        </div>
                        <div class="content">
                            <a class="header">{{ $data->name }}</a>
                            <div class="meta">
                                <span class="date">{{ $data->genre }}</span>
                            </div>
                            <div class="description">
                                {{ $data->director }}
                            </div>
                        </div>
                        <div class="extra content">
                            <a>
                                <i class="dollar sign icon"></i>
                                {{ $data->price }}
                            </a>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <br><br><br>

        <div class="uk-grid-small uk-grid uk-grid-stack" uk-grid="true">
            <div class="uk-width-1-1 uk-first-column">
                <div class="gtx-section-title">
                    <h1>Our Partners</h1>
                </div>
            </div>
            <div class="ui tiny images">
                <img class="ui image" style="width: 180px"
                    src="https://loket-gotix.s3.ap-southeast-1.amazonaws.com/production/events//1563788763-image.png">
                <img class="ui image" style="width: 180px"
                    src="https://loket-gotix.s3.ap-southeast-1.amazonaws.com/production/events/component/1574326242-image.png">
                <img class="ui image" style="width: 180px"
                    src="https://loket-gotix.s3.ap-southeast-1.amazonaws.com/production/events//1563788781-image.png">
                <img class="ui image" style="width: 180px"
                    src="https://loket-gotix.s3.ap-southeast-1.amazonaws.com/production/events//1563788791-image.png">
                <img class="ui image" style="width: 180px"
                    src="https://loket-gotix.s3.ap-southeast-1.amazonaws.com/production/events//1563788819-image.png">
                <img class="ui image" style="width: 180px"
                    src="https://loket-gotix.s3.ap-southeast-1.amazonaws.com/production/events//1563788802-image.png">
            </div>
        </div>
        <br><br><br><br><br><br>

        <div id="join-us" class="uk-container">
            <div class="uk-flex-middle uk-grid-collapse uk-background-contain uk-grid">
                <div class="uk-width-1-2 uk-first-column">
                    <div class="uk-padding">
                        <div class="join-us-title text-black">JOIN US!</div>
                        <p class="text-black">Register your events and be one of Nonton'o exciting events!</p><a
                            href="https://www.loket.com/?utm_source=Organic&amp;utm_medium=GO-TIX&amp;utm_campaign=website"
                            class="gtx-btn bg-fuchsia gtx-btn-regular gtx-btn-expand-at-small">REGISTER MY EVENT</a>
                    </div>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <div class="uk-width-1-2 uk-text-right"><img src="https://go-tix.id/images/join-us-right.png"
                        alt="Join Us" style="width: 588px; height: 392px"></div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>

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
