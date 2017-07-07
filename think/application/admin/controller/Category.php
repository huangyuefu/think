<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 11:27
 */

namespace app\admin\controller;


use think\Controller;

class Category extends Controller
{

    private $db;
    //公共函数
    protected function _initialize()
    {
        $this->db=model('Category');
    }
//添加分类方法
    public function category_add()
    {
        if(request()->isPost())
        {
            $arr=input('post.');
            //halt($arr);
            $add=$this->db->category_add($arr);
            //halt($arr);
            if($add['valid'])
            {
                $this->success($add['msg']);exit;
            }
            else
            {
                $this->error($add['msg']);exit;
            }
        }
      $result=$this->db->category_view();
        //halt($result);
        return $this->fetch('',['category'=>$result]);
    }
//主页数据遍历方法
    public function category_list()
    {
        if(request()->isGet())
        {
            $pid=input('get.pid',0);
           // halt($pid);
           $result= $this->db->category_list($pid);
            //halt($result['id']);
        }
        return $this->fetch('',['result'=>$result]);
    }
//审核状态改变方法
    public function category_state()
    {
        $state=input('get.');

        //halt($state);
        $validate=validate('Category');
        //halt($validate);
        if(!$validate->scene('category_state')->check($state))
        {
            return $this->error($validate->getError());
        }

        $res=$this->db->save(['state'=>$state['state']],['id'=>$state['id']]);
        if($res)
        {
            $this->success('修改成功');
        }
        else
        {
            $this->error('修改失败');
        }
    }
// 修改方法
    public function category_update()
    {
        $id=input('get.id');

        $category=$this->db->get($id);

        $categoryall=$this->db->category_list();
       //halt($categoryall);
        return $this->fetch('',['category'=>$category,'categoryall'=>$categoryall]);
    }
//删除的方法
    public function category_delete()
    {
        if(request()->isGet())
        {
            //获取需要的id
            $id=input('get.id');

            //得到父id的pid值
            $res=db('category')->where('id',$id)->value('pid');
            //halt($res);
            //将父id的pid值更新给子id的pid
            $v= $this->db->where('pid',$id)->update(['pid'=>$res]);

           // halt($v);
            //改变state的状态
           $result=$this->db->save(['state'=>-1],['id'=>$id]);

            //结果为真就跳转
            if($result)
            {
                $this->redirect('admin/category/category_list');
            }
        }

    }

//排序方法
    public function sort($id,$sort)
    {
       $res= $this->db->save(['sort'=>$sort],['id'=>$id]);
        //halt($res);
        //halt($this->db->getLastSql($res));
        if($res)
        {
            $this->result($_SERVER['HTTP_REFERER'],1,'success');
        }
        else
        {
            $this->result($_SERVER['HTTP_REFERER'],0,'排序失败');
        }
    }
}