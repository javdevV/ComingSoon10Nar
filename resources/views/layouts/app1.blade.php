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


<body >
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
{{--navbar navbar-expand-md navbar-light bg-white shadow-sm--}}
    <div class="container-fluid">
    <img src="{{asset('images/logo.jpg')}}" width="55em" height="33em"  alt="Italian Trulli">
    <img src="{{asset('images/coming-soon.jpg')}}" alt="" style="width:200px;height: 30px;float: right!important;">
    </div>
</nav>

@yield('content')

</body>
</html>
