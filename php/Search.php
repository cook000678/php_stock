<?php
session_start();
include("SQLFunction.php");
/*
echo "ID: " . $_POST["ID"]. "<br>";
echo "Start_Date: " . $_POST["Start_Date"]. "<br>";
echo "End_Date: " . $_POST["End_Date"]. "<br>";
echo "Codename: " . $_POST["Codename"]. "<br>";
echo "Name: " . $_POST["Name"]. "<br>";
echo "Sell_Buy: " . $_POST["Sell_Buy"]. "<br>";
echo "Quantity: " . $_POST["Quantity"]. "<br>";
echo "Price: " . $_POST["Price"]. "<br>";
*/

if($_POST["ID"]!="" || $_POST["Start_Date"]!="" || $_POST["End_Date"]!="" || $_POST["Codename"]!="" || $_POST["Nmae"]!="" || 
   $_POST["Sell_Buy"]!="" ){
    $Sel_Stock = Search_Stock($ID, $Start_Date, $End_Date, $Codename, $Name, $Sell_Buy);
    echo'查詢成功';
}else{
    echo'查詢失敗';
}

?>