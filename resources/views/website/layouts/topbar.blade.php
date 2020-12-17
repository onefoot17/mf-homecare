<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="mf__header-body header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column header-column-logo">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="MF Homecare Logo" src="{{ asset( 'assets/images/MF-Homecare-Logo-white.png' ) }}" />
                            </a>
                        </div>

                        {{-- <div class="mf__logo-con header-logo">
                            <a class="mf__logo-inner mf__logo-inner--desktop" href="index.html"></a>
                        </div> --}}
                    </div>
                </div>

                @include( 'website.layouts.topnav' )
            </div>
        </div>
    </div>
</header>
