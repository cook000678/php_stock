<?php
include("ConnMysql.php");
$ConnectSystem = Connect();

//會員登入
function Loginmember($Login_username){
    global $ConnectSystem;
    $username = $Login_username;
    
    //sql 語法
    $sql = ("SELECT ID, username, password, level
            FROM member
            WHERE username = :username");
    
    $sth = $ConnectSystem -> prepare($sql);
    $sth ->bindParam(":username", $username, PDO::PARAM_STR);
    $sth ->execute();

    
    $Loginmember = array();
    while($Result = $sth -> fetch(PDO::FETCH_ASSOC)){
        $Memberprofile["ID"] = $Result["ID"];
        $Memberprofile["username"] = $Result["username"];
        $Memberprofile["password"] = $Result["password"];
        $Memberprofile["level"] = $Result["level"];
        $Loginmember[] = $Memberprofile;
    unset($Memberprofile);
    }
    return $Loginmember;
}


//insert stock
function Insert_Stock($ID, $Date, $Codename, $Name, $Sell_Buy, $Quantity, $Price){
    global $ConnectSystem;
    $Total =  $Quantity * $Price;

    $sql = ("INSERT INTO `stock`.`history` (`ID`, `Date`, `Codename`, `Name`, `Buy`, `Quantity`, `Price`, `Total`)
            VALUES (:ID, :Date, :Codename, :Name, :Sell_Buy, :Quantity, :Price, :Total)
            ");
    //echo "<br>".$ID."       ".$Date ."       ". $Codename . "       " . $Name ."       ". $Sell ."       "  . $Quantity . "       " . $Price . "       ". $Total."<br>";    

    $sth = $ConnectSystem -> prepare($sql);
    $sth -> bindParam(":ID", $ID, PDO::PARAM_STR);
	$sth -> bindParam(":Date", $Date, PDO::PARAM_STR);
	$sth -> bindParam(":Codename", $Codename, PDO::PARAM_STR);
	$sth -> bindParam(":Name", $Name, PDO::PARAM_STR);
    $sth -> bindParam(":Sell_Buy", $Sell_Buy, PDO::PARAM_STR);
	$sth -> bindParam(":Quantity", $Quantity, PDO::PARAM_INT);
	$sth -> bindParam(":Price", $Price, PDO::PARAM_STR);
	$sth -> bindParam(":Total", $Total, PDO::PARAM_STR);
	$sth -> execute();

}

//Select stock
function Search_Stock($ID, $Start_Date, $End_Date, $Codename, $Name, $Sell_Buy){
    global $ConnectSystem;
    $sql = ("SELECT * 
            FROM `history` 
            WHERE `ID` = '2' ");

}

?>