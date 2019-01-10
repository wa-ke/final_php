<?php
require_once "conn.php";
session_start();
$Tea=$_SESSION['Tea'];
$user=$_SESSION['user'];
$soc=$_POST['A'];
$sql="update eva set $Tea = '$soc' where Sid = $user";
mysqli_query($link,$sql);
echo "<script>alert('提交成功！');location.href='Stu.php';</script>";