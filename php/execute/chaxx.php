<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';
function cuser(){
    $sign = $_REQUEST['qm'];
    $jio = new DBConn();
    $sql = "SELECT * FROM  user WHERE signature = '$sign'";
   echo json_encode($jio->selectAll($sql)) ;

}
function chaid(){
    $sign = $_REQUEST['qm'];
    $jio = new DBConn();
    $sql = "SELECT `id` FROM  `user` WHERE signature = '$sign'";
    echo json_encode($jio->selectAll($sql)) ;

}
if ($_REQUEST['type']==1) {
    cuser();
}elseif ($_REQUEST['type']==2) {
    chaid();
}