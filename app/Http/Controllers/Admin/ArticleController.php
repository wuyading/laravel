<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017-06-06
 * Time: 17:23
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends BaseController
{
    //文章列表
    public function index()
    {
        return view('Admin/Article/index',[ 'controller' => 'article' ]);
    }

    //添加文章
    public function add()
    {
        return view('Admin/Article/add', [ 'controller' => 'article' ]);
    }

    //删除文章
    public function ajaxDelete(Request $request)
    {
        $id = $request->input('id');
        $album = Album::find($id);
        $delete = $album->toArray();
        $return = $album->delete();
        if ($return) {
            return response()->json(array(
                'status' => 1001,
                'msg' => '删除成功！'
            ));

        } else {
            return response()->json(array(
                'status' => 1002,
                'msg' => '删除失败'
            ));
        }

    }
}