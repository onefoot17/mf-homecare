@section( 'title' ) {{ $title ?? __( 'Caregiver and Companionship Services for the Elderly - MF Homecare' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
@stop

@section( 'content' )
    <div role="main" class="main">

        {{-- Slider --}}
        @include( 'website/layouts/components/slider' )

        <div class="mf__section mf__features mf__features--benefits" id="main">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 mx-md-auto">
                        <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Client Benefits</h1>

                        <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>
                </div>

                <div class="mf__features__row">
                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Choice-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Choice</h4>

                                <p class="mf__features__feature__copy">Our system matches you with the nearest possible Caregivers who can provide the care you need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Control-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Control</h4>

                                <p class="mf__features__feature__copy">We give you the tools and technology that make it easy to coordinate your homecare from scheduling to payment.</p>
                            </div>
                        </div>
                    </div>


                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Lower-Cost-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Lower Costs</h4>

                                <p class="mf__features__feature__copy">Our system matches you with the nearest possible Caregivers who can provide the care you need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Consistency-V2.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Consistency</h4>

                                <p class="mf__features__feature__copy">Like the Caregiver you’ve chosen? Book them again and again to build a bond with someone who knows your needs and routines.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Quality-V5-Separate.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Quality</h4>

                                <p class="mf__features__feature__copy">Good care is about more than just qualifications. Our system lets us register Caregivers based on personality, values, experience, and compassion.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Live-In-Homecare-V4.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Live-In Homecare</h4>

                                <p class="mf__features__feature__copy">Live-in care can be a cost-effective alternative to a seniors’ residence that preserves independence and a familiar home.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/24-Hour-Live-In-Care-V3.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Overnight Care</h4>

                                <p class="mf__features__feature__copy">Sleep securely with the knowledge that a Caregiver is close at hand in the home.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/Tracking-&-Location-App.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Location Tracking</h4>

                                <p class="mf__features__feature__copy">Our app helps you keep track of your loved ones during their appointment with the Caregiver.</p>
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
                        <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Caregiver and Companion Services</h1>

                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Our system connects you both with specialized Caregivers and with Companions, depending on your needs.</p>

                        <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>
                </div>

                <div class="mf__features__row">
                    <div class="mf__features__row__column mf__features__row__column--first">
                        <h2 class="mf__features__h2 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Caregiver Services</h2>

                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Only Caregivers who submit the required qualification documents can provide these services.</p>

                        <div class="mf__separator mf__separator--small appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/sampoo.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Bathing and Personal Grooming</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/bathtub.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Bathroom and Continence Care</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/yoga.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Exercise and Mobility</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/pills.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Medication Reminder</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mf__features__row">
                    <div class="mf__features__row__column mf__features__row__column--first">
                        <h2 class="mf__features__h2 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Companion Services</h2>

                        <p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">If you provide these services, you will be classified as a Companion.</p>

                        <div class="mf__separator mf__separator--small appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/eat.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Feeding</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/lunch.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Helping with Meal Preparation</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/washing.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Light Housework</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/walk.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Going out for Walks</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/walking.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Running Errands</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/car.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Trip to appointments or other outings by car</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <div class="mf__features__feature">
                            <div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'website/assets/images/icons/volunteer.png' ) }}')"></div>

                            <div class="mf__features__feature__info">
                                <h4 class="mf__features__feature__heading">Someone to spend time with and Emotional Support</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mf__section mf__video appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="row text-center">
                <div class="container mx-md-auto">
                    <h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Watch our Video</h1>

                    <div class="mf__separator appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"></div>

                    <video class="mf__video__video" src="{{ asset( 'website/assets/video/MF-Homecare-homepage-video.mp4' ) }}" controls poster="{{ asset( 'website/assets/video/MF-Homecare-homepage-video.jpg' ) }}"></video>
                </div>
            </div>
        </section>

        <section class="mf__section mf__register__buttons appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="row text-center">
                <div class="mf__register__buttons__inner container mx-md-auto">
                    <section class="mf__register__buttons__col">
                        <h3 class="mf__heading-3">Register As A Caregiver</h3>

                        <div class="mf__register__buttons__info">
                            <p class="mf__register__buttons__p">Complete our background check process and submit any qualification documents to ensure that your profile is available when clients start searching!</p>

                            <a class="mf__register__buttons__button" href="#">Register As A Caregiver</a>
                        </div>
                    </section>

                    <section class="mf__register__buttons__col">
                        <h3 class="mf__heading-3">Register As A Client</h3>

                        <div class="mf__register__buttons__info">
                            <p class="mf__register__buttons__p">Sign up as part of our soft launch process to let us know what kind of care you’re looking for!</p>

                            <a class="mf__register__buttons__button" href="#">Register As A Client</a>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>

    @include( 'website.layouts.footernav' )
@stop

@section( 'footer-scripts' )
@stop
