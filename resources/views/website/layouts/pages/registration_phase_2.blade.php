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
                <h1>@lang( 'titles.registration-phase-2.Heading' )
                    <span class="mf__banner__sub_heading">@lang( 'titles.registration-phase-2.Sub_Heading' )</span>
                </h1>
            </section>
        </section>

        <section class="mf__section">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'titles.registration-phase-2.Become_Caregivers' )</h1>

                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Congratulations! Your Background Check was successful and we can now proceed with the Phase 2 of your registration process. Please fill in the form below and Submit the information when ready. Selections are to be made by clicking on the corresponding box.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Multiple selections are available in some cases by clicking on more than one box.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><strong>Please note that once registered, you will have to log in to your account and set up your available days and hours to work with MF Homecare</strong></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <p class="text-center"><span class="text-color-danger mb-2 font-size-2rem">*</span> is required field</p>

                        <form class="form" action="{{route('caregiver_registration_phase_1_post', [Request::segment(1)])}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('first_name', 'storeUser') is-invalid @enderror" name="first_name" id='first_name' value="{{old('first_name')}}" required />
                                    @error('first_name', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Last Name <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('last_name', 'storeUser') is-invalid @enderror" name="last_name" id='last_name' value="{{old('last_name')}}" required />
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

                                    <input type="text" class="form-control @error( 'email', 'storeUser' ) is-invalid @enderror" name="email" id='email' value="{{ old( 'email' ) }}" required />

                                    @error( 'email', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Phone <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="number" class="form-control @error( 'phone', 'storeUser' ) is-invalid @enderror" name="phone" id="phone" value="{{ old( 'phone' ) }}" required />

                                    @error( 'phone', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <label>Select your Gender <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'gender', 'storeUser' ) is-invalid @enderror" name="gender" id="gender_1" value="{{ old( 'gender_1' ) }}" required />

                                        <label class="form-check-label" for="gender_1">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'gender', 'storeUser' ) is-invalid @enderror" name="gender" id="gender_2" value="{{ old( 'gender_2' ) }}" required />

                                        <label class="form-check-label" for="gender_2">Female</label>
                                    </div>

                                    @error('gender', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Birth Date <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="date" class="form-control @error( 'birth_date', 'storeUser' ) is-invalid @enderror" name="birth_date" id="birth_date" value="{{ old( 'birth_date' ) }}" required />

                                    @error( 'birth_date', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Address</label>

                                <input type="text" class="form-control @error( 'address', 'storeUser' ) is-invalid @enderror" name="birth_date" id="birth_date" value="{{ old( 'birth_date' ) }}" id="address" placeholder="1234 Main St" required />
                            </div>

                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>

                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputCity">City</label>

                                  <input type="text" class="form-control" id="inputCity">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="province">Province</label>

                                    <select id="province" class="form-control">
                                        <option value="" selected="selected"></option>
                                        <option value="Alberta">Alberta</option>
                                        <option value="British Columbia">British Columbia</option>
                                        <option value="Manitoba">Manitoba</option>
                                        <option value="New Brunswick">New Brunswick</option>
                                        <option value="Newfoundland &amp; Labrador">Newfoundland &amp; Labrador</option>
                                        <option value="Northwest Territories">Northwest Territories</option>
                                        <option value="Nova Scotia">Nova Scotia</option>
                                        <option value="Nunavut">Nunavut</option>
                                        <option value="Ontario">Ontario</option>
                                        <option value="Prince Edward Island">Prince Edward Island</option>
                                        <option value="Quebec">Quebec</option>
                                        <option value="Saskatchewan">Saskatchewan</option>
                                        <option value="Yukon">Yukon</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="postal_code">Postal Code</label>

                                    <input type="text" class="form-control" id="postal_code">
                                </div>


                                @error( 'address', 'storeUser' )
                                    <div class="text-color-danger mt-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="geographic_radius">Geographic radius you are willing to travel to</label>

                                    <select name="geographic_radius" id="geographic_radius" class="form-control">
                                        <option value="5 km">5 km</option>
                                        <option value="10 km">10 km</option>
                                        <option value="15 km">15 km</option>
                                        <option value="20 km">20 km</option>
                                        <option value="25 km">25 km</option>
                                        <option value="30 km">30 km</option>
                                        <option value="35 km">35 km</option>
                                        <option value="40 km">40 km</option>
                                        <option value="45 km">45 km</option>
                                        <option value="50 km">50 km</option>
                                    </select>

                                    @error( 'geographic_radius', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>How would you rate your level of spoken English? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_1" value="{{ old( 'english_1' ) }}" required />

                                        <label class="form-check-label" for="english_1">Mother Tongue</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_2" value="{{ old( 'english_2' ) }}" required />

                                        <label class="form-check-label" for="english_2">Fluent</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_3" value="{{ old( 'english_3' ) }}" required />

                                        <label class="form-check-label" for="english_3">Proficient</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_4" value="{{ old( 'english_4' ) }}" required />

                                        <label class="form-check-label" for="english_4">Conversational</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_5" value="{{ old( 'english_5' ) }}" required />

                                        <label class="form-check-label" for="english_5">Basic</label>
                                    </div>

                                    @error( 'english', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>What other language do you speak? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_1" id="language_1" value="{{ old( 'language_1' ) }}" required />

                                        <label class="form-check-label" for="language_1">Chinese</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_2" id="language_2" value="{{ old( 'language_2' ) }}" required />

                                        <label class="form-check-label" for="language_2">Filipino</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_3" id="language_3" value="{{ old( 'language_3' ) }}" required />

                                        <label class="form-check-label" for="language_3">French</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_4" id="language_4" value="{{ old( 'language_4' ) }}" required />

                                        <label class="form-check-label" for="language_4">German</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_5" id="language_5" value="{{ old( 'language_5' ) }}" required />

                                        <label class="form-check-label" for="language_5">Greek</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_6" id="language_6" value="{{ old( 'language_6' ) }}" required />

                                        <label class="form-check-label" for="language_6">Hindi</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_7" id="language_7" value="{{ old( 'language_7' ) }}" required />

                                        <label class="form-check-label" for="language_7">Italian</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_8" id="language_8" value="{{ old( 'language_8' ) }}" required />

                                        <label class="form-check-label" for="language_8">Mandarin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_9" id="language_9" value="{{ old( 'language_9' ) }}" required />

                                        <label class="form-check-label" for="language_9">Russian</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_10" id="language_10" value="{{ old( 'language_10' ) }}" required />

                                        <label class="form-check-label" for="language_10">Spanish</label>
                                    </div>

                                    @error( 'language', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>How many years of experience do you have as a Caregiver? <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">This will help both you and the client as the clients’ needs could be more severe and require a much higher level of care.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">A highly experienced Caregiver may be required to handle much more difficult and stressful situations like Dementia, Alzheimers, fresh out of the hospital, etc.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Please select honestly and carefully as you don’t want to put yourself in a situation that you are uncomfortable handling.</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_1" value="{{ old( 'caregiver_years_1' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_1">None</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_2" value="{{ old( 'caregiver_years_2' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_2">0-6 months</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_3" value="{{ old( 'caregiver_years_3' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_3">6 months - 1 year</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_4" value="{{ old( 'caregiver_years_4' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_4">1-3 years</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_5" value="{{ old( 'caregiver_years_5' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_5">3-5 years</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_6" value="{{ old( 'caregiver_years_6' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_6">5-10 years</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_7" value="{{ old( 'caregiver_years_7' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_7">Over 10 years</label>
                                    </div>

                                    @error( 'caregiver_years', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>In the last 24 months, how many months were you a caregiver for? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_1" value="{{ old( 'caregiver_months_1' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_1">None</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_2" value="{{ old( 'caregiver_months_2' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_2">0-3 months</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_3" value="{{ old( 'caregiver_months_3' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_3">0-9 months</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_4" value="{{ old( 'caregiver_months_4' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_4">9-12 months</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_5" value="{{ old( 'caregiver_months_5' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_5">Over 12 months</label>
                                    </div>

                                    @error( 'caregiver_months', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>What type of caregiving have you done? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_1" id="caregiving_type_1" value="{{ old( 'caregiving_type_1' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_1">None</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_2" id="caregiving_type_2" value="{{ old( 'caregiving_type_2' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_2">Residential care home</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_3" id="caregiving_type_3" value="{{ old( 'caregiving_type_3' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_3">Nursing home</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_4" id="caregiving_type_4" value="{{ old( 'caregiving_type_4' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_4">Home care agency</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_5" id="caregiving_type_5" value="{{ old( 'caregiving_type_5' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_5">Private caregiver</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_6" id="caregiving_type_6" value="{{ old( 'caregiving_type_6' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_6">Live-in caregiver</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_7" id="caregiving_type_7" value="{{ old( 'caregiving_type_7' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_7">Unpaid caregiver (careing for a loved one)</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_8" id="caregiving_type_8" value="{{ old( 'caregiving_type_8' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_8">Hospital support worker</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_9" id="caregiving_type_9" value="{{ old( 'caregiving_type_9' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_9">Assisted living</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_10" id="caregiving_type_10" value="{{ old( 'caregiving_type_10' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_10">Other</label>
                                    </div>

                                    @error( 'caregiving_type', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>Do you have any relevant qualifications? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_1" id="qualifications_1" value="{{ old( 'qualifications_1' ) }}" required />

                                        <label class="form-check-label" for="qualifications_1">None</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_2" id="qualifications_2" value="{{ old( 'qualifications_2' ) }}" required />

                                        <label class="form-check-label" for="qualifications_2">Occupational therapy certification</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_3" id="qualifications_3" value="{{ old( 'qualifications_3' ) }}" required />

                                        <label class="form-check-label" for="qualifications_3">Personal support worker</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_4" id="qualifications_4" value="{{ old( 'qualifications_4' ) }}" required />

                                        <label class="form-check-label" for="qualifications_4">Agency induction training</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_5" id="qualifications_5" value="{{ old( 'qualifications_5' ) }}" required />

                                        <label class="form-check-label" for="qualifications_5">Social Worker</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_6" id="qualifications_6" value="{{ old( 'qualifications_6' ) }}" required />

                                        <label class="form-check-label" for="qualifications_6">Registered nurse</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_7" id="qualifications_7" value="{{ old( 'qualifications_7' ) }}" required />

                                        <label class="form-check-label" for="qualifications_7">Nursing</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_8" id="qualifications_8" value="{{ old( 'qualifications_8' ) }}" required />

                                        <label class="form-check-label" for="qualifications_8">University degree (Health & Social care)</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_9" id="qualifications_9" value="{{ old( 'qualifications_9' ) }}" required />

                                        <label class="form-check-label" for="qualifications_9">University degree (non-care discipline)</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_10" id="qualifications_10" value="{{ old( 'qualifications_10' ) }}" required />

                                        <label class="form-check-label" for="qualifications_10">Physiotherapy certification</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_11" id="qualifications_11" value="{{ old( 'qualifications_11' ) }}" required />

                                        <label class="form-check-label" for="qualifications_11">Other</label>
                                    </div>

                                    @error( 'qualifications', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label for="qualifications_text">Qualifications</label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">If you would like to elaborate on your qualifications above, please do so in the field below.</p>

                                        <textarea class="form-control" id="qualifications_text" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>What Animals are You Fine Being Around? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'animals', 'storeUser' ) is-invalid @enderror" name="animals_1" id="animals_1" value="{{ old( 'animals_1' ) }}" required />

                                        <label class="form-check-label" for="animals_1">Dogs</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'animals', 'storeUser' ) is-invalid @enderror" name="animals_2" id="animals_2" value="{{ old( 'animals_2' ) }}" required />

                                        <label class="form-check-label" for="animals_2">Cats</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'animals', 'storeUser' ) is-invalid @enderror" name="animals_3" id="animals_3" value="{{ old( 'animals_3' ) }}" required />

                                        <label class="form-check-label" for="animals_3">Birds</label>
                                    </div>

                                    @error( 'animals', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label for="who">Describe Who You Are</label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Describe who you are and how you could help future clients in selecting you as a warm and compassionate person that will make a difference in their lives.</p>

                                        <textarea class="form-control" id="who" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label for="experience">Experience</label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Use separate lines for experiences</p>

                                        <textarea class="form-control" id="experience" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label for="additional">Additional Comments</label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Anything you feel would be valued by clients</p>

                                        <textarea class="form-control" id="additional" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>How did you hear about us? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_1" id="hear_1" value="{{ old( 'hear_1' ) }}" required />

                                        <label class="form-check-label" for="hear_1">Existing MF Homecae Caregiver/Companion</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_2" id="hear_2" value="{{ old( 'hear_2' ) }}" required />

                                        <label class="form-check-label" for="hear_2">Relative/Friend</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_3" id="hear_3" value="{{ old( 'hear_3' ) }}" required />

                                        <label class="form-check-label" for="hear_3">Live-In-Care Jobs</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_4" id="hear_4" value="{{ old( 'hear_4' ) }}" required />

                                        <label class="form-check-label" for="hear_4">Indeed</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_5" id="hear_5" value="{{ old( 'hear_5' ) }}" required />

                                        <label class="form-check-label" for="hear_5">Job Center</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_6" id="hear_6" value="{{ old( 'hear_6' ) }}" required />

                                        <label class="form-check-label" for="hear_6">Facebook</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_7" id="hear_7" value="{{ old( 'hear_7' ) }}" required />

                                        <label class="form-check-label" for="hear_7">Twitter</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_8" id="hear_8" value="{{ old( 'hear_8' ) }}" required />

                                        <label class="form-check-label" for="hear_8">Internet Search</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_9" id="hear_9" value="{{ old( 'hear_9' ) }}" required />

                                        <label class="form-check-label" for="hear_9">Newspaper Article</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_10" id="hear_10" value="{{ old( 'hear_10' ) }}" required />

                                        <label class="form-check-label" for="hear_10">Article</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_10" id="hear_10" value="{{ old( 'hear_10' ) }}" required />

                                        <label class="form-check-label" for="hear_10">Flyer</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_11" id="hear_11" value="{{ old( 'hear_11' ) }}" required />

                                        <label class="form-check-label" for="hear_11">Other</label>
                                    </div>

                                    @error( 'hear', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>What type of care work are you looking for? <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_1" id="type_1" value="{{ old( 'type_1' ) }}" required />

                                        <label class="form-check-label" for="type_1">Day Shifts</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_2" id="type_2" value="{{ old( 'type_2' ) }}" required />

                                        <label class="form-check-label" for="type_2">Night Shifts</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_3" id="type_3" value="{{ old( 'type_3' ) }}" required />

                                        <label class="form-check-label" for="type_3">Live-in care (any time)</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_4" id="type_4" value="{{ old( 'type_4' ) }}" required />

                                        <label class="form-check-label" for="type_4">Live-in care (weekends only)</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_5" id="type_5" value="{{ old( 'type_5' ) }}" required />

                                        <label class="form-check-label" for="type_5">Live-in care (occasional only)</label>
                                    </div>

                                    @error( 'type', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>Select the type of services you want to provide <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><strong>Caregiver Services</strong></p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">These are services that are provided by Caregivers ONLY. If you are a Caregiver, you may select any of the services below that you wish to provide to your clients.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">You may ALSO add extra Companion Services to your job tasks to display your full skill set (see below & select all that apply).</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_1" id="type_services_caregiver_1" value="{{ old( 'type_services_caregiver_1' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_1">Bathing and Personal Grooming</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_2" id="type_services_caregiver_2" value="{{ old( 'type_services_caregiver_2' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_2">Bathroom and Continence Care</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_3" id="type_services_caregiver_3" value="{{ old( 'type_services_caregiver_3' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_3">Exercise and Mobility</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_4" id="type_services_caregiver_4" value="{{ old( 'type_services_caregiver_4' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_4">Medication Reminder</label>
                                    </div>

                                    @error( 'type_services_caregiver', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><strong>Companion Services</strong></p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">A Companion provides services that are NON MEDICAL. They provide support, company & friendship for those that are in need of these special kinds of services.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">If you are a Companion, please know that you CANNOT select Caregiver services above and ONLY the ones below.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Please select the tasks that you feel comfortable doing and will benefit and help your companion (select all that apply).</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_1" id="type_services_companion_1" value="{{ old( 'type_services_companion_1' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_1">Feeding</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_2" id="type_services_companion_2" value="{{ old( 'type_services_companion_2' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_2">Help and Meal Preparation</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_3" id="type_services_companion_3" value="{{ old( 'type_services_companion_3' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_3">Light Housework</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_4" id="type_services_companion_4" value="{{ old( 'type_services_companion_4' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_4">Going out on walks</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_5" id="type_services_companion_5" value="{{ old( 'type_services_companion_5' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_5">Running errands</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_6" id="type_services_companion_6" value="{{ old( 'type_services_companion_6' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_6">Trips to appointments or other outings by car</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_7" id="type_services_companion_7" value="{{ old( 'type_services_companion_7' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_7">Someone to spend time with and Emotional Support</label>
                                    </div>

                                    @error( 'type_services_companion', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label>Do you have a car that you are willing to use in order to take clients to appointments or run errands with? <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">If you select yes, please know that any out-of-pocket expenses like parking fees should be the client’s responsibility.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">It is up to you to negotiate and collect what you feel is appropriate relating to your out-of-pocket expenses.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">You will collect it and be responsible in doing so directly with your client.</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'car', 'storeUser' ) is-invalid @enderror" name="car" id="car_1" value="{{ old( 'car_1' ) }}" required />

                                        <label class="form-check-label" for="car_1">Yes</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'car', 'storeUser' ) is-invalid @enderror" name="car" id="car_2" value="{{ old( 'car_2' ) }}" required />

                                        <label class="form-check-label" for="car_2">No</label>
                                    </div>

                                    @error('car', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label for="profile_image">Please Upload your Profile Picture <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Your Profile Picture is mandatory and will help clients in their selection process.</p>

                                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">The pictures must be of your face and taken against a clear background without any objects behind you. Please see the examples below and don’t forget to smile! (Images must be square)</p>
                                    </div>

                                    <div class="form-check w-100">
                                        <input type="file" class="form-control-file" id="profile_image">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <img class="w-100" src="{{ asset( 'website/assets/images/profile-image-correct.jpg' ) }}" />

                                        <img class="w-100" src="{{ asset( 'website/assets/images/profile-image-wrong.jpg' ) }}" />
                                    </div>

                                    @error('gender', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="hourly_rate">Your expected hourly rate? <span class="text-color-danger font-size-2rem">*</span></label>

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Please select a fair price that will guarantee a higher success rate of getting jobs.</p>

                                    <div class="form-check w-100">
                                        <select name="hourly_rate" id="hourly_rate" class="form_control">
                                            <option value="15">$15</option>
                                            <option value="16">$16</option>
                                            <option value="17">$17</option>
                                            <option value="18">$18</option>
                                            <option value="19">$19</option>
                                            <option value="20">$20</option>
                                            <option value="21">$21</option>
                                            <option value="22">$22</option>
                                            <option value="23">$23</option>
                                            <option value="24">$24</option>
                                            <option value="25">$25</option>
                                            <option value="26">$26</option>
                                            <option value="27">$27</option>
                                            <option value="28">$28</option>
                                            <option value="29">$29</option>
                                            <option value="30">$30</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="hourly_rate">Covid-19 Test Results if available <span class="text-color-danger font-size-2rem">*</span></label>

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">After completing the registration, please login to your account and upload your covid-19 test results.</p>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="hourly_rate">Banking Information For Direct Deposit</label>

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">This information is needed so that we can set up your direct deposit, which means that money will automatically be deposited into your account every week. It will be kept encrypted in our servers.

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">You will be getting a summary of all your hours and money that you have earned (which will be all net based on the hourly rate that you selected above). Each pay is minimum 3 hours of work.

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Once you confirm your automatic invoice, at that point, our processing begins and money goes directly to the bank account that you have provided.

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">All information is secure, encrypted and protected.

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Caregiver can complete registration without providing banking information but they will not get automatic deposits. The money will stay with MF Homecare until the banking information is submitted.

                                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Below are some of the bank websites where you can find this information:</p>

                                    <ul>
                                        <li><a href="https://bmo.intelliresponse.com/obs_eng/?requestType=NormalRequest&amp;source=3&amp;id=1868&amp;question=How+do+I+find+the+branch%2Ftransit+or+account+number" target="_blank">– BMO</a></li>

                                        <li><a href="https://www.cibc.com/en/personal-banking/ways-to-bank/how-to/transit-account-institution-number.html" target="_blank">– CIBC</a></li>

                                        <li><a href="https://www.hsbc.ca/online-banking/payroll-direct-deposit/" target="_blank">– HSBC</a></li>

                                        <li><a href="https://www.rbcroyalbank.com/onlinebanking/bankingusertips/account.html" target="_blank">– RBC</a></li>

                                        <li><a href="https://help.scotiabank.com/article/whats-my-transit-number" target="_blank">– Scotiabank</a></li>

                                        <li><a href="https://www.tangerine.ca/en/faq/answer?permaLink=what-are-the-tangerine-bank-transit-and-institution-numbers--generic-phone--en--0--1&amp;responseId=219--GoGaau8TXgvFqrkV93P2GwDNLH3eoKUW" target="_blank">– Tangerine</a></li>

                                        <li><a href="https://www.td.com/ca/en/investing/search/?query=How%20do%20I%20find%20my%20transit%20number%2C%20institution%20number%20and%20account%20number%3F&amp;preExpand=true&amp;source=100#:~:text=If%20you%20don't%20have%20a%20cheque%2C%20the%20easiest%20way,and%207%2Ddigit%20Account%20number" target="_blank">– TD</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Bank Name</label>

                                    <input type="text" class="form-control @error( 'bank_name', 'storeUser' ) is-invalid @enderror" name="bank_name" id='bank_name' value="{{ old( 'bank_name' ) }}" required />

                                    @error( 'bank_name', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Institution No.</label>

                                    <input type="text" class="form-control @error( 'bank_institution', 'storeUser' ) is-invalid @enderror" name="bank_institution" id='bank_institution' value="{{ old( 'bank_institution' ) }}" required />

                                    @error( 'bank_institution', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Transit No.</label>

                                    <input type="text" class="form-control @error( 'transit_no', 'storeUser' ) is-invalid @enderror" name="transit_no" id='transit_no' value="{{ old( 'transit_no' ) }}" required />

                                    @error( 'transit_no', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Account No.</label>

                                    <input type="text" class="form-control @error( 'account_no', 'storeUser' ) is-invalid @enderror" name="account_no" id='account_no' value="{{ old( 'account_no' ) }}" required />

                                    @error( 'account_no', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label>Consent (Click on the large box below to accept) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'consent', 'storeUser' ) is-invalid @enderror" name="consent" id="consent" value="{{ old( 'consent' ) }}" required />

                                        <label class="form-check-label form-check-label-consent" for="consent">
                                            <span>I understand that as a Caregiver and/or Companion working through the MF Homecare Platform, I am not employed by MF Homecare. I will be a self-employed, independent contractor, meaning that I will be responsible for my own taxes and for preparing my own tax returns with the Canada Revenue Agency.</span>

                                            <span class="d-block"><strong><u>Click here to accept</u></strong></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label>Stripe Consent (Click on the large box below to accept) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'stripe', 'storeUser' ) is-invalid @enderror" name="stripe" id="stripe" value="{{ old( 'stripe' ) }}" required />

                                        <label class="form-check-label" for="stripe">By registering your account, you agree to Stripe Services Agreement and the Stripe Connected Account Agreement.</label>
                                    </div>

                                    <ul>
                                        <li><a target="_blank" href="https://stripe.com/legal">Stripe Services Agreement</a></li>

                                        <li><a target="_blank" href="https://stripe.com/connect-account/legal">Stripe Connected Account Agreement</a></li>
                                    </ul>
                                </div>
                            </div>

                            @if(env('DOWN_PAYMENT') !== true)
                                <div class="form-row">
                                    <div class="form-group col-md-12 justify-content-center">
                                        <button type="submit" class="btn btn-success">@lang('Submit' )</button>
                                    </div>
                                </div>
                            @endif
                        </form>

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
