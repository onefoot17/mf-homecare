<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">
		<!-- Jomolhari -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Jomolhari&display=swap" rel="stylesheet">
		<!-- Roboto -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('porto/templates/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('porto/templates/css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('porto/templates/vendor/circle-flip-slideshow/css/component.css')}}">
		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('porto/templates/css/skins/default.css')}}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('porto/templates/css/custom.css')}}">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset( 'css/frontend.css' ) }}">

		<!-- Head Libs -->
		<script src="{{asset('porto/templates/vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body class="loading-overlay-showing @if ( !empty( Request::segment( 2 ) ) ) mf__{{ Request::segment( 2 ) }}@endif @if ( !empty( Request::segment( 3 ) ) ) mf__{{ Request::segment( 3 ) }}@endif" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="mf__header-body header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="mf__logo-con header-logo">
										<a class="mf__logo mf__logo--desktop" href="index.html">
											<!-- <img class="" alt="MF Homecare Logo" src="{{ asset( 'frontend/template/assets/img/MF-Homecare-Logo-white.png' ) }}"> -->
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="mf__nav nav nav-pills" id="mainNav">
													<li class="">
														<a class="mf__nav-item active" href="index.html">How We Work</a>
													</li>
													<li class="">
														<a class="mf__nav-item" href="elements.html">Register as a Caregiver</a>
													</li>
													<li class="">
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
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<section class="mf__homepage-video section border-0 video overlay overlay-show overlay-op-8 m-0" data-video-path="frontend/template/assets/video/MF-Homecare-homepage-video" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
					<div class="container position-relative z-index-3 h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<h1 class="mf__homepage-video__heading-1 position-relative text-color-light font-weight-medium px-4 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">Managing Family Homecare</h1>

									<h2 class="mf__homepage-video__heading-2 text-color-light appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Affordable and Convenient</h2>

									<!-- <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Get Started - Register as a Caregiver</p> -->

									<a href="#" class="mf__homepage-video__heading-3" role="button">Get Started - Register as a Caregiver!</a>
								</div>
							</div>
						</div>

						<a href="#main" class="slider-scroll-button position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="80">Sroll To Bottom</a>
					</div>
				</section>

				<div class="mf__features container" id="main">
					<div class="row text-center pt-5 pb-4 mt-5 mb-4">
						<div class="col-md-10 mx-md-auto">
							<h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter">Client Benefits</h1>

							<p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Service</p>

							<div class="mf__separator"></div>
						</div>
					</div>

					<div class="mf__features__row">
						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/Choice-V2.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Choice</h4>
									
									<p class="mf__feature__copy">Our system matches you with the nearest possible Caregivers who can provide the care you need.</p>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/Control-V2.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Control</h4>
									
									<p class="mf__feature__copy">We give you the tools and technology that make it easy to coordinate your homecare from scheduling to payment.</p>
								</div>
							</div>
						</div>


						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/Lower-Cost-V2.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Lower Costs</h4>
									
									<p class="mf__feature__copy">Our system matches you with the nearest possible Caregivers who can provide the care you need.</p>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/Consistency-V2.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Consistency</h4>
									
									<p class="mf__feature__copy">Like the Caregiver you’ve chosen? Book them again and again to build a bond with someone who knows your needs and routines.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="mf__features__row">
						<div class="appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/Quality-V5-Separate.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Quality</h4>
									
									<p class="mf__feature__copy">Good care is about more than just qualifications. Our system lets us register Caregivers based on personality, values, experience, and compassion.</p>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/Live-In-Homecare-V4.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Live-In Homecare</h4>
									
									<p class="mf__feature__copy">Live-in care can be a cost-effective alternative to a seniors’ residence that preserves independence and a familiar home.</p>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/24-Hour-Live-In-Care-V3.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Overnight Care</h4>
									
									<p class="mf__feature__copy">Sleep securely with the knowledge that a Caregiver is close at hand in the home.</p>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/Tracking-&-Location-App.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Location Tracking</h4>
									
									<p class="mf__feature__copy">Our app helps you keep track of your loved ones during their appointment with the Caregiver.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row text-center">
						<div class="col-md-10 mx-md-auto">
							<h1 class="mf__features__h1 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter">Caregiver and Companion Services</h1>

							<p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Our system connects you both with specialized Caregivers and with Companions, depending on your needs.</p>

							<div class="mf__separator"></div>
						</div>
					</div>

					<div class="mf__features__row">
						<div class="mf__features__row__column mf__features__row__column--first">
							<h2 class="mf__features__h2 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter">Caregiver Services</h2>

							<p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Only Caregivers who submit the required qualification documents can provide these services.</p>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/sampoo.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Bathing and Personal Grooming</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/bathtub.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Bathroom and Continence Care</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/yoga.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Exercise and Mobility</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/pills.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Medication Reminder</h4>
								</div>
							</div>
						</div>
					</div>

					<div class="mf__features__row">
						<div class="mf__features__row__column mf__features__row__column--first">
							<h2 class="mf__features__h2 word-rotator slide appear-animation" data-appear-animation="fadeInUpShorter">Companion Services</h2>

							<p class="mf__features__p appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">If you provide these services, you will be classified as a Companion.</p>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/eat.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Feeding</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/lunch.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Helping with Meal Preparation</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/washing.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Light Housework</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/walk.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Going out for Walks</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/walking.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Running Errands</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/car.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Trip to appointments or other outings by car</h4>
								</div>
							</div>
						</div>

						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
							<div class="mf__feature">
								<div class="mf__feature__icon-con">
									<img class="mf__feature__icon" src="{{ asset( 'frontend/template/assets/img/icons/volunteer.png' ) }}" />
								</div>

								<div class="mf__feature__info">
									<h4 class="mf__feature__heading">Someone to spend time with and Emotional Support</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section bg-dark border-0 m-0">
					<div class="container">
						<div class="row my-5">
							<div class="col-lg-6 pr-5">
								<h2 class="text-color-light font-weight-normal text-6 mb-2 pb-1"><strong class="font-weight-extra-bold">Who</strong> We Are</h2>
								<p class="lead text-color-light opacity-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscing.</p>
								<p class="text-color-light opacity-6">Phasellus blandit massa enim. Nullam id varius elit. blandit massa enim d varius blandit massa enimariusi d varius elit.</p>
								<a href="#" class="font-weight-semibold text-decoration-none learn-more text-2">VIEW MORE <i class="fas fa-chevron-right ml-2"></i></a>
							</div>
							<div class="col-lg-6">
								<div class="progress-bars mt-5">
									<div class="progress-label">
										<span>HTML/CSS</span>
									</div>
									<div class="progress progress-dark mb-2">
										<div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
											<span class="progress-bar-tooltip">100%</span>
										</div>
									</div>
									<div class="progress-label">
										<span>Design</span>
									</div>
									<div class="progress progress-dark mb-2">
										<div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300">
											<span class="progress-bar-tooltip">85%</span>
										</div>
									</div>
									<div class="progress-label">
										<span>WordPress</span>
									</div>
									<div class="progress progress-dark mb-2">
										<div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600">
											<span class="progress-bar-tooltip">75%</span>
										</div>
									</div>
									<div class="progress-label">
										<span>Photoshop</span>
									</div>
									<div class="progress progress-dark mb-2">
										<div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="900">
											<span class="progress-bar-tooltip">85%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
					<div class="row py-5 my-5">
						<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
							<div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
								<div>
									<img class="img-fluid rounded-0 mb-4" src="{{asset('porto/templates/img/team/team-1.jpg')}}" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
									<p class="text-2 mb-0">CEO</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="{{asset('porto/templates/img/team/team-2.jpg')}}" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
									<p class="text-2 mb-0">CEO</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="{{asset('porto/templates/img/team/team-3.jpg')}}" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
									<p class="text-2 mb-0">DEVELOPER</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="{{asset('porto/templates/img/team/team-4.jpg')}}" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
									<p class="text-2 mb-0">SEO ANALYST</p>
								</div>
								<div>
									<img class="img-fluid rounded-0 mb-4" src="{{asset('porto/templates/img/team/team-5.jpg')}}" alt="" />
									<h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
									<p class="text-2 mb-0">DESIGNER</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
							<a href="page-team.html" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2">LEARN MORE</a>
						</div>
					</div>
				</div>

				<section class="section section-height-3 bg-light border border-bottom-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-1.png')}}" alt="">
									</div>
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-2.png')}}" alt="">
									</div>
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-3.png')}}" alt="">
									</div>
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-4.png')}}" alt="">
									</div>
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-5.png')}}" alt="">
									</div>
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-6.png')}}" alt="">
									</div>
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-4.png')}}" alt="">
									</div>
									<div>
										<img class="img-fluid opacity-2" src="{{asset('porto/templates/img/logos/logo-2.png')}}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
			</div>

			<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3">
								<img alt="Porto Website Template" src="{{asset('porto/templates/img/logo-footer.png')}}" class="opacity-7 bottom-4" height="33">
							</a>
							<p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-icons list-icons-lg">
										<li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
										<li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
										<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-icons list-icons-sm">
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ml-1"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ml-1"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ml-1"> Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p>© Copyright 2020. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('porto/templates/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/common/common.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('porto/templates/vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('porto/templates/js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('porto/templates/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')}}"></script>
		<script src="{{asset('porto/templates/js/views/view.home.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('porto/templates/js/custom.js')}}"></script>


		<!-- Theme Initialization Files -->
		<script src="{{asset('porto/templates/js/theme.init.js')}}"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
