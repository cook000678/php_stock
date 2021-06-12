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
print_r($_SESSION["level"]);
echo'我是管理者'."<br> <br> <br> <br>";

$Date = $_POST['Date'];
$Codename = $_POST['Codename'];
$Name = $_POST['Name'];
$Buy = $_POST['Buy'];
$Quantity = $_POST['Quantity'];
$Price = $_POST['Price'];

echo $Date ."       ". $Codename . "       " . $Name . "       ". $Buy . "       "  . $Quantity . "       " . $Price;

if($_POST['Date'] !="" && $_POST['Codename'] !="" && $_POST['Name']!="" && $_POST['Buy'] && $_POST['Quantity']!="" && $_POST['Price']!=""){
	echo'我有近來';
	$Ins_stock = Insert_stock($Date, $Codename, $Name, $Buy, $Quantity, $Price) ."<br>";
	echo'新增成功'."<br>";
}else{
	echo'新增不成功';
	//header("Location:/php_stock/html/admin.html");
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