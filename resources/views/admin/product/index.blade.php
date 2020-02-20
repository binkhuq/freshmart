@extends('admin.master')

@section('title','Quản lý sản phẩm')

@section('main')

<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Product list</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
			
			<div class="form-group">
				<input type="email" class="form-control" name="search" placeholder=" ">
			</div>
			
			
			
			<button type="submit" class="btn btn-primary">
				<i class="glyphicon glyphicon-search"></i>
			</button>
			<a href="{{ route('product.create') }}" class="btn btn-success">Thêm mới</a>
		</form>
	</div>
	
	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên </th>
				<th>Danh mục</th>
				<th>Trạng thái</th>
				<th>Giá</th>
				<th>Giá khuyến mại</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $pro)
			<tr>
				<td>{{$pro->id}}</td>
				<td>
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="{{$pro->image}}" alt="Image" width="50">
						</a>
						<div class="">
							<h4 class="media-heading">{{$pro->name}}</h4>
							<p>{{$pro->created_at->format('d-m-Y')}}</p>
						</div>
					</div>
				</td>
				<td>{{$pro->cat->name}}</td>
				<?php $prod=$pro->status; ?>
				@if($prod===1)
				<td >Còn hàng</td>
				@else
				<td>Hết hàng</td>
				@endif

				
				<td>{{number_format($pro->price)}} VNĐ</td>
				<td>{{number_format($pro->sale_price)}} VNĐ</td>
				<td style="width: 100px">
					<form method="POST" action="{{route('product.destroy',['id' => $pro->id])}}">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
						
						
						<a href="{{ route('product.edit',['id'=>$pro->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

						<button  class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc không?')"><i class="fa fa-trash"></i></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="clearfix"></div>
	{{ $products->links() }}
</div>

@stop()
