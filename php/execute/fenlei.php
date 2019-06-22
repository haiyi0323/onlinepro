<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';

function addfiles(){
    $jorgg= $_POST['flname'];
    $jiosw = $_FILES['filimg'];
    $jjjseer = moveFilePath($jiosw);
    $ijwee = new DBConn();
    $djow = sprintf("INSERT INTO `fenlei`(`id`, `name`, `fenleiimg`) VALUES (null,'%s','%s')",$jorgg,$jjjseer);
    echo json_encode($ijwee->add($djow));
}
// 查分类表
function xrfiles(){
   
    $ijwee = new DBConn();
    $djow = "SELECT * FROM `fenlei`";
    echo json_encode( $ijwee->selectAll($djow));
}
function delfl(){
    $jiwdf = new DBConn();
    $id = $_POST['id'];
    $sqr = "DELETE FROM `fenlei` WHERE id = '$id'";
    echo json_encode($jiwdf->del($sqr));
}
function renames(){
    $fiowe= new DBConn();
    $id = $_POST['id'];
    $text = $_POST['text'];
    $sqlr = "UPDATE `fenlei` SET `name`= '$text' WHERE  id ='$id'";
    echo json_encode($fiowe ->update($sqlr));

}

function upflimg(){
    $flid = $_POST['flid'];
    $flimg = $_FILES['flimg'];
    $xiangurl = moveFilePath($flimg);
    $sql = "INSERT INTO `fenlei`(`fenleiimg`) VALUES ('$xiangurl') WHERE id ='$flid'";
    $jiofwfds = new DBConn();
    echo json_encode($jiofwfds->add($sql));
}

function fenlesp(){
    $jjdw = $_POST['fenleiid'];
    $joow = new DBConn();
    $sqos = "select * from goos,goosimg,fenlei where goos.id=goosimg.goosid and goos.fenlei=fenlei.id and goos.upgoos = 1 and fenlei.id ='$jjdw '";
    echo json_encode($joow ->selectAll($sqos)) ;

}

if ($_POST['type'] == 1) {
    addfiles();
}else if ($_POST['type'] == 0){
    xrfiles();
}else if ($_POST['type'] == 2) {
    delfl();
}else if ($_POST['type'] == 3) {
    renames();
}else if ($_POST['type'] == 57) {
    upflimg();
}else if ($_POST['type'] == 88){
    fenlesp();
}