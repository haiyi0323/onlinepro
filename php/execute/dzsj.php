<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';
$idus='';
function infodz(){
    $jfiwe = $_POST['qm'];
    $jifw = new DBConn();
    $sql = "SELECT * FROM `user` WHERE signature ='$jfiwe'";
    $fdfw = $jifw->selectAll($sql);
    if ($fdfw->state == 1) {
        $idus = $fdfw->data[0]['id'];
    }
    return $idus;
}
$a = infodz();
function jiiwe($a){
    $jfiwe = new DBConn();
    $jfdi = $a;
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $ismr = $_POST['ismr'];
    $dz = $_POST['dz'];
    $xxdz = $_POST['xxlocal'];
    $dzb = sprintf("INSERT INTO `locations` (`id`,  `userid`,  `phone`,`suo`, `xxdz`,`username`,`ismr`) VALUES (null,%s,'%s','%s','%s','%s','%s')",$jfdi,$phone,$dz,$xxdz,$name,$ismr);
    echo json_encode($jfiwe->add($dzb)) ;
}


// 根据用户id 查地址
function chadd ($a){
    $fjsdiw = new DBConn();
    $sql = "SELECT * FROM `locations` WHERE userid ='$a'";
    echo json_encode($fjsdiw -> selectAll($sql)) ;

}

    function deldz(){
        $fjwiepr = $_POST['id'];
        $jfijw = new DBConn();
        $sql = "DELETE FROM `locations` WHERE id ='$fjwiepr'";
        echo json_encode($jfijw->del($sql));

    }

        function clearismr($a){
           
            $jjiowf = new DBConn();
            $sql = "UPDATE `locations` SET `ismr`= 1 WHERE userid = '$a'";
           $jjiowf->update($sql);
                ismr();
        }
        function ismr(){
            $userid = $_POST['vla'];
            $lmmmie = new DBConn();
            $sqls = "UPDATE `locations` SET `ismr`= 0 WHERE id = '$userid'";
           $lmmmie->update($sqls);
        }


if ($_POST['type'] == 0) {
    jiiwe($a);
}else if ($_POST['type'] == 1) {
    chadd($a);
}else  if ($_POST['type'] == 2) {
    deldz();
}else if($_POST['type'] == 6){
    clearismr($a);
}else{
    echo $a;
}