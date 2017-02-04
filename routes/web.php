<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//路由引导到视图方式
// Route::get('/', function () {
//     return view('welcome');
// });

//路由引导到控制器的方法,并指定控制器名称
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('singup','UsersController@create')->name('singup');
Route::resource('users', 'UsersController');
