<footer id="footer" class="mf__footer mt-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
    <div class="container-xl mx-md-auto">
        <div class="row">
            <div class="mf__footer__col">
                <ul class="mf__footer__col__inner">
                    <li class="mf__footer__col__inner__li">
                        <h4 class="mf__footer__col__inner__heading">{{ env( 'APP_NAME' ) }}</h4>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="{{ route( 'how_we_work', Request::segment( 1 ) ) }}">@lang( 'titles.footer.how_we_work' )</a>
                        </p>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="{{ route( 'caregiver_registration_phase_1', Request::segment( 1 ) ) }}">@lang( 'titles.footer.register_as_a_caregiver' )</a>
                        </p>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="#">@lang( 'titles.footer.register_as_a_client' )</a>
                        </p>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="{{ route( 'contact_us', Request::segment( 1 ) ) }}">@lang( 'titles.footer.contact_us' )</a>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="mf__footer__col">
                <ul class="mf__footer__col__inner">
                    <li class="mf__footer__col__inner__li">
                        <h4 class="mf__footer__col__inner__heading">@lang( 'titles.footer.information' )</h4>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="https://certn.co/home-us/" target="_blank">@lang( 'titles.footer.identity_background_check' )</a>
                        </p>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="{{ route( 'cancellation_policy', Request::segment( 1 ) ) }}">@lang( 'titles.footer.cancellation_policy' )</a>
                        </p>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="{{ route( 'terms_conditions', Request::segment( 1 ) ) }}">@lang( 'titles.footer.terms_conditions' )</a>
                        </p>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <p class="mf__footer__col__inner__p">
                            <a class="mf__footer__col__inner__link" href="{{ route( 'privacy_policy', Request::segment( 1 ) ) }}">@lang( 'titles.footer.privacy_policy' )</a>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="mf__footer__col">
                <ul class="mf__footer__col__inner">
                    <li class="mf__footer__col__inner__li">
                        <h4 class="mf__footer__col__inner__heading">@lang( 'titles.footer.coming_soon' )</h4>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <a class="mf__app-icons-con" href="">
                            <img class="mf__app-icons" src="{{ asset( 'website/assets/images/Available-on-the-App-Store.png' ) }}" />
                        </a>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <a class="mf__app-icons-con" href="">
                            <img class="mf__app-icons" src="{{ asset( 'website/assets/images/Get-it-on-Google-Play.png' ) }}" />
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mf__footer__col mf__footer__col--socials">
                <ul class="mf__footer__col__inner mf__footer__col__inner--socials">
                    <li class="mf__footer__col__inner__li">
                        <h4 class="mf__footer__col__inner__heading">@lang( 'titles.footer.socials' )</h4>
                    </li>

                    <li class="mf__footer__col__inner__li">
                        <a class="mf__footer__col__inner__link" href="https://www.facebook.com/MF-Homecare-605935703398156/" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a class="mf__footer__col__inner__link" href="https://www.instagram.com/mfhomecare/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a class="mf__footer__col__inner__link" href="https://www.youtube.com/channel/UCx1ez53NkkysN5lPVF2af7A" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
