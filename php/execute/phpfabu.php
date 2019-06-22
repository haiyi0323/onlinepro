<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';
function addGood(){
     $operatordb = new DBConn();
    // 获取前端参数
    $name=$_POST['zi1'];
    $huohao = $_POST['zi2'];
    $num = $_POST['zi3'];
    $price=$_POST['zi4'];
    $zhe = $_POST['zi5'];
    $fenlei = $_POST['zi6'];
    $upgoos = $_POST['zi7'];
    $sql=sprintf("insert into `goos` values (null,'%s','%s','%s','%s','%s','%s',%s)", $price, $zhe, $name,$fenlei,$num,$huohao,$upgoos);
    // echo $sql;
    echo json_encode($operatordb->add($sql));

}
function addGoods(){
    $operatordb = new DBConn();
   // 获取前端参数
   $name=$_POST['zi1'];
   $huohao = $_POST['zi2'];
   $num = $_POST['zi3'];
   $price=$_POST['zi4'];
   $zhe = $_POST['zi5'];
   $fenlei = $_POST['zi6'];
   $upgoos = $_POST['zi7'];
   $sql=sprintf("insert into `ck` values (null,'%s','%s','%s','%s','%s','%s',%s)", $price, $zhe, $name,$fenlei,$num,$huohao,$upgoos);
   // echo $sql;
   echo json_encode($operatordb->add($sql));

}
function AddGoodInfo(){
   
    $operatordb2= new DBConn();
    // 获取前端参数
    $zhut = $_FILES['zhut'];
    $zhuturl = moveFilePath($zhut);
    $pic2 = $_FILES['pic2'];
    $pic2url = moveFilePath($pic2);
    $pic3 = $_FILES['pic3'];
    $pic3url = moveFilePath($pic3);
    $pic4 = $_FILES['pic4'];
    $pic4url = moveFilePath($pic4);
    $pic5 = $_FILES['pic5'];
    $pic5url = moveFilePath($pic5);
    $xiang =$_FILES['xiang'];
    $xiangurl = moveFilePath($xiang);
    $goosid =$_POST['goosid'];
   
    $sql = sprintf(" INSERT INTO `goosimg`(`id`, `goosid`, `zhuurl`, `img2url`, `img3url`, `img4url`, `img5url`,`xiang`, `ckid`) VALUES (null,%s,'%s','%s','%s','%s','%s','%s',0)", $goosid,$zhuturl,$pic2url,$pic3url,$pic4url,$pic5url,$xiangurl);
    echo json_encode($operatordb2->add($sql));

   
}

function AddGoodInfos(){
   
    $operatordb2= new DBConn();
    // 获取前端参数
    $zhut = $_FILES['zhut'];
    $zhuturl = moveFilePath($zhut);
    $pic2 = $_FILES['pic2'];
    $pic2url = moveFilePath($pic2);
    $pic3 = $_FILES['pic3'];
    $pic3url = moveFilePath($pic3);
    $pic4 = $_FILES['pic4'];
    $pic4url = moveFilePath($pic4);
    $pic5 = $_FILES['pic5'];
    $pic5url = moveFilePath($pic5);
    $xiang =$_FILES['xiang'];
    $xiangurl = moveFilePath($xiang);
    $goosid =$_POST['goosid'];
   
    $sql = sprintf(" INSERT INTO `goosimg`(`id`, `goosid`, `zhuurl`, `img2url`, `img3url`, `img4url`, `img5url`,`xiang`, `ckid`) VALUES (null,0,'%s','%s','%s','%s','%s','%s',%s)", $zhuturl,$pic2url,$pic3url,$pic4url,$pic5url,$xiangurl,$goosid);
    echo json_encode($operatordb2->add($sql));

   
}


  function jiojw(){
        $fjif= $_POST['idsjf'];
        $operatordb5= new DBConn();
        $sql = "SELECT goos.title,goos.num, goos.huohao,goos.zhekou, goos.price,goos.fenlei,goos.id,goos.upgoos,goosimg.zhuurl,goosimg.id,goosimg.img2url,goosimg.img3url,goosimg.img4url,goosimg.img5url,goosimg.ckid,goosimg.xiang
        FROM goos, goosimg
        WHERE goos.id = goosimg.goosid and goos.id = '$fjif'";
        echo json_encode($operatordb5->selectAll($sql)) ;
    }

function updatagoos(){
    $operatordb = new DBConn();
    // 获取前端参数
    $goosid = $_POST['goosid'];
    $name=$_POST['zi1'];
    $huohao = $_POST['zi2'];
    $num = $_POST['zi3'];
    $price=$_POST['zi4'];
    $zhe = $_POST['zi5'];
    $fenlei = $_POST['zi6'];
    $upgoos = $_POST['zi7'];
   
    $sql=sprintf(" UPDATE `goos` SET  `price`='%s',`zhekou`='%s',`title`='%s',`fenlei`='%s',`num`='%s',`huohao`='%s',`upgoos`=%s WHERE id = %s", $price, $zhe, $name,$fenlei,$num,$huohao,$upgoos, $goosid);
    // echo $sql;
    echo json_encode($operatordb->add($sql));
}

    function upimg(){
        $ziduan = $_FILES['ziduan'];
        $upimg = $_FILES['upimg'];
        $jijwoi = new DBConn();
        $newpath = moveFilePath($upimg);
        $goosid = $_FILES['goosid'];
        $sql = "UPDATE `goosimg` SET `'$ziduan'`='$newpath',WHERE goosid = '$goosid'";
        echo json_encode($jijwoi->update($sql));
    }

    function guige(){
        $chima = $_POST['chima'];
        $color = $_POST['color'];
        $goosid = $_POST['goosid'];
        $jiso = new DBConn();
        $sqlr = "INSERT INTO `guige`(`id`, `goosid`, `color`, `chima`) VALUES (null,'$goosid','$color','$chima')";
        echo json_encode($jiso ->add($sqlr));
    }

    // 下架
    function xiajia(){
        $ifd = $_POST['goosid'];
        $jifow = new DBConn();
        $sff = "UPDATE `goos` SET `upgoos`= 0 WHERE id = '$ifd'";
        echo json_encode($jifow->update($sff));
    }

    if ( isset($_POST['type']) ) {
        if($_POST['type']==21){
            addGood();
        }else if ($_POST['type']==22) {
            addGoods();
        }elseif ($_POST['type']==32) {
            AddGoodInfo();
        }elseif ($_POST['type']==28) {
            updatagoos();
        }else if ($_POST['type']==55) {
            upimg();
        }else if ($_POST['type']==123) {
            guige();
        }else if ($_POST['type']==585){
            xiajia();
        }
    }elseif ($_POST['idsjf']) {
        jiojw();
    }
