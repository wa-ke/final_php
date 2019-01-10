<?php
require_once "conn.php";
$id=$_POST['id'];
$user=$_POST['user'];
$coll=$_POST['coll'];
$pwd=$_POST['pwd'];
$sf=$_POST['sf'];
$sql="INSERT INTO `student`.`teacher` (`Tid`, `Tname`, `TD`, `Tpwd`) VALUES ($id, '$user', '$coll', '$pwd')";
$sql1="INSERT INTO `student`.`stuinfo` (`Snum`, `Sname`) VALUES ($id, '$user')";
if ($sf=="teacher"){
    mysqli_query($link,$sql);
}else{
    mysqli_query($link,$sql1);
}
$sql3="INSERT INTO `student`.`user` (`Uid`, `per`,`Upwd`) VALUES ($id, '$user','$pwd')";
mysqli_query($link,$sql3);
echo "<script>alert('添加成功!');location.href='root.php'</script>";