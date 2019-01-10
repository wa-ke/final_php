<?php
require_once "conn.php";
$id=$_POST['id'];
$pwd=$_POST['pwd'];
$sf=$_POST['sf'];
$sql="update teacher set Tpwd = '$pwd' where Tid = '$id'";
if ($sf=="teacher"){
    mysqli_query($link,$sql);
}
$sql3="update user set Upwd = '$pwd' where Tid = '$id'";
mysqli_query($link,$sql3);
echo "<script>alert('修改成功!');location.href='root.php'</script>";