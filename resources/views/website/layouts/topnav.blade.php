<div class="header-column justify-content-center header-column-nav">
    <div class="header-row">
        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1 justify-content-center">
            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                <nav class="collapse">
                    <ul class="mf__nav nav nav-pills justify-content-center" id="mainNav">
                        @if ( Auth::check() && preg_match( '/vcompinc.com/', Auth::user()->email ) )
                            <li class="dropdown mf__nav-item-con">
                                <a data-hash class="mf__nav-item dropdown-item dropdown-toggle active" href="#home">
                                    Home
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('admin_home', [ Request::segment( 1 ) ] ) }}" class="dropdown-item" data-hash data-hash-offset="68">
                                            <i class="fas fa-home mr-1"></i> @lang( 'Admin' )
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" data-hash data-hash-offset="68" href="{{ env( 'APP_URL' ) }}website/porto/index.html" target="_blank">
                                            <i class="fas fa-asterisk"></i> @lang( 'Default Template' )
                                        </a>
                                    </li>
                                </ul>
                            @endif
                        </li>

                        <li class="mf__nav-item-con">
                            <a class="mf__nav-item" href="index.html">How We Work</a>
                        </li>

                        <li class="mf__nav-item-con">
                            <a class="mf__nav-item" href="elements.html">Register as a Caregiver</a>
                        </li>

                        <li class="mf__nav-item-con">
                            <a class="mf__nav-item" href="#">Register as a Client</a>
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

<div class="header-column justify-content-end header-column-log-in-out">
    <div class="header-row">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="javascript:void(0);" class="btn btn-info navbar-btn" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fe-log-out"></i>

                    <span class="nav-link-log-in-out-text">{{ __( 'Logout' ) }}</span>
                </a>
            </form>
        @else
            <a href="{{ route( 'login' ) }}" class="btn btn-info navbar-btn">
                <i class="fe-log-in"></i>

                <span class="nav-link-log-in-out-text">Login</span>
            </a>
        @endauth
    </div>
</div>