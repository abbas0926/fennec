<!-- Powered Design Blocks -->
<section class="section powered-design" id="product">
    <div class="shapes-container">
        <div class="shape shape-circle shape-circle-1">
            <div data-aos="fade-up-left" data-aos-duration="1500"></div>
        </div>
        <div class="shape shape-circle shape-circle-2">
            <div data-aos="fade-up-left" data-aos-duration="1200" data-aos-delay="500"></div>
        </div>
        <div class="shape shape-ring animation--rotating-diagonal">
            <div></div>
        </div>
        <div class="shape shape-triangle shape-animated">
            <div class="animation--rotating"></div>
        </div>

        <div class="shape pattern-dots-1"></div>
    </div>

    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-md-6">
                <div class="section-heading">
                    <h2 class="heading-line">Powered with multiple design blocks</h2>
                    <p class="lead text-muted">Unlock the power of Web Design. Laapp comes with multiple reusable code blocks you can use to build awesome web pages.</p>
                </div>

                <a href="#!" class="btn btn-outline-alternate more-link mt-0">Now is the time</a>
            </div>

            <div class="col-md-6">
                @for ($i = 1; $i <= 3; $i++)
                <div class="rounded tilt overflow-hidden shadow-box shadow-hover bg-contrast{{ $i > 1 ? " mt-5" : "" }}">
                    <figure>
                        <img src="{{ asset("/img/screens/app/pieces/$i.png") }}" class="img-responsive" alt="">
                    </figure>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>