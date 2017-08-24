<?php


//Route::get('/', function () {
//    return view('welcome');
//});
Route::auth();

Route::resource('/', 'ProdutoController');
Route::get('/home', 'HomeController@index');
Route::resource('/produtos', 'ProdutoController');

