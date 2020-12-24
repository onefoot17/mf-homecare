@section( 'title' ) {{ $title ?? __( 'Caregiver and Companionship Services for the Elderly - MF Homecare' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'content' )
    <div role="main" class="main">
        {{-- Slider --}}
        @include( 'website/layouts/components/slider' )

        <div class="mf__section mf__features mf__features--benefits" id="main">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 mx-md-auto">
                        <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('titles.client_benefits')</h1>

                        <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>
                </div>

                <div class="mf__features__row">
                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Choice-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.choice')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.choice')</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Control-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.control')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.control')</p>
                            </div>
                        </div>
                    </div>


                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Lower-Cost-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.lower_costs')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.lower_costs')</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Consistency-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.consistency')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.consistency')</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Quality-V5-Separate.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.quality')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.quality')</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Live-In-Homecare-V4.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.live_in_home')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.live_in_homecare')</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/24-Hour-Live-In-Care-V3.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.overnight_care')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.overnight_care')</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Tracking-&-Location-App.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.location_tracking')</h4>

                                <p class="mf__features__feature__copy">@lang('texts.location_tracking')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mf__section mf__features mf__features--services">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 mx-md-auto">
                        <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('titles.caregiver_and_companion_services')</h1>

                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('texts.caregiver_and_companion_services')</p>

                        <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>
                </div>

                <div class="mf__features__row">
                    <div class="mf__features__row__column mf__features__row__column--first">
                        <h2 class="mf__features__h2 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('titles.caregiver_services')</h2>

                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('texts.caregiver_and_companion_services')</p>

                        <div class="mf__separator mf__separator--small appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/sampoo.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.bathing_and_personal_grooming')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/bathtub.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.bathroom_and_continence_care')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/yoga.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.exercise_and_mobility')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/pills.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.medication_reminder')</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mf__features__row">
                    <div class="mf__features__row__column mf__features__row__column--first">
                        <h2 class="mf__features__h2 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('titles.companion_services')</h2>

                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('texts.companion_services')</p>

                        <div class="mf__separator mf__separator--small appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/eat.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.feeding')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/lunch.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.helping_with_meal_preparation')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/washing.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.light_housework')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/walk.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.going_out_for_walks')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/walking.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.running_errands')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/car.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.trip_to_appointments_or_other_outings_by_car')</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/volunteer.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">@lang('titles.Someone_to_spend_time')</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mf__section mf__video appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="row text-center">
                <div class="container mx-md-auto">
                    <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang('titles.watch_our_video')</h1>

                    <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                    <video class="mf__video__video" src="{{ asset( 'website/assets/video/MF-Homecare-homepage-video-90secs.mp4' ) }}" controls poster="{{ asset( 'website/assets/video/MF-Homecare-homepage-video.jpg' ) }}"></video>
                </div>
            </div>
        </section>

        <section class="mf__section mf__register__buttons appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="row text-center">
                <div class="mf__register__buttons__inner container mx-md-auto">
                    <section class="mf__register__buttons__col">
                        <h3 class="mf__heading-3">@lang('titles.register_as_a_caregiver')</h3>

                        <div class="mf__register__buttons__info">
                            <p class="mf__register__buttons__p">@lang('texts.register_as_a_caregiver')</p>

                            <a class="mf__register__buttons__button btn btn-info" href="#">@lang('titles.register_as_a_caregiver')</a>
                        </div>
                    </section>

                    <section class="mf__register__buttons__col">
                        <h3 class="mf__heading-3">@lang('titles.register_as_a_client')</h3>

                        <div class="mf__register__buttons__info">
                            <p class="mf__register__buttons__p">@lang('texts.register_as_a_client')</p>

                            <a class="mf__register__buttons__button btn btn-info" href="#">@lang('titles.register_as_a_client')</a>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@stop
