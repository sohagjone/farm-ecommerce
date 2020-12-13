<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('productview.home');
});

Route::get('/admin-login', function () {
    return view('adminLogin');
});
Route::get('/admin-register', function () {
    return view('adminRegister');
});
Route::get('/admin-forget', function () {
    return view('adminForget');
});	
Route::get('productview', 'ProductViewController@home');
Route::get('productview', 'ProductViewController@index');

Route::get('gateway', 'GatewayController@index');
Route::resource('product', 'ProductController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


