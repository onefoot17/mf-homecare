@section( 'title' )
    @php $title = __( 'Register as a Caregiver' ) @endphp

    {{ 'Phase 2 | ' . $title }}
@stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
    <script src="https://js.stripe.com/v3/"></script>
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

                    <span class="mf__banner__sub_heading">@lang( 'titles.registration_phase_2.sub_heading' )</span>
                </h1>
            </section>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="word-rotator slide text-center">@lang( 'titles.registration_phase_2.become_caregivers' )</h1>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.registration_phase_2.congratulations_your' )</p>

                        <p>@lang( 'texts.registration_phase_2.multiple_selections' )</p>

                        <p>@lang( 'texts.registration_phase_2.please_note' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <p class="text-center mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><strong><span class="text-color-danger font-size-2rem">*</span> @lang( 'titles.registration_phase_2.form.required' )</strong></p>

                        <div class="mf__separator mx-auto appear-animation mb-2x" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <form class="form" action="{{route('caregiver_registration_phase_1_post', [Request::segment(1)])}}" method="POST">
                            @csrf
                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.first_name' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error('first_name', 'storeUser') is-invalid @enderror" name="first_name" id='first_name' value="{{old('first_name')}}" required />
                                    @error('first_name', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.last_name' ) <span class="text-color-danger font-size-2rem">*</span></label>

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
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.email' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="text" class="form-control @error( 'email', 'storeUser' ) is-invalid @enderror" name="email" id='email' value="{{ old( 'email' ) }}" required />

                                    @error( 'email', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.phone' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="number" class="form-control @error( 'phone', 'storeUser' ) is-invalid @enderror" name="phone" id="phone" value="{{ old( 'phone' ) }}" required />

                                    @error( 'phone', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.gender.gender_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'gender', 'storeUser' ) is-invalid @enderror" name="gender" id="gender_1" value="{{ old( 'gender_1' ) }}" required />

                                        <label class="form-check-label" for="gender_1">@lang( 'titles.registration_phase_2.form.gender.gender_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'gender', 'storeUser' ) is-invalid @enderror" name="gender" id="gender_2" value="{{ old( 'gender_2' ) }}" required />

                                        <label class="form-check-label" for="gender_2">@lang( 'titles.registration_phase_2.form.gender.gender_2' )</label>
                                    </div>

                                    @error('gender', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.birth_date' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <input type="date" class="form-control @error( 'birth_date', 'storeUser' ) is-invalid @enderror" name="birth_date" id="birth_date" value="{{ old( 'birth_date' ) }}" required />

                                    @error( 'birth_date', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-6">
                                    <label class="form-check-label" for="address_1">@lang( 'titles.registration_phase_2.form.address_1.address_1_title' )</label>

                                    <input type="text" class="form-control @error( 'address_1', 'storeUser' ) is-invalid @enderror" name="address_1" value="{{ old( 'address_1' ) }}" id="address_1" placeholder="@lang( 'titles.registration_phase_2.form.address_1.address_1_placeholder' )" required />
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label" for="address_2">@lang( 'titles.registration_phase_2.form.address_2.address_2_title' )</label>

                                    <input type="text" class="form-control" id="address_2" placeholder="@lang( 'titles.registration_phase_2.form.address_2.address_2_placeholder' )">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-check-label" for="city">@lang( 'titles.registration_phase_2.form.city' )</label>

                                    <input type="text" class="form-control" id="city">
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="form-check-label" for="province">@lang( 'titles.registration_phase_2.form.province.province_title' )</label>

                                    <select id="province" class="form-control">
                                        <option value="" selected="selected"></option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_1' )">@lang( 'titles.registration_phase_2.form.province.province_1' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_2' )">@lang( 'titles.registration_phase_2.form.province.province_2' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_3' )">@lang( 'titles.registration_phase_2.form.province.province_3' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_4' )">@lang( 'titles.registration_phase_2.form.province.province_4' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_5' )">@lang( 'titles.registration_phase_2.form.province.province_5' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_6' )">@lang( 'titles.registration_phase_2.form.province.province_6' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_7' )">@lang( 'titles.registration_phase_2.form.province.province_7' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_8' )">@lang( 'titles.registration_phase_2.form.province.province_8' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_9' )">@lang( 'titles.registration_phase_2.form.province.province_9' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_10' )">@lang( 'titles.registration_phase_2.form.province.province_10' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_11' )">@lang( 'titles.registration_phase_2.form.province.province_11' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_12' )">@lang( 'titles.registration_phase_2.form.province.province_12' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.province.province_13' )">@lang( 'titles.registration_phase_2.form.province.province_13' )</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-check-label" for="postal_code">@lang( 'titles.registration_phase_2.form.postal_code' )</label>

                                    <input type="text" class="form-control" id="postal_code">
                                </div>

                                @error( 'address', 'storeUser' )
                                    <div class="text-color-danger mt-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-6">
                                    <label class="form-check-label" for="geographic_radius">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_title' )</label>

                                    <select name="geographic_radius" id="geographic_radius" class="form-control">
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_1' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_1' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_2' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_2' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_3' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_3' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_4' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_4' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_5' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_5' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_6' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_6' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_7' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_7' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_8' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_8' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_9' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_9' )</option>
                                        <option value="@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_10' )">@lang( 'titles.registration_phase_2.form.geographic_radius.geographic_radius_10' )</option>
                                    </select>

                                    @error( 'geographic_radius', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.english.english_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_1" value="{{ old( 'english_1' ) }}" required />

                                        <label class="form-check-label" for="english_1">@lang( 'titles.registration_phase_2.form.english.english_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_2" value="{{ old( 'english_2' ) }}" required />

                                        <label class="form-check-label" for="english_2">@lang( 'titles.registration_phase_2.form.english.english_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_3" value="{{ old( 'english_3' ) }}" required />

                                        <label class="form-check-label" for="english_3">@lang( 'titles.registration_phase_2.form.english.english_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_4" value="{{ old( 'english_4' ) }}" required />

                                        <label class="form-check-label" for="english_4">@lang( 'titles.registration_phase_2.form.english.english_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'english', 'storeUser' ) is-invalid @enderror" name="english" id="english_5" value="{{ old( 'english_5' ) }}" required />

                                        <label class="form-check-label" for="english_5">@lang( 'titles.registration_phase_2.form.english.english_5' )</label>
                                    </div>

                                    @error( 'english', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.language.language_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_1" id="language_1" value="{{ old( 'language_1' ) }}" required />

                                        <label class="form-check-label" for="language_1">@lang( 'titles.registration_phase_2.form.language.language_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_2" id="language_2" value="{{ old( 'language_2' ) }}" required />

                                        <label class="form-check-label" for="language_2">@lang( 'titles.registration_phase_2.form.language.language_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_3" id="language_3" value="{{ old( 'language_3' ) }}" required />

                                        <label class="form-check-label" for="language_3">@lang( 'titles.registration_phase_2.form.language.language_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_4" id="language_4" value="{{ old( 'language_4' ) }}" required />

                                        <label class="form-check-label" for="language_4">@lang( 'titles.registration_phase_2.form.language.language_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_5" id="language_5" value="{{ old( 'language_5' ) }}" required />

                                        <label class="form-check-label" for="language_5">@lang( 'titles.registration_phase_2.form.language.language_5' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_6" id="language_6" value="{{ old( 'language_6' ) }}" required />

                                        <label class="form-check-label" for="language_6">@lang( 'titles.registration_phase_2.form.language.language_6' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_7" id="language_7" value="{{ old( 'language_7' ) }}" required />

                                        <label class="form-check-label" for="language_7">@lang( 'titles.registration_phase_2.form.language.language_7' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_8" id="language_8" value="{{ old( 'language_8' ) }}" required />

                                        <label class="form-check-label" for="language_8">@lang( 'titles.registration_phase_2.form.language.language_8' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_9" id="language_9" value="{{ old( 'language_9' ) }}" required />

                                        <label class="form-check-label" for="language_9">@lang( 'titles.registration_phase_2.form.language.language_9' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'language', 'storeUser' ) is-invalid @enderror" name="language_10" id="language_10" value="{{ old( 'language_10' ) }}" required />

                                        <label class="form-check-label" for="language_10">@lang( 'titles.registration_phase_2.form.language.language_10' )</label>
                                    </div>

                                    @error( 'language', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p>@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_title_2' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_title_3' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_title_4' )</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_1" value="{{ old( 'caregiver_years_1' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_1">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_2" value="{{ old( 'caregiver_years_2' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_2">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_3" value="{{ old( 'caregiver_years_3' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_3">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_4" value="{{ old( 'caregiver_years_4' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_4">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_5" value="{{ old( 'caregiver_years_5' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_5">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_5' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_6" value="{{ old( 'caregiver_years_6' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_6">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_6' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_years', 'storeUser' ) is-invalid @enderror" name="caregiver_years" id="caregiver_years_7" value="{{ old( 'caregiver_years_7' ) }}" required />

                                        <label class="form-check-label" for="caregiver_years_7">@lang( 'titles.registration_phase_2.form.caregiver_years.caregiver_years_7' )</label>
                                    </div>

                                    @error( 'caregiver_years', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.caregiver_months.caregiver_months_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_1" value="{{ old( 'caregiver_months_1' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_1">@lang( 'titles.registration_phase_2.form.caregiver_months.caregiver_months_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_2" value="{{ old( 'caregiver_months_2' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_2">@lang( 'titles.registration_phase_2.form.caregiver_months.caregiver_months_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_3" value="{{ old( 'caregiver_months_3' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_3">@lang( 'titles.registration_phase_2.form.caregiver_months.caregiver_months_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_4" value="{{ old( 'caregiver_months_4' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_4">@lang( 'titles.registration_phase_2.form.caregiver_months.caregiver_months_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'caregiver_months', 'storeUser' ) is-invalid @enderror" name="caregiver_months" id="caregiver_months_5" value="{{ old( 'caregiver_months_5' ) }}" required />

                                        <label class="form-check-label" for="caregiver_months_5">@lang( 'titles.registration_phase_2.form.caregiver_months.caregiver_months_5' )</label>
                                    </div>

                                    @error( 'caregiver_months', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_1" id="caregiving_type_1" value="{{ old( 'caregiving_type_1' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_1">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_2" id="caregiving_type_2" value="{{ old( 'caregiving_type_2' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_2">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_3" id="caregiving_type_3" value="{{ old( 'caregiving_type_3' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_3">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_4" id="caregiving_type_4" value="{{ old( 'caregiving_type_4' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_4">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_5" id="caregiving_type_5" value="{{ old( 'caregiving_type_5' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_5">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_5' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_6" id="caregiving_type_6" value="{{ old( 'caregiving_type_6' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_6">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_6' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_7" id="caregiving_type_7" value="{{ old( 'caregiving_type_7' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_7">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_7' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_8" id="caregiving_type_8" value="{{ old( 'caregiving_type_8' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_8">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_8' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_9" id="caregiving_type_9" value="{{ old( 'caregiving_type_9' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_9">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_9' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'caregiving_type', 'storeUser' ) is-invalid @enderror" name="caregiving_type_10" id="caregiving_type_10" value="{{ old( 'caregiving_type_10' ) }}" required />

                                        <label class="form-check-label" for="caregiving_type_10">@lang( 'titles.registration_phase_2.form.caregiving_type.caregiving_type_10' )</label>
                                    </div>

                                    @error( 'caregiving_type', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_1" id="qualifications_1" value="{{ old( 'qualifications_1' ) }}" required />

                                        <label class="form-check-label" for="qualifications_1">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_2" id="qualifications_2" value="{{ old( 'qualifications_2' ) }}" required />

                                        <label class="form-check-label" for="qualifications_2">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_3" id="qualifications_3" value="{{ old( 'qualifications_3' ) }}" required />

                                        <label class="form-check-label" for="qualifications_3">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_4" id="qualifications_4" value="{{ old( 'qualifications_4' ) }}" required />

                                        <label class="form-check-label" for="qualifications_4">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_5" id="qualifications_5" value="{{ old( 'qualifications_5' ) }}" required />

                                        <label class="form-check-label" for="qualifications_5">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_5' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_6" id="qualifications_6" value="{{ old( 'qualifications_6' ) }}" required />

                                        <label class="form-check-label" for="qualifications_6">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_6' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_7" id="qualifications_7" value="{{ old( 'qualifications_7' ) }}" required />

                                        <label class="form-check-label" for="qualifications_7">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_7' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_8" id="qualifications_8" value="{{ old( 'qualifications_8' ) }}" required />

                                        <label class="form-check-label" for="qualifications_8">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_8' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_9" id="qualifications_9" value="{{ old( 'qualifications_9' ) }}" required />

                                        <label class="form-check-label" for="qualifications_9">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_9' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_10" id="qualifications_10" value="{{ old( 'qualifications_10' ) }}" required />

                                        <label class="form-check-label" for="qualifications_10">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_10' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'qualifications', 'storeUser' ) is-invalid @enderror" name="qualifications_11" id="qualifications_11" value="{{ old( 'qualifications_11' ) }}" required />

                                        <label class="form-check-label" for="qualifications_11">@lang( 'titles.registration_phase_2.form.qualifications.qualifications_11' )</label>
                                    </div>

                                    @error( 'qualifications', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label" for="qualifications_text">@lang( 'titles.registration_phase_2.form.qualifications_text.qualifications_text_title_1' )</label>

                                        <p>@lang( 'titles.registration_phase_2.form.qualifications_text.qualifications_text_title_2' )</p>

                                        <textarea class="form-control" id="qualifications_text" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.animals.animals_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'animals', 'storeUser' ) is-invalid @enderror" name="animals_1" id="animals_1" value="{{ old( 'animals_1' ) }}" required />

                                        <label class="form-check-label" for="animals_1">@lang( 'titles.registration_phase_2.form.animals.animals_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'animals', 'storeUser' ) is-invalid @enderror" name="animals_2" id="animals_2" value="{{ old( 'animals_2' ) }}" required />

                                        <label class="form-check-label" for="animals_2">@lang( 'titles.registration_phase_2.form.animals.animals_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'animals', 'storeUser' ) is-invalid @enderror" name="animals_3" id="animals_3" value="{{ old( 'animals_3' ) }}" required />

                                        <label class="form-check-label" for="animals_3">@lang( 'titles.registration_phase_2.form.animals.animals_3' )</label>
                                    </div>

                                    @error( 'animals', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label" for="who">@lang( 'titles.registration_phase_2.form.who.who_title_1' )</label>

                                        <p>@lang( 'titles.registration_phase_2.form.who.who_title_2' )</p>

                                        <textarea class="form-control" id="who" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label" for="experience">@lang( 'titles.registration_phase_2.form.experience.experience_title_1' )</label>

                                        <p>@lang( 'titles.registration_phase_2.form.experience.experience_title_2' )</p>

                                        <textarea class="form-control" id="experience" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label" for="additional">@lang( 'titles.registration_phase_2.form.additional.additional_title_1' )</label>

                                        <p>@lang( 'titles.registration_phase_2.form.additional.additional_title_2' )</p>

                                        <textarea class="form-control" id="additional" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.hear.hear_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_1" id="hear_1" value="{{ old( 'hear_1' ) }}" required />

                                        <label class="form-check-label" for="hear_1">@lang( 'titles.registration_phase_2.form.hear.hear_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_2" id="hear_2" value="{{ old( 'hear_2' ) }}" required />

                                        <label class="form-check-label" for="hear_2">@lang( 'titles.registration_phase_2.form.hear.hear_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_3" id="hear_3" value="{{ old( 'hear_3' ) }}" required />

                                        <label class="form-check-label" for="hear_3">@lang( 'titles.registration_phase_2.form.hear.hear_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_4" id="hear_4" value="{{ old( 'hear_4' ) }}" required />

                                        <label class="form-check-label" for="hear_4">@lang( 'titles.registration_phase_2.form.hear.hear_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_5" id="hear_5" value="{{ old( 'hear_5' ) }}" required />

                                        <label class="form-check-label" for="hear_5">@lang( 'titles.registration_phase_2.form.hear.hear_5' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_6" id="hear_6" value="{{ old( 'hear_6' ) }}" required />

                                        <label class="form-check-label" for="hear_6">@lang( 'titles.registration_phase_2.form.hear.hear_6' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_7" id="hear_7" value="{{ old( 'hear_7' ) }}" required />

                                        <label class="form-check-label" for="hear_7">@lang( 'titles.registration_phase_2.form.hear.hear_7' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_8" id="hear_8" value="{{ old( 'hear_8' ) }}" required />

                                        <label class="form-check-label" for="hear_8">@lang( 'titles.registration_phase_2.form.hear.hear_8' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_9" id="hear_9" value="{{ old( 'hear_9' ) }}" required />

                                        <label class="form-check-label" for="hear_9">@lang( 'titles.registration_phase_2.form.hear.hear_9' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_10" id="hear_10" value="{{ old( 'hear_10' ) }}" required />

                                        <label class="form-check-label" for="hear_10">@lang( 'titles.registration_phase_2.form.hear.hear_10' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_11" id="hear_11" value="{{ old( 'hear_11' ) }}" required />

                                        <label class="form-check-label" for="hear_11">@lang( 'titles.registration_phase_2.form.hear.hear_11' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'hear', 'storeUser' ) is-invalid @enderror" name="hear_12" id="hear_12" value="{{ old( 'hear_12' ) }}" required />

                                        <label class="form-check-label" for="hear_12">@lang( 'titles.registration_phase_2.form.hear.hear_12' )</label>
                                    </div>

                                    @error( 'hear', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.type.type_title' ) <span class="text-color-danger font-size-2rem">*</span></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_1" id="type_1" value="{{ old( 'type_1' ) }}" required />

                                        <label class="form-check-label" for="type_1">@lang( 'titles.registration_phase_2.form.type.type_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_2" id="type_2" value="{{ old( 'type_2' ) }}" required />

                                        <label class="form-check-label" for="type_2">@lang( 'titles.registration_phase_2.form.type.type_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_3" id="type_3" value="{{ old( 'type_3' ) }}" required />

                                        <label class="form-check-label" for="type_3">@lang( 'titles.registration_phase_2.form.type.type_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_4" id="type_4" value="{{ old( 'type_4' ) }}" required />

                                        <label class="form-check-label" for="type_4">@lang( 'titles.registration_phase_2.form.type.type_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type', 'storeUser' ) is-invalid @enderror" name="type_5" id="type_5" value="{{ old( 'type_5' ) }}" required />

                                        <label class="form-check-label" for="type_5">@lang( 'titles.registration_phase_2.form.type.type_5' )</label>
                                    </div>

                                    @error( 'type', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p><strong>@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_title_2' )</strong></p>

                                        <p>@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_title_3' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_title_4' )</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_1" id="type_services_caregiver_1" value="{{ old( 'type_services_caregiver_1' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_1">@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_2" id="type_services_caregiver_2" value="{{ old( 'type_services_caregiver_2' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_2">@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_3" id="type_services_caregiver_3" value="{{ old( 'type_services_caregiver_3' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_3">@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_caregiver', 'storeUser' ) is-invalid @enderror" name="type_services_caregiver_4" id="type_services_caregiver_4" value="{{ old( 'type_services_caregiver_4' ) }}" required />

                                        <label class="form-check-label" for="type_services_caregiver_4">@lang( 'titles.registration_phase_2.form.type_services_caregiver.type_services_caregiver_4' )</label>
                                    </div>

                                    @error( 'type_services_caregiver', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <p><strong>@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_title_2' )</strong></p>

                                        <p>@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_title_3' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_title_4' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_title_5' )</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_1" id="type_services_companion_1" value="{{ old( 'type_services_companion_1' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_1">@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_2" id="type_services_companion_2" value="{{ old( 'type_services_companion_2' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_2">@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_2' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_3" id="type_services_companion_3" value="{{ old( 'type_services_companion_3' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_3">@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_3' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_4" id="type_services_companion_4" value="{{ old( 'type_services_companion_4' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_4">@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_4' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_5" id="type_services_companion_5" value="{{ old( 'type_services_companion_5' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_5">@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_5' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_6" id="type_services_companion_6" value="{{ old( 'type_services_companion_6' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_6">@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_6' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input @error( 'type_services_companion', 'storeUser' ) is-invalid @enderror" name="type_services_companion_7" id="type_services_companion_7" value="{{ old( 'type_services_companion_7' ) }}" required />

                                        <label class="form-check-label" for="type_services_companion_7">@lang( 'titles.registration_phase_2.form.type_services_companion.type_services_companion_7' )</label>
                                    </div>

                                    @error( 'type_services_companion', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label">@lang( 'titles.registration_phase_2.form.car.car_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p>@lang( 'titles.registration_phase_2.form.car.car_title_2' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.car.car_title_3' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.car.car_title_4' )</p>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'car', 'storeUser' ) is-invalid @enderror" name="car" id="car_1" value="{{ old( 'car_1' ) }}" required />

                                        <label class="form-check-label" for="car_1">@lang( 'titles.registration_phase_2.form.car.car_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input @error( 'car', 'storeUser' ) is-invalid @enderror" name="car" id="car_2" value="{{ old( 'car_2' ) }}" required />

                                        <label class="form-check-label" for="car_2">@lang( 'titles.registration_phase_2.form.car.car_2' )</label>
                                    </div>

                                    @error('car', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row form-row-profile-image appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <div class="form-check">
                                        <label class="form-check-label" for="profile_image">@lang( 'titles.registration_phase_2.form.profile_image.profile_image_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                        <p>@lang( 'titles.registration_phase_2.form.profile_image.profile_image_title_2' )</p>

                                        <p>@lang( 'titles.registration_phase_2.form.profile_image.profile_image_title_3' )</p>
                                    </div>

                                    <div class="form-check w-100">
                                        <input type="file" class="form-control-file" id="profile_image">

                                        <label class="form-check-label" for="profile_image">@lang( 'titles.registration_phase_2.form.profile_image.profile_image_1' )</label>
                                    </div>

                                    <div class="form-check form-check-inline w-25">
                                        <img class="w-100" src="{{ asset( 'website/assets/images/profile-image-correct.jpg' ) }}" />
                                    </div>

                                    <div class="form-check form-check-inline w-25">
                                        <img class="w-100" src="{{ asset( 'website/assets/images/profile-image-wrong.jpg' ) }}" />
                                    </div>

                                    @error('profile_image', 'storeUser')
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <label class="form-check-label" for="hourly_rate">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <p>@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_title_2' )</p>

                                    <div class="form-check w-100">
                                        <select name="hourly_rate" id="hourly_rate" class="form_control">
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_1' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_1' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_2' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_2' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_3' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_3' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_4' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_4' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_5' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_5' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_6' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_6' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_7' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_7' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_8' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_8' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_9' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_9' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_10' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_10' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_11' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_11' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_12' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_12' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_13' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_13' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_14' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_14' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_15' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_15' )</option>
                                            <option value="@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_16' )">@lang( 'titles.registration_phase_2.form.hourly_rate.hourly_rate_16' )</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <label class="form-check-label" for="covid_results">@lang( 'titles.registration_phase_2.form.covid_results.covid_results_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <p>@lang( 'titles.registration_phase_2.form.covid_results.covid_results_title_2' )</p>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <label class="form-check-label" for="banking">@lang( 'titles.registration_phase_2.form.banking.banking_title_1' )</label>

                                    <p>@lang( 'titles.registration_phase_2.form.banking.banking_title_2' )</p>

                                    <p>@lang( 'titles.registration_phase_2.form.banking.banking_title_3' )</p>

                                    <p>@lang( 'titles.registration_phase_2.form.banking.banking_title_4' )</p>

                                    <p>@lang( 'titles.registration_phase_2.form.banking.banking_title_5' )</p>

                                    <p>@lang( 'titles.registration_phase_2.form.banking.banking_title_6' )</p>

                                    <p>@lang( 'titles.registration_phase_2.form.banking.banking_title_7' )</p>

                                    <ul class="w-100 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                        <li><a href="https://bmo.intelliresponse.com/obs_eng/?requestType=NormalRequest&amp;source=3&amp;id=1868&amp;question=How+do+I+find+the+branch%2Ftransit+or+account+number" target="_blank">@lang( 'titles.registration_phase_2.form.banking.banking_1' )</a></li>

                                        <li><a href="https://www.cibc.com/en/personal-banking/ways-to-bank/how-to/transit-account-institution-number.html" target="_blank">@lang( 'titles.registration_phase_2.form.banking.banking_2' )</a></li>

                                        <li><a href="https://www.hsbc.ca/online-banking/payroll-direct-deposit/" target="_blank">@lang( 'titles.registration_phase_2.form.banking.banking_3' )</a></li>

                                        <li><a href="https://www.rbcroyalbank.com/onlinebanking/bankingusertips/account.html" target="_blank">@lang( 'titles.registration_phase_2.form.banking.banking_4' )</a></li>

                                        <li><a href="https://help.scotiabank.com/article/whats-my-transit-number" target="_blank">@lang( 'titles.registration_phase_2.form.banking.banking_5' )</a></li>

                                        <li><a href="https://www.tangerine.ca/en/faq/answer?permaLink=what-are-the-tangerine-bank-transit-and-institution-numbers--generic-phone--en--0--1&amp;responseId=219--GoGaau8TXgvFqrkV93P2GwDNLH3eoKUW" target="_blank">@lang( 'titles.registration_phase_2.form.banking.banking_6' )</a></li>

                                        <li><a href="https://www.td.com/ca/en/investing/search/?query=How%20do%20I%20find%20my%20transit%20number%2C%20institution%20number%20and%20account%20number%3F&amp;preExpand=true&amp;source=100#:~:text=If%20you%20don't%20have%20a%20cheque%2C%20the%20easiest%20way,and%207%2Ddigit%20Account%20number" target="_blank">@lang( 'titles.registration_phase_2.form.banking.banking_7' )</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-md-3">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.banking.bank_name_1' )</label>

                                    <input type="text" class="form-control @error( 'bank_name', 'storeUser' ) is-invalid @enderror" name="bank_name" id='bank_name' value="{{ old( 'bank_name' ) }}" required />

                                    @error( 'bank_name', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.banking.bank_name_2' )</label>

                                    <input type="text" class="form-control @error( 'bank_institution', 'storeUser' ) is-invalid @enderror" name="bank_institution" id='bank_institution' value="{{ old( 'bank_institution' ) }}" required />

                                    @error( 'bank_institution', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.banking.bank_name_3' )</label>

                                    <input type="text" class="form-control @error( 'transit_no', 'storeUser' ) is-invalid @enderror" name="transit_no" id='transit_no' value="{{ old( 'transit_no' ) }}" required />

                                    @error( 'transit_no', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.banking.bank_name_4' )</label>

                                    <input type="text" class="form-control @error( 'account_no', 'storeUser' ) is-invalid @enderror" name="account_no" id='account_no' value="{{ old( 'account_no' ) }}" required />

                                    @error( 'account_no', 'storeUser' )
                                        <div class="text-color-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.consent.consent_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <div class="form-check w-100 text-center">
                                        <input type="checkbox" class="form-check-input @error( 'consent', 'storeUser' ) is-invalid @enderror" name="consent" id="consent" value="{{ old( 'consent' ) }}" required />

                                        <label class="form-check-label form-check-label-checkbox w-100" for="consent">
                                            <span>@lang( 'titles.registration_phase_2.form.consent.consent_title_2' )</span>

                                            <span class="d-block font-weight-bold text-decoration-underline">@lang( 'titles.registration_phase_2.form.consent.consent_title_3' )</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                <div class="form-group col-lg-12">
                                    <label class="form-check-label">@lang( 'titles.registration_phase_2.form.stripe.stripe_title_1' ) <span class="text-color-danger font-size-2rem">*</span></label>

                                    <div class="form-check w-100 text-center">
                                        <input type="checkbox" class="form-check-input @error( 'stripe', 'storeUser' ) is-invalid @enderror" name="stripe" id="stripe" value="{{ old( 'stripe' ) }}" required />

                                        <label class="form-check-label form-check-label-checkbox w-100" for="stripe">@lang( 'titles.registration_phase_2.form.stripe.stripe_title_2' )</label>
                                    </div>

                                    <ul>
                                        <li><a target="_blank" href="https://stripe.com/legal">@lang( 'titles.registration_phase_2.form.stripe.stripe_title_3' )</a></li>

                                        <li><a target="_blank" href="https://stripe.com/connect-account/legal">@lang( 'titles.registration_phase_2.form.stripe.stripe_title_4' )</a></li>
                                    </ul>
                                </div>
                            </div>

                            @if( env( 'DOWN_PAYMENT' ) !== true )
                                <div class="form-row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    <div class="form-group col-md-12 justify-content-center">
                                        <button type="submit" class="btn btn-success">@lang( 'titles.registration_phase_2.form.submit' )</button>
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
