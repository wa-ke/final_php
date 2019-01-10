<?php
session_start();
$user=$_SESSION['user'];
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
            margin-left: 22vw;
        }
        #infohead{
            margin-left: 25vw;
        }
        #info{

        }
        .i1{
            margin-left: 20.5vw;
        }
    </style>
</head>
<body class="container">
<div id="table">
    <?php
    require_once "conn.php";
    $i=0;
    $sql1="SELECT Tid,Tname,Cname FROM stusocre where Uid='$user'";
    $result=mysqli_query($link,$sql1);
    if ($result->num_rows > 0) {
        echo "<table align='center' class='table 'id='timetable'>";
        echo "<tr align='center'><td></td><td>教学评价</td><td></td></tr>";
        echo "<tr align='center' class='table-bordered'><td>教师编号</td><td>教师名称</td><td>课程名</td></tr>";
        while ($row = $result->fetch_assoc()) {
            $i++;
            echo "<tr align='center' class='table-bordered'> <td> " . $row["Tid"] . "</td><td><a>" . $row["Tname"]. "</a></td><td> " . $row["Cname"]. " </td><br>";
        }
    }
    echo "</table>";
    ?>
</div>
<script>
    $(document).ready(function(){
        $("td a").click(function(){
            var tdSeq = $(this).text();
            // alert(tdSeq);
            // var url="TeaEva.php;
            window.location.href="TeaEva.php?tdSeq="+tdSeq;
        });
    });
</script>
</body>
</html>
