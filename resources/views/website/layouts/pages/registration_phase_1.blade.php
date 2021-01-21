@section( 'title' )
    @php $title = __( 'Register as a Caregiver' ) @endphp

    {{ 'Phase 1 | ' . $title }}
@stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
        @if(env('DOWN_PAYMENT') === true)
            <script src="https://js.stripe.com/v3/"></script>
        @endif
@stop

@if ( !empty( Request::segment( 3 ) ) )
    @php $segment = Request::segment( 3 ) @endphp
@elseif ( !empty( Request::segment( 2 ) ) )
    @php $segment = Request::segment( 2 ) @endphp
@endif

@section( 'content' )
    <div role="main" class="main">
        <section class="mf__banner" style="background-image: url( '{{ asset( 'website/assets/images/banners/' . 'banner-mf__' . $segment . '.jpg' ) }}' );">
            <section class="mf__banner__overlay">
                <h1>
                    @lang( $title )

                    <span class="mf__banner__sub_heading">@lang( 'titles.registration_phase_1.sub_heading' )</span>
                </h1>
            </section>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="word-rotator slide text-center">@lang( 'titles.registration_phase_1.become_caregivers' )</h1>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.registration_phase_1.welcome_our' )</p>

                        <aside class="mb-3 mf__registration-phase-1__notes">
                            <h4 class="word-rotator slide text-center">@lang( 'titles.registration_phase_1.notes' )</h4>

                            <ul>
                                <li><p>@lang( 'texts.registration_phase_1.we_are' )</p></li>

                                <li><p>@lang( 'texts.registration_phase_1.as_part' )</p></li>
                            </ul>
                        </aside>

                        <p>@lang( 'texts.registration_phase_1.as_a' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.registration_phase_1.caregiver_advantages' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <section class="row">
                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide text-center">@lang( 'titles.registration_phase_1.choice' )</h4>

                                        <div class="mf__separator mx-auto"></div>

                                        <p>@lang( 'texts.registration_phase_1.get_matched' )</p>
                                    </section>
                                </section>
                            </section>

                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide text-center">@lang( 'titles.registration_phase_1.control' )</h4>

                                        <div class="mf__separator mx-auto"></div>

                                        <p>@lang( 'texts.registration_phase_1.we_provide' )</p>
                                    </section>
                                </section>
                            </section>
                        </section>

                        <section class="row">
                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide text-center">@lang( 'titles.registration_phase_1.choice_of_payment' )</h4>

                                        <div class="mf__separator mx-auto"></div>

                                        <p>@lang( 'texts.registration_phase_1.we_believe' )</p>

                                        <p>@lang( 'texts.registration_phase_1.get_paid' )</p>
                                    </section>
                                </section>
                            </section>

                            <section class="col-lg-6">
                                <section class="card">
                                    <section class="card-body">
                                        <h4 class="word-rotator slide text-center">@lang( 'titles.registration_phase_1.consistency' )</h4>

                                        <div class="mf__separator mx-auto"></div>

                                        <p>@lang( 'texts.registration_phase_1.if_your' )</p>

                                        <p>@lang( 'texts.registration_phase_1.as_part_of_our_registration' )</p>
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
                        <h3 class="word-rotator slide" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'titles.registration_phase_1.form.form_title' )</h3>

                        <div class="mf__separator mx-auto appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <p class="mb-3 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><strong><span class="text-color-danger font-size-2rem">*</span> @lang( 'titles.registration_phase_1.form.required' )</strong></p>

                        <form class="form" action="{{route('caregiver_registration_phase_1_post', [Request::segment(1)])}}" method="POST">
                            @csrf
                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_1.form.first_name' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('first_name', 'storeUser') is-invalid @enderror" name="first_name" id='first_name' value="{{old('first_name')}}" required />
                                    @error('first_name', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_1.form.last_name' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('last_name', 'storeUser') is-invalid @enderror" name="last_name" id='last_name' value="{{old('last_name')}}" required />
                                    @error('last_name', 'storeUser  ')
                                    <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_1.form.email' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('email', 'storeUser') is-invalid @enderror" name="email" id='email' value="{{ old( 'email' ) }}" required />

                                    @error( 'email', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_1.form.postal_code' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    <input type="text" class="form-control @error('postal_code', 'storeUser') is-invalid @enderror" name="postal_code" id="postal_code" value="{{old('postal_code')}}" required />
                                    @error('postal_code', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            @if( env( 'DOWN_PAYMENT' ) !== true )
                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    <div class="form-group col-md-12 justify-content-center">
                                        <button type="submit" class="btn btn-success">@lang( 'titles.registration_phase_1.form.submit' )</button>
                                    </div>
                                </div>
                            @endif
                        </form>

                        @if( env( 'DOWN_PAYMENT' ) === true )
                            <form id="payment-form">
                                <div id="card-element">
                                <!-- Elements will create input elements here -->
                                </div>

                                <button id="submit" class="btn btn-success">@lang( 'Submit and Pay' )</button>

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

    @error('403', 'storeUser')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>

            swal("{{$message}}");
        </script>

    @enderror

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
