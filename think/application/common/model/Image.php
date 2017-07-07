<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/24
 * Time: 15:55
 */

namespace app\common\model;


use think\Model;

class Image extends Model
{
    protected $pk='id';
    protected $table='admin_image';
    protected $autoWriteTimestamp = true;
    public function image_list($data='')
    {
        $data=['state'=>['neq',-1]];
       $result=db('admin_image')->where($data)->select();
        //halt($result);
        return $result;
    }

    public function image_add($data)
    {
        $res=$this->save($data);
        if($res)
        {
            return ['volid'=>1,'msg'=>'添加成功'];
        }
        else{
           return ['volid'=>0,'msg'=>'添加失败'];
        }
    }

    //关联数据表category和image查询多条
    public function im_cate()
    {
        $result=db('admin_image')->alias('i')
                ->join('__CATEGORY__ c','c.id=i.category_id')
                 ->where(['i.state'=>['neq',-1]])
                ->order(['i.listorder'=>'listorder by id desc'])
                ->field('i.id,i.url,i.category_id,i.state,i.image_path,i.listorder,i.name,i.create_time,c.cate')
                ->paginate(5);
        //halt($result);

        return $result;
    }

    //关联数据表category和image查询单条
   public function getOne($data)
    {
        $result=db('admin_image')->alias('i')
            ->join('__CATEGORY__ c','c.id=i.category_id')
            ->where(['i.id'=>$data])
            ->where(['i.state'=>['neq',-1]])
            ->field('i.id,i.url,i.category_id,i.state,i.image_path,i.name,i.create_time,c.cate,c.id')
            ->select();

        return $result;
    }
}