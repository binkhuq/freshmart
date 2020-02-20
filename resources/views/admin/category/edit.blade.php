@extends('admin.master')
@section('title','Chỉnh sửa danh mục: ' .$model->name)
@section('main')
<form action="{{route('category.update',['id'=>$model->id])}}" method="POST" role="form">
	@csrf

	<input type="hidden" name="_method" value="PUT">
	<legend>Chỉnh sửa danh mục</legend>
	
	<div class="form-group">
		<label for="">Tên</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Input Name" value="{{$model->name}}">
	</div>
	<div class="form-group">
		<label for="">Trạng thái</label>
		<div class="radio">

			<label>
				<input type="radio" name="status" value="1" checked="checked" >
				Hiển thị
			</label>
			<label>
				<input type="radio" name="status"  value="0" checked="checked">
				Ẩn
			</label>
		</div>
	</div>
	<div class="form-group">
		<label for="">Slug</label>
		<input type="text" name="slug"  id="slug" class="form-control" value="{{$model->slug}}"placeholder="Input Slug" >
	</div>

	<button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()
@section('js')
<script src="{{url('/public/admin')}}/js/slug.js"></script>
@stop()