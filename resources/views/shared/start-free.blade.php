<!-- Start For Free -->
<section class="section start-free" id="trial">
    <div class="shapes-container">

        @foreach ($icons as $i)
        <i class="icon {{ $i["prefix"] }} {{ $i["prefix"] }}-{{ $i["icon"] }} {{ $i["prefix"] }}-3x"></i>
        @endforeach
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="section-heading text-center">
                    <i class="pe pe-7s-unlock fa-3x text-alternate"></i>
                    <h2 class="heading-line bold mt-4">Start your 15 days free trial now!</h2>
                    <p class="lead text-muted">By signing up you will get 15 days free trial. You won't be charged until the trial period ends, <span class="italic">don't let this offer pass in from of your eyes</span></p>
                </div>
            </div>
        </div>

        <div class="nav flex-column flex-md-row align-items-center justify-content-center">
            <a href="#!" class="btn btn-alternate btn-lg py-3 px-4 bold mr-0 mr-md-3 mb-3 mb-md-0">Sign up</a>
            <a href="mailto:support@5studios.net" class="btn btn-outline-dark btn-lg py-3 px-4 bold">Contact us</a>
        </div>
    </div>
</section>
