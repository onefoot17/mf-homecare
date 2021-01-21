@section( 'title' )
    @php $title = __( 'Contact Us' ) @endphp

    {{ $title }}
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
                </h1>
            </section>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row text-center">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide">@lang( 'titles.contact_us.section_1_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p class="mb-3 text-center"><strong><span class="text-color-danger font-size-2rem">*</span> @lang( 'titles.contact_us.form.required' )</strong></p>

                        <form class="form" action="{{route('caregiver_registration_phase_1_post', [Request::segment(1)])}}" method="POST">
                            @csrf
                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.contact_us.form.name' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('name', 'storeUser') is-invalid @enderror" name="name" id='name' value="{{old('name')}}" required />
                                    @error('name', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.contact_us.form.email' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('email', 'storeUser') is-invalid @enderror" name="email" id='email' value="{{old('email')}}" required />

                                    @error('email', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.contact_us.form.phone' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="number" class="form-control @error( 'phone', 'storeUser' ) is-invalid @enderror" name="phone" id="phone" value="{{ old( 'phone' ) }}" required />

                                    @error( 'phone', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label" for="message">@lang( 'titles.contact_us.form.message' )</label>

                                        <textarea class="form-control" id="qualifications_text" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            @if( env( 'DOWN_PAYMENT' ) !== true )
                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    <div class="form-group col-md-12 justify-content-center">
                                        <button type="submit" class="btn btn-success">@lang( 'titles.contact_us.form.submit' )</button>
                                    </div>
                                </div>
                            @endif
                        </form>
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

                var name = document.getElementById('name').value;
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
                                    name: name + ' ' + last_name,
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
                                            // xhttp.send('_token={{ csrf_token() }}'+'&name='+name+'&last_name='+last_name+'&email='+email+'&postal_code='+postal_code);

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
                xhttp.send('_token={{ csrf_token() }}'+'&name='+name+'&last_name='+last_name+'&email='+email+'&postal_code='+postal_code);

                submit_button.disabled = true;
            });

        </script>
    @endif

@stop
