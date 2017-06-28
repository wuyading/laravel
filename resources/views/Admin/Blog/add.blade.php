<!doctype html>
<html lang="en">
@include('Admin.Common.header')
@show
<link rel="stylesheet" type="text/css" href="/admin/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="/admin/diyUpload/css/diyUpload.css">


<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
@include('Admin.Common.top')
@show
<!-- BEGIN CONTAINER -->
<div class="clearfix"></div>

<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('Admin.Common.sidebar')
@show

<!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="background:#abcdef;">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="/index">首页</a>
                        <i class="fa fa-circle"></i>
                        <a href="#">博客管理</a>
                        <i class="fa fa-circle"></i>
                        <a href="#"><?= isset($id) ? '修改' : '添加'?>博客</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <style>
                        .table th{text-align: right}
                    </style>
                    <form id="sub_form" target="iframe_message" action="{{ action('Admin\ArticleController@ajax_save_article') }}" method="post" enctype="multipart/form-data">
                        <table class="table" style="width: 1050px;">
                            <tr>
                                <th><span style="color: red">*</span>博客标题：</th>
                                <td><input class="form-control" type="text" name="title" value="<?=isset($info['title']) ? $info['title'] : ''?>" required></td>
                            </tr>
                            <tr>
                                <th>博客内容：</th>
                                <td>
                                    <textarea id="editor" name="content" type="text/plain" style="width:900px;height:360px;"><?=isset($info['content']) ? htmlspecialchars_decode($info['content']) : ''?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th><span style="color: red">*</span>分类：</th>
                                <td>
                                    <div class="pull-left">
                                        <select class="form-control input-small inline c_first" name="category_id">
                                            <option value="0">==请选择==</option>
                                            <?php foreach ($list as $row) : ?>
                                            <option value="{{ $row->id }}" @if(isset($info['category_id']) && $row->id == $info['category_id']) selected @endif >{{ $row->name }}</option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th><span style="color: red">*</span>排序：</th>
                                <td>
                                    <input type="text" name="sortid" value="<?=isset($info['sortid']) ? $info['sortid'] : '1'?>"> <span style="color:red">数字越大显示越靠前</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center">
                                    <input type="hidden" name="id" value="<?=isset($info['id']) ? $info['id'] : ''?>">
                                    <input type="submit" class="btn btn-primary btn_save" value="保 存"> |
                                    <input type="button" class="btn btn-info" onclick="history.back(-1)" value="返 回">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <iframe name="iframe_message" style="display: none">

            </iframe>


        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('Admin.Common.footer')
@show

<script type="text/javascript" src="/admin/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="/admin/diyUpload/js/diyUpload.js"></script>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    function show_message(json) {
        if(json.status == 1001){
            layer.alert(json.msg, {
                icon: 6
                ,time: 0 //不自动关闭
                ,btn: ['确定']
                ,area: '200px'
                ,yes: function(index){
                    layer.close(index);
                    window.location.href = "{{ action('Admin\BlogController@index') }}";
                }
            });
        }else{
            layer.alert(json.msg,{
                icon:0
                ,time:0
                ,btn: ['确定']
            });
        }
    }
</script>

</body>

</html>