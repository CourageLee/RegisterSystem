<?php
header("Content-Type: text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "syspwd";
$dbname = "myDB";

$conn = new mysqli($servername,$username,$password,$dbname);
if (mysqli_connect_error()) {
    die("数据库连接失败: " . mysqli_connect_error());
}               //  connect

$sql = "CREATE TABLE Register (
name VARCHAR(30),
password VARCHAR(30) 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}
//echo "<input type = 'button' value = 'button' onclick = 'javascript:window.location.href = 'class1.html'>";
header("location:class1.html");
$conn->close();
?>