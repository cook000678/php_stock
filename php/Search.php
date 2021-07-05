<?php
session_start();
include("SQLFunction.php");

header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
    $ID = $_POST["ID"]; //取得 ID POST 值
    $Codename = $_POST["Codename"]; //取得 Codename POST 值
    $Name = $_POST["Name"]; //取得 Name POST 值
    if ($ID!= null || $Codename!= null || $Name!= null) { //如果 ID，Codename，Name  都有填寫
        //回傳 ID，Codename，Name json 資料
        /*echo json_encode(array(
            'ID' => $ID,
            'Codename' => $Codename,
            'Name' => $Name
        ));*/
        /* */
        $Sear_Stock = Search_Stock($ID);
        echo json_encode($Sear_Stock);
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
        ));
    }

/*
if($_POST['ID']!=""){
    $Sear_Stock = Search_Stock($ID);
    print_r($Sear_Stock);
}else{
    echo'查詢失敗';
}
*/






/*
if($_POST["ID"]!="" || $_POST["Start_Date"]!="" || $_POST["End_Date"]!="" || $_POST["Codename"]!="" || $_POST["Nmae"]!=""){
    $Sel_Stock = Search_Stock($ID, $Start_Date, $End_Date, $Codename, $Name);
    echo'查詢成功';
}else{
    echo'查詢失敗';
}
*/


?>