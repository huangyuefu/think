<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/30
 * Time: 8:24
 */

namespace app\index\controller;


use think\Controller;

class Register extends Controller
{
    protected $db;
    public function _initialize()
    {
        $this->db=model('Register');
    }
    //加载注册首页
    public function register()
    {
        return $this->fetch();
    }

    //用户添加
    public function register_add()
    {
        //获取表单数据
        $data=input('post.');
        //halt($data);
        $result=$this->db->register_add($data);
        // 判断返回结果
        if($result)
        {
            //注册成功
            $this->success($result['msg'],'index/login/index');
        }
        else
        {
            //注册失败或正在审核中
            $this->error($result['msg'],'index/register/register');
        }
    }
}