<?php 
Route::resource('category','CategoryController');
Route::resource('user','UserController');
Route::resource('product','ProductController');
Route::resource('banner','BannerController');
Route::resource('order_detail','Order_detailController');
Route::resource('comment','CommentsController');

?>