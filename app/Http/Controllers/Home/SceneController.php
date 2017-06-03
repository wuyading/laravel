<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017/4/28
 * Time: 9:15
 */
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SceneController extends BaseController
{
    public function index(){
        $id = $_GET['id'];
        $province = DB::table('province')->find($id);
        dump($province);die;
        return view('Home/Scene/index',['controller'=>'index']);
    }
}