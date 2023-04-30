<!-- Commencez gratuitement -->
<section class="section start-free" id="trial">
    <div class="shapes-container">
        @foreach ($icons as $i)
        <i class="icon {{ $i["prefix"] }} {{ $i["prefix"] }}-{{ $i["icon"] }} {{ $i["prefix"] }}-3x"></i>
        @endforeach
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="section-heading text-center">
                    <i class="pe pe-7s-unlock fa-3x text-alternate"></i>
                    <h2 class="heading-line bold mt-4">Commencez votre essai gratuit de 15 jours maintenant !</h2>
                    <p class="lead text-muted">En vous inscrivant, vous bénéficierez d'un essai gratuit de 15 jours. Vous ne serez pas facturé tant que la période d'essai n'est pas terminée, <span class="italic">ne laissez pas cette offre vous échapper</span></p>
                </div>
            </div>
        </div>
    
        <div class="nav flex-column flex-md-row align-items-center justify-content-center">
            <a href="#!" class="btn btn-alternate btn-lg py-3 px-4 bold mr-0 mr-md-3 mb-3 mb-md-0">S'inscrire</a>
            <a href="mailto:support@fennec-tech.com" class="btn btn-outline-dark btn-lg py-3 px-4 bold">Nous contacter</a>
        </div>
    </div>
</section>