<?php
require_once "conn.php";
$id=$_POST['id'];
$sql3="DELETE FROM selcourse WHERE courseId='$id'";
mysqli_query($link,$sql3);
echo "<script>alert('删除成功!');location.href='root.php'</script>";