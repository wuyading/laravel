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
Route::get('scene/index','Home\SceneController@index'); //风景详情


Route::get('article/index','Home\ArticleController@index'); //文章
Route::get('blog/index','Home\BlogController@index'); //博客
Route::get('about/index','Home\AboutController@index'); //关于我们
Route::get('contact/index','Home\ContactController@index'); //联系我们




//后端链接
Route::get('admin/login','Admin\LoginController@index'); //登录
Route::post('admin/login_in','Admin\LoginController@login_in'); //登录跳转
Route::get('admin/index','Admin\IndexController@index'); //后台首页
Route::get('admin/user','Admin\UserController@index'); //用户模块
Route::get('admin/login_out','Admin\LoginController@login_out'); //登出

Route::get('admin/album','Admin\AlbumController@index'); //相册列表
Route::get('admin/album/add','Admin\AlbumController@add'); //添加照片
Route::get('admin/album/edit/{id}','Admin\AlbumController@edit'); //编辑照片
Route::post('admin/album/ajaxDelete','Admin\AlbumController@ajaxDelete'); //ajax异步保存
Route::get('admin/album/getCity','Admin\AlbumController@getCity'); //获取城市;
Route::get('admin/album/getArea','Admin\AlbumController@getArea'); //获取地区

Route::get('admin/article','Admin\ArticleController@index'); //文章列表
Route::get('admin/article/add','Admin\ArticleController@add'); //文章添加
Route::get('admin/article/ajaxDelete','Admin\ArticleController@ajaxDelete'); //文章删除

Route::get('admin/blog','Admin\BlogController@index'); //博客列表
Route::get('admin/blog/add','Admin\BlogController@add'); //博客添加
Route::get('admin/blog/ajaxDelete','Admin\BlogController@ajaxDelete'); //博客删除

Route::get('admin/Category','Admin\CategoryController@index'); //分类列表
Route::post('admin/Category/ajaxAdd','Admin\CategoryController@ajaxAdd'); //分类添加
Route::post('admin/Category/ajaxSave','Admin\CategoryController@ajaxSave'); //分类编辑
Route::post('admin/Category/ajaxDelete','Admin\CategoryController@ajaxDelete'); //分类删除








Route::post('admin/album/fileUploads','Admin\AlbumController@fileUploads'); //上传照片照片



