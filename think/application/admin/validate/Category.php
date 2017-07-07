<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 11:36
 */

namespace app\admin\validate;


use think\Validate;

class Category extends Validate
{
    protected $rule=[
        ['cate','require|max:10','分类名不能为空|分类名最多十位'],
        ['pid','number|require','pid必须为数字|pid不能为空'],
        ['sort','number','排序必须为数字'],
        ['state','number|in:-1,0,1','状态必须为数字|数字在-1到1之间'],
        ['email','require|email','email不能为空|输入的email格式不正确'],
		['code','require|captcha','验证码不能为空|验证码不正确'],
    ];
    protected $scene=[
        'category_add'=>['cate','pid','id'],
        'category_state'=>['state','id'],
    ];
}