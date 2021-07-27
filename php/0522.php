<?php
//header("Content-type=text/html;charset=utf-8");
//header('Content-type:text/json');
$servername = "localhost";
$username = "haohao";
$password = "hao860211";
$dbname = "studentinfo";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
} 

mysqli_query($conn, 'set names utf8');
$sql = "SELECT studentID, studentName, class, department,teleNumber FROM studentinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 輸出資料
    while($row = $result->fetch_assoc()) {
        echo json_encode($row,JSON_UNESCAPED_UNICODE).' ';
    }
} else {
    echo "0 結果";
}
$conn->close();
?>