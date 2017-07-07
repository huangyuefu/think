<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 11:55
 */

namespace app\common\model;


use think\Model;

class Category extends Model
{
   protected $autoWriteTimestamp = true;
    protected $pk='id';
    protected $table='category';

    public function category_list($pid=0)
    {
        $pid=[
          'pid'=>$pid,
          'state'=>['neq',-1],
        ];
        $order=[
            'sort'=>'desc'
        ];
       $result=db('category')->where($pid)->order($order)->paginate(5);

        return $result;
    }

    public function category_add($arr)
    {


        if(!empty($arr['id']))
        {
            $this->save($arr,['id'=>$arr['id']]);
        }

        $result=$this->validate(true)->save($arr);
        if($result)
        {
            return ['valid'=>1,'msg'=>'添加成功','id'=>$this->id];
        }
        else
        {
            return ['valid'=>0,'msg'=>$this->getError()];
        }
        //return $this->id;
    }

    public function category_view($id=0,$arr=[],$level=0)
    {

        //顶级分类
        $result=$this->where('pid',$id)->select();
        //二级分类
        foreach($result as $vo)
        {
            $ico="";
            for($i=0;$i<$level;$i++)
            {
                $ico .='>';
            }
            $vo['cate']=$vo['cate'].$ico;
            $arr[]=$vo;
            $arr=$this->category_view($vo['id'],$arr,$level+1);
            //halt($this->getLastSql($arr));
        }
        //halt($arr);
        return $arr;
    }



}