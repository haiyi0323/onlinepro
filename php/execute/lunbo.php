<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';

function tijiao(){
    $img1url = $_FILES['img1url'];
    $tzurl1 = $_POST['tzurl1'];
    $img1 = moveFilePath($img1url);
    $name1 = $_POST['name1'];
    $jio = new DBConn();
    $sql = "INSERT INTO `lunbo`(`id`, `imgurl`, `aurl`, `name`) VALUES (null,'$img1','$tzurl1',' $name1')";
    $jio-> add($sql);
    two();
 
    echo "chengg";
}
 function two(){
    $img2url = $_FILES['img2url'];
    $img2 = moveFilePath($img2url);
    $tzurl2 = $_POST['tzurl2'];
    $name2 = $_POST['name2'];
    $dfsj = new DBConn();
    $sql2 = "INSERT INTO `lunbo`(`id`, `imgurl`, `aurl`, `name`) VALUES (null,'$img2','$tzurl2',' $name2')";
    $dfsj-> add($sql2);
    three();
 }
 function three(){
    $img3url = $_FILES['img3url'];
    $tzurl3 = $_POST['tzurl3'];
    $img3 = moveFilePath($img3url);
    $name3 = $_POST['name3'];
    $dsfsgs = new DBConn();
    $sql3 = "INSERT INTO `lunbo`(`id`, `imgurl`, `aurl`, `name`) VALUES (null,'$img3','$tzurl3',' $name3')";
    $dsfsgs-> add($sql3);
 }


 function chalunbob(){
    $jjj = new DBConn();
    $sjji = "SELECT * FROM `lunbo`";
    echo json_encode($jjj->selectAll($sjji));
 }

if ($_POST['type'] == 1) {
    tijiao();
}else if ($_POST['type'] == 0) {
    chalunbob();
}