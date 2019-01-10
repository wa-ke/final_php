<?php
require_once "conn.php";
$userid=$_POST['userid'];
$username=$_POST['username'];
$pwd=$_POST['userpwd'];
$sql="insert into user values ('$userid','$username','$pwd')";
$sql1="insert into stuinfo (snum,sname) values ( $userid,'$username');";
mysqli_query($link,$sql1);
mysqli_query($link,$sql);
echo "<script>alert('注册成功！去登录！');location.href='index.php';</script>";