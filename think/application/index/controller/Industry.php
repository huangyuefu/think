<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 15:37
 */

namespace app\index\controller;


use think\Controller;

class Industry extends Controller
{
    public function index()
    {
        return $this->fetch();
    }


}