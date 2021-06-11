<?php
session_start();
//include("ConnMysql.php");
include("SQLFunction.php");
$username = $_POST["username"];
$password = $_POST["password"];

echo $username ."<br>";
echo $password ."<br>";

/*
if (isset($_SESSION["loginMember"]) && $_SESSION["loginMember"]!=""){
	
	if($_SESSION["memberLevel"]=="admin"){
		header("Location: /php_practice/html/hello_word.html");
		//否則則導向會員
		}
		if($_SESSION["memberLevel"]=="member"){
			header("Location: general.php"); 
		}
}
*/


if (!isset($_SESSION["loginMember"]) || $_SESSION["loginMember"]==""){
	//執行會員登入
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		//呼叫SQLFunction
		$System=LoginMember($username);
		
		//Foreach撈SQL的帳號密碼等級
		foreach($System as $LoginMember){
			$System_username=$LoginMember["username"];
			$System_password=$LoginMember["password"];
			$System_level=$LoginMember["level"];
			}

		//比對密碼，若登入成功則呈現登入狀態
		if(($username==$System_username) && (md5($password)==$System_password)){
			 $_SESSION["loginMember"]=$System_username;
			 
			//設定登入者的名稱及等級
			 $_SESSION["memberLevel"]=$System_level;
			 
			//若帳號等級為 member 則導向管理者
			if($_SESSION["memberLevel"]=="admin"){
				header("Location: admin.php");
				
			//否則則導向會員
			}
			else{
				header("Location: general.php"); 
			}
		}
		else{
			//header("Location: sign_in.php?errMsg=1");
		}
	}
}
else {
	//若帳號等級為 member 則導向會員中心
	if($_SESSION["memberLevel"]=="admin"){
		header("Location: /php_practice/html/hello_word.html");
	//否則則導向管理中心
	}
	else{
		header("Location: general.php"); 
	}
}




?>