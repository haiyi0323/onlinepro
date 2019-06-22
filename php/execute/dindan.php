<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';


function chamrdz(){
    $id = $_POST['id'];
    $ikk = new DBConn();
    $sqls = "SELECT * FROM `locations` WHERE userid ='$id' and ismr = 0";
    echo json_encode($ikk->selectAll($sqls));
}
function adddingdan(){
    $shdz = $_POST['shdz'];
    $goosid = $_POST['goosid'];
    $userid = $_POST['userid'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $num = $_POST['num'];
    $times = $_POST['times'];
    $ddbh = $_POST['ddbh'];
    $zhuangtai = $_POST['zhuangtai'];
    $allprice = $_POST['allprice'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $looodf = new DBConn();
    $sql ="INSERT INTO `dingdan`(`id`, `zhuangtai`, `userid`, `goosid`, `color`, `size`, `num`, `allprice`, `time`, `xzdz`, `ddbh`,`name`,`phone`) VALUES (null,' $zhuangtai','$userid','$goosid',' $color',' $size',' $num',' $allprice','$times','  $shdz','  $ddbh ','$name','$phone')";
    echo json_encode($looodf->add($sql));
    
}


function alldingdan(){
    $userid = $_POST['id'];
    $fsjdio = new DBConn();
    $sql = "select * from goos,goosimg,dingdan where goos.id=goosimg.goosid and dingdan.goosid = goos.id and dingdan.userid = '$userid'";
    echo json_encode($fsjdio->selectAll($sql));
}

function delddbh(){
    $ddbh = $_POST['ddbh'];
    $gjodsi = new DBConn();
    $sqo = "DELETE FROM `dingdan` WHERE ddbh = $ddbh";
    echo json_encode($gjodsi->del($sqo));
}
function daifuk(){
    $userid = $_POST['id'];
    $fsjdio = new DBConn();
    $sql = "select * from goos,goosimg,dingdan where goos.id=goosimg.goosid and dingdan.goosid = goos.id and dingdan.zhuangtai = 0 and dingdan.userid = '$userid'";
    echo json_encode($fsjdio->selectAll($sql));
}
function daifahuo(){
    $userid = $_POST['id'];
    $fsjdio = new DBConn();
    $sql = "select * from goos,goosimg,dingdan where goos.id=goosimg.goosid and dingdan.goosid = goos.id and dingdan.zhuangtai = 1 and dingdan.userid = '$userid'";
    echo json_encode($fsjdio->selectAll($sql));
}
function dpingjia(){
    $userid = $_POST['id'];
    $fsjdio = new DBConn();
    $sql = "select * from goos,goosimg,dingdan where goos.id=goosimg.goosid and dingdan.goosid = goos.id and dingdan.zhuangtai = 3 and dingdan.userid = '$userid'";
    echo json_encode($fsjdio->selectAll($sql));
}
function daishouhuo(){
    $userid = $_POST['id'];
    $fsjdio = new DBConn();
    $sql = "select * from goos,goosimg,dingdan where goos.id=goosimg.goosid and dingdan.goosid = goos.id and dingdan.zhuangtai = 2 and dingdan.userid = '$userid'";
    echo json_encode($fsjdio->selectAll($sql));
}
function daituihuo(){
    $userid = $_POST['id'];
    $fsjdio = new DBConn();
    $sql = "select * from goos,goosimg,dingdan where goos.id=goosimg.goosid and dingdan.goosid = goos.id and dingdan.zhuangtai = 4 and dingdan.userid = '$userid'";
    echo json_encode($fsjdio->selectAll($sql));
}

function chaweifahuo(){
    $fsjdio = new DBConn();
    $sql = "select * from goos,goosimg,dingdan where goos.id=goosimg.goosid and dingdan.goosid = goos.id and dingdan.zhuangtai = 1 ";
    echo json_encode($fsjdio->selectAll($sql));
}

function updataddzt(){
    $id = $_POST['ddid'];
    $kuaidi = $_POST['kuaidi'];
    $nnsdn = new DBConn();
    $sql = "UPDATE `dingdan` SET `zhuangtai`= 2,`kuaidi`='$kuaidi' WHERE id = '$id'";
    echo json_encode($nnsdn->update($sql));
}

if ($_POST['type'] == 1) {
    chamrdz();
}else if ($_POST['type'] == 55) {
    adddingdan();
}else if ($_POST['type'] == 66) {
    alldingdan();
}else if ($_POST['type'] == 48){
    delddbh();
}else if ($_POST['type'] == 0){
   daifuk();
}else if ($_POST['type'] == 6){
    daifahuo();
}else if ($_POST['type'] == 8){
    dpingjia();
}else if ($_POST['type'] == 9){
    daituihuo();
}else if ($_POST['type'] == 7){
    daishouhuo();
}else if ($_POST['type'] == 65) {
    chaweifahuo();
}else if ($_POST['type'] == 789) {
updataddzt();
}
 