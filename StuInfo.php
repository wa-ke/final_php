<?php
session_start();
$user=$_SESSION['user'];
require_once "conn.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
   .inf{
       margin-left: 45vw;
   }
   #infohead{
       margin-left: 25vw;
   }
    #info{

    }
</style>
<body>
<div class="container">
    <?php
        $sql="select * from stuinfo where snum = '$user'";
        $result=mysqli_query($link,$sql);
        echo "<ul id='info' class='list-group'>";
        echo "<li class='list-group-item'><a id='infohead'>个人信息</a></li>";
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "<li class='list-group-item'>学号：<a class='inf'>".$row["snum"]."</a></li>";
            echo "<li class='list-group-item'>姓名：<a class='inf'>".$row["sname"]."</a></li>";
            echo "<li class='list-group-item'>性别：<a class='inf'>".$row["ssex"]."</a></li>";
            echo "<li class='list-group-item'>年龄：<a class='inf'>".$row["sage"]."</a></li>";
            echo "<li class='list-group-item'>电话：<a class='inf'>".$row["spho"]."</a></li>";
            echo "<li class='list-group-item'>班级：<a class='inf'>".$row["scla"]."</a></li>";
            echo "<li class='list-group-item'>籍贯：<a class='inf'>".$row["sadd"]."</a></li>";
        }
    }
    echo "</ul>";


    ?>
</div>
</body>
</html>
