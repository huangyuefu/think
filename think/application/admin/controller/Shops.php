<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26 0026
 * Time: 下午 11:57
 */

namespace app\admin\controller;


use think\Controller;

class Shops extends Controller
{
    protected $db;
    public function _initialize()
    {
        $this->db=model('Shops');
    }

    public function Index()
    {
        $data=input('get.');
        //查询数据库数据
        $result=$this->db->getIndex($data);
        //halt($result);
        //将查询数据库得结果加载到html
        return $this->fetch('',['result'=>$result]);
    }


//审核状态改变方法
    public function state()
    {
        $state=input('get.');
        //halt($state['id']);
        //halt($state);
        $res=$this->db->save(['state'=>$state['state']],['id'=>$state['id']]);
        //halt(db('bis_user')->getLastSql($res));
        if($res)
        {
            $this->success('修改成功');
        }
        else
        {
            $this->error('修改失败');
        }
    }

//删除的方法
    public function delete()
    {
        if(request()->isPost())
        {
            //获取需要的id
            $id=input('post.id');
            // halt($id);
            //改变state的状态
            $result=$this->db->save(['state'=>-1],['id'=>$id]);

            echo (json_encode($result));
            //结果为真就跳转
            /*if($result)
            {
                $this->redirect('admin/shops/index');
            }*/
        }

    }

    //回收站

    public function memory()
    {
        //查询状态为-1的数据
        $data=['state'=>-1];
        $result=$this->db->getIndex($data);
        //halt($result);
        return $this->fetch('memory',['result'=>$result]);
    }

    //彻底删除数据

    public function agindel()
    {
        if(request()->isPost())
        {
            //获取需要的id
            $id=input('post.id');
            // halt($id);
            //改变state的状态
            $result=$this->db->where('id',$id)->delete();
            echo (json_encode($result));
            //结果为真就跳转
            /*if($result)
            {
                $this->redirect('admin/shops/index');
            }*/
        }

    }

    //回收站撤销数据
    public function reduciton()
    {
        if(request()->isPost())
        {
            //获取需要的id
            $id=input('post.id');
            // halt($id);
            //改变state的状态
            $result=$this->db->save(['state'=>0],['id'=>$id]);
           // halt($this->db->getLastSql());
            if($result)
            {
                return  show('1','success',$result);
            }
            else
            {
                return $this->error('数据错误');
            }
        }

    }

}