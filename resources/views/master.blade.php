<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from tivatheme.com/html/freshmart/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 07:53:33 GMT -->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>

	<meta name="keywords" content="Organic, Fresh Food, Farm Store">
	<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
	<meta name="author" content="tivatheme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{url('/public/home')}}/img/favicon.png " type="image/png">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/font-material/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/nivo-slider/css/nivo-slider.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/nivo-slider/css/animate.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/nivo-slider/css/style.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/libs/slider-range/css/jslider.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="{{url('/public/home')}}/css/style.css">
	<link rel="stylesheet" href="{{url('/public/home')}}/css/reponsive.css">
</head>

<body class="home home-3">
	<div id="all">
		<!-- Header -->
		<header id="header">
			<div class="container">
				<div class="header-top">
					<div class="row align-items-center">
						<!-- Header Left -->
						<div class="col-lg-5 col-md-5 col-sm-12">
							<!-- Main Menu -->
							<div id="main-menu">
								<ul class="menu">
									<li class="dropdown">
										<a href="{{route('home')}}" title="Homepage">Trang chủ</a>

									</li>

									<li class="dropdown">
										<a href="{{route('list')}}" title="Product">Danh mục</a>
										<div class="dropdown-menu">
											<ul>
												@foreach($category as $cat)
												<li class="has-image">

													<a href="{{route('show',['slug'=>$cat->slug])}}" title="">{{$cat->name}}</a>
												</li>
												@endforeach
											</ul>
										</div>
									</li>





									<li>
										<a href="{{route('about')}}">Về chúng tôi</a>
									</li>

									<li>
										<a href="{{route('contact')}}">Liên hệ</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Header Center -->
						<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
							<!-- Logo -->
							<div class="logo">
								<a href="{{route('home')}}">
									<img class="img-responsive" src="{{url('/public/home')}}/img/logo.png" alt="Logo">
								</a>
							</div>

							<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
						</div>


						<!-- Header Right -->
						<div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
							<!-- Search -->							
							<div class="form-search">
								<form action="{{route('search')}}" method="get">
									<input type="text" name="key" class="form-input" placeholder="Tìm kiếm">
									<button type="submit" class="fa fa-search"></button>
								</form>
							</div>
							
							<!-- Cart -->
							<div class="block-cart dropdown">
								<div class="cart-title">
									<a href="{{route('cart.view')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
									<span class="cart-count">{{$cart->total_quantity}}</span>
								</div>
								
								
							</div>

							
							<!-- My Account -->
							
						</div>
					</div>
				</div>
			</div>	
		</header>
		
		
		<!-- Main Content -->
		<div id="content" class="site-content">				
			<!-- Slideshow -->		
			<div class="section slideshow">
				<div class="tiva-slideshow-wrapper"  >
					<div id="tiva-slideshow" class="nivoSlider" >
						@foreach($banner as $ban)
						<a href="#">
							<img class="img-responsive" src="{{$ban->image}}" style="height: 930px"  alt="Slideshow Image">
						</a>
						@endforeach
					</div>
				</div>
			</div>	
			<div class="container">
				@yield('main')
			</div>
			<!-- Footer -->
			<footer id="footer">
				<div class="footer">
					<!-- Footer Top -->
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block text">
										<div class="block-content">
											<a href="index.php" class="logo-footer">
												<img src="{{url('/public/home')}}/img/logo-2.png" alt="Logo">
											</a>
											
											<div class="contact">
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-home"></i>
													</div>
													<div class="item-right">
														<span>241 Xuan Thuy,Dich Vong Hau, Cau Giay, Ha Noi.</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-phone-in-talk"></i>
													</div>
													<div class="item-right">
														<span>0342-771-775<br>0358-923-632</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-email"></i>
													</div>
													<div class="item-right">
														<span><a href="mailto:nguyenducmanh0111998@gmail.com">nguyenducmanh0111998@gmail.com</a><br><a href="mailto:truongpham97hy@gmail.com">truongpham97hy@gmail.com</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block instagram">
										<h2 class="block-title">Instagram</h2>
										
										<div class="block-content">
											<div class="row margin-0">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-1.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-2.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-3.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-4.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-5.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-6.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-7.png" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{url('/public/home')}}/img/instagram-8.png" alt="Instagram Image">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									

									<div class="block social">
										<h2 class="block-title">Theo dõi chúng tôi </h2>
										
										<div class="block-content">
											<ul>
												<li><a href="https://www.facebook.com/binkhuq98"><i class="zmdi zmdi-facebook"></i></a></li>

												
												<li><a href="https://www.instagram.com/duc.manhhhh"><i class="zmdi zmdi-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Footer Bottom -->
					<div class="footer-bottom">
						<div class="payment-intro">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="{{url('/public/home')}}/img/home1-payment-1.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Giao hàng miễn phí</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="{{url('/public/home')}}/img/home1-payment-2.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Thanh toán an toàn</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="{{url('/public/home')}}/img/home1-payment-3.png" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Đảm bảo hoàn tiền</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Copyright -->
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright">Copyright © 2018 - All rights reserved. Powered by TivaTheme.</div>
							</div>
							
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
								<div class="payment">
									<span>Payment Accept</span>
									<img src="{{url('/public/home')}}/img/payment.png" alt="Payment">
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			<div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
		
		<!-- Vendor JS -->
		<script src="{{url('/public/home')}}/libs/jquery/jquery.js"></script>
		<script src="{{url('/public/home')}}/libs/bootstrap/js/bootstrap.js"></script>
		<script src="{{url('/public/home')}}/libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="{{url('/public/home')}}/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="{{url('/public/home')}}/libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="{{url('/public/home')}}/libs/slider-range/js/tmpl.js"></script>
		<script src="{{url('/public/home')}}/libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="{{url('/public/home')}}/libs/slider-range/js/draggable-0.1.js"></script>
		<script src="{{url('/public/home')}}/libs/slider-range/js/jquery.slider.js"></script>
		<script src="{{url('/public/home')}}/libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="{{url('/public/home')}}/js/main.js"></script>
	</body>

	<!-- Mirrored from tivatheme.com/html/freshmart/page-about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 08:04:36 GMT -->
	</html>