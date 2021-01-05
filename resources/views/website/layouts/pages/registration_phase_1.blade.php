@section( 'title' ) {{ $title ?? __( 'Caregiver and Companionship Services for the Elderly - MF Homecare' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
@stop

@section( 'content' )
    <div role="main" class="main">

        
        <br>
        <br>
        <br>
        <br>
        

        <div class="mf__section mf__features mf__features--services">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 mx-md-auto">
                        <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('titles.Become_Caregivers')</h1>

                        <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            Welcome! Our registration process is now open for Caregivers and Companions in the Greater Toronto and Vancouver Areas. Please fill in the form below to start the registration process with our system.

                            NOTES:
                            
                            – We are currently accepting registrations for the Greater Toronto and Vancouver Areas
                            
                            – As part of our initial launch, we are waiving the $25 Registration Fee for these areas
                            
                            As a dedicated MF Homecare Caregiver or Companion, you can help families restore balance, order, and peace to their lives, and help their senior loved ones remain at home. Our Caregivers provide a variety of non-medical services, including companionship and help around the house.    
                        </p>

                        <h3 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">MF Homecare Caregiver Advantages</h3>
                        <h4 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Choice</h4>
                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            Get matched with the right client that needs your specific skillset. Pick your geographic radius and let the clients find you. Communicate with your client before the first visit to ensure that everything runs smoothly. It’s time to provide care, as easily and efficiently as you can.
                        </p>

                        <h4 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Control</h4>
                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            We provide you with the tools and the technology to coordinate your jobs personally, directly, and conveniently, from client selection to payment. Create and work on your own schedule.
                        </p>

                        <h4 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Choice of Payment</h4>
                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            We believe a happy Caregiver gives clients the best possible care. That is why we let you set your preferred amount and method of pay. Remember that the amount you select could impact the amount of work you receive.

                            Get paid directly into your bank account by direct deposit every two weeks. MF Homecare charges you a small 5% fee to set up and managing your appointment payments and regular deposits to your bank account. We do not take any government deductions off your pay. you are responsible for your own tax deductions and return.
                        </p>
                        <h4 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Consistency</h4>
                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            If your services were appreciated, you can expect consistent bookings from the same clients as well as others. This gives you the opportunity for constant work but also room for further growth.

                            As part of our registration process, you will have to complete a background check, which costs $25.00 (Registration Fee waived during our initial launch). Our trusted partner for this service is Certn. Once the process is initiated, they will communicate with you directly via email. As soon as the background check is completed, you will return to our website to finalize the registration process.
                        </p>
                        <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">To start your registration, please fill out the form below:</h1>
                        
                        <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>


							
                        <div class="overflow-hidden mb-1">
                            <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">* is required field</strong></h2>
                        </div>
                        <form action="{{route('caregiver_registration_phase_1_post', [Request::segment(1)])}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control border-radius-0 h-auto @error('first_name', 'storeUser') is-invalid @enderror" name="first_name" value="{{old('first_name')}}" />
                                    @error('first_name', 'storeUser')
                                        <div style='color: red'>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control border-radius-0 h-auto @error('last_name', 'storeUser') is-invalid @enderror" name="last_name" value="{{old('last_name')}}" required />
                                    @error('last_name', 'storeUser  ')
                                    <div style='color: red'>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Your Email <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control border-radius-0 h-auto @error('email', 'storeUser') is-invalid @enderror" name="email" value="{{old('email')}}" required />
                                    @error('email', 'storeUser')
                                        <div style='color: red'>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Postal Code <span class="text-color-danger">*</span></label>
                                    <input type="text" class="form-control border-radius-0 h-auto @error('postal_code', 'storeUser') is-invalid @enderror" name="postal_code" value="{{old('postal_code')}}" required />
                                    @error('postal_code', 'storeUser')
                                        <div style='color: red'>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success">@lang('Submit')</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

    @include( 'website.layouts.footernav' )
@stop

@section( 'footer-scripts' )
@stop
