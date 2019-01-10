<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        a{
            margin-left: 6vw;
        }
        #table{
            margin-top: 13vh;
            width: 50vw;
            margin-left: 6vw;
        }
    </style>
    <title>Document</title>
</head>
<body class="container">
<div id="table">
    <form action="getCourse.php" method="post" >
        <?php
        session_start();
        require_once  "conn.php";
        $_SESSION['tdSeq']=$_GET['tdSeq'];
        $_SESSION['trSeq']=$_GET['trSeq'];
        $sql= "select courseId,courseName,Tname,Sfen from selcourse ";
        $result=mysqli_query($link,$sql);
        if ($result->num_rows > 0) {
            echo "<table align='center' class='table  'id='timetable'>";
            echo "<tr align='center'><td></td><td>选课表</td><td></td><td></td></tr>";
            echo "<tr align='center' class='table-bordered'><td>课程号</td><td>课程名</td><td>教师名</td><td>绩点</td></tr>";
            while ($row = $result->fetch_assoc()) {
                $name=$row["courseName"];
                echo  " <tr align='center'class='table-bordered'><td><input type='radio' name=\"optradio\" value='$name'>".$row['courseId']."</td><td>".$row["courseName"]."</td><td>".$row['Tname']."</td><td>".$row["Sfen"]."</td></tr>" ;
            }
        }
        echo "</table>";
        $link->close();
        ?>
        <button type="submit" class="btn col">提交</button>
    </form>
</div>
</body>
</html>