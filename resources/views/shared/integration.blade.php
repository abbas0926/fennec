<!-- Intégrations -->
<section class="section integration-bubbles">
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-md-6">
                <div class="bubbles-wrapper">
                    <div class="animations m-0">
                        @foreach ($bubbles as $bubble)
                            @php
                                $icon = $bubble["icon"];
                                $index = $loop->index + 1;
                            @endphp
                            <div class="bubble bg-contrast rounded-circle p-2 shadow icon icon-{{ $index % 4 == 0 ? "xl" : ($index % 3 == 0 ? "lg" : ($index % 2 ? "md" : "xxl")) }}">
                                <img src="{{ asset("img/demo/header/$icon.svg") }}" alt="" class="img-responsive" >
                                <span class="badge badge-contrast shadow-box">{{ $bubble["name"] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-heading">
                    <p class="text-alternate text-uppercase bold">Développement avancé</p>
                    <h2 class="heading-line">Intégrations pour améliorer votre expérience</h2>
                    <p class="lead text-muted">
                        Vous vous demandez pourquoi choisir Fennec Tech? Nous comptons sur des centaines d'amis contribuant chaque jour pour rendre Fennec Tech un outil merveilleux
                    </p>
                </div>
    
                <a href="#!" class="more-link">Explorer toutes les intégrations</a>
            </div>
        </div>
    </div>
</section>