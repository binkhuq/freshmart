@extends('admin.master')
@section('title','Thêm mới danh mục')
@section('main')
<form action="{{route('category.store')}}" method="POST" role="form">
	@csrf
	<legend>Thêm mới danh mục</legend>

	<div class="form-group">
		<label for="">Tên</label>
		<input type="text" class="form-control" required="required" name="name" id="name" placeholder="Input Name">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	<div class="form-group">
		<label for="">Trạng thái</label>
		<div class="radio">

			<label>
				<input type="radio" name="status" value="1" checked="checked">
				Hiển thị
			</label>
			<label>
				<input type="radio" name="status"  value="0" >
				Ẩn
			</label>
		</div>
	</div>
	<div class="form-group">
		<label for=""> Slug</label>
		<input type="text" name="slug"  id="slug" required="required"  class="form-control" value="" placeholder="Input Slug" >
		@if($errors->has('slug'))
		{{$errors->first('slug')}}
		@endif
	</div>


	<button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()
@section('js')
<script src="{{url('/public/admin')}}/js/slug.js"></script>
@stop()