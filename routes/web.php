<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','HomeController@index')->name('home');
Route::get('/list','HomeController@list')->name('list');
Route::get('/show/{slug}','HomeController@show')->name('show');
Route::get('detail/sanpham/{slug}','HomeController@detail')->name('detail');

Route::get('/cart','HomeController@cart')->name('cart');


Route::get('contact','HomeController@contact')->name('contact');
Route::get('about','HomeController@about')->name('about');



Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){

	Route::get('','AdminController@index')->name('admin');
	Route::get('logout','AdminController@logout')->name('logout');
	Route::get('/file','AdminController@file')->name('admin.file');
	Route::post('/file','AdminController@upload')->name('admin.file');
	include 'admin.php';
});
Route::group(['prefix' => 'cart'], function() {
	Route::get('view','CartController@view')->name('cart.view');
	Route::get('add/{id}','CartController@add')->name('cart.add');
	Route::get('remove/{id}','CartController@remove')->name('cart.remove');
	Route::get('update/{id}','CartController@update')->name('cart.update');
	Route::get('clear','CartController@clear')->name('cart.clear');
});
Route::get('admin/login','Admin\AdminController@login')->name('login');
Route::post('admin/login','Admin\AdminController@post_login')->name('login');

Route::get('check','HomeController@check')->name('check');


Route::get('search',"HomeController@getsearch")->name('search');

Route::post('comments',"HomeController@comments")->name('comments');

Route::post('checkout',"HomeController@checkout")->name('checkout');
Route::get('export', 'HomeController@export')->name('export');




Route::get('send/{id}', 'SendMailController@send')->name('send');