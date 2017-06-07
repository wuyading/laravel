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
                        <a href="#">博客列表</a>
                    </li>
                </ul>

            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div style="margin: 15px 15px 15px 0;">
                    <a class="btn btn-danger" href="{{ action('Admin\BlogController@add') }}">添加博客 <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-12 col-sm-12">
                    <table class="table table-hover">
                        <tr>
                            <th>编号</th>
                            <th>图片</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>

                            <tr>
                                <td>111</td>
                                <td class="col-sm-3">
                                    <img src="" alt="" style="width:50%">
                                </td>
                                <td>11</td>
                                <td>
                                    <a class="btn btn-danger" href="javascript:" onclick="ajaxDelete(11)">删除</a>
                                </td>
                            </tr>


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
        @show
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<script type="text/javascript">
    function ajaxDelete(id) {
        layer.alert('确定删除吗？', {
            icon: 6
            ,time: 0 //不自动关闭
            ,btn: ['确定', '取消']
            ,area: '200px'
            ,yes: function(index){
                $.post('{{ action('Admin\BlogController@ajaxDelete') }}',{'id':id},function (res) {
                    if(res.status == 1001){
                        layer.alert(res.msg, {
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
                        layer.alert(res.msg, {icon: 0,time:0,closeBtn: 0});
                    }
                },'json');
            }
            ,no: function(index){
                layer.close(index);
            }
        });

    }
</script>
</body>
</html>