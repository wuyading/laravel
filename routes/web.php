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

Route::get('/', 'Home\IndexController@index');

//前端链接
Route::get('article/index','Home\ArticleController@index'); //文章
Route::get('blog/index','Home\BlogController@index'); //博客


//后端链接
Route::get('admin/login','Admin\LoginController@index'); //登录
Route::post('admin/login_in','Admin\LoginController@login_in'); //登录跳转
Route::get('admin/index','Admin\IndexController@index'); //后台首页
Route::get('admin/user','Admin\UserController@index'); //用户模块
Route::get('admin/login_out','Admin\LoginController@login_out'); //登出
Route::get('admin/album','Admin\AlbumController@index'); //相册列表
Route::get('admin/album/add','Admin\AlbumController@add'); //添加照片

Route::post('admin/album/fileUploads','Admin\AlbumController@fileUploads'); //上传照片照片



