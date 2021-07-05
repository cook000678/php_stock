<?php

session_start();
include("SQLFunction.php");

if(isset($_SESSION["level"]) || ($_SESSION["level"])!=""){
	if($_SESSION["level"]=="admin"){
		//header("Location: admin.php");
	}else{
		header("Location: /php_stock/html/sign_in.html");
	}
}

echo "我的Level是: ";
print_r($_SESSION["level"]). "</br>";


$ID = $_SESSION["ID"];
$Date = $_POST['Date'];
$Codename = $_POST['Codename'];
$Name = $_POST['Name'];
$Sell_Buy = $_POST['Sell_Buy'];
$Quantity = $_POST['Quantity'];
$Price = $_POST['Price'];



echo $ID. "       " . $Date ."       ". $Codename . "       " . $Name . "       ". $Sell_Buy . "       "  . $Quantity . "       " . $Price ."</br>";



if($ID!="" && $Date!= "" && $Codename!="" && $Name!="" && $Sell_Buy!="" && $Quantity!="" && $Price!=""){
	$Ins_stock = Insert_Stock($ID, $Date, $Codename, $Name, $Sell_Buy, $Quantity, $Price) ."<br>";
	echo'新增成功'."<br>";
}else{
	header("Location:/php_stock/html/admin.html");
}



//執行登出
/*
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
	unset($_SESSION["loginMember"]);
	unset($_SESSION["memberLevel"]);
	header("Location: 1.html");
}
*/


?>