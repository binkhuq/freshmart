@extends('master')


@section('main')
<!-- Main Content -->
<div id="content" class="site-content">
	<!-- Breadcrumb -->
	
	<div class="container" style="margin-top: 100px">
		<div class="contact-page">
			<div class="contact-info">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="item d-flex">
							<div class="item-left">
								<div class="icon"><i class="zmdi zmdi-email"></i></div>
							</div>
							<div class="item-right d-flex">
								<div class="title">Email:</div>
								<div class="content">
									<a href="mailto:nguyenducmanh0111998@gmail.com">nguyenducmanh0111998@gmail.com</a><br>
									<a href="mailto:contact@domain.com">contact@domain.com</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="item d-flex justify-content-center">
							<div class="item-left">
								<div class="icon"><i class="zmdi zmdi-home"></i></div>
							</div>
							<div class="item-right d-flex">
								<div class="title">Address:</div>
								<div class="content">
									241 Xuan Thuy,Dich Vong Hau, Cau Giay, Ha Noi.
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="item d-flex justify-content-end">
							<div class="item-left">
								<div class="icon"><i class="zmdi zmdi-phone"></i></div>
							</div>
							<div class="item-right d-flex">
								<div class="title">Holine:</div>
								<div class="content">
									0332-771-775<br>
									
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<div class="contact-map">
				<div id="map"></div>
				<div class="hidden-lg hidden-md hidden-sm hidden-xs contact-address">815 Sunset Boulevard Ca 70079</div>

			</div>
			<div style="margin-top: -450px">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9097811650468!2d105.78015924992566!3d21.036295585925597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4abcf6766d%3A0xb0b76fe03fe6debb!2zTUlOSVNPIElQSCAyNDEgWFXDgk4gVEhV4bu2!5e0!3m2!1svi!2s!4v1564397050898!5m2!1svi!2s" width="1150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
			<div class="contact-intro">

				<img src="{{url('/public/home')}}/img/contact-icon.png" alt="Contact Comment">
			</div>

			<div class="contact-form form">
				<form action="{{route('comments')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Tên của bạn ">
						</div>
						@if($errors->has('name'))
						{{$errors->first('name')}}
						@endif	
						<div class="col-md-6">
							<input type="email" name="email" placeholder="Email">
						</div>
					</div>
					@if($errors->has('email'))
					{{$errors->first('email')}}
					@endif
					

					<div class="form-group">
						<textarea rows="10" name="comments" placeholder="Nội dung"></textarea>
					</div>
					@if($errors->has('comments'))
					{{$errors->first('comments')}}
					@endif
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value=" Gửi">
					</div>
				</form>
			</div>
			
			
		</div>
	</div>
</div>

@stop()