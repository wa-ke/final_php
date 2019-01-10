<?php
session_start();
require_once "conn.php";
$tdSeq=$_SESSION['tdSeq'];
$trSeq=$_SESSION['trSeq'];
$arr=array("1"=>"12","2"=>"34","3"=>"56","4"=>"78");
$num=$arr[$tdSeq];
$cour=$_POST['optradio'];
$user=$_SESSION['user'];
$uname = $_SESSION['uname'];
$sql="UPDATE  `student`.`timetable` SET  `$num` =  '$cour' WHERE  `timetable`.`day` ='$trSeq';";
$sql1="insert into stusocre (Uid, Uname) values ('$user', '$uname') ";
$sql2="select courseId,Tid,Tname,Sfen from selcourse";
$result=mysqli_query($link,$sql2);
$cid=0;$sfen=0;$Tid=0;$Tname=0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cid=$row['courseId'];
        $sfen=$row['Sfen'];
        $Tid=$row['Tid'];
        $Tname=$row['Tname'];
    }
}
$sql4="update stusocre set Cfen='$sfen',Tid='$Tid',Tname ='$Tname',Cname='$cour' where Uid = '$user'";
mysqli_query($link,$sql);
mysqli_query($link,$sql1);
mysqli_query($link,$sql4);
$link->close();
echo "<script>alert('提交成功！');location.href='Stu.php';</script>";
