@extends('admin.master')
@section('title','Thêm mới tài khoản')
@section('main')
<form action="{{route('user.store')}}" method="POST" role="form">
	@csrf
	<legend>Thêm mới tài khoản</legend>

	<div class="form-group">
		<label for="">Họ tên </label>
		<input type="text" class="form-control" required="required" name="name" id="" >
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	
	<div class="form-group">
		<label for="">Email</label>
		<input type="text" name="email"  id="" required="required"  class="form-control" value="" >
		@if($errors->has('email'))
		{{$errors->first('email')}}
		@endif
	</div>
	<div class="form-group">
		<label for=""> Mật khẩu</label>
		<input type="password" name="password" required="required" id=""  class="form-control" value="">
		@if($errors->has('password'))
		{{$errors->first('password')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Xác nhận mật khẩu </label>
		<input type="password" name="confirm_password" required="required"  id=""  class="form-control" value="" >
		@if($errors->has('confirm_password'))
		{{$errors->first('confirm_password')}}
		@endif
	</div>


	<button type="submit" class="btn btn-primary">Thêm mới</button>
</form>
@stop()
