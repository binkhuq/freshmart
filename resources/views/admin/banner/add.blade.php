@extends('admin.master')
@section('title','Thêm mới banner')
@section('main')
<form action="{{route('banner.store')}}" method="POST" role="form">
	@csrf
	<legend>Thêm mới banner</legend>

	<div class="form-group">
		<label for="">Tên</label>
		<input type="text" class="form-control" name="name" id="" placeholder="">
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
	</div>
	
	<div class="form-group">
		<label for="">Ảnh banner</label>
		<div class="input-group">
			<input type="text" class="form-control" name="image" id="image" placeholder="">
			
			<span class="input-group-btn">
				<a href="#modal-file" data-toggle="modal" class="btn btn-default">Chọn ảnh</a>
			</span>
			@if($errors->has('image'))
			{{$errors->first('image')}}
			@endif
		</div>
		<img src="" alt="" id="show_img" style="width: 30%">
	</div>

	<button type="submit" class="btn btn-primary">Lưu</button>
</form>
@stop()
@section('js')
<div class="modal fade" id="modal-file">
	<div class="modal-dialog" style="width: 85%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Quản lý file</h4>
			</div>
			<div class="modal-body">
				<iframe src="{{url('file')}}/dialog.php?akey=wYAHVuxRdpbZ6deEOQTZi5u8oDA8d4y0VvxM1JV&field_id=image" style="width: 100%;height: 500px; border:0; overflow-y: auto"></iframe>
			</div>
			
		</div>
	</div>
</div>
<script src="{{url('/public/admin')}}/js/slug.js"></script>
<script src="{{url('/public/admin')}}/tinymce/tinymce.min.js"></script>
<script src="{{url('/public/admin')}}/tinymce/config.js"></script>
<script type="text/javascript">
	$('#modal-file').on('hide.bs.modal',function(){
		var _img = $('input#image').val();
		$('img#show_img').attr('src',_img);
	});
	
</script>
@stop()
