<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/18 0018
 * Time: 下午 4:18
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{

    public function map()
    {
        //halt( \Map::mapImage('成都天府广场'));
      return  \Map::mapImage('成都天府广场');
    }

    public function lookmap()
    {

        return $this->fetch();
    }

    public function email()
    {
        \phpmailer\Email::send('1084581212@qq.com','test','测试发送');

        return '发送成功';
    }
}