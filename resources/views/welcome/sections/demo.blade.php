<div class="card card-demo card--blog shadow-box border-0">
    <div class="card-body d-flex flex-column flex-lg-row align-items-center">
        <h4 class="card-title mb-3 mb-lg-0 text-capitalize">Alternative {{ $index }}</h4>

        <nav class="btn-group ml-lg-auto">
            <a href="alt-{{ $index }}" target="_blank" class="btn btn-alternate btn-rounded px-3 shadow-none">
                <i class="icon fas fa-desktop"></i>
                <span class="demo-link-text">Demo</span>
            </a>
        </nav>
    </div>

    <figure class="preview-overlay m-0">
        <div class="preview-pane">
            <div class="preview-page">
                <img class="card-img-bottom img-responsive" src="{{ asset("/img/demo/screen/$index.png") }}" alt="">
            </div>
        </div>
    </figure>
</div>
