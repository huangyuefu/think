<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27 0027
 * Time: 上午 12:21
 */

namespace app\common\model;


use think\Model;

class Shops extends Model
{
    protected $pk='id';
    protected $table='bis_user';

    public function getIndex($data)
    {
        //判断$data是否为空区别是回收站方法调用还是删除方法调用
        if(!empty($data))
        {
            $data=$data;
        }
        else
        {
            $data==['state'=>['neq',-1],];
        }

        $order=['listorder'=>'desc'];

      // $result= $this->where($data)->order($order)->paginate(3);
        $result=db('bis_user')->alias('u')
                ->join('__BIS_TOTLE_INFO__ t','u.id=t.bis_id')
                ->where($data)
                ->field('u.id,u.state,u.create_time,t.name,t.api_address,t.bis_id')
                ->select();
        //halt($result);
        return $result;

    }

}