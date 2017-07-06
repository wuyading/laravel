<?php
/**
 * Created by PhpStorm.
 * User: wuyading1993
 * Date: 2017/4/28
 * Time: 9:15
 */
namespace App\Http\Controllers\Home;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends BaseController
{
    public function index(){
        $article = DB::table('article')->orderBy('sortid', 'desc')->orderBy('id','desc')->paginate(2);
        return view('Home/Article/index',['controller'=>'article','article'=>$article]);
    }
}