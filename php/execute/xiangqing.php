<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';

function goossp(){
    $jjdw = $_POST['id'];
    $joow = new DBConn();
    $sqos = "select * from goos,goosimg,guige where goos.id=goosimg.goosid and guige.goosid = goos.id and goos.id ='$jjdw '";
    echo json_encode($joow ->selectAll($sqos)) ;

}
function shopcar(){

    $ssde = $_POST['guse'];

  
        goosspf($ssde);


}

function goosspf($a){
    $joow = new DBConn();
    $sqos = "select * from goos,goosimg,guige,shopcar where goos.id=goosimg.goosid and guige.goosid = goos.id and shopcar.goosid = goos.id and shopcar.id ='$a '";
    echo json_encode($joow ->selectAll($sqos)) ;

}



if ($_POST['type'] == 0) {
    goossp();
}elseif ($_POST['type'] == 2) {
    shopcar();
}