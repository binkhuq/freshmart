 @extends('admin.master')

 @section('title','Quản lý góp ý ')

 @section('main')

 <div class="panel panel-default">
 	<!-- Default panel contents -->
 	
 	<div class="panel-body">
 		<form action="" method="POST" class="form-inline" role="form">
 			
 			<div class="form-group">
 				<input type="email" class="form-control" name="search" placeholder=" ">
 			</div>
 			
 			
 			
 			<button type="submit" class="btn btn-primary">
 				<i class="glyphicon glyphicon-search"></i>
 			</button>
 			
 		</form>
 	</div>
 	
 	<!-- Table -->
 	<table class="table">
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Tên </th>
 				<th>Email</th>
 				<th>Nội dung</th>
 				<th></th>
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($coms as $com)
 			<tr>
 				<td>{{$com->id}}</td>
 				<td>
 					<div class="media">
 						
 						<div class="">
 							<h4 class="media-heading">{{$com->name}}</h4>
 							<p>{{$com->created_at->format('d-m-Y')}}</p>
 						</div>
 					</div>
 				</td>
 				
 				<td>{{$com->email}}</td>
 				<td>{{$com->comments}}</td>
 				
 				
 				<td style="width: 100px">
 					<form method="POST" action="{{route('comment.destroy',['id' => $com->id])}}">
 						@csrf
 						<input type="hidden" name="_method" value="DELETE">
 						<button  class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc không?')"><i class="fa fa-trash"></i></button>
 					</form>
 				</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>

 	<div class="clearfix"></div>
 	{{ $coms->links() }}
 </div>

 @stop()
