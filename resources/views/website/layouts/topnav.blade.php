<div class="header-column header-column-nav justify-content-center align-items-end">
    <div class="header-nav justify-content-lg-center p-0">
        <div class="header-nav header-nav-links header-nav-light-text">
            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1 header-nav-main-mobile-dark">
                <nav class="collapse">
                    <ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
                        <li class="dropdown order-1">
                            <a class="dropdown-item" data-hash data-hash-offset="92" href="#reservations">Register as a Caregiver</a>
                        </li>

                        <li class="dropdown order-2 flex-shrink-0">
                            <a class="dropdown-item" data-hash data-hash-offset="92" href="#menu">Register as a Client</a>
                        </li>

                        <li class="align-items-center d-none d-lg-flex order-3">
                            <span class="header-logo">
                                <a href="{{ route( 'index', [ Request::segment( 1 ) ] ) }}" class="header-logo-inner w-100 text-center">
                                    <img
                                        alt="MF Homecare Logo"
                                        width="150"
                                        height="31"
                                        data-sticky-width="150"
                                        data-sticky-height="31"
                                        data-sticky-top="0"
                                        src="{{ asset( 'assets/images/MF-Homecare-Logo-white.png' ) }}"
                                        class="appear-animation animated fadeInUp appear-animation-visible"
                                        data-appear-animation="fadeInUp"
                                        data-appear-animation-delay="7000"
                                        data-appear-animation-duration="2s"
                                        style="animation-duration: 2s; animation-delay: 7000ms;"
                                    />
                                </a>
                            </span>
                        </li>

                        <li class="dropdown order-4">
                            <a class="dropdown-item" data-hash data-hash-offset="92" href="#about">How We Work</a>
                        </li>

                        <li class="dropdown order-5">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="fe-log-out"></i>

                                        {{ __( 'Logout' ) }}
                                    </a>
                                </form>
                            @else
                                <a href="{{ route( 'login' ) }}" class="dropdown-item">
                                    <i class="fe-log-in"></i> Login
                                </a>
                            @endauth

                            <ul class="dropdown-menu">
                                <li class="dropdown-log-in-out">
                                    <a class="dropdown-item" data-hash data-hash-offset="92" href="{{ route('admin_home', [ Request::segment( 1 ) ] ) }}">
                                        <i class="fas fa-home mr-1"></i> @lang( 'Admin' )
                                    </a>
                                </li>

                                @if ( Auth::check() && preg_match( '/vcompinc.com/', Auth::user()->email ) )
                                    <li>
                                        <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ env( 'APP_URL' ) }}website/porto/index.html" target="_blank">
                                            <i class="fas fa-asterisk"></i> @lang( 'Default Template' )
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</div>

{{-- <div class="header-column justify-content-end d-none d-lg-flex"></div> --}}

<div class="header-column justify-content-end header-column-log-in-out">
    <div class="header-row">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="javascript:void(0);" class="btn navbar-btn" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fe-log-out"></i>

                    <span class="header-column-log-in-out-text">{{ __( 'Logout' ) }}</span>
                </a>
            </form>
        @else
            <a href="{{ route( 'login' ) }}" class="btn navbar-btn">
                <i class="fe-log-in"></i>

                <span class="header-column-log-in-out-text">Login</span>
            </a>
        @endauth
    </div>
</div>
