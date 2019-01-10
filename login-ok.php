<?php 
session_start();
 error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>
</head>
<?php
session_start();
include("conn.php");
$user=$_POST['user'];
$psd=$_POST['psd'];
$_SESSION['user']=$user;

$sql="select Upwd from user where Uid='$user'";
$result =mysqli_query($link,$sql);
$pwd=$result->fetch_object()->Upwd;
echo $pwd;
echo $psd;
if ($psd==$pwd){
   if ($user=="root"){
       header("location:root.php");
   }elseif (preg_match('/t([0-9]*$)/', $user, $matches)){
       header("location:Tea.php");
   }else{
       header("location:Stu.php");
   }
}else{
    echo "<script>alert('密码错误！');history.back();</script>";
    exit;
}
?>
<body>
</body>
</html>
