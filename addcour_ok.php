<?php
require_once "conn.php";
$id=$_POST['id'];
$user=$_POST['user'];
$coll=$_POST['coll'];
$pwd=$_POST['pwd'];
$jd=$_POST['jd'];
$sql="INSERT INTO `student`.`selcourse` (`courseId`, `courseName`, `Tid`, `Tname`, `Sfen`) VALUES ($id, '$user', $coll, '$pwd', $jd)";
mysqli_query($link,$sql);
echo "<script>alert('添加成功!');location.href='root.php'</script>";