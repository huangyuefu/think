<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 15:33
 */

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\File;
use think\UploadFile;

class Image extends Controller
{
    public function upload()
    {
        //halt($_FILES);
        //获取表单提交列表
        $file = request()->file('file');
        //移动到框架应用目录下
        $info = $file->move('upload');
        if($info&&$info->getPathname())
        {
            return show(1,'success','/think/public/'.$info->getPathname());
        }
        else
        {
            return show(1,'upload error');
        }
    }
}