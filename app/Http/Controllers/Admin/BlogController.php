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
use App\Models\Blog;

class BlogController extends BaseController
{
    //博客列表
    public function index()
    {
        $list = DB::table('blog')->orderBy('id', 'desc')->paginate(10);
        return view('Admin/Blog/index',[ 'controller' => 'blog','list' => $list ]);
    }

    //添加博客
    public function add(Request $request)
    {
        $id = $request->get('id');
        $list = (new CategoryController())->get_category(13);
        if($id){
            $info = Blog::find($id)->toArray();
            return view('Admin/Blog/add', [ 'controller' => 'blog','list' => $list,'info' => $info ]);
        }else{
            return view('Admin/Blog/add', [ 'controller' => 'blog','list' => $list ]);
        }
    }

    //保存博客
    public function ajax_save_blog(Request $request)
    {
        $data = $request->input();
        $data['update_time'] = time();
        if($data){
            unset($data['s']);
            $data['content'] = isset($data['content']) ? filter_var($data['content'],FILTER_SANITIZE_SPECIAL_CHARS) : '';
        }

        if(isset($data['id']) && !empty($data['id']) ){ //修改内容

            $article = Blog::find($data['id']);

            if($article){
                $is_success = DB::table('blog')->where(['id'=>$data['id']])->update($data);
            }else{
                $is_success = false;
            }
        }else{ //添加内容
            unset($data['id']);
            $data['update_time'] = time();
            $is_success = DB::table('blog')->insertGetId($data);
        }

        if($is_success){
            $msg = ['status'=>1001,'msg'=>'保存成功！'];
        }else{
            $msg = ['status'=>3001,'msg'=>'保存失败！'];
        }

        return $this->json_callback($msg);
    }

    //删除博客
    public function ajaxDelete(Request $request)
    {
        $id = $request->input('id');
        $album = Blog::find($id);
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