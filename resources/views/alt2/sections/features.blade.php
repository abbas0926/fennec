<!-- .Premium Features -->
<section class="section features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2 class="heading-line">Premium features</h2>
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nulla, voluptates. Architecto eum minima necessitatibus quo reiciendis! Aliquam culpa doloremque eaque esse illo, nemo nesciunt nobis quia sapiente tenetur veniam.</p>
        </div>

        <div class="row gap-y text-center text-md-left">
            @foreach ($elements as $element)
                <div class="col-md-4 py-4 rounded shadow-hover">
                    <i class="pe {{ $element["icon"] }} pe-3x mb-3 text-primary"></i>
                    <h5 class="bold">{{ $element["title"] }}</h5>
                    <p>{{ $element["description"] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
