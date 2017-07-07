<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        //特别推荐
        $Recommend=db('admin_image')->where('category_id',42)->where(['state'=>['neq',-1]])->select();
        //分配数据
        $this->assign('Recommend',$Recommend);
        //查询轮播图片
        $banner=db('admin_image')->where('category_id',41)->where(['state'=>['neq',-1]])->select();
        //分配数据到html
        $this->assign('banner',$banner);
        //特产一览查询
        $Specialty=db('admin_image')->where('category_id',43)->where(['state'=>['neq',-1]])->select();
        //分配数据
        $this->assign('Specialty',$Specialty);
        //推荐合作数据查询
        $cooperation=db('admin_image')->where('category_id',44)->where(['state'=>['neq',-1]])->select();
        //分配数据
        $this->assign('cooperation',$cooperation);
        //小广告查询
        $Advertisement=db('admin_image')->where('category_id',55)->where(['state'=>['neq',-1]])->select();
        //分配数据
        $this->assign('Advertisement',$Advertisement);
        //最新交易查询
        $transaction=db('article')->where('category_id',46)->where(['state'=>['neq',-1]])->select();
        //分配数据
        $this->assign('transaction',$transaction);
        //最新信息
        $messageA=db('article')->where('category_id',47)->where(['state'=>['neq',-1]])->select();//文
        $messageI=db('admin_image')->where('category_id',47)->where(['state'=>['neq',-1]])->select();//图
        //分配数据
        $this->assign('messageA',$messageA);
        $this->assign('messageI',$messageI);
        //行业快讯
        $newflashA=db('article')->where('category_id',48)->where(['state'=>['neq',-1]])->select();//文
        $newflashI=db('admin_image')->where('category_id',48)->where(['state'=>['neq',-1]])->select();//图
        //分配数据
        $this->assign('newflashA',$newflashA);
        $this->assign('newflashI',$newflashI);

	    return	$this->fetch();
	}

	//产品介绍
	public function product()
    {
        //获取id
        $data=input('get.id');
        //调用model中的查询方法
        $product_i=model('Image')->getOne($data);
       // halt($product_i);
        return $this->fetch('',['product_i'=>$product_i]);
    }

    //退出
    public function logout()
    {
        //清除 session
         session('index_user',null);
        $this->redirect('index/index/index');
    }

  
}
