@extends('admin.master')
@section('title','Quản lý tài khoản')
@section('main')
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Danh sách tài khoản </div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
			
			
			<div class="form-group">
				
				<input type="text" class="form-control" id="" placeholder=" ">
			</div>
			<button type="submit" class="btn btn-primary">
				<i class="glyphicon glyphicon-search"></i>
			</button>
			<a href="{{route('user.create')}}" class="btn btn-success">Thêm mới</a>
		</form>
	</div>

	<!-- Table -->


	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên</th>
				<th>Email</th>
				
				<th>Ngày tạo </th>
				<th></th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($cats as $cat)
			<tr>
				<td> {{$cat->id}}</td>
				<td> {{$cat->name}}</td>
				<td> {{$cat->email}}</td>
				
				<td> {{$cat->created_at}}</td>
				<td>
					<form action="{{route('user.destroy',['id'=>$cat->id])}}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">

						<a href="{{ route('user.edit',['id'=>$cat->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

						<button  class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc không?')"><i class="fa fa-trash"></i></button>

						
					</form>
				</td>
				
			</tr>
			@endforeach
			
		</tbody>
	</table>
	<div class="clearfix">
		{{$cats->links()}}
	</div>
</div>
@stop()