<!doctype html>
<html lang="en">
@include('Admin.Common.header')
@show
<link rel="stylesheet" type="text/css" href="/admin/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="/admin/diyUpload/css/diyUpload.css">
<style>
    * {
        margin: 0;
        padding: 0;
    }

    #demo {
        margin: 10px auto;
        width: 100%;
        min-height: 500px;
        background: #abcdef;
    }
</style>

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
                        <a href="#">相册管理</a>
                        <i class="fa fa-circle"></i>
                        <a href="#"><?= isset($id) ? '修改' : '添加'?>照片</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->
            <div class="" style="width:100%;height:50px;text-align: center;background:#abcdef;">
                <span style="font-size: 18px;">请填写景点名称：</span>
                <input type="text" id="scene_name">
            </div>

            <div class="" style="width:100%;height:50px;text-align: center;line-height: 50px;background:#abcdef;">
                <span style="font-size: 18px;"><i class="text-danger"> * </i>请先选择城市：</span>
                <select id="province" name="province">
                    <option value='0'>请选择省</option>
                    <?php
                    foreach($province as $k=>$v){
                    ?>
                    <option value='<?php echo $v->provinceid ?>'><?php echo $v->province ?></option>
                    <?php
                    }
                    ?>
                </select>
                <span id="citySpan">
                    <select id="city" name="city">
                        <option value="0">请选择市</option>
                    </select>
                </span>
                <span id="areaSpan">
                    <select id="area" name="area">
                        <option value="0">请选择区</option>
                    </select>
                </span>
            </div>

            <div id="demo">
                <div id="as"></div>
            </div>


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

<script>
    var province;
    var city;
    var area;
    var scene_name;
    $(document).ready(function () {
        $("#province").change(function () {
            var provinceid = $(this).val();
            $("#citySpan").load("getCity?provinceid=" + provinceid);
            $("#areaSpan").html("<select id=\"area\" name=\"area\"><option value=\"0\">请选择区</option></select>");
            $("#demo").hide();
        });
    })
    function selectArea() {
        var cityid = $("#city").val();
        $("#areaSpan").load("getArea?cityid=" + cityid);
        $("#demo").hide();
    }

    function getArea() {
        $("#demo").show();
        province = $("#province option:selected").val();
        city = $("#city option:selected").val();
        area = $("#area option:selected").val();
        scene_name = $("#scene_name").val();
        /*
         * 服务器地址,成功返回,失败返回参数格式依照jquery.ajax习惯;
         * 其他参数同WebUploader
         */
        $('#as').diyUpload({
            url: '/admin/album/fileUploads',
            success: function (data) {
                window.location.href = "/admin/album";
            },
            error: function (err) {
                console.info(err);
            },
            formData: {"province": province, "city": city, "area": area, "scene_name": scene_name},
            buttonText: '选择文件',
            chunked: true,
            // 分片大小
            chunkSize: 512 * 1024,
            //最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
            fileNumLimit: 50,
            fileSizeLimit: 500000 * 1024,
            fileSingleSizeLimit: 50000 * 1024,
            accept: {}
        });
    }

</script>

</body>

</html>