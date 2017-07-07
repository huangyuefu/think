<?php
namespace app\common\validate;

use think\Validate;


class Admin extends Validate{

	protected $rule=[
		'username'=>'require',
		'password'=>'require|length:6,10',
		'code'=>'require|captcha',
		'new'=>'require',
		'pwd'=>'require|confirm:new',
	];
	
	protected $message=[
		'username.require'=>'请输入用户名',
		'password.require|length'=>'请输入密码|密码长度最少6位最多10位',
		'code.require'=>'请输入验证码',
		'code.captcha'=>'输入验证码错误',
		'new.require'=>'新密码不能为空',
		'pwd.require|confirm'=>'确认密码不能为空|两次密码不一致',
	];

	protected $scene=[
		'login'=>['username','password'],
		'change'=>['password','new','pwd'],
	];
}

