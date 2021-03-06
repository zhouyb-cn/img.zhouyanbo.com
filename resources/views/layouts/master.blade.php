<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Yanbo') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/libs.css">
    <link rel="stylesheet" type="text/css" href="/css/dropzone.min.css">
    <style type="text/css">
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
            color: #fff;
            background-color: #428bca;
            border-radius: 2px;
        }
        .navbar-default .navbar-nav > li > a {
            color: #428bca;
        }
        .navbar-default .navbar-nav > li > a:hover {
            text-decoration: none;
            background-color: #eee;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Yanbo') }} -->
                        File Hash Storage
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        @if($page == 'index')
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        @else
                            <li><a href="{{ url('/') }}">Home</a></li>
                        @endif
                        @if($page == 'about')
                            <li class="active"><a href="{{ url('/about') }}">About</a></li>
                        @else
                            <li><a href="{{ url('/about') }}">About</a></li>
                        @endif
                        @if($page == 'contact')
                            <li class="active"><a href="{{ url('/contact') }}">Contact</a></li>
                        @else
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="/js/libs.js"></script>
    @include('flash')
    <script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>

