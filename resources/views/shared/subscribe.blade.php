<!-- Stay Tunned -->
<section class="section stay-tunned">
    <div class="container bring-to-front">
        <div class="shadow rounded p-5 bg-contrast overflow-hidden">
            <div class="section-heading text-center">
                <h2 class="heading-line">Stay tunned</h2>
                <p class="lead text-alternate">By registering with us you will receive right in your inbox all new features and updates</p>
            </div>

            <div class="mx-auto position-relative form-wrapper">
                <form action="/register" class="form text-center" data-response-message-animation="slide-in-left" novalidate>
                    @csrf
                    <div class="form-group">
                        <input id="subscribe-email" type="email" name="email" class="form-control form-control-lg text-center" placeholder="Enter your email" required>
                    </div>

                    <button type="submit" class="btn btn-lg btn-alternate">Register</button>
                </form>

                <div class="response-message">
                    <div class="text-center">
                        <i class="fas fa-envelope fa-3x text-success"></i>
                        <p class="font-md m-0">Check your email</p>
                        <p class="response">Registration successfully.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
