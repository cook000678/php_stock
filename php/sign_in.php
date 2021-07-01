<?php
session_start();

include("SQLFunction.php");
$username = $_POST["username"];
$password = $_POST["password"];



if (!isset($_SESSION["loginMember"]) || $_SESSION["loginMember"]==""){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $System = Loginmember($username);
    
    foreach($System as $Loginmember){
        $System_ID = $Loginmember['ID'];
        $System_username = $Loginmember['username'];
        $System_password = $Loginmember['password'];
        $System_level = $Loginmember['level'];
    }
    $_SESSION['ID'] = $System_ID;
    $_SESSION['username'] = $System_username;
    $_SESSION['level'] = $System_level;
    
    if($_SESSION['level'] == 'admin'){
        echo'我是管理員';
        header("Location: /php_stock/html/admin.html");
    }else{
        header("Location: /php_stock/html/general.html");
    }
    
   
    
}




?>