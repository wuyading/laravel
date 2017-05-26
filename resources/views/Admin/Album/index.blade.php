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
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="/admin/index">首页</a>
                    <i class="fa fa-circle"></i>
                    <a href="#">相册列表</a>
                </li>
            </ul>

        </div>
        <!-- END PAGE BAR -->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div style="margin: 15px 15px 15px 0;">
                <a class="btn btn-danger" href="/admin/album/add">添加照片</a>
            </div>
            <div class="col-md-12 col-sm-12">
                <table class="table table-hover">
                    <tr>
                        <th>编号</th>
                        <th>图片</th>
                        <th>分类</th>
                        <th>添加时间</th>
                        <th>操作</th>
                    </tr>

                    @foreach ($albums as $album)
                        <tr>
                            <td>{{ $album->id }}</td>
                            <td class="col-sm-3">
                                <img src="{{ $album->image }}" alt="" style="width:50%">
                            </td>
                            <td>55</td>
                            <td>{{ date('Y-m-d',$album->add_time) }}</td>
                            <td>
                                <a class="btn btn-primary" href="/admin/album/edit?{{ $album->id }}">修改</a>
                                <a class="btn btn-danger" href="javascript:" onclick="">删除</a>
                            </td>
                        </tr>
                    @endforeach


                </table>
                <div class="pagination">
                    <?='分页'?>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
    @include('Admin.Common.footer')
    @show
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
</body>
</html>