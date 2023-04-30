<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name').config('app.desc'))</title>
    <meta name="description" content="">
    <meta name="author" content="@yield('meta_author', '5studios.net Team')">
    @yield('meta')

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset("apple-touch-icon.png") }}">
    <link rel="icon" href="{{ asset ("img/favicon.ico")}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,600,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/laapp.css') }}">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('includes.nav')

<main>
    @yield ('content');
</main>

@yield('footer')

<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
