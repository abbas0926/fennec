<section class="section alter3-partners bg-contrast edge top-left">
    <div class="container bring-to-front pb-md-9">
        <div class="row">
            <div class="col-md-6">
                <div class="section-heading">
                    <i class="fas fa-users fa-3x accent mb-3"></i>
                    <h3 class="text-alternate heading-line">Nos clients satisfaits</h3>

                    <p class="lead">
                        Nous sommes fiers de travailler avec des clients exceptionnels et de les aider à lancer leur site e-commerce. Découvrez quelques-uns de nos clients qui ont réussi grâce à notre solution clé en main.
                    </p>
                </div>
    
                <ul class="nav">
                    @for ($icon = 1; $icon <= 6; $icon++)
                        <li class="nav-item mr-3 py-2 op-5"><img src="{{ asset("img/logos/$icon.png") }}" class="icon" alt=""> </li>
                    @endfor
                </ul>
    
                <a href="#!" class="more-link btn btn-outline-primary bold">En savoir plus</a>
            </div>
        </div>
    </div>
</section>