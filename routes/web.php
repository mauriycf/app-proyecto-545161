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



Route::get('/', function () {
    return view('welcome');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/servicios/desarrollo-web', function () {
    return view('desarrollo-web');
});
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::group(['prefix' => 'servicios'], function () {
	    Route::get('desarrollo-web', function () {
		    return view('desarrollo-web');
	});
	    Route::get('soporte-tecnico', function () {
		    return view('soporte-tecnico');
	});
});