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
        #table{
            width: 40vw;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="table">
        <?php
        require_once "conn.php";
        $i=0;
        $sql1="SELECT * FROM synotice";
        $result=mysqli_query($link,$sql1);
        if ($result->num_rows > 0) {
            echo "<table align='center' class='table table-striped 'id='timetable'>";
            echo "<tr ><td style='padding-left: 1.5vw'>通知</td></tr>";
            $i=0;
            while ($row = $result->fetch_assoc()) {
                $i++;
                echo "<tr  class='table-bordered'><td> " .$i."、          ". $row["notice"] . "</td><br>";
            }
        }
        echo "</table>";

        ?>
    </div>

</div>
</body>
</html>