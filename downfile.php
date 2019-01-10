
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
        require_once "conn.php";
        $i=0;
        $sql1="SELECT filename,filedir FROM upfile";
        $result=mysqli_query($link,$sql1);
        if ($result->num_rows > 0) {
            echo "<table align='center' class='table table-striped 'id='timetable'>";
            echo "<tr align='center'><td>文件下载</td></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr align='center' class='table-bordered'><td><a href='".$row['filedir']."'>".$row["filename"]."</a></td> <br>";
            }
        }
        echo "</table>";
        ?>
</body>
</html>