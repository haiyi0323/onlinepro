<?php

// 引入数据..库基础配置参数
require './../tool/dbconfig.php';
// 引入格式化数据类
require './../tool/formatdata.php';
/**数据库链接类 */
class DBConn{
    // 成员变量
    private $dbhost;
    private $dbuser;
    private $dbpw;
    private $dbname;
    private $dbcharset;
    protected $dbconn;

    // 1.数据库连接--构造函数中
    public function __construct(){ 
        $this->dbhost=HOSTNAME;
        $this->dbuser=DBUSER;
        $this->dbpw=DBPW;
        $this->dbname=DBNAME;
        $this->dbcharset=DBCHARSET;
        $this->dbconn=$this->createmysqli();
    }

    // 创建有效的数据库链接对象 的方法
    private function createmysqli(){
        
        $mysqli=new mysqli($this->dbhost,$this->dbuser,$this->dbpw,$this->dbname);
       
        // var_dump($mysqli);
        if($mysqli->connect_errno){
            // 链接失败
            echo $mysqli->error;
            exit;
        }
        $mysqli->query('set names '.$this->dbcharset.'');
        return $mysqli;
    }
    

    // 2.执行数据库操作
    private function execsql($sql){
        
        $result=$this->dbconn->query($sql);
         
        // $this->connclose();
        return $result;
    }

    // 2.1 add
    public function add($sql){
        $result=$this->execsql($sql);
        
        $resultObj=new FormatData;
        if($result){
            // 获取刚刚插入数据的id
           $insertId=mysqli_insert_id($this->dbconn);

            $resultObj->state=1; 
            $resultObj->msg='insert success';
            $resultObj->data=["insertId"=>$insertId];
        }
        $this->connclose();
        return $resultObj;
    }
    // 2.2 update

    public function update($sql){
        $result=$this->execsql($sql);
        $resultObj=new FormatData;
        if($result){ 
            $resultObj->state=1; 
            $resultObj->msg='update success'; 
        }
        $this->connclose();
        return $resultObj;
    }
    // 2.3 del

    public function del($sql){
        $result=$this->execsql($sql);
        $resultObj=new FormatData;
        if($result){ 
            $resultObj->state=1; 
            $resultObj->msg='update success'; 
        }
        $this->connclose();
        return $resultObj;
    }
    // 2.4 select

    public function selectAll($sql){
        $result=$this->execsql($sql);
        $data=$result->fetch_all(1);
        $resultObj=new FormatData;
        if($result){ 
            $resultObj->state=1; 
            $resultObj->msg='select success'; 
            $resultObj->data=$data;
        }
        $this->connclose();
        return $resultObj;
    }
    // 2.5  获取当前数据总数的方法()
    public function getPageCount($sql){
        $result=$this->execsql($sql);
        
        $result_data=$result->fetch_assoc();
        $resultObj=new FormatData;
        if($result){
            // 获取刚刚插入数据的id
           
            $resultObj->state=1; 
            $resultObj->msg='select success';
            $resultObj->data=$result_data;
        }
        $this->connclose();
        return $resultObj;
    }


    // // 格式化返回数据的方法
    // private function fomatData($state,$data,$msg){ 
    // }

    // 3.关闭数据库
    private function connclose(){
        $this->dbconn->close();
    }
}

// 移动文件到文件目录
function moveFilePath($fileList){
	$newPath='../../uploads/';
	$newUsePath='http://localhost/phpbox/onlinepro/uploads/';
	$nFName=getFileName().$fileList['name'];
	$uploadRes=move_uploaded_file($fileList['tmp_name'],$newPath.$nFName);
	if($uploadRes){
		return $newUsePath.$nFName;
	}
}
// 通过随机字符串得到不重复文件名
function getFileName(){
	$strForUse='abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ0123456789';
	$times=time();
	$fName='';
	for ($i=0; $i < 8; $i++) { 
		$ranIndex=rand(0,61);
		$fName.=$strForUse[$ranIndex];
	}
	$fName.=$times;
	return $fName;
}
function deloldimg($fileList){
    // 接收数据
    $qm = $_POST['qm'];
 
    //获取原有文件名
    $jipd = new DBConn();  
    $sql  = "SELECT `headimg` FROM `user` WHERE signature = '$qm'"; 
    $imgutl = $jipd->selectAll($sql);
    $fileurl = basename($imgutl->data[0]["headimg"]).PHP_EOL;;
    //将新图片移动到之前的路径
    $sdf = move_uploaded_file($fileList['tmp_name'],"./hhh/{$fileurl}");
    echo $sdf;

}