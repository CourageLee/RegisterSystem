<?php
$servername = "localhost";
$username = "root";
$password = "syspwd";
$dbname = "myDB";

$conn = new mysqli($servername,$username,$password,$dbname);
if (mysqli_connect_error()) {
    die("数据库连接失败: " . mysqli_connect_error());
}               //  connect

$gname = null;
$gpassword = null;
$gname = $_POST["crname"];
$gpassword = $_POST["crpassword"];

//echo $gname;
//echo $gpassword;
$sql = "INSERT INTO Register(name,password)
VALUES('a','a')";

$sql = "INSERT INTO register(name,password)  VALUES(?, ?)";

// 为 mysqli_stmt_prepare() 初始化 statement 对象
$stmt = mysqli_stmt_init($conn);

//预处理语句
if (mysqli_stmt_prepare($stmt, $sql)) {
    // 绑定参数
    mysqli_stmt_bind_param($stmt, 'ss', $gname, $gpassword);

    // 设置参数并执行

    mysqli_stmt_execute($stmt);

}

$conn->query($sql);

//sleep(3);
header("location:class1.html");
$conn->close();
?>