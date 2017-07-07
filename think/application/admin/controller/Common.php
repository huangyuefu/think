<?php
namespace app\admin\controller;

use think\Controller;

use think\Request;

class Common extends Controller{
	
	public function __construct(Request $request=null){
		
		parent::__construct($request); //执行登录验证
		//halt(session('admin_user.id'));
		if(!session('admin_user.id'))
		{
			$this->redirect('admin/login/login');
		}
	}
	
}

?>
