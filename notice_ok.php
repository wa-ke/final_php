<?php
require_once "conn.php";
$notice=$_POST['notice'];
$sql="INSERT INTO `student`.`synotice` (`notice`) VALUES ('$notice')";
mysqli_query($link,$sql);
echo "<script>alert('发布成功!');location.href='root.php'</script>";