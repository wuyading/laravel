<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017/4/28
 * Time: 9:15
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('Admin/Index/index');
    }
}