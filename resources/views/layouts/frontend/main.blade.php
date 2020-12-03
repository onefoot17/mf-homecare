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
										<a class="mf__logo-inner mf__logo-inner--desktop" href="index.html">
											<!-- <img class="mf__logo" alt="MF Homecare Logo" src="{{ asset( 'frontend/template/assets/img/MF-Homecare-Logo-white.png' ) }}"> -->
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
													<li class="mf__nav-item-con">
														<a class="mf__nav-item active" href="index.html">How We Work</a>
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
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<section class="mf__homepage-video section border-0 video overlay overlay-show overlay-op-8 m-0" data-video-path="frontend/template/assets/video/MF-Homecare-homepage-video" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
					<div class="container position-relative z-index-3 h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<div class="d-flex flex-column align-items-center justify-content-center h-100 text-center">
									<h1 class="mf__homepage-video__heading-1 position-relative text-color-light font-weight-medium px-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-plugin-options="{'minWindowWidth': 0}">Managing Family Homecare</h1>

									<h2 class="mf__homepage-video__heading-2 text-color-light appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Affordable and Convenient</h2>

									<!-- <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Get Started - Register as a Caregiver</p> -->

									<a href="#" class="mf__homepage-video__heading-3" role="button">Get Started - Register as a Caregiver!</a>
								</div>
							</div>
						</div>

						<a href="#main" class="slider-scroll-button position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="80">Sroll To Bottom</a>
					</div>
				</section>

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
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/Choice-V2.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Choice</h4>
										
										<p class="mf__features__feature__copy">Our system matches you with the nearest possible Caregivers who can provide the care you need.</p>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/Control-V2.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Control</h4>
										
										<p class="mf__features__feature__copy">We give you the tools and technology that make it easy to coordinate your homecare from scheduling to payment.</p>
									</div>
								</div>
							</div>


							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/Lower-Cost-V2.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Lower Costs</h4>
										
										<p class="mf__features__feature__copy">Our system matches you with the nearest possible Caregivers who can provide the care you need.</p>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/Consistency-V2.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Consistency</h4>
										
										<p class="mf__features__feature__copy">Like the Caregiver you’ve chosen? Book them again and again to build a bond with someone who knows your needs and routines.</p>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/Quality-V5-Separate.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Quality</h4>
										
										<p class="mf__features__feature__copy">Good care is about more than just qualifications. Our system lets us register Caregivers based on personality, values, experience, and compassion.</p>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/Live-In-Homecare-V4.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Live-In Homecare</h4>
										
										<p class="mf__features__feature__copy">Live-in care can be a cost-effective alternative to a seniors’ residence that preserves independence and a familiar home.</p>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/24-Hour-Live-In-Care-V3.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Overnight Care</h4>
										
										<p class="mf__features__feature__copy">Sleep securely with the knowledge that a Caregiver is close at hand in the home.</p>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/Tracking-&-Location-App.png' ) }}')"></div>

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
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/sampoo.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Bathing and Personal Grooming</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/bathtub.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Bathroom and Continence Care</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/yoga.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Exercise and Mobility</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/pills.png' ) }}')"></div>

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
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/eat.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Feeding</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/lunch.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Helping with Meal Preparation</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/washing.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Light Housework</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/walk.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Going out for Walks</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/walking.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Running Errands</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/car.png' ) }}')"></div>

									<div class="mf__features__feature__info">
										<h4 class="mf__features__feature__heading">Trip to appointments or other outings by car</h4>
									</div>
								</div>
							</div>

							<div class="mf__features__row__column appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="mf__features__feature">
									<div class="mf__features__feature__icon-con" style="background-image: url('{{ asset( 'frontend/template/assets/img/icons/volunteer.png' ) }}')"></div>

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

							<video class="mf__video__video" src="{{ asset( 'frontend/template/assets/video/MF-Homecare-homepage-video.mp4' ) }}" controls poster="{{ asset( 'frontend/template/assets/video/MF-Homecare-homepage-video.jpg' ) }}"></video>
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

			<footer id="footer" class="mf__footer mt-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
				<div class="row">
					<div class="mf__footer__inner container mx-md-auto">
						<div class="mf__footer__col">
							<ul class="mf__footer__col__inner">
								<li class="mf__footer__col__inner__li">
									<h4 class="mf__footer__col__inner__heading">MF Homecare</h4>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">How We Work</a>
									</p>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">Register as a Caregiver</a>
									</p>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">Register as a Client</a>
									</p>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">Contact Us</a>
									</p>
								</li>
							</ul>
						</div>

						<div class="mf__footer__col">
							<ul class="mf__footer__col__inner">
								<li class="mf__footer__col__inner__li">
									<h4 class="mf__footer__col__inner__heading">Information</h4>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">Identity & Background Check</a>
									</p>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">Cancellation Policy</a>
									</p>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">Terms & Conditions</a>
									</p>
								</li>

								<li class="mf__footer__col__inner__li">
									<p class="mf__footer__col__inner__p">
										<a class="mf__footer__col__inner__link" href="#">Privacy Policy</a>
									</p>
								</li>
							</ul>
						</div>

						<div class="mf__footer__col">
							<ul class="mf__footer__col__inner">
								<li class="mf__footer__col__inner__li">
									<h4 class="mf__footer__col__inner__heading">Coming Soon</h4>
								</li>

								<li class="mf__footer__col__inner__li">
									<a class="mf__app-icons-con" href="">
										<img class="mf__app-icons" src="{{ asset( 'frontend/template/assets/img/Available-on-the-App-Store.png' ) }}" />
									</a>
								</li>
									
								<li class="mf__footer__col__inner__li">
									<a class="mf__app-icons-con" href="">
										<img class="mf__app-icons" src="{{ asset( 'frontend/template/assets/img/Get-it-on-Google-Play.png' ) }}" />
									</a>
								</li>
							</ul>
						</div>

						<div class="mf__footer__col">
							<ul class="mf__footer__col__inner mf__footer__socials">
								<li class="mf__footer__socials__social mf__footer__socials__social--first">
									<h4 class="mf__footer__col__inner__heading">Socials</h4>
								</li>

								<li class="mf__footer__socials__social">
									<a class="mf__footer__col__inner__link" href="#">
										<i class="fab fa-facebook"></i>
									</a>
								</li>

								<li class="mf__footer__socials__social">
									<a class="mf__footer__col__inner__link" href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>

								<li class="mf__footer__socials__social">
									<a class="mf__footer__col__inner__link" href="#">
										<i class="fab fa-youtube"></i>
									</a>
								</li>
							</ul>
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
