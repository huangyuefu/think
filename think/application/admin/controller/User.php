<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 14:44
 */

namespace app\admin\controller;


use think\Controller;

class User extends Controller
{
    protected $db;
    //公共函数
    public function _initialize()
    {
        $this->db=model('User');
    }

    //加载视图页面
    public function Index()
    {
        //调用model层获得视图数据
        $result=$this->db->getIndex();
        //将数据传给html
        return $this->fetch('',['result'=>$result]);
    }

    //添加视图页面
    public function add()
    {
        if(request()->isPost())
        {
            $data=input('post.');
           // halt($data);
            $res=$this->db->where('username',$data['username'])->find();
            if($res)
            {
                return $this->error('用户名以存在');
            }
            $result=$this->db->add($data);
            if($result['valid'])
            {
                $this->success($result['msg']);
            }
            else
            {
                $this->error($result['msg']);
            }
        }
        return $this->fetch();
    }

    //修改视图页面
    public function update()
    {
        //获取要修改的数据
        $id['id']=input('get.id');
        //halt($id);
        $indexOne=$this->db->getIndex($id);
       // halt($this->db->getLastSql($indexOne));
        //halt($indexOne);
        //当时post提交的时候就修改
        if(request()->isPost())
        {
           $data=input('post.');
           $result=$this->db->add($data);
            if($result)
            {
                $this->success('修改成功');
            }
            else
            {
                $this->error('修改失败');
            }
        }
        //halt($indexOne);
        return $this->fetch('',['indexOne'=>$indexOne]);
    }

    //删除方法
    public function delete()
    {
        $id=input('post.id');
        //halt($id);
       $result= db('admin_user')->where('id',$id)->delete();
       // halt(db('admin_user')->getLastSql($result));
        echo $result;
    }
}