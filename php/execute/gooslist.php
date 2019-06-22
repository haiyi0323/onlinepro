<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';
function chagooslist(){
    $cha = new DBConn();
    $sql ="SELECT goos.title,goos.num, goos.huohao,goos.zhekou, goos.price,goosimg.zhuurl,goosimg.goosid
    FROM goos, goosimg
    WHERE goos.id = goosimg.goosid  and goos.upgoos = 1" ;
    echo json_encode($cha->selectAll($sql));
}

function mohu(){
    $key = $_POST['key'];
    $dfhw = new DBConn();
    $sql = "SELECT goos.title,goos.num, goos.huohao,goos.zhekou, goos.price,goosimg.zhuurl,goosimg.goosid
    FROM goos, goosimg
    WHERE goos.id = goosimg.goosid and goos.upgoos = 1  and title like '%$key%'" ;
    echo json_encode($dfhw->selectAll($sql));
}

function xiajiaa(){
    $cha = new DBConn();
    $sql ="SELECT goos.title,goos.num, goos.huohao,goos.zhekou, goos.price,goosimg.zhuurl,goosimg.goosid
    FROM goos, goosimg
    WHERE goos.id = goosimg.goosid  and goos.upgoos = 0" ;
    echo json_encode($cha->selectAll($sql));
}
if ($_POST['type'] == 1) {
    chagooslist();
}else if ($_POST['type'] == 55) {
mohu();
}else if ($_POST['type'] == 2) {
    xiajiaa();
}