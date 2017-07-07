<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"E:\000rj\www\WWW\think\public/../application/index\view\index\index.html";i:1498746736;s:74:"E:\000rj\www\WWW\think\public/../application/index\view\public\header.html";i:1499045915;s:74:"E:\000rj\www\WWW\think\public/../application/index\view\public\footer.html";i:1499045700;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link type="text/css" href="__STATIC__/index/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <link type="text/css" href="__STATIC__/index/css/autoplay.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <title>行业动态</title>
</head>

<body>
<div class="centBox">
    <div class="top">
        <?php if(!session('index_user')): ?>
        <span>
            【<a href="<?php echo url('index/login/index'); ?>">登陆管理</a> 】
            【<a href="#">申请入驻</a>】  【<a href="#">前往采购</a>】
            【<a href="#">联系我们</a>】
        </span>
        您好!&nbsp;&nbsp欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
        <?php else: ?>
        <span>
            【<a href="<?php echo url('index/index/change'); ?>">修改密码</a> 】
            【<a href="<?php echo url('index/index/logout'); ?>">退出</a>】  【<a href="#">前往采购</a>】
            【<a href="#">联系我们</a>】
        </span>
        您好!&nbsp;&nbsp;<?php echo session('index_user'); ?>&nbsp;&nbsp;欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
        <?php endif; ?>
    </div>
    <div class="top2">
        <div class="top2R">
            <div class="soru">
                <input name="" type="text" class="soru_input" />
            </div>
            <input name="" type="submit" class="soru_banu" />
        </div>
        <div class="logo">
            <a href="<?php echo url('index/index/index'); ?>" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav_nei">
        <div class="natebia_ji"></div>
        <div class="natebia"><a href="#" class="natebia_a">特别推荐</a></div>
        <div class="navR">
            <ul>
                <li class="navR_bg"><a href="<?php echo url('index/message/index'); ?>" onclick="change()">给我留言</a></li>
                <li><a href="<?php echo url('index/transaction/index'); ?>">交易专区</a></li>
                <li><a href="<?php echo url('index/industry/index'); ?>" class="xuanz">行业动态</a></li>
                <li><a href="<?php echo url('index/index/index'); ?>">网站首页</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="centBox">
    <div class="banner">
        <div class="banL">
            <div class="yuyue">
                <?php if(is_array($Recommend) || $Recommend instanceof \think\Collection || $Recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $Recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <p><a href="#"><img src="<?php echo $vo['image_path']; ?>" width="232" height="213" alt="" />
                    <?php echo $vo['name']; ?></a></p>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <p><a href="#" class="yuyue_a"></a></p>
            </div>
        </div>
        <div class="banR">
            <div class="banR_pt">
                <div class="slider">
                    <ul class="slider-main">
                        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="slider-panel">
                            <a href="http://www.jb51.net" target="_blank"><img  src="<?php echo $vo['image_path']; ?>"></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="slider-extra">
                        <ul class="slider-nav">
                            <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="slider-item"></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div class="slider-page">
                            <a class="slider-pre" href="javascript:;;"><</a>
                            <a class="slider-next" href="javascript:;;">></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mian">
        <div class="mianL">
            <div class="mianTop">
                <span class="mianT_span">特产一览│SPECIALTIES LIST</span>
                <a href="#">更多&gt;&gt;</a>
            </div>
            <div class="mianText">
                <ul>
                    <?php if(is_array($Specialty) || $Specialty instanceof \think\Collection || $Specialty instanceof \think\Paginator): $i = 0; $__LIST__ = $Specialty;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <p><a href="<?php echo url('index/index/product',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['image_path']; ?>" width="208" height="177" alt="" /><?php echo $vo['name']; ?></a></p>
                        <p><a href="<?php echo url('index/index/product',['id'=>$vo['id']]); ?>" class="yuyue_a"></a></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="mianR">
            <div class="hezuo">
                <div class="hezuo_top">推荐合作单位</div>
                <div class="hezuo_text">
                    <ul>
                        <?php if(is_array($cooperation) || $cooperation instanceof \think\Collection || $cooperation instanceof \think\Paginator): $i = 0; $__LIST__ = $cooperation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><a href="#"><img src="<?php echo $vo['image_path']; ?>" width="206" height="60" alt="" /></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="hezAd">
                <?php if(is_array($Advertisement) || $Advertisement instanceof \think\Collection || $Advertisement instanceof \think\Paginator): $i = 0; $__LIST__ = $Advertisement;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <img src="<?php echo $vo['image_path']; ?>" />
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="#" class="hezL01"></a>
                <a href="#" class="hezL02"></a>
            </div>
        </div>
    </div>
    <div class="mian3">
        <div class="mian3_top">
            <span class="mianT_span">资讯& 商机│IT & BUSINESS</span>
        </div>
        <div class="mian3_text">
            <div class="gonggao">
                <div class="gonggao_top">最新交易公告</div>
                <div class="gonggao_text">
                    <ul>
                        <?php if(is_array($transaction) || $transaction instanceof \think\Collection || $transaction instanceof \think\Paginator): $i = 0; $__LIST__ = $transaction;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><a href="#"><?php echo $vo['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="xiangx">
                <div class="xiangx_top">
                    <a href="#" class="r">更多&gt;&gt;</a>
                    <span class="xian_span">最新信息</span>
                </div>
                <div class="xiangx_text">
                    <div class="xian_img">
                        <?php if(is_array($messageI) || $messageI instanceof \think\Collection || $messageI instanceof \think\Paginator): $i = 0; $__LIST__ = $messageI;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="#"><img src="<?php echo $vo['image_path']; ?>" width="139" height="112" alt="" /></a>                    </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="xianWZ">
                        <ul>
                            <?php if(is_array($messageA) || $messageA instanceof \think\Collection || $messageA instanceof \think\Paginator): $i = 0; $__LIST__ = $messageA;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li><a href="#"><?php echo $vo['title']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xiangx">
                <div class="xiangx_top">
                    <a href="#" class="r">更多&gt;&gt;</a>
                    <span class="xian_span">行业快讯</span>
                </div>
                <div class="xiangx_text">
                    <div class="xian_img">
                        <?php if(is_array($newflashI) || $newflashI instanceof \think\Collection || $newflashI instanceof \think\Paginator): $i = 0; $__LIST__ = $newflashI;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="#"><img src="<?php echo $vo['image_path']; ?>" width="139" height="112" alt="" /></a>                    </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="xianWZ">
                        <ul>
                            <?php if(is_array($newflashA) || $newflashA instanceof \think\Collection || $newflashA instanceof \think\Paginator): $i = 0; $__LIST__ = $newflashA;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li><a href="#"><?php echo $vo['title']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="fooer">
    <div class="fooer_nei">
        服务中心  |  联系我们  |  平台介绍  |  网站地图  |  邮件反馈  |  友情链接<br />
        客服热线：0838-8888888  平台名称：XX网 <br />
        中江县名优产品展销　版权所有 蜀ICP备 XXXXXXX号
        <p><a href="#"><img src="__STATIC__/index/images/jg.gif" /></a></p>
    </div>
</div>
<script src="__STATIC__/index/js/jquery-1.8.2.min.js"></script>
<script src="__STATIC__/index/js/autoplay.js" ></script>
<script>

</script>
</body>
</html>