<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/20
 * Time: 11:16
 */
namespace app\bis\controller;

use think\Controller;

class Login extends Controller
{
    public function Login()
    {
        if(request()->isPost())
        {
            $data=input('post.');
            //1.验证
           $validate=Validate('Login');
            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }
            //2.查询数据库密码和输入密码
            $where['username']=$data['username'];
            //查询审核状态

            //$where['password']=md5($data['username'].mt_rand(100,1000));
            $result=db('bis_user')->where($where)->where('state',1)->find();
            //halt($result);
            if($result)
            {
                session('bis_id',$result['id']);
                session('bis_user',$result['username']);
                //halt(session('bis_user'));
                $this->success('登录成功','bis/index/index');
            }
            else
            {
                $this->error('审核未通过');
            }
        }
        return $this->fetch();
    }
}