<?php

session_start();

if(isset($_SESSION["level"]) || ($_SESSION["level"])!=""){
	if($_SESSION["level"]=="general"){
		//header("Location: general.php");
	}else{
		header("Location: /php_stock/html/sign_in.html");
	}
}


print_r($_SESSION["level"]);

echo'我是會員';


?>