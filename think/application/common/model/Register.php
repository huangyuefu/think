<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/30
 * Time: 9:09
 */

namespace app\common\model;


use think\Model;

class Register extends Model
{
    protected $pk='id';

    protected $table='index_user';
    //注册方法
    public function register_add($data)
    {
        //判断数据库中是否存在该用户

        //验证
       $res= $this->validate(true)->save($data);
        if($res)
        {
            return ['valid'=>1,'msg'=>'注册成功'];
        }
        else
        {
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
}