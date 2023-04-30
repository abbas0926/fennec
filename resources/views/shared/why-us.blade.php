<!-- Why Choose Us -->
<section class="section why-choose-us">
    <div class="shapes-container">
        <div class="pattern pattern-dots"></div>
    </div>

    <div class="container pb-8 bring-to-front">
        <div class="section-heading text-center">
            <h2 class="heading-line">Why you should choose {{ config("app.name") }}?</h2>
            <p class="text-muted lead mx-auto">{{ config("app.name") }} is designed to provide you with the last trends in web design. It'll help you to focus on your product, launch your website faster and reach more customer.</p>
        </div>

        <div class="row gap-y">
            <div class="col-md-6">
                <h4 class="bold text-alternate">It all start by choosing the right tools</h4>
                <p class="text-muted lead mb-5">When you're looking for a template you want it to stand-out. Laapp comes with many customizable components.</p>

                <ul class="list-unstyled why-icon-list">
                    @foreach ($features as $f)
                    <li class="list-item">
                        <div class="media align-items-center">
                            <div class="icon-shape mr-3">
                                <div class="shape shape-pipes"></div>
                                <i class="icon text-alternate fas fa-{{ $f["icon"] }} fa-3x"></i>
                            </div>

                            <div class="media-body">
                                <h5 class="bold">{{ $f["name"] }}</h5>
                                <p class="my-0">{{ $f["description"] }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <hr class="my-5">
                <div class="text-center text-md-left">
                    <a href="#!" class="btn btn-primary text-contrast">Know More</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="rotated-mockups device-twin">
                    <div class="browser absolute shadow-lg">
                        <img src="{{ asset("img/screens/tablet/1.png") }}" alt="...">
                    </div>

                    <div class="front iphone light">
                        <div class="screen">
                            <img src="{{ asset("img/screens/app/1.png") }}" alt="...">
                        </div>

                        <div class="notch"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>