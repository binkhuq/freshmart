@extends('master')


@section('main')




<!-- Product - New Arrivals -->
<div class="section products-block product-tab tab-2">
	
	
	<div class="block-content">
		<div class="container">
			<!-- Tab Navigation -->
			<div class="tab-nav">
				<ul>
					<li class="active">
						<a  href="{{route('list')}}">
							
							<span>Sản phẩm</span>
						</a>
					</li>
					@foreach($category as $cat)
					<li>
						<a  href="{{route('show',['slug'=>$cat->slug])}}">
							
							<span>{{$cat->name}}</span>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			
			<!-- Tab Content -->
			<div class="tab-content">
				<!-- All Products -->
				<div role="tabpanel" class="tab-pane fade in active" id="all-products">
					<div class="col-md-12">
						@foreach($products as $pro)
						<div class="col-md-3">
							
							
							<div class="product-item" style="height: 300px">
								<div class="product-image">
									<a href="{{route('detail',['slug'=>$pro->slug])}}">
										<img src="{{$pro->image}}" style="width: 100%;height: 150px">
									</a>
								</div>
								
								<div class="product-title">
									<a href="{{route('detail',['slug'=>$pro->slug])}}">
										{{$pro->name}}
									</a>
								</div>
								
								
								<div class="product-price">
									<span class="sale-price">{{number_format($pro->sale_price)}} VND</span>
									<span class="base-price">{{number_format($pro->price)}} VND</span>
								</div>
								
								<div class="product-buttons">
									<a class="add-to-cart" href="{{route('cart.add',['id'=>$pro->id])}}">
										<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									</a>
									
									
									
									<a class="quickview" href="{{route('detail',['slug'=>$pro->slug])}}">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				
				<!-- Vegetables -->
				
				
				<!-- Bread -->
				
				
				<!-- Juices -->
				
				
				<!-- Tea -->
				
			</div>
		</div>
	</div>
</div>


<!-- Intro -->
<div class="section intro">
	<div class="block-content">
		<div class="container">
			<div class="intro-content">
				<div class="row">
					<div class="title">Lý do nên chọn chúng tôi</div>
					<div class="col-lg-6 col-md-6 col-xs-6 item up-left">
						<h4>100% tự nhiên</h4>
						<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-6 item up-right">
						<h4>Luôn luôn tươi sạch</h4>
						<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-6 item down-left">
						<h4>Chất lượng hàng đầu</h4>
						<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-6 item down-right">
						<h4>Lành mạnh</h4>
						<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<!-- Testimonial -->
<div class="section testimonial layout-2">
	<div class="container">
		<div class="row">
			<div class="testimonial-wrap owl-theme owl-carousel">
				<div class="item">
					<div class="image"><img src="{{url('/public/home')}}/img/testimonial-1.png" alt=""></div>
					<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
					<div class="name">WILLIAM JAMES</div>
					<div class="job">Nhà tạo mẫu tóc</div>
				</div>
				
				<div class="item">
					<div class="image"><img src="{{url('/public/home')}}/img/testimonial-2.png" alt=""></div>
					<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
					<div class="name">WILLIAM JAMES</div>
					<div class="job">Diễn viên</div>
				</div>
				
				<div class="item">
					<div class="image"><img src="{{url('/public/home')}}/img/testimonial-3.png" alt=""></div>
					<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
					<div class="name">WILLIAM JAMES</div>
					<div class="job">Ca sĩ</div>
				</div>
				
				<div class="item">
					<div class="image"><img src="{{url('/public/home')}}/img/testimonial-2.png" alt=""></div>
					<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
					<div class="name">WILLIAM JAMES</div>
					<div class="job">Người mẫu </div>
				</div>
				
				<div class="item">
					<div class="image"><img src="{{url('/public/home')}}/img/testimonial-1.png" alt=""></div>
					<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
					<div class="name">WILLIAM JAMES</div>
					<div class="job">Giáo sư</div>
				</div>
			</div>
		</div>
	</div>
</div>


</div>


@stop()
