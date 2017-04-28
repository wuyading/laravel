<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017/4/18
 * Time: 17:19
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Admin/Login/login');
    }

    public function  login_in(Request $request){
        return redirect()->action('Admin\IndexController@index');
    }
}