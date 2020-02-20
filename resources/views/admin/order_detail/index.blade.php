@extends('admin.master')
@section('title','Quản lý chi tiết  đơn hàng')
@section('main')
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Danh sách đơn hàng chi tiết</div>
	<div class="panel-body">
		

		
		<a class="btn btn-primary" href="{{ route('export') }}"  onclick="return confirm('Bạn có chắc không?')" ><i class="fa fa-download"></i>   Xuất excel </a>


		
	</div>

	<!-- Table -->

	 @if (session('flash_message'))
        <div  class="alert alert-success " role="alert">{{session('flash_message')}}</div>
    @endif
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Mã đơn hàng </th>
				<th>Tên khách hàng</th>
				<th>Email</th>
				<th>SĐT</th>
				<th>Địa chỉ</th>
				<th>Hình thức thanh toán</th>
				<th>Mã sản phẩm </th>
				<th>Tên sản phẩm </th>
				<th>Số lượng</th>
				<th>Giá</th>
				<th>Tổng tiền</th>
				<th>Trạng thái</th>
				<th>Ngày tạo</th>
				<th></th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr>
				<td> {{$order->id}}</td>
				<td> {{$order->name}}</td>
				<td> {{$order->email}}</td>
				<td> {{$order->phone}}</td>
				<td> {{$order->address}}</td>
				<td> {{$order->payment}}</td>
				<td>
					{{$order->product_id}}	
				</td>
				<td>
					{{$order->product_name}}	
				</td>
				<td>
					{{$order->quantity}}	
				</td>
				<td>
					{{number_format($order->price)}} VNĐ	
				</td>
				<?php  $sum=$order->price*$order->quantity ?>
				<td>
					<?php echo number_format($sum); ?> VNĐ
				</td>
				<?php 
				$sta=$order->status;
				?>
				@if($sta==0)
				<td>Chưa thanh toán</td>
				@else
				<td>Đã thanh toán</td>
				@endif
				<td>
					{{$order->created_at}}	
				</td>
				
				
				<td style="width: 50px">
					<form action="{{route('order_detail.destroy',['id'=>$order->id])}}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE" >
						<a href="{{ route('send',['id'=>$order->id]) }}" class="btn btn-xs btn-success "><i class="fa fa-envelope"></i></a>
						<a href="{{ route('order_detail.edit',['id'=>$order->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
						
						<button  class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc không?')"><i class="fa fa-trash"></i></button>
					</form>
				</td>
				
			</tr>
			@endforeach

		</tbody>
	</table>
	
</div>
@stop()