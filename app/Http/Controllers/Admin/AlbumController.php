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

class AlbumController extends Controller
{
    public function index(){
        $data = DB::table('album')->get()->toArray();
        return view('Admin/Album/index',['controller'=>'album','albums'=>$data]);
    }
    //添加照片
    public function add(){
        return view('Admin/Album/add',['controller'=>'album']);
    }

    //批量上传照片
    public function fileUploads(){
       $path =  fileUpload('album');
       $userId = session('userId');
       $data = [
           'image' => $path,
           'category_id' => '1',
           'area_path' => '1',
           'uploader' => $userId,
           'add_time' => time()
       ];

       if($path){
           DB::table('album')->insertGetId($data);
           return response()->json(array(
               'status' => 1001,
               'msg' =>'上传成功'
           ));
       }else{
           return response()->json(array(
               'status' => 1002,
               'msg' =>'上传失败'
           ));
       }

    }
}