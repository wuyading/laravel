<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017/4/18
 * Time: 17:19
 */
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Admin/Login/login');
    }

    //用户登录
    public function  login_in(Request $request){
        $username = $request->get('username');
        $password = $request->get('password');
        $userInfo =  DB::table('users')->where(['username'=>$username])->first();
        $nickname = $userInfo->username;
        $userId = $userInfo->id;
        if(password_verify($password,$userInfo->password)){
            session(['nickname'=>$nickname,'userId'=>$userId]);
            return redirect()->action('Admin\IndexController@index');
        }else{
            return redirect()->action('Admin\LoginController@index');
        }

    }

    //退出登录
    public function login_out(){
        session(['nickname'=>'','userId'=>'']);
        return redirect()->action('Admin\LoginController@index');
    }
}