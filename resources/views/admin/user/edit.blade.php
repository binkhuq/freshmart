@extends('admin.master')
@section('title','Chỉnh sửa tài khoản: ' .$model->name)
@section('main')
<form action="{{route('user.update',['id'=>$model->id])}}" method="POST" role="form">

	@csrf
	<input type="hidden" name="_method" value="PUT">
	<legend>Chỉnh sửa tài khoản </legend>

	<div class="form-group">
		<label for=""> Tên</label>
		<input type="text" class="form-control" name="name" id="" placeholder="Input Name" value="{{$model->name}}">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Email </label>
		<input type="text" class="form-control" name="email" id="" placeholder="Input Name" value="{{$model->email}}">
		@if($errors->has('email'))
		{{$errors->first('email')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Mật khẩu </label>
		<input type="password" name="password"  id="" class="form-control" value="{{$model->password}}"placeholder="Input Slug" >
		@if($errors->has('password'))
		{{$errors->first('password')}}
		@endif
	</div>
	
	<button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()
