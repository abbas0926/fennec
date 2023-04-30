<!-- Alternative 1 Heading -->
<header class="header alter1-header section text-contrast" id="home">
    <div class="shapes-container">

        @foreach ($shapes as $shape)
        <div class="shape shape-animated" data-aos="{{ $shape["aos"] }}" data-aos-duration="{{ $shape["duration"] }}" data-aos-delay="{{ $shape["delay"] }}"></div>
        @endforeach
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="rounded-pill shadow-box bg-contrast text-dark bold py-2 px-4">
                    <i class="far fa-lightbulb text-primary mr-2"></i>
                    <span class="text-primary">Awesome</span> Landing Page
                </span>
                <h1 class="text-contrast display-4 display-md-3"><span class="bold">{{ config("app.name") }}</span></h1>
                <p class="lead bold">Premium Startup & App Landing Page</p>

                <p class="lead">Besides its beautiful design. {{ config("app.name") }} is an incredibly rich core framework for you to showcase your App.</p>

                <nav class="nav my-5">
                    <a href="#!" class="btn btn-rounded btn-alternate mr-2 mr-md-5">Buy now <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                    <a href="#demos" class="btn btn-rounded btn-contrast scrollto">Explore demos</a>
                </nav>
            </div>

            <div class="col-md-6">
                <div class="iphone front mx-auto">
                    <div class="screen shadow-box">
                        <img src="{{ asset("img/screens/app/9.png") }}" alt="...">
                    </div>
                    <div class="notch"></div>
                </div>
            </div>
        </div>
    </div>
</header>
