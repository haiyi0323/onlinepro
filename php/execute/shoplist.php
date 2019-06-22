<?php
header("Access-Control-Allow-Origin:*");
require '../tool/dbconn.php';

$joow = new DBConn();
$sqos = "SELECT goos.title,goos.num, goos.huohao,goos.zhekou, goos.price,goos.fenlei,goos.id,goos.upgoos,goosimg.zhuurl,goosimg.id,goosimg.goosid,goosimg.img2url,goosimg.img3url,goosimg.img4url,goosimg.img5url,goosimg.ckid,goosimg.xiang
FROM goos, goosimg
WHERE goos.id = goosimg.goosid and goos.upgoos = 1";
echo json_encode($joow ->selectAll($sqos)) ;