<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';

function addshopcar(){
    $userid = $_REQUEST['userid'];
    $goosid = $_REQUEST['goosid'];
    $color = $_REQUEST['color'];
    $size = $_REQUEST['size'];
    $num = $_REQUEST['num'];
    $img = $_REQUEST['img'];
    $title = $_REQUEST['name'];
    $zhe = $_REQUEST['zhe'];
    $price = $_REQUEST['price'];
    $jjjs = new DBConn();
    $sql = "INSERT INTO `shopcar`(`id`, `userid`, `goosid`, `color`, `size`, `num`, `img`, `title`, `zhe`, `price`) VALUES (null,'$userid','$goosid','$color','$size','$num','$img','$$title','$zhe','$price')";
    echo json_encode($jjjs->add($sql));
}

// 根据id获取购物车数据
function carlist(){
    $userid = $_POST['userid'];
    $sfjir = new DBConn();
    $sql = "SELECT * FROM `shopcar` WHERE userid = '$userid'";
    echo json_encode($sfjir->selectAll($sql));
}


// 删除购物车
function delcar($a){
    $jjd = new DBConn();
    $sql = "DELETE FROM `shopcar` WHERE id = '$a'";
    echo json_encode($jjd->del($sql));
}

if ($_POST['type'] == 1) {
    addshopcar();
}else if ($_REQUEST['type'] == 3) {
    carlist();
}else if ($_REQUEST['type'] == 99) {
   $uuu = $_POST['delcar'];
    for ($i=0; $i < count($uuu) ; $i++) { 
      delcar($uuu[$i]);
    }

}