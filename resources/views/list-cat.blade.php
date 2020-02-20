@extends('master')
@section('main')



<!-- Main Content -->
<div id="content" class="site-content">
	<!-- Breadcrumb -->
	
	
	
	<div class="container" style="margin-top: 100px">
		<div class="row">
			<!-- Sidebar -->
			<div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<!-- Block - Product Categories -->
				<div class="block product-categories">
					<h3 class="block-title"></h3>
					
					<div class="block-content">
						@foreach($category as $cat)
						<div class="item">
							<a class="category-title" href="{{route('show',['slug'=>$cat->slug])}}">{{$cat->name}}</a>
						</div>
						@endforeach
					</div>
				</div>
				
				
				<!-- Block - Filter -->
				
				
				<!-- Product Tags -->
				
			</div>
			
			<!-- Page Content -->
			<div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="product-category-page">
					<!-- Nav Bar -->
					<div class="products-bar">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<div class="gridlist-toggle" role="tablist">
									<ul class="nav nav-tabs">
										<li><a href="#products-grid" data-toggle="tab" aria-expanded="true"><i class="fa fa-th-large"></i></a></li>
										<li class="active"><a href="#products-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-bars"></i></a></li>
									</ul>
								</div>
								
								
							</div>
							
							
						</div>
					</div>
					
					<div class="tab-content">
						<!-- Products Grid -->
						<div class="tab-pane" id="products-grid">
							<div class="products-block">
								<div class="row">
									@foreach($model->products as $pro)	
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
												<span class="sale-price">{{number_format($pro->sale_price)}} VNĐ</span>
												<span class="base-price">{{number_format($pro->price)}} VNĐ</span>
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
						</div>
						
						<!-- Products List -->
						<div class="tab-pane active" id="products-list">
							<div class="products-block layout-5">
								@foreach($model->products as $pro)	
								<div class="product-item">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="product-image">
												<a href="{{route('detail',['slug'=>$pro->slug])}}">
													<img class="img-responsive" src="{{$pro->image}}" alt="Product Image">
												</a>
											</div>
										</div>
										
										<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
											<div class="product-info">
												<div class="product-title">
													<a href="{{route('detail',['slug'=>$pro->slug])}}">
														{{$pro->name}}
													</a>
												</div>
												
												
												
												<div class="product-price">
													<span class="sale-price">{{number_format($pro->sale_price)}} VND/kg</span>
													<span class="base-price">{{number_format($pro->price)}} VND</span>
												</div>
												
												
												
												<div class="product-description">
													{{$pro->content}}
												</div>
												
												<div class="product-buttons">
													<a class="add-to-cart" href="{{route('cart.add',['id'=>$pro->id])}}">
														<i class="fa fa-shopping-basket" aria-hidden="true"></i>
														<span></span>
													</a>
													
													
													<a class="quickview" href="{{route('detail',['slug'=>$pro->slug])}}">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					
					<!-- Pagination Bar -->
					
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Footer -->


@stop()