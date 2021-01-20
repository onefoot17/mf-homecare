@section( 'title' )
    @php $title = __( 'Thank you for Registering' ) @endphp

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

        <section class="mf__section">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'texts.thank_you_phase_1.thank_you' )</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'texts.thank_you_phase_1.you_will' )</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'texts.thank_you_phase_1.after_your' )</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'texts.thank_you_phase_1.mf_homecare' )</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
