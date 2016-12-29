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

    </head>
    <body>

        @yield('content')

        <script type="text/javascript" src="/js/libs.js"></script>
        @include('flash')

    </body>
</html>
