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

Route::get('admin/login','Admin\LoginController@index'); //登录
Route::post('admin/login_in','Admin\LoginController@login_in'); //登录跳转
Route::get('admin/index','Admin\IndexController@index'); //登录跳转
Route::get('admin/user','Admin\UserController@index'); //登录跳转


