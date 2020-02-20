@extends('master')


@section('main')


<!-- Main Content -->
<div id="content" class="site-content">
	<!-- Breadcrumb -->
	
	
	<div class="container" style="margin-top: 100px">
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
										<div class="input-group">
											<form action="{{route('cart.update',['id' => $item['id']])}}" method="get" accept-charset="utf-8">
												<input type="number" name="quantity" value="{{$item['quantity']}}">
												<input type="submit" value="Cập nhật">
											</form>
										</div>
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
							<td colspan="4" class="total text-center">{{number_format($cart->total_price)}} VNĐ</td>
							<td>
								<a href="{{route('cart.clear')}}" class="btn btn-danger btn-sm">Xóa tất cả</a>
							</td>
						</tr>
						
					</tfoot>
				</table>
			</div>
			
			<div class="checkout-btn">
				<a href="{{route('check')}}" class="btn btn-primary pull-right" title="Proceed to checkout">
					<span>Đi tới trang đặt hàng</span>
					<i class="fa fa-angle-right ml-xs"></i>
				</a>
			</div>
		</div>
	</div>
</div>


<!-- Footer -->


@stop()