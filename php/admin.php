<?php

session_start();


if(isset($_SESSION["level"]) || ($_SESSION["level"])!=""){
	if($_SESSION["level"]=="admin"){
		//header("Location: admin.php");
	}else{
		header("Location: /php_practice/html/sign_in.html");
	}
}


print_r($_SESSION["level"]);

echo'我是管理者';
?>