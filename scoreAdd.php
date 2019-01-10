<?php
$cource=$_POST['course'];
$score=$_POST['score'];

require_once "conn.php";
$sql="select distinct Uid from stusocre ";
$result=mysqli_query($link,$sql);
if ($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        $id[]= $row['Uid'];
    }
}
//$stmt = $link->prepare("update stuscore set $cource=? where Uid= ?");
//$stmt->bind_param("ss", $sco,$di);
for ($i=0;$i<count($score);$i++){
    if ($score["$i"]>100 || $score["$i"]<0){
        echo "<script>alert('有成绩不符合规则');history.back();</script>";
        exit;
    }
    $sco=$score["$i"];
    $di=$id["$i"];
//    echo $sco."     ".$di;
//    echo $cource;
    $sql1="update stusocre set Csoc= '$sco' where Uid= '$di' and Cname = '$cource' ";
//    $stmt->execute();
    mysqli_query($link,$sql1);
}