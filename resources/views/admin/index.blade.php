@extends('admin.master')
@section('main')
<div class="jumbotron">
	<div class="container">
		<h1>Xin chào,{{Auth::user()->name}} </h1>
		<p>Chào mừng bạn đến với trang quản trị</p>
		
	</div>
</div>
@stop()