@extends('admin.master')

@section('title','Thêm mới sản phẩm')

@section('main')
<div class="box-body">
	<form action="{{route('product.store')}}" method="POST" role="form">
		@csrf
		<div class="row">
			<div class="col-md-9">
				
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" class="form-control" required="required" id="name" name="name" placeholder="Nhập tên ">
					@if($errors->has('name'))
					{{$errors->first('name')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Đường dẫn SEO</label>
					<input type="text" class="form-control" required="required" id="slug" name="slug" placeholder=" ">
					@if($errors->has('slug'))
					{{$errors->first('slug')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Nội dung</label>
					<textarea name="content" id="content" required="required" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="">Các ảnh khác <a href="#modal-files" data-toggle="modal" class="btn btn-default">Select</a></label>
					<input type="hidden" name="image_list" id="image_list">
					<div class="row" id="image_show_list">
						
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Danh mục sản phẩm</label>
					<select name="category_id"  class="form-control">
						<option value="">Chọn một</option>
						<?php showCategories($cats) ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="text" class="form-control" name="price" required="required" placeholder="Nhập giá sản phẩm ">
					@if($errors->has('price'))
					{{$errors->first('price')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Giá khuyến mãi</label>
					<input type="text" class="form-control" required="required" name="sale_price" placeholder="Nhập giá khuyến mãi ">
					@if($errors->has('sale_price'))
					{{$errors->first('sale_price')}}
					@endif
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>
					<div class="radio">
						<label>
							<input type="radio" name="status" value="1" checked>
							Còn hàng
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="status" value="0">
							Hết hàng
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="">Ảnh sản phẩm</label>
					<div class="input-group">
						<input type="text" class="form-control" name="image" id="image" placeholder="Input name">
						<span class="input-group-btn">
							<a href="#modal-file" data-toggle="modal" class="btn btn-default">Chọn ảnh</a>
						</span>
					</div>
					<img src="" alt="" id="show_img" style="width: 100%">
				</div>
				<button type="submit" class="btn btn-primary">Thêm mới</button>
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


<?php 
function showCategories($categories, $parent_id = 0, $char = '')
{
	foreach ($categories as $key => $item)
	{
	        // Nếu là chuyên mục con thì hiển thị
		if ($item->parent_id == $parent_id)
		{
			echo '<option value="'.$item->id.'">'.$char.$item->name.'</option>';
			unset($categories[$key]);
			
	            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
			showCategories($categories, $item->id, $char.' -- ');
		}
	}
}
?>