<?php
require_once "conn.php";
session_start();
$Tea=$_SESSION['Tea'];
$user=$_SESSION['uname'];
echo $Tea;
echo $user;
$soc=$_POST['A'];
$sql="update evastu set $Tea = '$soc' where Tname= '$user'";
mysqli_query($link,$sql);
echo "<script>alert('提交成功！');location.href='Tea.php';</script>";