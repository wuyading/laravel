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
use App\Models\Province;

class SceneController extends BaseController
{
    public function index()
    {
        $id = $_GET['id'];
        $province = DB::table('province')->where(['provinceid' => $id])->first();
        if (!empty($province)) {

        }
        $list = DB::table('album')->where(['province'=>$id])->get()->toArray();
        return view('Home/Scene/index', ['controller' => 'index','list' => $list,'title' => $province->province ]);
    }
}