<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <title>@yield('title', config('app.name')) - Documentation File</title>

    <meta name="description" content="">
    <meta name="author" content="@yield('meta_author', '5studios.net Team')">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ mix('css/docs.css') }}">
</head>

<body>

@include('docs.header')

<main class="main-wrapper">
    <div class="container">
        <div id="doc-header" class="py-4 mb-4 border-bottom">
            <h2 class="text-primary">Quick Start Guide</h2>
            <div class="text-muted small">
                <i class="far fa-clock"></i> Last updated: June 5th, 2020
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 order-md-last">
                <div class="content-inner">
                    @yield ('content');
                </div>
            </div>

            <div class="sidebar col-md-3 d-none d-md-flex">
                <div id="doc-nav">
                    <nav class="nav nav-menu flex-column sticky" >
                        @include('docs.nav')
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>

@include('docs.footer')

<!-- Main Javascript -->
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/docs.js') }}"></script>

</body>
</html>
