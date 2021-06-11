<?php
include("ConnMysql.php");


try{
$sql = "insert into MyGuests(firstname, lastname, email)
values('John','Doe','john@example.com')";
$conn->exec($sql);
echo 'New record created successfully';
}catch (PDOException $e){
    echo $sql . "<br>" .$e->getMessage();
}
$conn=null;
?>