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
/*
echo "我的Level是: ";
print_r($_SESSION["level"]). "</br>";
echo"我的ID是: ". $ID;
*/
$ID = $_SESSION["ID"];
$Date = $_POST['Date'];
$Codename = $_POST['Codename'];
$Name = $_POST['Name'];
$Sell_Buy = $_POST['Sell_Buy'];
$Quantity = $_POST['Quantity'];
$Price = $_POST['Price'];



//echo $ID. "       " . $Date ."       ". $Codename . "       " . $Name . "       ". $Sell_Buy . "       "  . $Quantity . "       " . $Price ."</br>";

if($ID!=""){
	$Ins_stock = Insert_Stock($ID, $Date, $Codename, $Name, $Sell_Buy, $Quantity, $Price) ."<br>";
	echo json_encode(array(
		'ID' => $ID,
		'Date' => $Date, 
		'Codename' => $Codename, 
		'Name' => $Name, 
		'Sell_Buy' => $Sell_Buy, 
		'Quantity' => $Quantity, 
		'Price' => $Price
		));
		
}else {
	//回傳 errorMsg json 資料
	echo json_encode(array(
		'errorMsg' => '資料未輸入完全！'
	));
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