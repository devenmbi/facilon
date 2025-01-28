<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width,initial-scale=1">
    	<title>Facilon</title>
    	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    	<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    	<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    	<link rel="stylesheet" href="{{asset('frontend/css/fullpage.css')}}">

    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    	<link rel="stylesheet" href="https://anvaya.online/facilon/public/frontend/css/formdesign.css">

        <script src="{{asset('frontend/js/modernizer.js')}}"></script>
	</head>
	<body>
		<!--  <div id="preloader">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
        </div> -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fa fa-close"></i>
            </div>
            <ul class="list-unstyled contact-details__info">
                <li>
                    <div class="icon bg-theme-color2">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="text">
                        <!-- <h6 class="mb-1"></h6> -->
                        <a href="tel:+918976917026">+91 8976917026</a>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="text">
                        <!-- <h6 class="mb-1">Email</h6> -->
                        <a href="mailto:facilon.services@facilonservices.com">facilon.services@facilonservices.com</a>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <span class="fa fa-location-arrow"></span>
                    </div>
                    <div class="text">
                        <!-- <h6 class="mb-1">Location</h6> -->
                        <span>Facilon Services Private Ltd.
                        A102, Golden Square CHS, Kalina,
                        Santacruz (E), Vidya Nagari,
                        Mumbai - 400098, India.</span>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="contact-us.html" class="article">Get in touch</a>
                </li>
            </ul>
        </nav>
        <div id="wrapper">
            <div class="overlay"></div>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-left">
                                <ul class="list-style-one light">
                                    <li><i class="fa fa-envelope"></i> <a
                                        href="mailto:facilon.services@facilonservices.com">facilon.services@facilonservices.com</a>
                                    </li>
                                </ul>
                                <ul class="social-icon-one light">
                                    <li><a href="https://www.facebook.com/facilonServices/"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/facilonservices"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/facilon-services/about/"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/facilonservices"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--<div class="col-md-6">-->
                        <!--	<div class="top-right">-->
                        <!--		<ul class="feature-ilst">-->
                        <!--			<li><a href="#">Register</a></li>-->
                        <!--			<li><a href="#">Login</a></li>-->
                        <!--			<li><a href="#">Contact Us</a></li>-->
                        <!--		</ul>-->
                        <!--	</div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <header class="header header_style_01">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Menu</span>
                            </button>
                            <a class="navbar-brand" href="{{ route('/') }}"><img src="{{asset('frontend/images/logo.png')}}" alt="image"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <!-- <li><a href="#">Why Facilon</a></li> -->
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('service_providers') }}"> Service Provider</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Brokers</a></li>
                                        <li><a href="#"> Custodians</a></li>
                                        <li><a href="#"> Portfolio Managers</a></li>
                                        <li><a href="#"> Banks</a></li>
                                        <li><a href="#"> Investment Advisors</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Service Provider Products</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('trading_listed_securities') }}"> Trading - Listed Equities</a></li>
                                        <li><a href="{{ route('derivatives_trading') }}"> Equity Derivatives</a></li>
                                        <li><a href="{{ route('portfolio_management_services') }}"> PMS</a></li>
                                        <li><a href="{{ route('custody') }}"> Custody</a></li>
                                        <li><a href="{{ route('portfolio_investment_scheme') }}"> PIS Account</a></li>
                                    </ul>
                                </li>
                                <!--<li class="dropdown">-->
                                <!--	<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Knowledge Center</a>-->
                                <!--	<ul class="dropdown-menu">-->
                                <!--		<li><a href="#"> Articles/Blogs</a></li>-->
                                <!--		<li><a href="#"> FAQs</a></li>-->
                                <!--	</ul>-->
                                <!--</li>-->
                                <!--<li><a href="#">Media & Events</a></li>-->
                                <li><a href="{{ route('service_provider_registration_step1_show', ['provider_id' => 1]) }}">Service Provider Registration</a></li>
                            </ul>
                        </div>
                        <button type="button" id="sidebarCollapse" class="btn btn-info sidebar-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </nav>
            </header>

            @yield('content')

            <div class="section fp-auto-height" id="section2">
                <footer>
                    <div class="footer-info">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <ul class="footer-links hov policy">
                                        <li><a href="terms-of-use.html">Terms of use <span class="icon icon-arrow-right2"></span></a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy <span class="icon icon-arrow-right2"></span></a></li>
                                        <li><a href="#">Useful Links <span class="icon icon-arrow-right2"></span></a></li>
                                        <!--<li><a href="#">Disclaimer <span class="icon icon-arrow-right2"></span></a></li>-->
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <ul class="footer-links hov big-links">
                                        <li><a href="our-team.html">Our Team <span class="icon icon-arrow-right2"></span></a></li>
                                        <li><a href="our-expertise.html">Our Expertise <span class="icon icon-arrow-right2"></span></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12"></div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <ul class="footer-links hov mumbai-text">
                                        <li><a href="#">Mumbai <span class="icon icon-arrow-right2"></span></a></li>
                                    </ul>
                                    <div class="social-box">
                                        <ul>
                                            <li><a href="https://www.facebook.com/facilonServices/"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.instagram.com/facilonservices"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/facilon-services/about/"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="https://twitter.com/facilonservices"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-5">
                                <div class="widget clearfix">
                                    <p>Phone <a href="tel:+919876543210"> +91 9876543210</a></p>
                                    <p>A firm for Global Investors 2023 Facilon Services Pvt Ltd</p>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p>© Copyright 2025 Facilon | Designed By <a href="https://www.matrixbricks.com/" target="_blank">Matrix Bricks.</a> All Rights Reserved</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <div class="flotter-wharf">
        <a href="#" class="wharf"><b>Get Started</b></a>
    </div>

    <!--Cookies-->
    <a href="#" id="scroll-to-top" class="dmtop global-radius">
        <i class="fa fa-angle-up"></i>
    </a>

    <script src="{{asset('frontend/js/all.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/fullpage.js')}}"></script>
    <script src="{{asset('frontend/js/portfolio.js')}}"></script>
    <script src="{{asset('frontend/js/hoverdir.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    @if(Route::currentRouteName() == '/')
        <script type="text/javascript">
    		var myFullpage = new fullpage('#fullpage', {
    		  anchors: ['Main-Info', 'Our-Purpose', 'Our-Identity', 'Investment', 'Our-Solution', 'Contact-us', 'Info-box', 'footer-sec', 'new-footers'],
    		  navigation: false,
    		  navigationPosition: 'right',
    		  scrollBar: true,
    		  scrollingSpeed: 1250,
    		  verticalCentered: true,

    		  responsiveWidth: 1100,
    		  responsiveSlides: true,
    		  afterResponsive: function (isResponsive) {
    		    scrollOverflow: true

    		  }

    		});
    	</script>
    @endif

    @if(Route::currentRouteName() == 'service_providers')
        <script type="text/javascript">
            var myFullpage = new fullpage('#fullpage', {
              anchors: ['Services-Provider','Copyrights'],
              navigation: false,
              navigationPosition: 'right',
              scrollBar: true,
              scrollingSpeed: 1250,
              verticalCentered: false,

              responsiveWidth: 1100,
              responsiveSlides: true,
              afterResponsive: function (isResponsive) {
                scrollOverflow: true

              }

            });
        </script>
    @endif

  </body>
</html>
