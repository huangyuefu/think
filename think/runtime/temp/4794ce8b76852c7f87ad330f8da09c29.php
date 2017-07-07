<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\000rj\www\WWW\think\public/../application/index\view\register\register.html";i:1499134378;s:74:"E:\000rj\www\WWW\think\public/../application/index\view\public\header.html";i:1499045915;s:74:"E:\000rj\www\WWW\think\public/../application/index\view\public\footer.html";i:1499045700;}*/ ?>
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
                注册账号
            </div>
            <form method="post"  action="<?php echo url('index/register/register_add'); ?>" onsubmit="return check()">
                <div class="den_kang">
                    <table width="100%" height="155" border="0" cellspacing="0" cellpadding="0">
                        <tr >
                            <td width="50"  height="40"><span class="den_span">账号</span></td>
                            <td><input name="username" maxlength="8" type="text" class="denl_input" placeholder="您要注册的账号" value="" /></td>
                        </tr>
                        <tr >
                            <td width="50"  height="40"><span class="den_span">邮箱</span></td>
                            <td><input name="email" maxlength="20" type="text" class="denl_input" placeholder="您常用的邮箱" /></td>
                        </tr>
                        <tr>
                            <td width="50"   height="40"><span class="den_span">密码</span></td>
                            <td><input name="password" maxlength="16" name="" type="password" class="denl_input" placeholder="您要设定的密码"/>
                            </td>
                        </tr>
                        <tr >
                            <td width="50"  height="40"><span class="den_span">复密码</span></td>
                            <td><input type="password" maxlength="16" class="denl_input"  placeholder="请确认密码" name="repassword"/></td>
                        </tr>
                        <tr >
                            <td width="50"  height="40"><span class="den_span">验证码</span></td>
                            <td>
                                <span class="ssden_span"> <img src="<?php echo captcha_src(); ?>"  class="imgsscc" alt="captcha" name="code" border="1" onclick="this.src=this.src+'?'+Math.random()"  /></span>
                                <input name="code" id='verifyCode' maxlength="4" type="text" class="ssdenl_input"  placeholder="请输入验证码"/>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sdeng_ann">
                    <input type="submit"  class="ssdeng_a"/>
                </div>
            </form>
            <div class="szhece">
                <span class="szhece_spa">已有账号？</span><a href="<?php echo url('login/login'); ?>">马上登陆</a>            </div>
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

















<!--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>注册</title>
    <meta name="keywords"  content="设置关键词..." />
    <meta name="description" content="设置描述..." />
    <meta name="author" content="DeathGhost" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/style1.css" />
</head>

<body class="login-page " style="margin-top:750px;background: darkcyan">
<section class="login-contain" style="background:white">
    <header>
        <h1>注册</h1>
        <p>management system</p>
    </header>
    <div class="form-content" >
        <form action="<?php echo url('index/register/register_add'); ?>" method="post">
            <ul>
                <li>
                    <div class="form-group">
                        <label class="control-label">用户名：</label>
                        <input type="text" placeholder="管理员账号..." name="username" class="form-control form-underlined" id="adminName"/>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label class="control-label">会员密码：</label>
                        <input type="password" placeholder="密码..." name="password" class="form-control form-underlined" id="adminPwd"/>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label class="control-label">确认密码：</label>
                        <input type="password" placeholder="确认密码..." name="repassword" class="form-control form-underlined" />
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label class="control-label">手机号：</label>
                        <input type="text" placeholder="手机号..." name="tel" class="form-control form-underlined" />
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label class="control-label">QQ号：</label>
                        <input type="text" placeholder="QQ号..." name="qq" class="form-control form-underlined" />
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label class="control-label">身份证：</label>
                        <input type="text" placeholder="身份证号码..." name="card" class="form-control form-underlined" />
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <label class="control-label">邮箱：</label>
                        <input type="email" placeholder="邮箱..." name="email" class="form-control form-underlined" />
                    </div>
                </li>
                <li>
                    <label style='margin: 0 auto'>
                        <span >已有账号<a href="<?php echo url('login/login'); ?>">立即登录!</a></span>
                    </label>
                </li>
                <li>
                    <input type="submit" value="注册" style="border-radius:20px;width:90px;height:40px;background:grey;margin-left:120px"/>
                </li>
                <li>
                    <p class="btm-info">我仍然在这世上活的认真 <a href="<?php echo url('index/index/index'); ?>" target="_blank" title="DeathGhost">前台首页</a></p>
                    <address class="btm-info">陕西省西安市雁塔区</address>
                </li>
            </ul>
        </form>
    </div>
</section>
<div class="mask"></div>
<div class="dialog">
    <div class="dialog-hd">
        <strong class="lt-title">标题</strong>
        <a class="rt-operate icon-remove JclosePanel" title="关闭"></a>
    </div>
    <div class="dialog-bd">
        &lt;!&ndash;start::&ndash;&gt;
        <p>这里是基础弹窗,可以定义文本信息，HTML信息这里是基础弹窗,可以定义文本信息，HTML信息。</p>
        &lt;!&ndash;end::&ndash;&gt;
    </div>
    <div class="dialog-ft">
        <button class="btn btn-info JyesBtn">确认</button>
        <button class="btn btn-secondary JnoBtn">关闭</button>
    </div>
</div>
</body>
</html>
-->
