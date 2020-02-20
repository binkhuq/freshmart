@extends('admin.master')
@section('title','Quản lý banner')
@section('main')
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Danh sách banner</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
			
			
			<div class="form-group">
				
				<input type="text" class="form-control" id="" placeholder=" ">
			</div>
			<button type="submit" class="btn btn-primary">
				<i class="glyphicon glyphicon-search"></i>
			</button>
			<a href="{{route('banner.create')}}" class="btn btn-success">Thêm mới</a>
		</form>
	</div>

	<!-- Table -->


	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên</th>
				
				
				
				<th></th>
			</tr>
			
		</thead>
		<tbody>
			@foreach($banns as $bann)
			<tr>
				<td> {{$bann->id}}</td>
				<td>
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="{{$bann->image}}" alt="Image" width="50">
						</a>
						<div class="media-body">
							<h4 class="media-heading">{{$bann->name}}</h4>
							<p>{{$bann->created_at->format('d-m-Y')}}</p>
						</div>
					</div>
				</td>
				
				
				
				<td style="width: 200px">
					<form action="{{route('banner.destroy',['id'=>$bann->id])}}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE" >
						
						<a href="{{ route('banner.edit',['id'=>$bann->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

						<button  class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc không?')"><i class="fa fa-trash"></i></button>
					</form>
				</td>
				
			</tr>
			@endforeach
			
		</tbody>
	</table>
	
</div>
@stop()