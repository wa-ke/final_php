<?php
session_start();
$user=$_SESSION['user'];
$ssex=$_POST['ssex'];
$sage=$_POST['sage'];
$spho=$_POST['spho'];
$scla=$_POST['scla'];
$sadd=$_POST['sadd'];
require_once "conn.php";
$sql="update stuinfo set ssex='$ssex',sage='$sage',spho='$spho',scla='$scla',sadd='$sadd' where snum='$user'";
mysqli_query($link,$sql);
echo "<script>alert('修改成功！');location.href='Stu.php';</script>";