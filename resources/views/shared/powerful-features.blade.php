<!-- Fonctionnalités puissantes -->
<section class="section alter3-features" id="features">
    <div class="shapes-container">
        <div class="shape shape-ring shape-ring-1">
            <div class="animation animation--rotating"></div>
        </div>
        <div class="shape shape-ring shape-ring-2">
            <div class="animation animation--rotating"></div>
        </div>
        <div class="shape shape-circle animation--clockwise">
            <div></div>
        </div>
        <div class="shape background-shape-main"></div>
    </div>
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 order-lg-last">
                <div class="section-heading">
                    <p class="px-2 text-alternate text-uppercase bold">Des fonctionnalités puissantes vous attendent</p>
                    <h2 class="heading-line">Une gamme de fonctionnalités complètes prêtes à vous aider</h2>
    
                    <p class="lead text-muted my-4 semi-bold">Laboris nisi ut aliquip ex ea commodo consequat.</p>
    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscig elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim adi minim veniam, quis nostrud exercitation </p>
    
                    <a href="#!" class="more-link btn btn-primary text-contrast bold">En savoir plus</a>
                </div>
            </div>
    
            <div class="col-lg-7 pr-lg-6">
                <div class="row">
                    <div class="col-lg-6 rotated-cards">
                        @foreach($cards as $card)
                            @if ($loop->index % 2 == 0)
                                @include ("shared.card", [ "card" => $card ])
                            @endif
                        @endforeach
                    </div>
    
                    <div class="col-lg-6 rotated-cards">
                        @foreach($cards as $card)
                            @if ($loop->index % 2 == 1)
                                @include ("shared.card", [ "card" => $card ])
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>