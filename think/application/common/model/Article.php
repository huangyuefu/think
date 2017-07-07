<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/13 0013
 * Time: 下午 11:13
 */
namespace app\common\model;

use think\Model;

use think\Loader;
class Article extends Model
{
    protected $pk="id";
    protected $autoWriteTimestamp = true;
    protected $table="article";
//文章添加方法
    function article_add($data)
    {
        //验证成功就添加数据
        $validate = $this->validate(true)->save($data);
        if(false==$validate)
        {
            //如果添加失败返回给控制器失败信息
            return ['valid'=>0,'msg'=>$this->getError()];
            //dump($validate->getError());
        }
        else
        {
            //如果添加成功返回给控制器成功信息
            return ['valid'=>1,'msg'=>'添加成功'];
        }
    }
//文章修改方法
    function article_update($data)
    {

       $result= $this->save($data,['id'=>$data['id']]);
       return $result;
    }
//文章搜索方法
    function article_search()
    {

    }
//文章删除方法
    function article_delete($data)
    {
        //halt($data['id']);
       // halt($this);
      return  db('article')->where('id',$data)->delete();
    }
//加载页面
    function article_list()
    {
       // $sort=['sort','disc'];
        $order=[
            'sort'=>'desc'
        ];
       // $result=$this->db('article')->where($data)->order($order)->paginate(2);
        $result=db('article')->alias('a')
                ->join('__CATEGORY__ c','c.id=a.category_id')
                ->order($order)
                ->field('a.id,a.url,a.title,a.content,a.sort,a.state,a.sources,a.create_time,c.cate')
                ->paginate(10);
        //halt($result);
        return $result;
    }

    public function article_look($data)
    {
        return $this->where('id',$data)->find();
    }
}