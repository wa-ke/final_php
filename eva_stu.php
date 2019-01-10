
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
    $sql1="SELECT 张老师,沈老师,游老师,付老师,席老师,郑老师 FROM eva";
    $result=mysqli_query($link,$sql1);
    if ($result->num_rows > 0) {
        echo "<table align='center' class='table 'id='timetable'>";
        echo "<tr align='center'><td></td><td></td><td>教师评价</td><td></td><td></td><td></td></tr>";
        echo "<tr align='center' class='table-bordered'><td>张老师</td><td>沈老师</td><td>游老师</td><td>付老师</td><td>席老师</td><td>郑老师</td></tr>";
        while ($row = $result->fetch_assoc()) {
            $i++;
            echo "<tr align='center' class='table-bordered'> <td> " . $row["张老师"] . "</td><td><a>" . $row["沈老师"]. "</a></td><td> " . $row["游老师"]. " </td></td><td> " . $row["付老师"]. " </td></td><td> " . $row["席老师"]. " </td><td> " . $row["郑老师"]. " </td><br>";
        }
    }
    echo "</table>";
    ?>
</div>
</body>
</html>