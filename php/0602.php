<?php

session_start();

/*
if (isset($_SESSION["loginMember"]) && $_SESSION["loginMember"]!=""){
	
	if($_SESSION["level"]=="admin"){
		header("Location: admin.php");
		//否則則導向會員
		}
		if($_SESSION["level"]=="member"){
			header("Location: general.php"); 
		}
}
*/

//include("ConnMysql.php");
include("SQLFunction.php");
$username = $_POST["username"];
$password = $_POST["password"];

echo $username ."<br>";
echo $password ."<br>";

if (!isset($_SESSION["loginMember"]) || $_SESSION["loginMember"]==""){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $System = Loginmember($username);
    
    foreach($System as $Loginmember){
        $System_username = $Loginmember['username'];
        $System_password = $Loginmember['password'];
        $System_level = $Loginmember['level'];
    }
    $_SESSION['username'] = $System_username;
    $_SESSION['level'] = $System_level;
    
    if($_SESSION['level'] == 'admin'){
        echo'我是管理員';
        header("Location: admin.php");
    }else{
        header("Location: general.php");
    }
    
    print($_SESSION['username'])."<br>";
    print($_SESSION['level']);
//---------------------------------------------------------------------------------------

    /*
    if(($username == $System_username) && ($password == $System_password)){
        //把資料庫的帳號 寫在session
        $_SESSION["Loginmember"] = $System_username;
        //把資料庫的level寫在 session
        $_SESSION["level"] = $System_level;

        if($_SESSION["level"] == 'admin'){
            header("Location: admin.php");
        }else{
            header("Location: general.php");
        }
    }else{
        header("Location: 0602.php?errMsg=1");
    }

    print_r($System_level);
*/    
}

/*
else{
    //若帳號等級為 member 則導向會員中心
	if($_SESSION["Level"]=="admin"){
		header("Location: admin.php");
	//否則則導向管理中心
	}
	else{
		header("Location: general.php"); 
	}

  
}
*/ 


/*
$sql = "INSERT INTO member (username, password)
VALUES ('$username', '$password')";
// use exec() because no results are returned
$conn->exec($sql);
*/





?>