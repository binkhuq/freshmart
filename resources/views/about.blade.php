@extends('master')


@section('main')
<!-- Main Content -->
<div id="content" class="site-content">
	<!-- Breadcrumb -->
	
	
	<div class="container">
		<div class="about-us intro">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="intro-header">
							<h3>Chào mừng bạn đến với FreshMart</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="intro-left">
							<div class="intro-item">
								<p><img src="{{url('/public/home')}}/img/intro-icon-1.png" alt="Intro Image"></p>
								<h4>LUÔN LUÔN TƯƠI MỚI</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							
							<div class="intro-item">
								<p><img src="{{url('/public/home')}}/img/intro-icon-3.png" alt="Intro Image"></p>
								<h4>LÀNH MẠNH</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="effect">
							<a href="#">
								<img class="img-responsive" src="{{url('/public/home')}}/img/intro-1.png" alt="Intro Image">
							</a>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="intro-right">
							<div class="intro-item">
								<p><img src="{{url('/public/home')}}/img/intro-icon-2.png" alt="Intro Image"></p>
								<h4>100% TỰ NHIÊN</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							
							<div class="intro-item">
								<p><img src="{{url('/public/home')}}/img/intro-icon-4.png" alt="Intro Image"></p>
								<h4>CHẤT LƯỢNG HÀNG ĐẦU</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop()