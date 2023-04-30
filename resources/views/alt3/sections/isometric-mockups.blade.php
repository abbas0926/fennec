<!-- Isometric Mockups -->
<section class="isometric-mockups">
    @foreach ($mockups as $mockup)
        @php ($img = $mockup["img"])
        <div class="{{ $mockup["class"] }}">
            <div class="screen">
                <img src="{{ asset("img/screens/$img") }}" alt="...">
            </div>
            <div class="{{ $mockup["button"] }}"></div>
        </div>
    @endforeach
</section>
