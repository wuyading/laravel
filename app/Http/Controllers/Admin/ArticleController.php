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
        return view('Admin/Article/index',[ 'controller' => 'article' ]);
    }

    //添加文章
    public function add()
    {
        $list = (new CategoryController())->get_category(2);
        return view('Admin/Article/add', [ 'controller' => 'article','list' => $list ]);
    }

    //保存文章
    public function ajax_save_article(Request $request)
    {
        $data = $request->input();
        dump($data);
        /**
         * @var $img UploadedFile 上传文件
         */
        $file = $request->file('file');
        $upload_dir = '/uploads/news';
        if(!file_exists($upload_dir)){
            @mkdir($upload_dir);
        }
        if($file){
            $file_name = md5(microtime()).'.'.$file->guessExtension();
            $file->move(public_path().$upload_dir,$file_name);
            if($file->getError()){
                return $this->json_callback($file->getErrorMessage());
            }
            $data['web_logo'] = $upload_dir.'/'.$file_name;
        }
    }



    //删除文章
    public function ajaxDelete(Request $request)
    {
        $id = $request->input('id');
        $article = Article::find($id);
        $delete = $article->toArray();
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