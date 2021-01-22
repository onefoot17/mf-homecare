@section( 'title' )
    @php $title = __( 'Cancellation Policy' ) @endphp

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
                        <h2 class="word-rotator slide text-center">@lang( 'titles.cancellation_policy.section_1_heading' )</h1>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.cancellation_policy.our_goal' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--maroon appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.cancellation_policy.section_2_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.cancellation_policy.caregiver_when_you' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.cancellation_policy.late_cancellations' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.cancellation_policy.caregiver_a_cancellation' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.cancellation_policy.section_3_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.cancellation_policy.client_when_you' )</p>

                        <h4 class="word-rotator slide text-center">@lang( 'titles.cancellation_policy.late_cancellations' )</h4>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.cancellation_policy.client_a_cancellation' )</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
