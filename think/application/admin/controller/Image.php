<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 9:25
 */

namespace app\admin\controller;


use think\Controller;

class Image extends Controller
{
    private $db;

    protected function _initialize()
    {
        //TODO:自定义的初始化
        $this->db=model('Image');
    }

    //加载主页视图
    public function image_list()
    {
        $result=$this->db->im_cate();

        return $this->fetch('',['result'=>$result]);
    }

    //加载添加页视图
    public function image_add()
    {

        //halt($_FILES);
        //获取上传过来的文件

        if(request()->isPost())
        {
            //halt(input('post.'));
            $data=input('post.');
            $data['state']=0;
           $res=$this->db->image_add($data);
            if($res['volid'])
            {
                $this->success($res['msg'],'admin/image/image_list');
            }else
            {
                $this->error($res['msg']);exit;
            }
        }
        $result=model('Category')->category_view();
        return $this->fetch('',['result'=>$result]);
    }

    //图片异步提交响应方法
    public function image_line()
    {
        if(request()->isPost())
        {
            //halt($data);
            $file=request()->file('file');
            //halt($file);
            //创建文件
            $info=$file->move('admin_image');
            //halt($info);
            if($info&&$info->getPathname())
            {
                return  show(1,'success','/think/public/'.$info->getPathname());
            }
        }
    }
//删除方法
    public function image_delete()
    {
        //halt(input('post.'));
        $id=input('post.id');
        //halt($id);
        $result=$this->db->save(['state'=>-1],['id'=>$id]);
        //halt($result);
        echo $result;
    }

    //修改方法
    public function image_update()
    {
        $data=input('get.id');
        //查询原数据
        $result=$this->db->getOne($data);
        //查询所有分类数据
        //halt($result);
        $category=model('Category')->category_view();
        if(request()->isPost())
        {
            //获取修改的数据
            $date=input('post.');
            //调用model的添加方法
           $update=$this->db->image_add($date);
            //判断是否添加成功
            if($update['volid'])
            {
                $this->success($update['msg'],'admin/image/image_list');
            }
            else
            {
                $this->error($update['msg']);
            }
        }
        return $this->fetch('',['category'=>$category,'result'=>$result]);
    }

    // 审核方法
    public function state()
    {
        //获取state的值
        $state=input('get.');
       // halt($state);
        $result=$this->db->save(['state'=>$state['state']],['id'=>$state['id']]);
        if($result)
        {
            $this->success('状态修改成功');
        }
        else{
            $this->error('状态修改失败');
        }
    }
}