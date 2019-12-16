<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{!! asset('images/icon.png') !!}"/>
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

</head>


<body style="background-image: url({{asset('images/bg-comingsoon.png')}});
    background-size: cover;
    background-repeat: no-repeat, repeat;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    font-family: "Roboto", sans-serif;
font-size: 100%;
background-attachment: fixed;
text-align: center;">
<nav class="navbar navbar-light bg-light">
{{--navbar navbar-expand-md navbar-light bg-white shadow-sm--}}
    <img src="{{asset('images/icon.png')}}"   alt="Italian Trulli">
    <h1><bold style="
    font-weight: bold;
">Comming Soon</bold><br>Micro-services En Tunisie</h1>
</nav>

@yield('content')

</body>
</html>
