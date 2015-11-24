<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//hello
Route::get('/', function () {
    return view('hello')->with('title','hello');
});
//路由参数
Route::get('/user/{name?}', function ($name = 'John') {
    return "你好！$name";
});

Route::get('/products','ProductController@index');
Route::get('/products/show/{id}','ProductController@show');
Route::get('/products/edit/{id?}','ProductController@edit');
Route::get('/products/save/{id?}','ProductController@save');
Route::get('/products/delete/{id}','ProductController@delete');


Route::get('/products/send',"ProductController@send");
Route::get('/products/receive',"ProductController@receive");

