<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017/4/28
 * Time: 15:30
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //用户首页
    public function index()
    {
        $list = DB::table('users')->get()->toArray();
        return view('Admin/User/index',[ 'controller' => 'system','list' => $list ]);
    }
}