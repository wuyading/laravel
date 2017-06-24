<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017-06-06
 * Time: 17:23
 */

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends BaseController
{
    //文章列表
    public function index()
    {
        $list = DB::table('article')->orderBy('id', 'desc')->paginate(10)->toArray();
        return view('Admin/Article/index',[ 'controller' => 'article','list'=>$list['data'] ]);
    }

    //添加文章
    public function add(Request $request)
    {
        $id = $request->get('id');
        $list = (new CategoryController())->get_category(2);
        if($id){
            $info = Article::find($id)->toArray();
            return view('Admin/Article/add', [ 'controller' => 'article','list' => $list,'info' => $info ]);
        }else{
            return view('Admin/Article/add', [ 'controller' => 'article','list' => $list ]);
        }
    }

    //保存文章
    public function ajax_save_article(Request $request)
    {
        $data = $request->input();
        $data['update_time'] = time();
        if($data){
            unset($data['s']);
            $data['content'] = isset($data['content']) ? filter_var($data['content'],FILTER_SANITIZE_SPECIAL_CHARS) : '';
        }
        /**
         * @var $img UploadedFile 上传文件
         */
        $file = $request->file('file');
        $upload_dir = '/uploads/article';
        if(!file_exists($upload_dir)){
            @mkdir($upload_dir);
        }
        if($file){
            $file_name = md5(microtime()).'.'.$file->guessExtension();
            $file->move(public_path().$upload_dir,$file_name);
            if($file->getError()){
                return $this->json_callback($file->getErrorMessage());
            }
            $data['file'] = $upload_dir.'/'.$file_name;
        }

        if(isset($data['id']) && !empty($data['id']) ){ //修改内容
            $article = Article::find($data['id']);
            if($article){
                $is_success = DB::table('article')->update($data);
            }else{
                $is_success = false;
            }
        }else{ //添加内容
            unset($data['id']);
            $data['update_time'] = time();
            $is_success = DB::table('article')->insertGetId($data);
        }

        if($is_success){
            $msg = ['status'=>1001,'msg'=>'保存成功！'];
        }else{
            $msg = ['status'=>3001,'msg'=>'保存失败！'];
        }

        return $this->json_callback($msg);
    }



    //删除文章
    public function ajaxDelete(Request $request)
    {
        $id = $request->input('id');
        $article = Article::find($id);
        $return = $article->delete();
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

    private function json_callback($data,$parent='parent',$method='show_message'){
        if(is_array($data)){
            $data = json_encode($data);
        }

        echo <<<EOT
        <script type="text/javascript">
            {$parent}.{$method}($data);
        </script>
EOT;
        die();
    }
}