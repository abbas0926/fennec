<!-- Restez informé -->
<section class="section stay-tunned">
    <div class="container bring-to-front">
        <div class="shadow rounded p-5 bg-contrast overflow-hidden">
            <div class="section-heading text-center">
                <h2 class="heading-line">Restez informé</h2>
                <p class="lead text-alternate">En vous inscrivant avec nous, vous recevrez toutes les nouvelles fonctionnalités et mises à jour directement dans votre boîte de réception</p>
            </div>
            <div class="mx-auto position-relative form-wrapper">
                <form action="/register" class="form text-center" data-response-message-animation="slide-in-left" novalidate>
                    @csrf
                    <div class="form-group">
                        <input id="subscribe-email" type="email" name="email" class="form-control form-control-lg text-center" placeholder="Entrez votre adresse e-mail" required>
                    </div>
    
                    <button type="submit" class="btn btn-lg btn-alternate">S'inscrire</button>
                </form>
    
                <div class="response-message">
                    <div class="text-center">
                        <i class="fas fa-envelope fa-3x text-success"></i>
                        <p class="font-md m-0">Vérifiez votre e-mail</p>
                        <p class="response">Inscription réussie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>