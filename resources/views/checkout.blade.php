@extends('master')


@section('main')





<!-- Main Content -->
<div id="content" class="site-content">
	<!-- Breadcrumb -->
	
	
	<div class="container" style="margin-top: 100px">
		<div class="page-checkout">
			<div class="row">
				<div class="content">

				</div>	
				
				<form action="{{route('checkout')}}" id="formaddress" method="POST" class="form-horizontal" >
					@csrf		

					<div class="col-sm-12">
						
						<div class="row">
							<div class="col-md-8">
								
								<div class="form-group">
									<div class="col-md-12">
										<label>Họ và tên</label>
										<input type="text" name="name" value="" required="required" class="form-control">
									</div>

								</div>
								<div class="form-group">
									<div class="col-md-12">
										<label>Email</label>
										<input type="text" name="email" required="required" value="" class="form-control">
									</div>

								</div>
								<div class="form-group">
									<div class="col-md-12">
										<label>SĐT</label>
										<input type="text"  name="phone"required="required" value="" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<label>Địa chỉ </label>
										<input type="text"  name="address"required="required" class="form-control">
									</div>

								</div>
								<div class="form-group">
									<div class="col-md-12">
										<label>Hình thức thanh toán</label>
										<select name="payment" required="required"  class="form-control">
											<option value="">Chọn một</option>
											<option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
											<option value="Chuyển khoản">Chuyển khoản</option>

										</select>
									</div>

								</div>
							</div>
							<div class="col-md-4 " >
								<div class="panel panel-info  "style="margin-top: 20px;height: 320px;padding-bottom: 10px">
									<div class="panel-heading">
										<h3 class="panel-title">Lưu ý </h3>
									</div>
									<div class="panel-body">
										<b>Đối với những khách hàng áp dụng hình thức chuyển khoản,quý khách vui lòng chuyển khoản trước vào STK dưới đây
											<ul>
												<li>
													STK : 0961000018943
												</li>
												<li>
													Chủ tài khoản : NGUYEN DUC MANH
												</li>
												<li>
													Chi nhánh : Vietcombank chi nhánh Thanh Trì
													
												</li>
												<li>Nội dung là  tên và sđt của quý khách  </li>
											</ul></b>
										</div>
									</div>
								</div>
								
							</div>
						</div>

						<div class="col-sm-12">
							<div class="page-cart">
								<div class="table-responsive">
									<table class="cart-summary table table-bordered">
										<thead>
											<tr>
												<th>STT</th>
												<th class="width-80 text-center">Ảnh</th>
												<th>Tên sản phẩm</th>
												<th class="width-20">&nbsp;</th>
												<th class="width-100 text-center">Giá</th>
												<th class="width-150 ">Số lượng</th>
												
												
											</tr>
										</thead>
										
										<tbody>
											<?php $n = 1; ?>
											@foreach($cart->items as $item)
											<tr>
												<td>{{$n}}</td>
												<td>
													<a href="">
														<img width="80" alt="Product Image" class="img-responsive" src="{{$item['image']}}">
													</a>
												</td>
												<td>
													<a href="product-detail-left-sidebar.html" class="product-name">{{$item['name']}}</a>
												</td>
												<td class="product-remove">
													<a title="Remove this item" class="remove" href="{{route('cart.remove',['id'=>$item['id']])}}">
														<i class="fa fa-trash"></i>
													</a>
												</td>
												<td class="text-center">
													{{number_format($item['price'])}} VNĐ
												</td>
												<td>
													<div class="product-quantity">
														<div class="qty">
															{{$item['quantity']}}
														</div>
													</div>
												</td>
												
											</tr>
											<?php $n++; ?>
											@endforeach
										</tbody>
										
										<tfoot>
											
											<tr class="">
												<td colspan="1" class="total text-right">Tổng tiền</td>
												<td colspan="5" class="total text-center">{{number_format($cart->total_price)}} VNĐ</td>
												
											</tr>
											
										</tfoot>
									</table>
								</div>
								
								<div class="checkout-btn">
									<input type="submit"  class="btn btn-primary pull-right" title="Proceed to checkout" value="Đặt hàng">
									<a style="margin-right: 20px" class="btn btn-primary" href="{{route('cart.view')}}" ><i class="fa fa-angle-left ml-xs"></i>  Quay lại </a>
								</div>
							</div>
						</div>		
						
					</form>
					
					
					
					
					
				</div>
			</div>
		</div>
	</div>



	@stop()
