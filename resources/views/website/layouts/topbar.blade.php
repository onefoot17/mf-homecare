<header id="header" class="header-narrow header-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
	<div class="header-body border-0 box-shadow-none bg-dark">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column header-column-logo d-lg-none">
					<div class="header-row">
						<div class="header-logo">
							<a class="header-logo-inner" href="index.html">
                                {{-- <img class="top-4" alt="MF Homecare Logo" src="{{ asset( 'assets/images/MF-Homecare-Logo-white.png' ) }}" /> --}}

                                {{-- <img class="top-4" alt="MF Homecare Logo" width="82" height="17" src="{{ asset( 'assets/images/MF-Homecare-Logo-white.png' ) }}" /> --}}

                                <img
                                    alt="MF Homecare Logo"
                                    src="{{ asset( 'assets/images/MF-Homecare-Logo-white.png' ) }}"
                                    class="appear-animation animated fadeInUp appear-animation-visible"
                                    data-appear-animation="fadeInUp"
                                    data-appear-animation-delay="7000"
                                    data-appear-animation-duration="2s"
                                    style="animation-duration: 2s; animation-delay: 7000ms;"
                                />
							</a>
						</div>
					</div>
                </div>

                @include( 'website.layouts.topnav' )
			</div>
		</div>
	</div>
</header>
