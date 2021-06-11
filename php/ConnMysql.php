<?php
//servername 可換成 'mysql:host = localhost;dbname = class';
//PDO 改成 伺服器,帳號,密碼即可

$servername = "localhost";
$username = "haohao";
$password = "hao860211";
$dbname = "user";

/*
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully. ";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
*/


function Connect()
	{	
		$SelectDatabase = "mysql:host=localhost;dbname=user";
		$ConnectDatabase = new PDO($SelectDatabase,'haohao','hao860211',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")) or die("連結資料庫失敗!</br>");
		return $ConnectDatabase;
	}

  if(Connect()){
    echo '連線成功';
  }else{
    echo '連線失敗';
  }

?>