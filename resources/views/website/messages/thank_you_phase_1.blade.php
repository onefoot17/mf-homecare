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
                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Thank you for completing Phase 1 of the Caregiver Registration process with MF Homecare.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">You will receive an email momentarily from our partner <strong> Certn</strong>, who will process your Background Check. Please follow the instructions in that email in order to proceed with and complete your background check.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">After your Background Check is complete, and if itś successful, please refer back to the email received from MF Homecare and click on the button to continue your registration with Phase 2.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><strong>MF Homecare Team</strong></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
