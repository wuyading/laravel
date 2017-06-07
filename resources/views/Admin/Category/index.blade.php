<!doctype html>
<html lang="en">
@include('Admin.Common.header')
<link rel="stylesheet" href="/ztree/css/zTreeStyle/zTreeStyle.css" type="text/css">
<style>
    .ztree *{font-size: 18px;}
    .ztree li a{line-height:30px;height: 30px;}
    .ztree li span.button.add {
        background-position: -144px 0;
        margin-left: 2px;
        margin-right: -1px;
        vertical-align: top;
    }
    .ztree li a.curSelectedNode{line-height: 30px; height: 30px}
    .ztree li span.button{margin-top: 7px;}
    .ztree li a input.rename {  height: 26px;font-size: 14px;  }
    .zTreeDemoBackground{border: 1px solid #AAAAAA;padding: 15px 0;}
</style>
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
                        <a href="#">分类列表</a>
                    </li>
                </ul>

            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="zTreeDemoBackground left">
                            <ul id="treeDemo" class="ztree"></ul>
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

<script src="/ztree/js/jquery.ztree.all.min.js" type="text/javascript"></script>

<script type="text/javascript">
    <!--
    var setting = {
        view: {
            addHoverDom: addHoverDom,
            removeHoverDom: removeHoverDom,
            //showIcon: showIconForTree,
            selectedMulti: false
        },
        edit: {
            enable: true,
            editNameSelectAll: true,
            showRemoveBtn: showRemoveBtn,
            showRenameBtn: showRenameBtn
        },
        data: {
            simpleData: {
                enable: true
            }
        },
        callback: {
            beforeEditName: beforeEditName,
            beforeRemove: beforeRemove,
            beforeRename: beforeRename,
            onRemove: onRemove,
            onRename: onRename
        }
    };

    var zNodes =<?=$category_json?>;
    var log, className = "dark";
    function beforeDrag(treeId, treeNodes) {
        return false;
    }
    function showIconForTree(treeId, treeNode) {
        return false;
    };
    function beforeEditName(treeId, treeNode) {
        className = (className === "dark" ? "":"dark");
        showLog("[ "+getTime()+" beforeEditName ]&nbsp;&nbsp;&nbsp;&nbsp; " + treeNode.name);
        var zTree = $.fn.zTree.getZTreeObj("treeDemo");
        zTree.selectNode(treeNode);
        setTimeout(function() {
            layer.alert("进入节点 -- " + treeNode.name + " 的编辑状态吗？", {
                icon: 6
                ,time: 0 //不自动关闭
                ,btn: ['确定', '取消']
                ,area: '200px'
                ,yes: function(index){
                    layer.close(index);
                    setTimeout(function() {
                        zTree.editName(treeNode);
                    }, 0);
                }
                ,no: function(index){
                    layer.close(index);
                }
            });
        }, 0);
        return false;
    }
    function beforeRemove(treeId, treeNode) {
        className = (className === "dark" ? "":"dark");
        showLog("[ "+getTime()+" beforeRemove ]&nbsp;&nbsp;&nbsp;&nbsp; " + treeNode.name);
        var zTree = $.fn.zTree.getZTreeObj("treeDemo");
        zTree.selectNode(treeNode);
        var srcNode = zTree.getSelectedNodes();
        if(treeNode.children){
            return confirm("确认删除 节点 -- " + treeNode.name + " 吗？");
        }else{
            layer.alert('该节点下有子节点，请先删除子节点！', {
                icon: 6
                ,time: 0 //不自动关闭
                ,btn: ['确定']
                ,area: '200px'
                ,yes: function(index){
                    layer.close(index);
                }
            });
        }

    }
    function onRemove(e, treeId, treeNode) {
        showLog("[ "+getTime()+" onRemove ]&nbsp;&nbsp;&nbsp;&nbsp; " + treeNode.name);
        //ajax提交
        $.post('{{ action('Admin\CategoryController@ajaxDelete') }}',{'id':treeNode.id},function (res) {
            if(res.status == 1001){
                layer.alert(res.msg, {
                    icon: 6
                    ,time: 0 //不自动关闭
                    ,btn: ['确定']
                    ,area: '200px'
                    ,yes: function(index){
                        layer.close(index);
                    }
                });
            }else{
                layer.alert(res.message, {icon: 0,time:0,closeBtn: 0});
            }
        },'json');
    }
    function beforeRename(treeId, treeNode, newName, isCancel) {
        className = (className === "dark" ? "":"dark");
        showLog((isCancel ? "<span style='color:red'>":"") + "[ "+getTime()+" beforeRename ]&nbsp;&nbsp;&nbsp;&nbsp; " + treeNode.name + (isCancel ? "</span>":""));
        if (newName.length == 0) {
            setTimeout(function() {
                var zTree = $.fn.zTree.getZTreeObj("treeDemo");
                zTree.cancelEditName();
                layer.alert("节点名称不能为空.", {icon: 0,time:0,closeBtn: 0});
            }, 0);
            return false;
        }else {
            //ajax提交
            $.post('{{ action('Admin\CategoryController@ajaxSave') }}',{'id':treeNode.id,'name':newName},function (res) {
                if(res.status == 1001){
                    layer.alert(res.msg, {
                        icon: 6
                        ,time: 0 //不自动关闭
                        ,btn: ['确定']
                        ,area: '200px'
                        ,yes: function(index){
                            layer.close(index);
                        }
                    });
                }else{
                    layer.alert(res.message, {icon: 0,time:0,closeBtn: 0});
                    return false;
                }
            },'json');
        }
        return true;
    }
    function onRename(e, treeId, treeNode, isCancel) {
        showLog((isCancel ? "<span style='color:red'>":"") + "[ "+getTime()+" onRename ]&nbsp;&nbsp;&nbsp;&nbsp; " + treeNode.name + (isCancel ? "</span>":""));
    }
    function showRemoveBtn(treeId, treeNode) {
        if(treeNode.id == 1){
            return false;
        }else{
            return true;
        }
        //return !treeNode.isFirstNode;
    }
    function showRenameBtn(treeId, treeNode) {
        return true;
    }
    function showLog(str) {
        if (!log) log = $("#log");
        log.append("<li class='"+className+"'>"+str+"</li>");
        if(log.children("li").length > 8) {
            log.get(0).removeChild(log.children("li")[0]);
        }
    }
    function getTime() {
        var now= new Date(),
            h=now.getHours(),
            m=now.getMinutes(),
            s=now.getSeconds(),
            ms=now.getMilliseconds();
        return (h+":"+m+":"+s+ " " +ms);
    }

    var newCount = 1;
    function addHoverDom(treeId, treeNode) {
        var sObj = $("#" + treeNode.tId + "_span");
        if (treeNode.editNameFlag || $("#addBtn_"+treeNode.tId).length>0) return;
        var addStr = "<span class='button add' id='addBtn_" + treeNode.tId
            + "' title='add node' onfocus='this.blur();'></span>";
        sObj.after(addStr);
        var btn = $("#addBtn_"+treeNode.tId);
        if (btn) btn.bind("click", function(){
            var zTree = $.fn.zTree.getZTreeObj("treeDemo");
            var node_name = "新节点" + (newCount++);
            //ajax提交
            $.post('{{ action('Admin\CategoryController@ajaxAdd') }}',{'pid':treeNode.id,'name':node_name,'level':treeNode.level},function (res) {
                if(res.status == 1001){
                    zTree.addNodes(treeNode, {id:res.data, pId:treeNode.id, name:node_name});
                }else{
                    layer.alert(res.msg, {icon: 0,time:0,closeBtn: 0});
                }
            },'json');
            return false;
        });
    };
    function removeHoverDom(treeId, treeNode) {
        $("#addBtn_"+treeNode.tId).unbind().remove();
    };
    function selectAll() {
        var zTree = $.fn.zTree.getZTreeObj("treeDemo");
        zTree.setting.edit.editNameSelectAll =  $("#selectAll").attr("checked");
    }

    $(document).ready(function(){
        $.fn.zTree.init($("#treeDemo"), setting, zNodes);
        $("#selectAll").bind("click", selectAll);
    });
    //-->
</script>

<!-- END CONTAINER -->
</body>
</html>