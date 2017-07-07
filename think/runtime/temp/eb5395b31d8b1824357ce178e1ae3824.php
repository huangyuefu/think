<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"E:\www\phpStudy\WWW\think\public/../application/index\view\login\index.html";i:1499134944;s:77:"E:\www\phpStudy\WWW\think\public/../application/index\view\public\header.html";i:1499045915;s:77:"E:\www\phpStudy\WWW\think\public/../application/index\view\public\footer.html";i:1499045700;}*/ ?>
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
<div class="denlu">
    <div class="denlu_nei">
        <div class="denluL">
            <img src="__STATIC__/index/text/23.gif" class="pt145" />
        </div>
        <div class="denluR">
            <div class="den_bt">
                登录我们
            </div>
            <form action="<?php echo url('index/login/login'); ?>" method="post" >
            <div class="den_kang">
                <table width="100%" height="155" border="0" cellspacing="0" cellpadding="0">
                    <tr >
                        <td width="50"><span class="den_span">用户名</span></td>
                        <td><input type="text" class="denl_input" value="" name="username"/></td>
                    </tr>
                    <tr>
                        <td height="30"><span class="den_span">密&nbsp;&nbsp;&nbsp;&nbsp;码</span></td>
                        <td><input name="password" type="password" class="denl_input" />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><p><input name="" type="checkbox" value="" />十天免费登录</p></td>
                    </tr>
                </table>

            </div>
            <div class="deng_ann">                <input -name="" type="submit"  class="deng_a"/>
                <a href="#">忘记密码？</a>
            </div>
            </form>
            <div class="zhece">
                <span class="zhece_spa">还不是义乌购用户？</span><a href="<?php echo url('index/register/register'); ?>">免费注册</a>            </div>
            <div class="zhano">
                <span class="l">其他用户登录：</span><a href="#"><img src="__STATIC__/index/images/qq.gif" /></a>            </div>
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
