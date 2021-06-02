<?php
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout',function (){
    Session::forget('user');
    return redirect('/login');
});
Route::post('/login','App\Http\Controllers\UserController@login')->name('login');
Route::get('/','App\Http\Controllers\ProductController@index')->name('product');
Route::get('/details/{id}','App\Http\Controllers\ProductController@details')->name('details');
Route::get('/search','App\Http\Controllers\ProductController@search')->name('search');
Route::post('addToCart','App\Http\Controllers\ProductController@addToCart');
Route::get('/cartList','\App\Http\Controllers\ProductController@cartList');
Route::get('/removeCart/{id}','\App\Http\Controllers\ProductController@removeCart')->name('removeCart');
Route::get('/orderNow','\App\Http\Controllers\ProductController@orderNow')->name('orderNow');
Route::Post('/orderPlace','\App\Http\Controllers\ProductController@orderPlace')->name('orderPlace');
Route::get('/myOrders','\App\Http\Controllers\ProductController@myOrders')->name('myOrders');
Route::view('/register','register');
Route::post('/register','\App\Http\Controllers\UserController@register');

