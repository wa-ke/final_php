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
       .container{
           width: 40vw;
       }
        #timetable{
            margin-top: -5vh;
        }
    </style>
</head>
<body class="container">
<form role="form" method="post" action="scoreAdd.php" id="scoreAdd">
    <div class="form-group">
        <label for="name">选择科目</label>
        <select class="form-control" name="course" id="">
            <?php
            require_once "conn.php";
            $sql="select Cname from class ";
            $result=mysqli_query($link,$sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option>".$row['Cname']."</option>";
                }
            }
            ?>
        </select>
        <?php
        $sql1="select snum,sname from stuinfo";
        $result1=mysqli_query($link,$sql1);
        if ($result->num_rows > 0) {
            echo "<table align='center' class='table 'id='timetable'>";
            echo "<tr align='center' class='table-bordered'><td>学号</td><td>姓名</td><td>成绩</td></tr>";
            while ($row = $result1->fetch_assoc()) {
                echo "<tr align='center' class='table-bordered'><td> " . $row["snum"] . "</td><td>" . $row["sname"]. "</td><td><input type='number' name='score[]' required></td><br>";
            }
        }
        echo "</table>";
        ?>
    </div>
    <button type="submit" class="btn btn-success col-lg-6">提交</button>
    <button type="reset" class="btn col-lg-6 float-right">重置</button>
</form>
</body>
</html>