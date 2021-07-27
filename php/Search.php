<?php
session_start();
include("SQLFunction.php");

header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
    $ID = $_POST["ID"]; //取得 ID POST 值
    $Codename = $_POST["Codename"]; //取得 Codename POST 值
    $Name = $_POST["Name"]; //取得 Name POST 值
    if ($ID!= null || $Codename!= null || $Name!= null) { //如果 ID，Codename，Name  都有填寫
        $Sear_Stock = Search_Stock($ID, $Codename, $Name);
        echo json_encode($Sear_Stock);
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
        ));
    }

?>