<!doctype html>
<html lang="en">
@include('Admin.Common.header')
@show
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<!-- BEGIN HEADER -->
@include('Admin.Common.top')
@show
<!-- BEGIN CONTAINER -->
<div class="clearfix"> </div>

<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('Admin.Common.sidebar')
@show
<!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="#">系统设置</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>站点配置</span>
                </li>
            </ul>
        </div>

        <div class="portlet-body">
            <ul class="nav nav-pills">
                <li class="">
                    <a href="{{ action('Admin\SettingController@index') }}" aria-expanded="false"> 基础配置 </a>
                </li>
                <li class="active">
                    <a href="#" aria-expanded="true"> 邮件配置 </a>
                </li>
                <li class="">
                    <a href="{{ action('Admin\SettingController@third') }}" aria-expanded="false"> 基础配置3 </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <style>
                                .table th{text-align: right}
                            </style>
                            <form id="sub_form" target="iframe_message" action="{{ action('Admin\SettingController@ajax_save_second') }}" method="post" enctype="multipart/form-data">
                                <table class="table" style="width: 1000px;">
                                    <tr>
                                        <th>是否启用smtp方式发送邮件：</th>
                                        <td>
                                            <label><input name="display" type="radio" value="1" {{ (isset($info['display']) && $info['display'] == 1 || empty($info['display']) )?'checked':'' }} />是</label>
                                            <label><input name="display" type="radio" value="2" {{ (isset($info['display']) && $info['display'] == 2 )?'checked':'' }} />否</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>smtp服务器：</th>
                                        <td><input class="form-control" type="text" name="host" value="{{ isset($info['host']) ? $info['host'] : '' }}"></td>
                                    </tr>
                                    <tr>
                                        <th>smtp服务器端口：</th>
                                        <td><input class="form-control" type="text" name="port" value="{{ isset($info['port']) ? $info['port'] : '' }}"></td>
                                    </tr>
                                    <tr>
                                        <th>SMTP服务器的用户邮箱：</th>
                                        <td><input class="form-control" type="text" name="mail" value="{{ isset($info['mail']) ? $info['mail'] : '' }}"></td>
                                    </tr>
                                    <tr>
                                        <th>SMTP服务器的用户帐号：</th>
                                        <td><input class="form-control" type="text" name="username" value="{{ isset($info['username']) ? $info['username'] : '' }}"></td>
                                    </tr>
                                    <tr>
                                        <th>SMTP服务器的用户密码：</th>
                                        <td><input class="form-control" type="text" name="password" value="{{ isset($info['password']) ? $info['password'] : '' }}"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" style="text-align: center">
                                            <input type="hidden" name="id" value="{{ isset($info['id']) ? $info['id'] : '' }}">
                                            <input type="submit" class="btn btn-primary btn_save" value="保 存">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <iframe name="iframe_message" style="display: none">

            </iframe>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT BODY -->
        @include('Admin.Common.footer')
        @show
    </div>
</div>

    <script type="text/javascript">

        function show_message(json) {
            if(json.status == 1001){
                layer.alert(json.msg, {
                    icon: 6
                    ,time: 0 //不自动关闭
                    ,btn: ['确定']
                    ,area: '200px'
                    ,yes: function(index){
                        layer.close(index);
                        window.location.href = "{{ action('Admin\SettingController@second') }}";
                    }
                });
            }else{
                layer.alert(json.msg);
            }
        }
    </script>