<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 13:54
 */
function show($state,$message,$data=[])
{
    return json([
        'state' => intval($state),
        'message' => $message,
        'data' => $data,
    ]);
}