
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>教务系统</title>
    <style>

    </style>
</head>
<body class="container">
<div id="table">
    <?php
    session_start();
    $uname=$_SESSION['uname'];
    require_once "conn.php";
    $i=0;
    $sql1="SELECT 张三,李四,王五 FROM evastu";
    $result=mysqli_query($link,$sql1);
    if ($result->num_rows > 0) {
        echo "<table align='center' class='table 'id='timetable'>";
        echo "<tr align='center'><td></td><td>学生评价</td><td></td></tr>";
        echo "<tr align='center' class='table-bordered'><td>张三</td><td>李四</td><td>王五</td></tr>";
        while ($row = $result->fetch_assoc()) {
            $i++;
            echo "<tr align='center' class='table-bordered'> <td> " . $row["张三"] . "</td><td><a>" . $row["李四"]. "</a></td><td> " . $row["王五"]. " </td><br>";
        }
    }
    echo "</table>";
    ?>
</div>
</body>
</html>