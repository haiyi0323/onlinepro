<?php
header("Access-Control-Allow-Origin:*");
// ini_set("error_reporting","E_ALL & ~E_NOTICE");
require '../tool/dbconn.php';
    function updata(){
        $ttt = $_POST['name'];
        $qm = $_POST['qm'];
        $jip = new DBConn();       
        $sql  = "UPDATE `user` SET name = '$ttt' WHERE signature = '$qm'";
        echo json_encode($jip->update($sql)) ;
    }
    function upsex(){
        $ttt = $_POST['sex'];
        $qm = $_POST['qm'];
        $jip = new DBConn();       
        $sql  = "UPDATE `user` SET sex = '$ttt' WHERE signature = '$qm'";
        echo json_encode($jip->update($sql)) ;
    }
    function upjj(){
        $ttt = $_POST['jj'];
        $qm = $_POST['qm'];
        $jip = new DBConn();       
        $sql  = "UPDATE `user` SET jianjie = '$ttt' WHERE signature = '$qm'";
        echo json_encode($jip->update($sql)) ;
    }


        function addimg(){
            $img = $_FILES['headimg'];
            $jjiisf = moveFilePath($img);
            $qm = $_POST['qm'];
            $jip = new DBConn();   
            $sql  = "UPDATE `user` SET headimg = '$jjiisf' WHERE signature = '$qm'"; 
            echo json_encode($jip->update($sql))  ;
        }
        function ffimgs(){
            $img = $_FILES['headimg'];
            $jjiisf = deloldimg($img);
        }
       
    if ($_POST['type'] == 1) {
     updata();
    }else if ($_POST['type'] == 2) {
        upsex();
    }else if ($_POST['type'] == 5) {
        
        // addimg();
    }else{
        upjj();
    }

    