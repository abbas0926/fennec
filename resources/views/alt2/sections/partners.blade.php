<!-- Partners Slider -->
<section class="section">
    <div class="container py-5 border-bottom">
        <div class="swiper-container" data-sw-show-items="5" data-sw-space-between="30" data-sw-autoplay="2500" data-sw-loop="true">
            <div class="swiper-wrapper align-items-center">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="swiper-slide">
                        <img src="{{ asset("img/logos/$i.png") }}" class="img-responsive" alt="" style="max-height: 60px">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
