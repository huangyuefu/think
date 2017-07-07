<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 14:19
 */
mysql_connect('localhost','root','root');

mysql_select_db('toupiao');

mysql_query('set name utf8');

// print_r($name);die;
$sql = "select * from `toupiao`";
// echo $sql;die;
$run = mysql_query($sql);
//print_r($run);die;

$result=mysql_fetch_assoc($run);
include("aa.html");