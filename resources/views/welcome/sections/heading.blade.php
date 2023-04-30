<!-- Demo Header -->
<header class="header demo-header section gradient gradient-primary-light text-contrast">
    <div class="container pb-7">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('/img/logo-light.png') }}" class="logo d-block mb-5" alt="Laapp">

                <span class="rounded-pill shadow-box bg-contrast text-dark bold py-2 px-4">
                    <i class="far fa-lightbulb text-primary mr-2"></i>
                    <span class="text-primary">Awesome</span> Landing Page
                </span>
                <h1 class="text-contrast display-4 display-md-3"><span class="bold">{{ config('app.name') }}</span></h1>
                <p class="lead bold">Premium Startup & App Landing Page</p>

                <p class="lead">Besides its beautiful design. {{ config('app.name') }} is an incredibly rich core framework for you to showcase your App.</p>

                <nav class="nav my-5">
                    <a href="https://themeforest.net/item/laapp-app-landing-page/23562388" target="_blank" class="btn btn-rounded btn-alternate mr-2 mr-md-5">Buy now <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                    <a href="#demos" class="btn btn-rounded btn-contrast scrollto">Explore demos</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="bubbles-wrapper">
        <div class="animations m-0">
            @foreach ($bubbles as $bubble)
                @php ($icon = $bubble['icon'] )
                <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-{{ ($loop->index % 4 == 0) ? "xl" : (($loop->index % 3 == 0) ? "lg" : (($loop->index % 2 == 0) ? "md" : "xxl")) }}">
                    <img src="{{ asset("img/demo/header/$icon.svg") }}" alt="" class="img-responsive" >
                </div>
            @endforeach
        </div>
    </div>
</header>
