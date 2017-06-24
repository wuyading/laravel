<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends BaseController
{

    //站点设置 基础设置
    public function index()
    {
        $setting = DB::table('setting')->first();
        if( $setting ){
            $setting->web_log = !empty($setting->web_log)?$setting->web_log:config('default_logo');
            $setting->title_logo = !empty($setting->title_logo)?$setting->title_logo:config('default_logo');
        }
        return view('Admin/Setting/index', ['controller' => 'setting', 'info' => $setting]);
    }

    //站点设置 基础设置2
    public function second()
    {
        $setting = DB::table('setting')->select('smtp')->first();
        if($setting){
            $info = json_decode($setting->smtp,true);
        }
        return view('Admin/Setting/second', ['controller' => 'setting', 'info' => $info]);
    }

    //站点设置 基础设置3
    public function third()
    {
        return view('Admin/Setting/third', ['controller' => 'setting']);
    }

    //保存基础设置
    public function ajax_save_data(Request $request)
    {
        $data = $request->input();
        if($data['s']){
            unset($data['s']);
        }
        $data['web_name'] = isset($data['web_name']) ? filter_var($data['web_name'],FILTER_SANITIZE_SPECIAL_CHARS) : '';
        $data['keywords'] = isset($data['keywords']) ? filter_var($data['keywords'],FILTER_SANITIZE_SPECIAL_CHARS) : '';
        $data['description'] = isset($data['description']) ? filter_var($data['description'],FILTER_SANITIZE_SPECIAL_CHARS) : '';

        $data['update_time'] = time();
        /**
         * @var $img UploadedFile 上传文件
         */
        $web_logo = $request->file('web_logo');
        $upload_dir = '/uploads/logo';
        if(!file_exists($upload_dir)){
            @mkdir($upload_dir);
        }
        if($web_logo){
            $web_logo_name = md5(microtime()).'.'.$web_logo->guessExtension();
            $web_logo->move(public_path().$upload_dir,$web_logo_name);
            if($web_logo->getError()){
                return $this->json_callback($web_logo->getErrorMessage());
            }
            $data['web_logo'] = $upload_dir.'/'.$web_logo_name;
        }

        $title_logo = $request->file('title_logo');
        if($title_logo){
            $title_logo_name = md5(microtime()).'.'.$title_logo->guessExtension();
            $title_logo->move(public_path().$upload_dir,$title_logo_name);
            if($title_logo->getError()){
                return $this->json_callback($title_logo->getErrorMessage());
            }
            $data['title_logo'] = $upload_dir.'/'.$title_logo_name;
        }

        if(isset($data['id']) && !empty($data['id'])){ //修改内容
            $setting = Setting::findOne($data['id']);
            if($setting){
                $is_success = DB::table('setting')->where(['id'=>$data['id']])->update($data);
            }else{
                $is_success = false;
            }
        }else{ //添加内容
            $setting_model = new Setting();
            $setting_model->setAttributes($data);
            $is_success = $setting_model->save();
        }

        if($is_success){
            $msg = ['status'=>1001,'msg'=>'保存成功！'];
        }else{
            $msg = ['status'=>3001,'msg'=>'保存失败！'];
        }

        return $this->json_callback($msg);
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

    //保存smtp发送邮件配置
    public function ajax_save_second(Request $request)
    {
        $data = $request->all();
        if($data['s']){
            unset($data['s']);
        }
        $datas['smtp'] = json_encode($data);
        if(isset($data['id']) && !empty($data['id'])){ //修改内容
            $setting = Setting::find($data['id']);
            if($setting){
                $is_success = DB::table('setting')->where(['id'=>$data['id']])->update($datas);
            }else{
                $is_success = false;
            }
        }else{ //添加内容
            $is_success = DB::table('setting')->insertGetId($datas);
        }

        if($is_success){
            $msg = ['status'=>1001,'msg'=>'保存成功！'];
        }else{
            $msg = ['status'=>3001,'msg'=>'保存失败！'];
        }

        return $this->json_callback($msg);
    }
}