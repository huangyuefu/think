<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 15:01
 */

namespace app\admin\validate;


use think\Validate;

class User extends Validate
{
    protected $rule=[

        ['username','require','用户名不能为空'],
        ['password','require','密码不能为空'],
        ['password2','require|confirm:password','第二次密码不能为空|两次密码不一致'],
        ['sex','require','性别要选择'],
        ['phone','require','手机号不能为空'],
        ['email','require','邮箱不能为空'],
    ];
}