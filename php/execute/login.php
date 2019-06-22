<?php 
header("Access-Control-Allow-Origin:*");
$mysql = new Mysqli("localhost","root","","zhe800");
$mysql->query("set names utf8");
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$sql = "SELECT * FROM user WHERE username = '{$username}'";
$result = $mysql->query($sql);
$array = array();
while ($result2 = $result->fetch_assoc()) {
	$array[] = $result2;
}

if (count($array)) {
	if ($array[0]["password"] == $password) {
		$nickname = $array[0]["name"];
		$sign = getSignature();
		$time = time()+100000000000;
		$sql2 = "UPDATE user SET signature = '$sign', times = '$time' WHERE username = '$username'";
		$obj = (object)array();
		$obj->nickname = $nickname;
		$obj->sign = $sign;
		$obj = json_encode($obj);
		$result = $mysql->query($sql2);
		if ($result) {
			echo '{"errcode":0,"errmsg":"ok","data":'.$obj.'}';
		}

	}else{
		echo '{"errcode":1,"errmsg":"error password"}';
	}
}else{
	echo '{"errcode":2,"errmsg":"unknow username"}';
}


function getSignature(){
	$str = "abcdefghijklmnopqrstuvwxyz01234567890";
	$sign = "";
	for ($i=0; $i < 20; $i++) { 
		$sign .= $str[rand(0,20)];
	}
	return $sign;
}







 ?>