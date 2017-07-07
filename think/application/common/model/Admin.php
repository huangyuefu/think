<?php
namespace app\common\model;

use think\Loader;
use app\admin\Validate;
use think\Model;

class Admin extends Model{
	
	protected $pk='id';		//定义主键
	
	protected $table='admin_user';		//定义数据表名
	
	
	//登录
	public function login($data){
		
		
		//验证
		$validate = Loader::Validate('Admin');
		
		if(!$validate->scene('login')->check($data))
		{    
	
			return ['valid'=>0,'msg'=>$validate->getError()];
			
		}
		//对比密码和用户
		
		$userinfo=$this->where('username',$data['username'])->where('password',$data['password'])->find();
		
		if(!$userinfo)
		{
			
			return ['valid'=>0,'msg'=>'用户名或密码不正确'];
			
		}
		
		//用session存储用户信息
		session('admin_user.id',$userinfo['id']);
		session('admin_user.username',$userinfo['username']);
		
		return ['valid'=>1,'msg'=>'登录成功'];
	
	}


	//修改密码
	public function change($data)
	{
		//1.验证
			//验证输入信息是否为空
		$validate = Validate('Admin');
		//halt($validate);
		$result = $validate->scene('change')->check($data);
		//halt($result);
		if(!$result)
		{
			//验证失败
			//dump($validate->getError());
			return ['valid'=>0,'msg'=>$validate->getError()];
		}
		//2.验证旧密码是否正确
		$res=$this->where('id',session('admin_user.id'))->where('password',$data['password'])->find();
		if(!$res)
		{
			return ['valid'=>0,'msg'=>'原密码错误'];
		}
		//3.修改密码
		$ch=$this->update(['id'=>session('admin_user.id'),'password'=>$data['new']]);
		//halt($ch);
		if($ch)
		{
			return ['valid'=>1,'msg'=>'修改成功'];
		}
	}
}

?>