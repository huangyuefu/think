<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26 0026
 * Time: 下午 11:49
 */

namespace app\bis\controller;


use think\Controller;

class BisStore extends Controller
{
    public function Index()
    {

        return $this->fetch();
    }
}