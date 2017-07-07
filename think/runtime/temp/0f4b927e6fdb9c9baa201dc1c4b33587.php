<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"E:\000rj\www\WWW\think\public/../application/admin\view\category\category_list.html";i:1498739038;s:74:"E:\000rj\www\WWW\think\public/../application/admin\view\public\header.html";i:1498396598;s:74:"E:\000rj\www\WWW\think\public/../application/admin\view\public\footer.html";i:1498447740;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="__STATIC__/admin/favicon.ico" >
<link rel="Shortcut Icon" href="__STATIC__/admin/favicon.ico" />
    <link href="__STATIC__/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/admin/lib/html5shiv.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/css/common.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__STATIC__/admin/static/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius" onclick="o2o_s_edit('添加生活服务分类','<?php echo url('admin/category/category_add'); ?>','','300')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加分类</a></span> <span class="r"></span> </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="40"><input name="" type="checkbox" value=""></th>
                <th width="80">ID</th>
                <th width="100">分类</th>
                <th width="100">链接</th>
                <th width="30">排序序号</th>
                <th width="100">新增时间</th>
                <th width="60">发布状态</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
            <tr class="text-c">
                <td><input name="" type="checkbox" value=""></td>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['cate']; ?></td>
                <td><?php echo $value['url']; ?></td>
                <td class="text-c order"><input type="text" value="<?php echo $value['sort']; ?>" style="width:20px;" name="sort" aid="<?php echo $value['id']; ?>"/></td>
                <td><?php echo date("Y-m-d H:i",$value['create_time']); ?></td>
                <td class="td-status"><a href="<?php echo url('category/category_state',['id'=>$value['id'],'state'=>$value['state']==0?1:0]); ?>" title="点击修改状态"><?php echo state($value['state']); ?></a></td>
                <td class="td-manage">
                    <a href="<?php echo url('category/category_list',['pid'=>$value['id']]); ?>">获取子栏目</a><a style="text-decoration:none" class="ml-5" -onClick="o2o_s_edit('编辑','','',300)" -href="javascript:;" href="<?php echo url('category/category_update',['id'=>$value['id']]); ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                    <a style="text-decoration:none" class="ml-5" onClick="o2o_del('','<?php echo url('category/category_delete',['id'=>$value['id']]); ?>')" href="javascript:;" -href="<?php echo url('category/category_delete',['id'=>$value['id']]); ?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="pages"><?php echo $result->render(); ?></div>
    </div>
</div>
<!--包含头部文件-->
<script>
    var CODE={
        'image_url':"<?php echo url('admin/Image/image_line'); ?>",
        'upload_swf':'__STATIC__/admin/uploadify/uploadify.swf',
    };
</script>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/editor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/editor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/editor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/common/js/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/common/js/admin_image.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>

<script>
    var url_path={
        'sort_url':"<?php echo url('admin/category/sort'); ?>"
    };

</script>
<script type="text/javascript" src="__STATIC__/admin/common/js/common.js"></script>

<script>
    /*页面 全屏-添加*/
    function o2o_edit(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*添加或者编辑缩小的屏幕*/
    function o2o_s_edit(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*-删除*/
    function o2o_del(id,url){

        layer.confirm('确认要删除吗？',function(index){
            window.location.href=url;
        });
    }

</script>
