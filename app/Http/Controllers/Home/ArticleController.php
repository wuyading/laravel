<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017/4/28
 * Time: 9:15
 */
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    public function index(){
        return view('Home/Article/index',['controller'=>'article']);
    }
}