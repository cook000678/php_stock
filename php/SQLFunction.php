<?php
include("ConnMysql.php");
$ConnectSystem = Connect();

//會員登入
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
    return $Loginmember;
}


//insert stock
function Insert_stock($Date, $Codename, $Name, $Buy, $Quantity, $Price){
    global $ConnectSystem;
    $Total =  $Quantity * $Price;

    $sql = ("INSERT INTO `stock`.`history` (`Date`, `Codename`, `Name`, `Buy`, `Quantity`, `Price`, `Total`)
            VALUES (:Date, :Codename, :Name, :Buy, :Quantity, :Price, :Total)
            ");

    //echo "<br>".$Date ."       ". $Codename . "       " . $Name . "       "  . $Quantity . "       " . $Price . "       ". $Total."<br>"; 
       

    $sth = $ConnectSystem -> prepare($sql);
	$sth -> bindParam(":Date", $Date, PDO::PARAM_STR);
	$sth -> bindParam(":Codename", $Codename, PDO::PARAM_STR);
	$sth -> bindParam(":Name", $Name, PDO::PARAM_STR);
    $sth -> bindParam(":Buy", $Buy, PDO::PARAM_STR);
	$sth -> bindParam(":Quantity", $Quantity, PDO::PARAM_INT);
	$sth -> bindParam(":Price", $Price, PDO::PARAM_STR);
	$sth -> bindParam(":Total", $Total, PDO::PARAM_STR);
	$sth -> execute();


    /*
    $sth = $ConnectSystem -> prepare($sql);
    $sth -> bindParam(":Date", $Date, PDO::PARAM_STR);
    $sth -> bindParam(":Codename", $Codename, PDO::PARAM_STR);
    $sth -> bindParam(":Name", $Name, PDO::PARAM_STR);
    $sth -> bindParam(":Quantity", $Quantity, PDO::PARAM_INT);
    $sth -> bindParam(":Price", $Price, PDO::PARAM_STR);
    $sth -> bindParam(":Cost", $Total, PDO::PARAM_STR);
    $sth -> execute();
    */
}

?>