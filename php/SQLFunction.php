<?php
include("ConnMysql.php");
$ConnectSystem = Connect();

function Loginmember($Login_username){
    global $ConnectSystem;
    $username = $Login_username;
    
    //sql 語法
    $sql = ("SELECT username, password, level
            FROM member
            WHERE username = :username");
    
    $sth = $ConnectSystem -> prepare($sql);
    $sth ->bindParam(":username", $username, PDO::PARAM_STR);
    $sth ->execute();

    
    $Loginmember = array();
    while($Result = $sth -> fetch(PDO::FETCH_ASSOC)){
        $student_scoretemp["username"] = $Result["username"];
        $student_scoretemp["password"] = $Result["password"];
        $student_scoretemp["level"] = $Result["level"];
        $Loginmember[] = $student_scoretemp;
    unset($student_scoretemp);
    }
    //print_r($Loginmember);
    return $Loginmember;
    




}


?>