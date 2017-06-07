<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017-06-07
 * Time: 10:38
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends BaseController
{
    //分类列表
    public function index()
    {
        //获取所有分类
        $category_arr = DB::table('category')->select('id','parent_id as pId','name','level')->get()->toArray();
        foreach($category_arr as $k=>$v){
            $category_arr[$k] = (array)$v;
        }
        foreach ($category_arr as $key=>$row){
            if($row['level'] <= 3){
                $category_arr[$key]['open'] = true;
            }
            unset($category_arr[$key]['pid']);
        }
        $category_json = json_encode($category_arr);
        return view( 'Admin/Category/index',[ 'controller' => 'system','category_json' => $category_json ] );
    }

    //ajax添加分类
    public function ajaxAdd(Request $request)
    {
        $category_id = $request->input('pid');
        $category_name = $request->input('name');
        $level = $request->input('level');
        $data = [
            'name'=>$category_name,
            'parent_id'=>$category_id,
            'add_time' => time(),
            'level'=>$level+2,
        ];
        $return = DB::table('category')->insertGetId($data);
        if($return){
            return response()->json(array(
                'status' => 1001,
                'data' => $return
            ));
        }else{
            return response()->json(array(
                'status' => 1002,
                'msg' => '添加失败！'
            ));
        }

    }

    //编辑分类
    public function ajaxDelete(Request $request)
    {
        $id = $request->input('id');
        $category = Category::find($id);
        $return = $category->delete();
        if ($return) {
            return response()->json(array(
                'status' => 1001,
                'msg' => '删除成功！'
            ));

        } else {
            return response()->json(array(
                'status' => 1002,
                'msg' => '删除失败！'
            ));
        }

    }

    //删除分类
    public function ajaxSave(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $category = DB::table('category')->where(['id'=>$id])->update(['name'=>$name]);
        if($category){
            return response()->json(array(
                'status' => 1001,
                'msg' => '保存成功！'
            ));
        }else{
            return response()->json(array(
                'status' => 1002,
                'msg' => '保存失败'
            ));
        }

    }


}