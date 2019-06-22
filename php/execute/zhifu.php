<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';

function azhifu(){
    $pas = $_POST['pas'];
    $userid = $_POST['userid'];
    $sql = "INSERT INTO `zhifu`(`id`, `userid`, `pass_word`) VALUES (null,'$userid','$pas')";
    $iii = new DBConn();
    echo json_encode($iii->add($sql));
}
function bzhifu(){
    $userid = $_POST['userid'];
    $sql = "SELECT `id` FROM `zhifu` WHERE userid = '$userid'";
    $iiig = new DBConn();
    echo json_encode($iiig->selectAll($sql));
}
function czhifu(){
    $userid = $_POST['userid'];
    $pas = $_POST['pas'];
    $sql = "SELECT `id` FROM `zhifu` WHERE userid = '$userid' and pass_word = '$pas'";
    $iiig = new DBConn();
    echo json_encode($iiig->selectAll($sql));
}

function dzhifu(){
    $newpas = $_POST['newpas'];
    $userid = $_POST['userid'];
    $sql = "UPDATE `zhifu` SET `pass_word`='$newpas' WHERE userid = '$userid'";
    $iiig = new DBConn();
    echo json_encode($iiig->selectAll($sql));
}
if ($_POST['type'] == 1) {
    azhifu();
}else if ($_POST['type'] == 2) {
    bzhifu();
}else if ($_POST['type'] == 263) {
    czhifu();
}else if ($_POST['type'] == 44) {
    dzhifu();
}