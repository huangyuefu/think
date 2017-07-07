<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/20
 * Time: 15:37
 */
namespace app\bis\validate;

use think\Validate;

class Register extends Validate
{
    protected $rule=[
        ['name','require|max:10|chsAlpha','商户名不能为空|最多不能超过10个字符|必须是汉字和字母'],
        ['city_id','require','城市不能为空'],
        ['logo','file|image:jpg,png|fileSize:3M','上传图片|图片格式为jpg,png格式|图片大小不能超过3m'],
        ['licence_logo','file|image:jpg,png|fileSize:3M','上传图片|图片格式为jpg,png格式|图片大小不能超过3m'],
        ['bank_info','require|number|max:19|min:18','银行账户不能为空|必须输入数字|输入最大19|输入最小18'],
        ['bank_name','require','输入不能为空'],
        ['bank_user','require','姓名不能为空'],
        ['faren','require','法人不能为空'],
        ['faren_tel','require|number|max:11','电话不能为空|请输入数字|最多11位'],
        ['email','require|email','邮箱不能为空 |请输入正确的邮箱'],
        ['tel','require|number|max:11','电话不能为空|请输入数字|最多11位'],
        ['contact','require','联系人不能为空'],
        ['category_id','require','分类不能为空'],
        ['address','require','地址不能为空'],
        ['open_time','require','开店时间不能为空'],
        ['username','require','用户名不能为空'],
        ['password','require|alphaNum','密码不能为空|密码必须是数字和字母'],
        ['description','require','描述不能为空'],
    ];

    protected $scene=[
        'add'=>['address'],
    ];


}