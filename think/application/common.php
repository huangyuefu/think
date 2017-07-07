<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function state($state=0)
{
    if($state==0)
    {
       $str= "<span style='background-color: red'>未通过</span>";
    }
    elseif($state==1)
    {
        $str= "<span>已通过</span>";
    }
    else
    {
        $str="<span style='background-color: yellow'>未审核</span>";
    }
    return $str;
}

//百度地图解析函数
function docurl($url,$type=0,$data=[])
{
    $ch=curl_init();//初始化
    //设置选项
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//执行后的结果
    curl_setopt($ch, CURLOPT_HEADER,0);
    if($type==1)
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    //执行并获取内容
    $output = curl_exec($ch);
    // 释放curl句柄
    curl_close($ch);
    return $output;
}

//获取商户列表
function name($name)
{
    $res=model('Category')->category_list($name);
    //halt($res);
   return $res;
}

