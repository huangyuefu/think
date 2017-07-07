<?php
namespace app\admin\controller;	
	
	use think\Controller;
	use app\common\model\Admin;
	class Enter extends Common{

		//主页视图
	public	function enter()
		{
			
			
			//加载模板视图；
			
			return $this->fetch();
		}
		
		//退出
	public	function logout()
		{
			
			if(request()->isGet())
			{
				session('admin_user.id',null);
				
				$this->redirect('admin/login/login');
			}
			
		}
		//修改密码
		public function change()
		{
			if(request()->isPost())
			{
				$data = input('post.');

				//halt($data);
				//调用模型层里的修改密码方法
				$res = (new Admin())->change($data);
				if ($res['valid'])
				{
					//验证成功

					//清空session
					session(null);
				$this->success($res['msg'],'admin/enter/enter');
				}
				else
				{
					//验证失败
					$this->error($res['msg']);
				}
			}
			return $this->fetch();
		}


	}
?>