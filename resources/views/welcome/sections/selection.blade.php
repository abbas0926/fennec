<section class="section" id="demos">
    <div class="container-fluid bring-to-front">
        <div class="section-heading text-center">
            <h2 class="heading-line">Pick a Demo</h2>
            <p class="lead text-muted">{{ config('app.name') }} comes with multiple demos, choose the one you want to give a try.</p>
        </div>

        <div class="row gap-y">
            @for ($i = 1; $i <= 3; $i++)
                <div class="col-sm-6 col-md-4">
                    @include ("welcome.sections.demo", [ "index" => $i ])
                </div>
            @endfor
        </div>
    </div>
</section>
