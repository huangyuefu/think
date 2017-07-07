<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/13 0013
 * Time: 下午 10:02
 */

namespace app\admin\controller;

use think\Model;

use think\Controller;
use think\Validate;

class Article extends Controller
{
    protected $db;
   //加载初始化函数每次调用类里的方法时都会先调用这个函数
    protected function _initialize()
    {
        $this->db=model('Article');
    }
    //遍历方法
   public function article_list()
   {

            $result=$this->db->article_list();
           //halt($result);

       $this->assign('result',$result);

        return $this->fetch();
    }
    //添加文章方法
    public function article_add()
    {
        if(request()->isPost())
        {
            $data=input('post.');
           // halt($data);
            //调用模型层中的article_add方法

            $result=$this->db->article_add($data);
            if($result['valid'])
            {
                $this->success($result['msg'],'admin/article/article_list');
            }
            else
            {
                $this->error($result['msg']);
            }


            //halt($all);
           // $this->assign('all',$all);
        }
        $all=model('Category')->category_view();
        return $this->fetch('',['all'=>$all]);
    }
    // 修改文章方法
    public function article_update()
    {
        //查询原数据单条
        if(request()->isGet())
        {
            $old = input('get.');
           // halt($old);
            $result=$this->db->get($old);
            //halt($result);
        }
        //修改数据
        if(request()->isPost())
        {
            $new=input('post.');
            $res=$this->db->article_update($new);
            if($res)
            {
                $this->redirect('admin/article/article_list');
            }
        }
        //查询所有分类数据
        $all=db('category')->select();
        //halt($all);
        $this->assign('all',$all);
       // $this->assign('result',$result);
        return $this->fetch('',['result'=>$result]);
    }
    //删除文章方法
    function article_delete()
    {
        if(request()->isGet())
        {
            $arr=input('get.id');
            $result=$this->db->article_delete($arr);
            if($result)
            {
                $this->redirect('admin/article/article_list');
            }
        }

    }
    //搜索文章方法
    public function article_search()
    {
        return $this->fetch();
    }

    //审核方法
    public function state()
    {
        $data=input('get.');
       // halt($data);
        if(request()->isGet())
        {
            $validate=Validate('Article');
           // halt($validate);
            if(!$validate->scene('state')->check($data))
            {
                $this->error($validate->getError());
            }
            $res=$this->db->save(['state'=>$data['state']],['id'=>$data['id']]);
            if($res)
            {
                $this->success("更新成功");
            }
            else
            {
                $this->error("更新失败");
            }
        }

    }

    //查看文章类容
    public function article_look()
    {
        //获取id
        $data=input('get.id');
        //halt($data);
        //查询单条文章的数据
        $result=$this->db->article_look($data);
        //halt($result);
        return $this->fetch('',['result'=>$result]);
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