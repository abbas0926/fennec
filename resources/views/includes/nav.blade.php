<!-- Main Navigation -->
@php ($useOnlyDarkLogo = $useOnlyDarkLogo ?? false)

<nav class="navbar navbar-expand-md main-nav navigation fixed-top sidebar-left">
    <div class="container">
        <button class="navbar-toggler" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="#main" class="navbar-brand">
            @if ($useOnlyDarkLogo)
                <img src="{{ asset('/img/logo.png') }}" alt="Laapp" class="logo logo-sticky">
            @else
                <img src="{{ asset('/img/logo.png') }}" alt="Laapp" class="logo logo-sticky d-block d-md-none">
                <img src="{{ asset('/img/logo-light.png') }}" alt="Laapp" class="logo d-none d-md-block">
            @endif
        </a>

        <div class="collapse navbar-collapse" id="main-navbar">
            <div class="sidebar-brand">
                <a href="index.html">
                    <img src="{{ asset('/img/logo.png') }}" alt="Laapp Template" class="logo">
                </a>
            </div>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link scrollto" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#product">Product</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#trial">Trial</a></li>
            </ul>
        </div>
    </div>
</nav>
