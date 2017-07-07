<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/21
 * Time: 15:18
 */
function show($state,$message,$data=[])
{
    return [
        'state' => intval($state),
        'message' => $message,
        'data' => $data,
    ];
}