@section( 'title' )
    @php $title = __( 'How We Work' ) @endphp

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
                        <h2 class="word-rotator slide text-center">@lang( 'titles.how_we_work.section_1_heading' )</h1>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.how_we_work.we_connect' )</p>

                        <p>@lang( 'texts.how_we_work.we_divide' )</p>

                        <p>@lang( 'texts.how_we_work.we_require' )</p>

                        <p>@lang( 'texts.how_we_work.prior_to' )</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide text-center">@lang( 'titles.how_we_work.section_2_heading' )</h3>

                        <div class="mf__separator mx-auto"></div>

                        <p>@lang( 'texts.how_we_work.registering_as' )</p>

                        <p>@lang( 'texts.how_we_work.registration_as' )</p>

                        <p>@lang( 'texts.how_we_work.you_will' )</p>

                        <p>@lang( 'texts.how_we_work.since_we' )</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
