@section( 'title' ) {{ $title ?? __( 'Caregiver and Companionship Services for the Elderly - MF Homecare' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
    <script src="https://js.stripe.com/v3/"></script>
@stop

@section( 'content' )
    <div role="main" class="main">
        <section class="mf__banner" style="background-image: url( '{{ asset( 'website/assets/images/banners/' . 'banner-mf__' . Request::segment( 3 ) . '.jpg' ) }}' );">
            <section class="mf__banner__overlay">
                <h1>@lang( 'titles.registration_phase_1.Heading' )
                    <span class="mf__banner__sub_heading">@lang( 'titles.registration_phase_1.Sub_Heading' )</span>
                </h1>
            </section>
        </section>

        <section class="mf__section">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'titles.registration_phase_1.Become_Caregivers' )</h1>

                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Welcome! Our registration process is now open for Caregivers and Companions in the Greater Toronto and Vancouver Areas. Please fill in the form below to start the registration process with our system.</p>

                        <aside class="mb-3 mf__registration-phase-1__notes">
                            <h4 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Notes:</h4>

                            <ul>
                                <li><p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">We are currently accepting registrations for the Greater Toronto and Vancouver Areas</p></li>

                                <li><p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">As part of our initial launch, we are waiving the $25 Registration Fee for these areas</p></li>
                            </ul>
                        </aside>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">As a dedicated MF Homecare Caregiver or Companion, you can help families restore balance, order, and peace to their lives, and help their senior loved ones remain at home. Our Caregivers provide a variety of non-medical services, including companionship and help around the house.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'titles.registration_phase_1.Caregiver_Advantages' )</h3>

                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <section class="row">
                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Choice</h4>

                                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                                        <p class=" appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                            Get matched with the right client that needs your specific skillset. Pick your geographic radius and let the clients find you. Communicate with your client before the first visit to ensure that everything runs smoothly. It’s time to provide care, as easily and efficiently as you can.
                                        </p>
                                    </section>
                                </section>
                            </section>

                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Control</h4>

                                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                                        <p class=" appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                            We provide you with the tools and the technology to coordinate your jobs personally, directly, and conveniently, from client selection to payment. Create and work on your own schedule.
                                        </p>
                                    </section>
                                </section>
                            </section>
                        </section>

                        <section class="row">
                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Choice of Payment</h4>

                                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                                        <p class=" appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                            We believe a happy Caregiver gives clients the best possible care. That is why we let you set your preferred amount and method of pay. Remember that the amount you select could impact the amount of work you receive.

                                            Get paid directly into your bank account by direct deposit every two weeks. MF Homecare charges you a small 5% fee to set up and managing your appointment payments and regular deposits to your bank account. We do not take any government deductions off your pay. you are responsible for your own tax deductions and return.
                                        </p>
                                    </section>
                                </section>
                            </section>

                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Consistency</h4>

                                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                                        <p class=" appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                            If your services were appreciated, you can expect consistent bookings from the same clients as well as others. This gives you the opportunity for constant work but also room for further growth.

                                            As part of our registration process, you will have to complete a background check, which costs <span class="highlight-color"><del>$25.00</del> (Registration Fee waived during our initial launch)</span>. Our trusted partner for this service is Certn. Once the process is initiated, they will communicate with you directly via email. As soon as the background check is completed, you will return to our website to finalize the registration process.
                                        </p>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple">
            <div class="container-xl mf__content">
                <div class="row text-center">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">To start your registration, please fill out the form below:</h3>

                        <div class="mf__separator mx-auto appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <p class="text-center"><span class="text-color-danger mb-2 font-size-2rem">*</span> is required field</p>

                        <form class="form" action="{{route('caregiver_registration_phase_1_post', [Request::segment(1)])}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control border-radius-0 h-auto @error('first_name', 'storeUser') is-invalid @enderror" name="first_name" id='first_name' value="{{old('first_name')}}" required />
                                    @error('first_name', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Last Name <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control border-radius-0 h-auto @error('last_name', 'storeUser') is-invalid @enderror" name="last_name" id='last_name' value="{{old('last_name')}}" required />
                                    @error('last_name', 'storeUser  ')
                                    <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Your Email <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control border-radius-0 h-auto @error('email', 'storeUser') is-invalid @enderror" name="email" id='email' value="{{old('email')}}" required />

                                    @error('email', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Postal Code <span class="text-color-danger font-size-2rem">*</span></label>
                                    <input type="text" class="form-control border-radius-0 h-auto @error('postal_code', 'storeUser') is-invalid @enderror" name="postal_code" id="postal_code" value="{{old('postal_code')}}" required />
                                    @error('postal_code', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            @if(env('DOWN_PAYMENT') !== true)
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-success">@lang('Submit' )</button>
                                    </div>
                                </div>
                            @endif
                        </form>

                        @error('403', 'storeUser')
                            <div style="color: red" role="alert">
                                {{env('APP_NAME')}} Api error: {{$message}}
                            </div>

                        @enderror

                        @if(env('DOWN_PAYMENT') === true)
                            <br>
                            <form id="payment-form">
                                <div id="card-element">
                                <!-- Elements will create input elements here -->
                                </div>

                                <button id="submit" class="btn btn-success">@lang('Submit and Pay' )</button>

                                <!-- We'll put the error messages in this element -->
                                <div id="card-errors" style="color: red" role="alert"></div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section( 'footer-scripts' )

    @if(env('DOWN_PAYMENT') === true)
        <script>

            // Set your publishable key: remember to change this to your live publishable key in production
            // See your keys here: https://dashboard.stripe.com/account/apikeys
            var stripe = Stripe("{{env('STRIPE_PUBLISHABLE_KEY')}}");

            var clientSecret = "{{$intent->client_secret}}";

            // Set up Stripe.js and Elements to use in checkout form
            var elements = stripe.elements();
            var style = {
                base: {
                    color: "#32325d",
                }
            };

            var card = elements.create("card", {
                style: style,
                hidePostalCode: true
            });
            card.mount("#card-element");

            card.on('change', ({error}) => {
                let displayError = document.getElementById('card-errors');
                if (error) {
                    displayError.textContent = error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            var form = document.getElementById('payment-form');
            var submit_button = document.getElementById('submit');

            form.addEventListener('submit', function(ev) {
                ev.preventDefault();

                var first_name = document.getElementById('first_name').value;
                var last_name = document.getElementById('last_name').value;
                var email = document.getElementById('email').value;
                var postal_code = document.getElementById('postal_code').value;

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if((this.readyState == 4 && this.status == 200) && this.responseText === 'false'){
                        document.getElementById('card-errors').innerHTML = "@lang('You have already paid for this service, try to log in or to reset password.')";

                        submit_button.disabled = false;

                    } else if((this.readyState == 4 && this.status == 200) && this.responseText === 'true') {

                        stripe.confirmCardPayment(clientSecret, {
                            payment_method: {
                                card: card,
                                billing_details: {
                                    name: first_name + ' ' + last_name,
                                    email: email,
                                    address: {
                                        postal_code: postal_code
                                    }
                                }
                            }
                        }).then(function(result) {

                            console.log(result)

                            if (result.error) {

                                submit_button.disabled = false;

                                var displayError = document.getElementById('card-errors');
                                displayError.textContent = result.error.message

                                // Show error to your customer (e.g., insufficient funds)
                                //console.log(result.error.message);
                            } else {
                                // The payment has been processed!
                                if (result.paymentIntent.status === 'succeeded') {

                                    var displayMessage = document.getElementById('card-errors');
                                    displayMessage.textContent = 'Success!';

                                            // var xhttp = new XMLHttpRequest();
                                            // xhttp.onreadystatechange = function() {
                                            //     if(this.readyState == 4 && this.status == 200){
                                            //         //document.getElementById('card-errors').innerHTML = this.responseText;
                                            //     }
                                            // }
                                            // xhttp.open('POST', "{{route('caregiver_registration_phase_1_post_ajax', [Request::segment(1)])}}", true)
                                            // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
                                            // xhttp.send('_token={{ csrf_token() }}'+'&first_name='+first_name+'&last_name='+last_name+'&email='+email+'&postal_code='+postal_code);

                                    // Show a success message to your customer
                                    // There's a risk of the customer closing the window before callback
                                    // execution. Set up a webhook or plugin to listen for the
                                    // payment_intent.succeeded event that handles any business critical
                                    // post-payment actions.
                                }
                            }
                        });

                        submit_button.disabled = true;

                    }
                }
                xhttp.open('POST', "{{route('caregiver_registration_phase_1_post_ajax', [Request::segment(1)])}}", true)
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
                xhttp.send('_token={{ csrf_token() }}'+'&first_name='+first_name+'&last_name='+last_name+'&email='+email+'&postal_code='+postal_code);

                submit_button.disabled = true;
            });

        </script>
    @endif

@stop
