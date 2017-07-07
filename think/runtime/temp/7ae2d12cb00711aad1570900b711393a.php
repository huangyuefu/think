<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\000rj\www\WWW\think\public/../application/admin\view\login\login.html";i:1498791430;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

  <meta charset="utf-8">
  <title>后台登录</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSS -->
  <link rel="stylesheet" href="__STATIC__/login/css/reset.css">
  <link rel="stylesheet" href="__STATIC__/login/css/supersized.css">
  <link rel="stylesheet" href="__STATIC__/login/css/style.css">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

<div class="page-container">
  <h1>登录</h1>
  <form class="login-body" method="post"  action="<?php echo url('login'); ?>" name='theForm' onsubmit="return check()">
    <input type="text" name="username" class="username" placeholder="账号">
    <input type="password" name="password" class="password" placeholder="密码">
    <img src="<?php echo captcha_src(); ?>"  class="imgss" alt="captcha" name="code" border="1" onclick="this.src=this.src+'?'+Math.random()"  />
    <span class="sspan"><input type="text" id='verifyCode' name="code" class="inputz" placeholder="验证码"></span>
    <button type="submit">登录</button>
    <div class="error"><span>+</span></div>
  </form>
  <div class="connect">
    <p>Copyright</p>
    <p>
      <a class="facebook" href=""></a>
      <a class="twitter" href=""></a>
    </p>
  </div>
</div>
<div align="center">Sichuan Earl cat Network Technology Co., Ltd.</div>
<!-- Javascript -->
<script src="__STATIC__/login/js/jquery-1.8.2.min.js"></script>
<script src="__STATIC__/login/js/supersized.3.2.7.min.js"></script>
<script src="__STATIC__/login/js/supersized-init.js"></script>
<script src="__STATIC__/login/js/scripts.js"></script>

</body>

</html>

