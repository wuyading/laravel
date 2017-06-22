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
                <li class="">
                    <a href="{{ action('Admin\SettingController@second') }}" aria-expanded="false"> 邮件配置 </a>
                </li>
                <li class="active">
                    <a href="#" aria-expanded="true"> 基础配置3 </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <style>
                                .table th{text-align: right}
                            </style>
                            <form id="sub_form" target="iframe_message" action="" method="post" enctype="multipart/form-data">
                                <table class="table" style="width: 1000px;">
                                    <tr>
                                        <th>配置3：</th>
                                        <td><input class="form-control" type="text" name="title" value="<?=isset($info['title']) ? $info['title'] : ''?>"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: center">
                                            <input type="hidden" name="id" value="<?=isset($info['id']) ? $info['id'] : ''?>">
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