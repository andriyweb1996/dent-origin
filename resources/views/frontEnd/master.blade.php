<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DentalManager - {{ $activePage }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('frontEnd') }}/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{ asset('frontEnd') }}/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90745841-3"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());
  	gtag('config', 'UA-90745841-3');
	</script>


	</head>
	<body>
    <center>@include('cookieConsent::index')</center>
    <div class="colorlib-loader"></div>
    <div id="page">

      <!-- NAVIGATION MENU -->
      <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <div id="colorlib-logo"><a href="/"><img src="{{ asset('frontEnd') }}/images/logo-3.png" alt="DentalManager"></a></div>
              </div>
              <div class="col-md-10 text-right menu-1">
                <ul>
                  <li class="{{ $activePage == 'homepage' ? 'active' : '' }}"><a href="/">Home</a></li>
                  {{-- <li class="{{ $activePage == 'services' ? 'active' : '' }}"><a href="/services">Il nostro gestionale</a></li> --}}
                  <!-- <li><a href="blog.html">Blog</a></li> -->
                  <li class="{{ $activePage == 'about' ? 'active' : '' }}"><a href="/about">Su di noi</a></li>
                  <!--<li><a href="shop.html">Shop</a></li>-->
                  <li class="{{ $activePage == 'contact' ? 'active' : '' }}"><a href="/contact">Contatti</a></li>
                  <li class="{{ $activePage == 'trial' ? 'active' : '' }}"><a href="/trial">Provalo Gratis</a></li>
                  <li><a href="/login">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>

  @yield('content')



    <!-- FOOTER SAME FOR ALL THE PAGES-->
        <footer id="colorlib-footer">
          <div class="container">
            <div class="row row-pb-md">


              <div class="col-md-4 colorlib-widget">
                <h4>DentalManager</h4>
                <p>DentalManager è un software gestionale per studi dentistici che permette di monitorare l'esito delle campagne di marketing</p>

								<p>
                  <ul class="colorlib-social-icons">
										{{--
										<li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
										--}}
                  </ul>
                </p>
              </div>

              <div class="col-md-4 colorlib-widget">
                <h4>Informazioni di contatto</h4>
                <ul class="colorlib-footer-links">
                  <li><i class="icon-map"></i>&nbsp;{{-- VIA --}} 31100 - Treviso</li>
                  <li><a href="tel://1234567920"><i class="icon-phone"></i>&nbsp;{{-- NUMERO TELEFONO --}}</a></li>
                  <li><a href="mailto:info@dentalmanager.it"><i class="icon-envelope"></i>&nbsp;info@dentalmanager.it</a></li>
                  <li><a href="https://www.dentalmanager.it"><i class="icon-location4"></i>&nbsp;dentalmanager.it</a></li>
                  {{-- <li><b>PIVA</b> NUMERO PARTITA IVA</li> --}}
                </ul>
              </div>

							<div class="col-md-4 colorlib-widget">
									<h4>Come vengono gestiti i dati che raccogliamo?</h4>
									<ul class="colorlib-footer-links">
										<li><a href="https://www.dentalmanager.it/privacy">Informativa sulla privacy</a></li>
										<li><a href="https://www.dentalmanager.it/cookies">Informativa sui cookies</a></li>
									</ul>
							</div>
            </div>
          </div>
          <div class="copy" style="padding: 0.5em 0;  opacity: 0.2;">
            <div class="container">
              <div class="row" style="color:none">
                <div class="col-md-12 text-center">
                  <p>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- END FOOTER SAME FOR ALL THE PAGES-->




  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('frontEnd') }}/js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="{{ asset('frontEnd') }}/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="{{ asset('frontEnd') }}/js/jquery.waypoints.min.js"></script>
  <!-- Stellar Parallax -->
  <script src="{{ asset('frontEnd') }}/js/jquery.stellar.min.js"></script>
  <!-- YTPlayer -->
  <script src="{{ asset('frontEnd') }}/js/jquery.mb.YTPlayer.min.js"></script>
  <!-- Owl carousel -->
  <script src="{{ asset('frontEnd') }}/js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="{{ asset('frontEnd') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/magnific-popup-options.js"></script>
  <!-- Counters -->
  <script src="{{ asset('frontEnd') }}/js/jquery.countTo.js"></script>
  <!-- Main -->
  <script src="{{ asset('frontEnd') }}/js/main.js"></script>

  </body>
</html>
