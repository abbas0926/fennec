<!-- Features -->
<section class="section mt-6n" id="features">
    <div class="container pt-0">
        <div class="bg-contrast shadow rounded p-5">
            <div class="row gap-y">
                @foreach ($features as $feature)
                <div class="col-md-4">
                    <div class="icon-box rounded gradient gradient-primary-light text-contrast shadow icon-xl">
                        <i class="icon m-0 pe pe-7s-{{ $feature["icon"] }} pe-3x"></i>
                    </div>
                    <h4 class="semi-bold mt-4 text-capitalize">{{ $feature["title"] }}</h4>

                    <hr class="w-25 bw-2 border-alternate mt-3 mb-4">
                    <p class="regular text-muted">{{ $feature["description"] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
