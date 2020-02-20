@extends('master')


@section('main')



<!-- Main Content -->
<div id="content" class="site-content">
	<!-- Breadcrumb -->
	
	
	
	<div class="container "  style="margin-top: 100px">
		<div class="product-detail">
			<div class="products-block layout-5">
				
				<div class="product-item">
					<div class="product-title">
						{{$model-> name}}
					</div>
					
					<div class="row">
						<div class="product-left col-md-4 col-sm-4 col-xs-12">
							<div class="product-image horizontal">
								<div class="main-image">
									<img class="img-responsive" src="{{$model-> image}}" alt="Product Image">
								</div>
								
							</div>
						</div>
						
						<div class="product-right col-md-5 col-sm-4 col-xs-12">
							<div class="product-info">
								<div class="product-price">
									<span class="sale-price">{{number_format($model->sale_price)}} VNĐ/kg</span>
									<span class="base-price">{{number_format($model->price)}} VNĐ</span>
								</div>
								
								
								
								<div class="product-short-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula. Nam gravida nulla in convallis condimentum.
								</div>
								
								
								
								<div class="product-add-to-cart border-bottom">
									
									
									<div class="product-buttons">
										<a class="add-to-cart" href="{{route('cart.add',['id'=>$model->id])}}">
											<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											<span>Thêm vào giỏ hàng</span>
										</a>
										
										
									</div>
								</div>
								
								
								
								
								
								
							</div>
						</div>
						
						
					</div>
					
					
				</div>
				
			</div>
		</div>
		
		<!-- Related Products -->
		
	</div>
</div>


<!-- Footer -->


@stop()