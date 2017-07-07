<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 16:39
 */
namespace app\index\model;

use think\Model;

class Login extends Model
{
    protected $pk='id';
    protected $table='index_user';

    public function login($data)
    {
        //建立验证
        $validate=validate('Admin');
        //验证
        if(!$validate->scene('login')->check($data))
        {
            //验证失败
            //halt('aa');
          return  ['valid'=>0,'msg'=>$validate->getError()];
        }
        //查询数据
        $result= db('index_user')->where($data)->find();
        //halt($this->getLastSql($result));
        if($result)
        {
            //用户名和id存入session
            session('index_user',$result['username']);
            //验证成功
            return ['valid'=>1,'msg'=>'登录成功'];
        }
    }
}