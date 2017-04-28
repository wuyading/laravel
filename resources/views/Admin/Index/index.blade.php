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
        <div class="text-center" style="width: 100%;text-align: center;">
            <h1>欢迎进入后台管理系统</h1>
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