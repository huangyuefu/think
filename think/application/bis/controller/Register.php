<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/20
 * Time: 13:32
 */

namespace app\bis\controller;


use think\Controller;
use think\Request;

class Register extends Controller
{
    public function Index()
    {
        //调用model层中的city查询一级城市
        $city=model('City')->city();
        //halt($city);
        //调用model层中的category
        $category=model('Category')->category_view();
        //halt($category);
        return $this->fetch('',['city'=>$city,'category'=>$category]);
    }

    public function add()
    {
        if (!request()->isPost()) {
            $this->error('请求失败');
        }
        //1.验证
        $data = input('post.');
        //halt($data);
        $validate = Validate('Register');

        if (!$validate->scene('add')->check($data)) {
            return $this->error($validate->getError());
        }

        //获取地图信息的经纬度、
        $info = \Map::Mapinfo($data['address']);
        //halt($info);
        if (empty($info)) {
            $this->error("地址不对，请填写精确地址");
        }
       // halt(model('BisBaseInfo'));
        //2.基本信息入库
        //2.1验证注册用户是否存在

           $userinfo=model('Bis_user')->get(['username'=>$data['username']]);
           if($userinfo)
           {
               $this->error('用户名以存在');
           }
           $base_info=[
               'name'=>$data['name'],
               'city_id' => $data['city_id'],
               'city_path'=>empty($data['se_city_id'])?$data['city_id']:$data['city_id'].','.$data['se_city_id'],
               'logo' => $data['logo'],
               'licence_logo' => $data['licence_logo'],
               'description' => empty($data['description']) ? '' : $data['description'],
               'bank_info' =>  $data['bank_info'],
               'bank_user' =>  $data['bank_user'],
               'bank_name' =>  $data['bank_name'],
               'faren' =>  $data['faren'],
               'faren_tel' =>  $data['faren_tel'],
               'email' =>  $data['email'],
           ];
        //halt($base_info);
           //2.2添加基本信息进数据库
           $base_id=model('Bis_base_info')->add($base_info);
           //3总店信息入库
           $data['cat'] = '';
           if(!empty($data['se_category_id']))
           {
               //halt($data['se_category_id']);
               $data['cat'] =  $data['se_category_id'];
           }

           //3.1获取总店信息
           $bis_totle_info=[
             'bis_id'=> $base_id,      //关联数据库
               'name' => $data['name'],
               'logo' => $data['logo'],
               'tel' => $data['tel'],
               'contact' => $data['contact'],
               'category_id' => $data['category_id'],
               'category_path' => $data['category_id'] . ',' . $data['cat'],
               'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],
               'api_address' => $data['address'],
               'open_time' => $data['open_time'],
               'content' => empty($data['content']) ? '' : $data['content'],
               'is_main' => 1,// 代表的是总店信息
               'xpoint' => empty($info['result']['location']['lng']) ? '' : $info['result']['location']['lng'],
               'ypoint' => empty($info['result']['location']['lat']) ? '' : $info['result']['location']['lat'],
           ];
           //3.2总店信息入库
           $bis_totle_info=model('Bis_totle_info')->add($bis_totle_info);
           //4.用户信息
           //4.1账户信息检验
           //4.2自动生成密码的加密字符串
           $data['code']=mt_rand(100,1000);//自动生成随机数
           $bis_user=[
             'bis_id'=>$base_id,
               'username'=>$data['username'],
               'code'=>$data['code'],
               'password'=>md5($data['password'].$data['code']),
               'is_main'=>1,//最高管理权限
           ];
          // halt($bis_user);
           //4.3用户信息入库
           $bis_user=model('Bis_user')->add($bis_user);

           if(!$bis_user)
           {
               $this->error("请输入用户信息");
           }
           //要发送一个邮件去审核   邮箱接口
           $request = Request::instance();
           $url = request()->domain().url('bis/register/wcon', ['id'=>$base_id]);
           $title = "o2o入驻申请通知";
           $content = "您提交的入驻申请需等待平台方审核，您可以通过点击链接<a href='".$url."' target='_blank'>查看链接</a> 查看审核状态";
           \phpmailer\Email::send($data['email'],$title,$content);
       }


       public function wcon()
       {
           echo ("欢迎");exit;
       }

}