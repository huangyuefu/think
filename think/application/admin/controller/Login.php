<?php
namespace app\admin\controller;

use app\common\model\Admin;

use think\Controller;

class Login extends Controller
{
    public function login()
    {
			
		if(request()->isPost())			//判断请求方式
		{
			//判断登录
		$result=(new Admin())->login(input('post.'));
		
		//dump($result);die;
		
			if($result['valid'])
			{
				//登录成功
				$this->success($result['msg'],'admin/Enter/enter');exit;
			}
			else
			{
				//登录失败
				
				$this->error($result['msg']);die;		
			}
			
		}
        return $this->fetch(); 

	}
}

