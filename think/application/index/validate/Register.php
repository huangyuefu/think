<?php
namespace app\index\validate;

use think\Validate;

class Register extends Validate
{
    protected $rule=[
      ['username','require','用户名不能为空'],
      ['password','require','密码不能为空'],
      ['repassword','require|confirm:password','二次密码不能为空'],
      ['code','require|captcha','验证码不能为空|验证码不正确'],
      ['email','require|email','email不能为空|email格式不正确'],
    ];
}