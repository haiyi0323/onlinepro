<?php 
header("Access-Control-Allow-Origin:*");
$mysql = new Mysqli("localhost","root","","zhe800");
$mysql->query("set names utf8");
if (isset($_REQUEST['sign'])) {
	$sign = $_REQUEST['sign'];
	$sql = "SELECT * FROM  user WHERE signature = '$sign'";
	$result = $mysql->query($sql);
	$array = array();
	while($result2 = $result->fetch_assoc()){
		$array[] = $result2;
	}
	// 当前时间戳
	$time = time();
	$timestamp = $array[0]['times'];
	if ($time > $timestamp) {
		// 登录过期
		echo '{"errcode":1,"errmsg":"登录过期","data":[]}';
	}else{
		
		echo '{"errcode":0,"errmsg":"ok","data":'.json_encode($array).'}';
	}
}else {
	echo '{"errcode":1,"errmsg":"登录过期","data":[]}';
}




 ?>