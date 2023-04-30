
<!-- Tarification -->
<section class="section pricing-plans" id="pricing">
    <div class="shapes-container overflow-clear">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>

        <i class="icon pe pe-7s-cash pe-3x" data-aos="fade-down"></i>
        <i class="icon fas fa-dollar-sign fa-3x" data-aos="fade-up"></i>
        <i class="icon pe pe-7s-piggy pe-3x" data-aos="fade-up"></i>
        <i class="icon pe pe-7s-cart pe-3x" data-aos="fade-left"></i>
        <i class="icon far fa-credit-card fa-3x" data-aos="fade-down"></i>
        <i class="icon far fa-money-bill-alt fa-3x" data-aos="fade-up"></i>
    </div>
    
    <div class="container">
        <div class="section-heading text-center">
            <span class="rounded-pill shadow-box bold py-2 px-4">
                <i class="far fa-lightbulb text-primary mr-2"></i>
                <span class="text-primary">Économisez plus</span> avec ces plans incroyables
            </span>
            <h2 class="mt-3 heading-line">Tarification transparente</h2>
            <p class="lead text-muted">Nos forfaits comprennent tout ce dont vous avez besoin pour amener votre site de e-commerce Fennec Tech au niveau supérieur. <span class="highlight">Aucuns frais cachés.</span></p>
    
            <div id="pricing-basis-options" class="btn-group btn-group-toggle mt-5" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="pricing-basis" value="monthly" checked> Mensuel
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="pricing-basis" value="yearly"> Annuel
                </label>
            </div>
        </div>
    
        
        <div class="row no-gutters align-items-center pricing-plans-options">
            @foreach ($plans as $plan)
                @php ($isBestPlan = isset($plan["best"]) && $plan["best"])
                <div class="col-lg-4 pricing-plan plan-{{ $plan["name"] }} {{ isset($plan["class"]) ? $plan["class"] : "" }} {{ $isBestPlan ? "best-value" : "" }}">
                    <div class="p-5 {{ $isBestPlan ? "py-md-6" : "" }}">
                        <div class="text-center">
                            <h4 class="text-{{ $isBestPlan ? "primary" : "alternate" }} bold text-capitalize">{{ $plan["name"] }}</h4>
                            <p>{{ $plan["desc"] }}</p>
                            <div class="pricing-details">
                                <span class="pricing-value">
                                    <span class="odometer price" data-monthly="{{ $plan["price"]["monthly"] }}" data-yearly="{{ $plan["price"]["yearly"] }}">{{ $plan["price"]["monthly"] }}</span>
                                </span>
                            </div>
            
                            <a href="#!" class="more-link btn btn-{{ $isBestPlan ? "alternate" :"outline-alternate" }} mb-3">Je le veux</a>
                        </div>
            
                        <hr>
            
                        {{-- Affichage sur ordinateur --}}
                        <div class="d-none d-md-flex">
                            <ul class="list-group list-group-flush list-group-no-border">
                                @foreach ($plan['items'] as $item)
                                                
                                <li class="list-group-item">{{$item}}</li>
                                @endforeach
                            </ul>
                        </div>
            
                        {{-- Affichage sur mobile --}}
                        <div class="d-md-none">
                            <button type="button" class="more-link btn btn-link d-flex align-items-center mx-auto" data-toggle="modal" data-target="#basic-plan-modal-{{ $plan["name"] }}">
                                Voir les détails du plan
                            </button>
            
                            <div class="modal" id="basic-plan-modal-{{ $plan["name"] }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title bold text-capitalize">Plan {{ $plan["name"] }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body plan-features">
                                            <ul class="list-group list-group-flush text-center">
                                                @foreach ($plan['items'] as $item)
                                                
                                                <li class="list-group-item">{{$item}}</li>
                                                @endforeach
                                                
                                                    </ul>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    @endforeach
                                                    
                                                    </div>
                                                    <div class="container pt-0 border-bottom">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-8">
                                                                <div class="text-center text-md-left">
                                                                    <h4 class="bold accent">Pas sûr de ce qui est mieux pour vous ?</h4>
                                                                    <p class="mt-0">Vous pouvez commencer gratuitement, dès que vous serez tombé amoureux de notre application, vous pourrez décider quel plan convient le mieux à vos besoins. <span class="italic dotted">En choisissant l'un des plans payants, vous bénéficierez d'un essai gratuit de 30 jours.</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 text-center text-md-right">
                                                                <a href="#!" class="btn btn-primary btn-lg text-contrast p-4 more-link ml-md-auto">Essayez-le maintenant !</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>