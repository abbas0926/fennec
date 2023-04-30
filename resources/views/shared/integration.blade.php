<!-- Integrations -->
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
                    <p class="text-alternate text-uppercase bold">Extending core</p>
                    <h2 class="heading-line">Integrations to make it better</h2>
                    <p class="lead text-muted">
                        Ever wonder about the wonder of Laap: We count on hundreds of friends contributing day by day to make Laapp a wonderful tool
                    </p>
                </div>

                <a href="#!" class="more-link">Explore all integration</a>
            </div>
        </div>
    </div>
</section>
