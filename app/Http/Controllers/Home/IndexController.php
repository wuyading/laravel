<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017-05-23
 * Time: 16:36
 */

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index(){

        return view('Home/Index/index',['controller'=>'index']);
    }
}