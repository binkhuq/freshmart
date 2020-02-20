@extends('admin.master')

@section('title','Sửa sản phẩm')

@section('main')
<div class="box-body">
	<form action="{{route('product.update',['id'=>$model->id])}}" method="POST" role="form">
		@csrf
		<input type="hidden" name="_method" value="PUT">
		<div class="row">
			<div class="col-md-9">
				
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" class="form-control" id="name" required="required" name="name" placeholder="Input name" value="{{$model->name}}">
					@if($errors->has('name'))
					{{$errors->first('name')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Đường dẫn SEO</label>
					<input type="text" class="form-control" id="slug" required="required" name="slug" placeholder="Input name" value="{{$model->slug}}">
					@if($errors->has('slug'))
					{{$errors->first('slug')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Nội dung</label>
					<textarea name="content" id="content" required="required" class="form-control">{{$model->content}}</textarea>
				</div>
				<div class="form-group">
					<?php 
					$images = json_decode($model->image_list);
					?>
					<label for="">Các ảnh khác <a href="#modal-files" data-toggle="modal" class="btn btn-default">Select</a></label>
					<input type="hidden" name="image_list" id="image_list" required="required" value="{{$model->image_list}}">
					<div class="row" id="image_show_list">
						@if(is_array($images))
						<div class="row">
							<hr>
							@foreach($images as $img)
							<div class="col-md-4">
								<img src="{{$img}}" alt="" style="width: 100%"> 
							</div>

							@endforeach

						</div>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Danh mục sản phẩm</label>
					<select name="category_id"  class="form-control">
						<option value="">Chọn một</option>
						@foreach($cats as $cat)
						<?php $selected = $cat->id == $model->category_id ? 'selected' : ''; ?>
						<option {{$selected}} value="{{$cat->id}}">{{$cat->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="text" class="form-control" name="price" value="{{$model->price}}">
					@if($errors->has('price'))
					{{$errors->first('price')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Giá khuyến mãi</label>
					<input type="text" class="form-control" name="sale_price" value="{{$model->sale_price}}">
					@if($errors->has('sale_price'))
					{{$errors->first('sale_price')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>
					<div class="radio">
						<label>
							<input type="radio" name="status" value="1" <?php echo $model->status == 1 ? 'checked' : ''; ?>>
							Còn hàng
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="status" value="0" <?php echo $model->status == 0 ? 'checked' : ''; ?>>
							Hết hàng
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="">Ảnh sản phẩm</label>
					<div class="input-group">
						<input type="text" class="form-control" name="image" id="image" value="{{$model->image}}">
						<span class="input-group-btn">
							<a href="#modal-file" data-toggle="modal" class="btn btn-default">Chọn ảnh</a>
						</span>
					</div>
					<img src="{{$model->image}}" alt="{{$model->name}}" id="show_img" style="width: 100%">
				</div>
				<button type="submit" class="btn btn-primary">Lưu</button>
			</div>
		</div>
		
	</form>
</div>
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
<div class="modal fade" id="modal-files">
	<div class="modal-dialog" style="width: 85%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Quản lý file</h4>
			</div>
			<div class="modal-body">
				<iframe src="{{url('file')}}/dialog.php?akey=wYAHVuxRdpbZ6deEOQTZi5u8oDA8d4y0VvxM1JV&field_id=image_list" style="width: 100%;height: 500px; border:0; overflow-y: auto"></iframe>
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

	$('#modal-files').on('hide.bs.modal',function(){
		var _imgs = $('input#image_list').val();
		var img_list = $.parseJSON(_imgs);
		var _html = '';
		for (var i = 0; i < img_list.length; i++) {
			_html +='<div class="col-md-3 thumbnail">';
			_html +='<img src="'+img_list[i]+'" alt="">';
			_html +='</div>';
		}

		$('#image_show_list').html(_html);
	});
</script>
@stop()
