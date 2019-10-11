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

$sql = "select name,password from register";
$result = $conn->query($sql);


$gname = null;
$gpassword = null;
$gname = $_POST["name"];
$gpassword = $_POST["password"];
$mark = FALSE;

while($row = $result->fetch_assoc()) {
    if($gname == $row['name'] && $gpassword == $row['password']){
        echo "Right"."<br/>";
        $mark = TRUE;
        break;
    }
}
if(!$mark){
    echo "Wrong"."<br/>";
}

echo "<a href = 'class1.html'><button>Homepage</button></a>";
$conn->close();
?>
