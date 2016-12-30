<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/libs.css">
        <link rel="stylesheet" type="text/css" href="/css/narrow.css">
        <link rel="stylesheet" type="text/css" href="/css/dropzone.min.css">
        <style type="text/css">
            .dropzone {
                border: 2px dashed #0087F7;
                border-radius: 5px;
                background: white;
            }
        </style>

    </head>
    <body>

    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right" role="tablist">
                @if($page == 'index')
                    <li role="presentation" class="active"><a href="/">Home</a></li>
                @else
                    <li role="presentation"><a href="/">Home</a></li>
                @endif
                @if($page == 'about')
                    <li role="presentation" class="active"><a href="/about">About</a></li>
                @else
                    <li role="presentation"><a href="/about">About</a></li>
                @endif
                @if($page == 'contact')
                    <li role="presentation" class="active"><a href="/contact">Contact</a></li>
                @else
                    <li role="presentation"><a href="/contact">Contact</a></li>
                @endif
            </ul>
            <h3 class="text-muted">File Hash Storage</h3>
        </div>
        @yield('content')
    </div>

        <script type="text/javascript" src="/js/libs.js"></script>
        @include('flash')
        <script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>


    </body>
</html>
