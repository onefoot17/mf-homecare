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

                        @lang( 'texts.privacy_policy.we_are_committed' )

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.the_basis' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        @lang( 'texts.privacy_policy.mf_homecare_processes' )
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

                        <p>@lang( 'texts.privacy_policy.from_time' )</p>
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

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.2_1' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.personal_information' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.2_2' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.before_disclosing' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.2_3' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.if_you_are_using' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.2_4' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.we_may_collect' )</p>
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

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.3_1' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.we_and_our' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.3_2' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.we_and_our_2' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.privacy_policy.3_3' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.privacy_policy.where_you_have' )</p>
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

                        <p>@lang( 'texts.privacy_policy.the_platform' )</p>
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

                        <p>@lang( 'texts.privacy_policy.subject_to' )</p>
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

                        <p>@lang( 'texts.privacy_policy.certain_parts' )</p>
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

                        <p>@lang( 'texts.privacy_policy.our_service' )</p>
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

                        <p>@lang( 'texts.privacy_policy.your_personal' )</p>
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

                        <p>@lang( 'texts.privacy_policy.access_you' )</p>
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

                        <p>@lang( 'texts.privacy_policy.our_website_platform' )</p>
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

                        <p>@lang( 'texts.privacy_policy.if_you_have_2' )</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
