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
<body>
<div id="table">
    <?php
    session_start();
    $uname=$_SESSION['uname'];
    require_once "conn.php";
    $i=0;
    $sql1="SELECT Uid,Uname,Cname FROM stusocre where Tname='$uname'";
    $result=mysqli_query($link,$sql1);
    if ($result->num_rows > 0) {
        echo "<table align='center' class='table 'id='timetable'>";
        echo "<tr align='center'><td></td><td>学生评价</td><td></td></tr>";
        echo "<tr align='center' class='table-bordered'><td>学生编号</td><td>学生名称</td><td>课程名</td></tr>";
        while ($row = $result->fetch_assoc()) {
            $i++;
            echo "<tr align='center' class='table-bordered'> <td> " . $row["Uid"] . "</td><td><a>" . $row["Uname"]. "</a></td><td> " . $row["Cname"]. " </td><br>";
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
            window.location.href="EvaTea.php?tdSeq="+tdSeq;
        });
    });
    </script>
</body>
</html>