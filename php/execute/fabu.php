<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';

$operatordb3= new DBConn();
    $sql = "select * from `fenlei`";
    echo json_encode($operatordb3->selectAll($sql)) ;

  