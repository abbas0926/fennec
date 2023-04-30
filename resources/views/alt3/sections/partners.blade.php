<!-- Partners -->
<section class="section alter3-partners bg-contrast edge top-left">
    <div class="container bring-to-front pb-md-9">
        <div class="row">
            <div class="col-md-6">
                <div class="section-heading">
                    <i class="fas fa-handshake fa-3x accent mb-3"></i>

                    <h3 class="text-alternate heading-line">We've partnered with awesome folks</h3>

                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, atque eaque eius esse et harum inventore ipsam laboriosam modi nam necessitatibus nemo pariatur provident.
                    </p>
                </div>

                <ul class="nav">
                    @for ($icon = 1; $icon <= 6; $icon++)
                        <li class="nav-item mr-3 py-2 op-5"><img src="{{ asset("img/logos/$icon.png") }}" class="icon" alt=""> </li>
                    @endfor
                </ul>

                <a href="#!" class="more-link btn btn-outline-primary bold">Learn more</a>
            </div>
        </div>
    </div>
</section>
