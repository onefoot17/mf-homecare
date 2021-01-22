@section( 'title' )
    @php $title = __( 'Privacy Policy' ) @endphp

    {{ '' . $title }}
@stop

@extends( 'website.layouts.main' )

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

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_1_heading' )</h1>

                        <div class="mf__separator mx-auto"></div>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.last_updated' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.these_terms' )</p>

                        <p>@lang( 'texts.privacy_policy.if_you' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_2_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.mf_homecare' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_3_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.mf_homecare_grants' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_4_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.to_be' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_5_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.to_access' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_6_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.caregivers_and' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.mf_homecare_charges' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.clients' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.mf_homecare_adds' )</p>

                        <p>@lang( 'texts.privacy_policy.users_agree' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_7_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.these_terms' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_8_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.as_a' )</p>

                        <p>@lang( 'texts.privacy_policy.you_have' )</p>

                        <p>@lang( 'texts.privacy_policy.you_will' )</p>

                        <p>@lang( 'texts.privacy_policy.you_will_not' )</p>

                        <p>@lang( 'texts.privacy_policy.your_use' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_9_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.mf_homecare_hereby' )</p>

                        <p>@lang( 'texts.privacy_policy.these_terms_of' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_10_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.we_provide' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_11_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.the_platform' )</p>

                        <p>@lang( 'texts.privacy_policy.mf_homecare_reserves' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_12_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.all_brands' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_13_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.in_addition' )</p>

                        <p>@lang( 'texts.privacy_policy.the_website' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_14_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.mf_homecare_reserves_the' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_15_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.you_acknowledge' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_16_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.you_agree_to_indemnify' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_17_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.it_is_the_express' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_18_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.these_terms_of_use' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_19_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.mf_homecare_may_revise' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_20_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.the_links' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_21_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.you_understand' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.section_22_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.if_you_have' )</p>

                        <p>@lang( 'texts.privacy_policy.copyright' )</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
