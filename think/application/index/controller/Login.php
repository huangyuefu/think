<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 15:50
 */

namespace app\index\controller;


use think\Controller;

class Login extends Controller
{
    public function index()
    {

        return $this->fetch();
    }

    public function login()
    {
        //判断是否为post提交
        if(request()->isPost())
        {
            //获取form表单提交的数据
            $data=input('post.');
            //halt($data);
            //调用model层的方法处理数据
            $result=model('Login')->login($data);
            if($result['valid'])
            {
                $this->success($result['msg'],'index/index/index');
            }
            else
            {
                $this->error($result['msg']);
            }
        }

    }

    public function register()
    {

        return $this->fetch();
    }
}