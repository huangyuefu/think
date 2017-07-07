<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23 0023
 * Time: 下午 10:15
 */

namespace app\common\model;

use think\Request;
use think\Model;

class BisBase extends Model
{
    protected $autoWriteTimestamp=true;
    //建一个添加方法
    public function add($data)
    {
        $data['state']=0;
        $this->save($data);
        return $this->id;
    }
}