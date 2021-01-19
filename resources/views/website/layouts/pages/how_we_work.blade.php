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

        <section class="mf__section">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'titles.registration_phase_1.Become_Caregivers' )</h1>

                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">We connect Clients with Caregivers using our Online Platform, available as website and mobile application for iOS and Android smartphones. After registration, Clients provide their care requirements, and our system searches for the Caregivers whose skills and availability match the Client's requirements.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">We divide Caregivers into two types: Caregivers and Companions. Caregivers provide specialized services such as bathing, physical therapy and medication reminder. Companions provide services for emotional support, conversation, light chores around the house, help with trips and appointments, etc.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">We require all our Caregivers and Companions to pass through a rigorous registration process, including a Background and Identity Check, in order to validate that they can be trusted with Clients' needs and that they have the necessary experience and qualifications.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Prior to an appointment, our location tracking tool shows the Caregiver’s location on their way to and during the appointment. So that whether the appointment is for you or a loved one, you can rest assured that everything is going smoothly.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mf__section mf__section--purple">
            <div class="container-xl mf__content">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h3 class="word-rotator slide appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">@lang( 'titles.how_we_work.Section_2_Heading' )</h3>

                        <div class="mf__separator appear-animation mx-auto" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Registering as a Client is very simple and user-friendly. Once you have created your profile, simply log in and search for the Caregiver you need!</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Registration as a Client is simple and easy with MF Homecare. Once you provide all the necessary information, you can book an appointment with your chosen Caregiver. Payment will be processed via Credit Card on the day of the appointment.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">You will be able to contact and communicate with your chosen Caregiver as soon as the appointment is booked.</p>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Since we don't have to deal with the overhead and expenses of a traditional homecare agency, we pass these savings directly to you. This also allows our Caregivers to earn more and be more flexible. We firmly believe that our clients and their families are the authority on their own care and companionship needs. We give you the tools to Manage your own Family Homecare!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
