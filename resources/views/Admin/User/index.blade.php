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
        </div>
        <!-- END CONTENT BODY -->
        @include('Admin.Common.footer')
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
</body>
</html>