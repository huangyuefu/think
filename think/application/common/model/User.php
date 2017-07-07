<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 15:32
 */

namespace app\common\model;


use think\Model;
use think\Validate;

class User extends Model
{
    //protected $autoWriteTimestamp = true;
    protected $pk='id';

    protected $table='admin_user';

    //查询数据
    public function getIndex($data='')
    {
       // halt($data);
        if(!empty($data))
        {
            $result=$this->where('id',$data['id'])->find();
        }
        else
        {
            $result = $this->where($data)->select();
        }

       // halt($this->getLastSql($result));
        return $result;
    }

    //添加数据
    public function add($data)
    {
        $validate=Validate('User');

        //如果有id则用修改
        if(empty($data['id'])?'':$data['id'])
        {
            //判断原始密码是否正确
            $password=$this->db->where('password',$data['password'])->find();
            if($password)
            {
                $update=$this->allowField(true)->save([$data,['id'=>$data['id']]]);
            }
            else
            {
                $this->error('原密码错误');
            }

        }
        //否则走添加
        else
        {

            if(!$validate->check($data))
            {
                return ['valid'=>0,'msg'=>$validate->getError()];
            }
            $result=$this->allowField(true)->save($data);
            if($result)
            {
                return ['valid'=>1,'msg'=>'添加成功'];
            }
        }
    }
}