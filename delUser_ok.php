<?php
require_once "conn.php";
$id=$_POST['id'];
$sf=$_POST['sf'];
$sql="DELETE FROM teacher WHERE Tid='$id'";
if ($sf=="teacher"){
    mysqli_query($link,$sql);
}
$sql3="DELETE FROM user WHERE Uid='$id'";
mysqli_query($link,$sql3);
echo "<script>alert('删除成功!');location.href='root.php'</script>";