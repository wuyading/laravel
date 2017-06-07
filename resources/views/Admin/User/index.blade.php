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
        <div class="page-content" style="min-height: 400px;">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="">首页</a>
                        <i class="fa fa-circle"></i>
                        <a href="#">用户列表</a>
                    </li>
                </ul>

            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->

            <div class="row">
                <div style="margin: 15px 15px 15px 0;">
                    <a class="btn btn-danger" href="#">添加用户 <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-12 col-sm-12">
                    <table class="table table-hover">
                        <tr>
                            <th>编号</th>
                            <th>名称</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach( $list as $item )
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td class="col-sm-3">{{ $item->username }}</td>
                            <td>{{ $item->addtime }}</td>
                            <td>
                                <a class="btn btn-danger" href="javascript:" onclick="ajaxDelete({{ $item->id }})">删除</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    <div class="pagination">
                        <a href="">上一页</a>
                        <a href="">下一页</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- END CONTENT BODY -->
        @include('Admin.Common.footer')
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
</body>
</html>