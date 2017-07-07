<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26 0026
 * Time: 下午 10:48
 */

namespace app\bis\controller;


use think\Controller;

class Index extends Controller
{
    public function index()
    {

        if(!session('bis_user'))
        {
            $this->redirect('bis/login/login');
        }
        return $this->fetch();
    }

    public function logout()
    {

        session(null);
        $this->redirect('bis/index/index');
    }
}