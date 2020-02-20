@extends('admin.master')
@section('title','Chỉnh sửa đơn hàng: ' .$model->name)
@section('main')
<form action="{{route('order_detail.update',['id'=>$model->id])}}" method="POST" role="form">
	@csrf

	<input type="hidden" name="_method" value="PUT">
	<legend>Chỉnh sửa đơn hàng</legend>
	
	<div class="form-group">
		<label for="">Tên khách hàng</label>
		<input type="text" class="form-control" name="name" required="required" value="{{$model->name}}">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" name="email" required="required" value="{{$model->email}}">
	</div>

	<div class="form-group">
		<label for="">Phone</label>
		<input type="text" class="form-control" name="phone" required="required" value="{{$model->phone}}">
	</div>

	<div class="form-group">
		<label for="">Địa chỉ</label>
		<input type="text" class="form-control" name="address" required="required" value="{{$model->address}}">
	</div>

	<div class="form-group">
		<label for="">Hình thức thanh toán</label>
		<input type="text" class="form-control" name="payment" required="required" value="{{$model->payment}}">
	</div>
	<div class="form-group">
		<label for="">Trạng thái</label>
		<div class="radio">

			<label>
				<input type="radio" name="status" value="1" checked="checked" >
				Đã thanh toán
			</label>
			<label>
				<input type="radio" name="status"  value="0" checked="checked">
				Chưa thanh toán
			</label>
		</div>
	</div>
	

	<button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()
@section('js')
<script src="{{url('/public/admin')}}/js/slug.js"></script>
@stop()