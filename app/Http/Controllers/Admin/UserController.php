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

class UserController extends Controller
{
    public function index(){
        return view('Admin/User/index');
    }
}