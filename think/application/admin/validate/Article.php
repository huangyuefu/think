<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/13 0013
 * Time: 下午 11:48
 */

namespace app\admin\validate;


use think\Validate;

class Article extends Validate
{
    protected $rule=[
        'title'=>'require',
        'sources'=>'require',
        'sort'=>'require|number',
        'content'=>'require',
        'state'=>'require|in:-1,0,1'
    ];

    protected $message=[
      'title.require'=>'标题不能为空',
        'sources.require'=>'来源不能为空',
        'sort.require'=>'排序不能为空',
        'sort.number'=>'请输入数字',
        'category_id.require'=>'选择文章类型',
        'state.require|in:-1,0,1'=>'状态不能为空|必须在-1到1之间'
    ];

    protected $scene=[
            'state'=>['state','id'],
    ];
}