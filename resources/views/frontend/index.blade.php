<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Plaza - eCommerce Template</title>
	<meta charset="UTF-8">
	<!-- Favicon -->
	<link href="{{url('/')}}/assets/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="{{url('/')}}/assets/css/google.css" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{url('/')}}/assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="{{url('/')}}/assets/css/style.css"/>
	<link rel="stylesheet" href="{{url('/')}}/assets/css/animate.css"/>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header section -->
	<header class="header-section">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="{{url('/')}}/assets/img/logo.png" alt="logo">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="cart.html" class="card-bag"><img src="{{url('/')}}/assets/img/icons/bag.png" alt=""><span>2</span></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="categorie.html">Woman</a></li>
				<li><a href="categorie.html">Man</a></li>
				<li><a href="categorie.html">Child</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->

	@yield('content')

<!-- Footer section end -->
		<!-- Footer top section -->
		<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="{{url('/')}}/assets/img/logo.png" class="footer-logo" alt="">
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<div class="cards">
							<img src="{{url('/')}}/assets/img/cards/5.png" alt="">
							<img src="{{url('/')}}/assets/img/cards/4.png" alt="">
							<img src="{{url('/')}}/assets/img/cards/3.png" alt="">
							<img src="{{url('/')}}/assets/img/cards/2.png" alt="">
							<img src="{{url('/')}}/assets/img/cards/1.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">usefull Links</h6>
						<ul>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Bloggers</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Sitemap</h6>
						<ul>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Bloggers</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Shipping & returns</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Track Orders</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contact</h6>
						<div class="text-box">
							<p>Your Company Ltd </p>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, </p>
							<p>+53 345 7953 32453</p>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

		<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
	</footer>
	


	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('/')}}/assets/js/jquery-3.2.1.min.js"></script>
	<script src="{{url('/')}}/assets/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/assets/js/owl.carousel.min.js"></script>
	<script src="{{url('/')}}/assets/js/mixitup.min.js"></script>
	<script src="{{url('/')}}/assets/js/sly.min.js"></script>
	<script src="{{url('/')}}/assets/js/jquery.nicescroll.min.js"></script>
	<script src="{{url('/')}}/assets/js/main.js"></script>
    </body>
</html>
