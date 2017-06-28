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
                        <a href="#">文章列表</a>
                    </li>
                </ul>

            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div style="margin: 15px 15px 15px 0;">
                    <a class="btn btn-danger" href="{{ action('Admin\ArticleController@add') }}">添加文章 <i class="fa fa-plus"></i></a>
                </div>
                <div class="col-md-12 col-sm-12">
                    <table class="table table-hover">
                        <tr>
                            <th>编号</th>
                            <th>标题</th>
                            <th>内容</th>
                            <th>分类</th>
                            <th>图片</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach( $list as $item )
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ strip_tags(htmlspecialchars_decode($item->content)) }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td class="col-sm-3">
                                    <img src="{{ $item->file }}" alt="" style="width:20%">
                                </td>
                                <td>{{ date('Y-m-d H:i:s',$item->update_time) }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ action('Admin\ArticleController@add',['id'=>$item->id]) }}">修改</a>
                                    <a class="btn btn-danger" href="javascript:" onclick="ajaxDelete({{ $item->id }})">删除</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    <div class="pagination">
                        {{ $list->links() }}
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
                $.post('{{ action('Admin\ArticleController@ajaxDelete') }}',{'id':id},function (res) {
                    if(res.status == 1001){
                        layer.alert(res.msg, {
                            icon: 6
                            ,time: 0 //不自动关闭
                            ,btn: ['确定']
                            ,area: '200px'
                            ,yes: function(index){
                                layer.close(index);
                                window.location.href = "{{ action('Admin\ArticleController@index') }}";
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