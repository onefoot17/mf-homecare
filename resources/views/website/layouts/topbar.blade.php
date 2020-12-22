<header id="header" class="header-narrow header-below-slider" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
	<div class="header-body border-0 box-shadow-none bg-dark">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column header-column-logo d-lg-none">
					<div class="header-row mt-2">
						<div class="header-logo">
							<a href="index.html">
                                <img class="top-4" alt="MF Homecare Logo" {{--width="82" height="17"--}} src="{{ asset( 'assets/images/MF-Homecare-Logo-white.png' ) }}" />
							</a>
						</div>
					</div>
                </div>

                @include( 'website.layouts.topnav' )
			</div>
		</div>
	</div>
</header>
