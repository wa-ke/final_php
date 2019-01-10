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
    <style>
        .inf{
            margin-left: 6vw;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    $sql="select * from stusocre where Uid = '$user'";
    $result=mysqli_query($link,$sql);
//    echo "<ul id='info' class='list-group'>";
//    echo "<li class='list-group-item'><a id='infohead'>个人信息</a></li>";
//    if ($result->num_rows > 0) {
//        while ($row = $result->fetch_assoc()) {
//            echo "<li class='list-group-item'>".$row["Uid"]."<a class='inf'>".$row["Uname"]."</a><a class='inf'>".$row["Cname"]."</a><a class='inf'>".$row["Csoc"]."</a><a class='inf'>".$row["Cfen"]."</a><a class='inf'>".$row["Tid"]."</a><a class='inf'>".$row["Tname"]."</a></li>";
//        }
//    }
//    echo "</ul>";
    if ($result->num_rows > 0) {
        echo "<table align='center' class='table 'id='timetable'>";
        echo "<tr align='center'><td></td><td></td><td></td><td>成绩表</td><td></td><td></td><td></td></tr>";
        echo "<tr align='center' class='table-bordered'><td>学号</td><td>姓名</td><td>课程名</td><td>成绩</td><td>绩点</td><td>教师编号</td><td>教师名</td></tr>";
        while ($row = $result->fetch_assoc()) {

            echo "<tr align='center' class='table-bordered'> <td> " . $row["Uid"] . "</td><td>" . $row["Uname"]. "</td><td> " . $row["Cname"]. " </td><td>" . $row["Csoc"] . "</td><td>".$row["Cfen"]."</td><td>".$row["Tid"]."</td><td>".$row["Tname"]."</td><br>";
        }
    }
    echo "</table>";

    ?>
</div>
</body>
</html>

