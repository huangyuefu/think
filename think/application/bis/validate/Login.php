<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26 0026
 * Time: 下午 10:55
 */

namespace app\bis\validate;


use think\Validate;

class Login extends Validate
{
    protected $rule=[
      ['username','require','用户名不能为空'],
      ['password','require','密码不能为空'],
    ];
}