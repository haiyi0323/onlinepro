<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$class = $_POST['class'];

// 添加数据到用户表

$ordels = new DBConn();
$sql =sprintf("INSERT INTO `user` (`id`,  `username`, `password`, `phone`,`class`) VALUES (null,'%s','%s','%s','%s')",$username,$password,$phone,$class);
echo json_encode($ordels->add($sql));
// echo $sql;