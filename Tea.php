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
    <title>教务系统</title>
    <style>
        #leftContent{
            height: 100vh;
            width: 15vw;
            background: #fafafa;
            font-style: initial;
            float: left;
        }
        #head{
            height: 15vh;
            width: 15vw;
            padding: 3vh;
            color: #6c757d;
        }
        #rightContent{
            height: 100vh;
            width: 82vw;
            padding-top: 6vh;
            padding-left: 17vw;
        }
        #timetable{
            margin-top: -5vh;
        }
        #table{
            margin-top: 8vh;
            margin-left: 5vw;
            width: 70vw;
        }
    </style>
</head>
<body>
<div id="leftContent">
    <div id="head"><h3>教务系统</h3></div>
    <div id="accordion">
        <div class="card">
            <div align="right" class="card-header">
                <a class="card-link ui-front" data-toggle="collapse" href="#collapseOne">
                    校园信息
                </a>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="stuinfo">系统通知</a><br>
                    <a id="fillinfo">教学文件</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a  class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    成绩管理
                </a>
            </div>
            <div  id="collapseTwo" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="addsoc">成绩录入</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    教师评价
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="Eva">评价学生</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                    教学管理
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="sel">教学进度</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                    其他
                </a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a href="exit.php">退出</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="rightContent">
    <div id="welcome"><h3>Hello 老师</h3></div>
    <div id="table">
        <?php
        require_once "conn.php";
        $i=0;
        $sql1="SELECT snum ,sname,spho,scla FROM stuinfo";
        $result=mysqli_query($link,$sql1);
        if ($result->num_rows > 0) {
            echo "<table align='center' class='table table-striped 'id='timetable'>";
            echo "<tr align='center'><td></td><td></td><td></td><td>学生资料</td><td></td></tr>";
            echo "<tr align='center' class='table-bordered'><td>&nbsp;</td><td>学号</td><td>姓名</td><td>电话</td><td>班级</td></tr>";
            while ($row = $result->fetch_assoc()) {
                $i++;
                echo "<tr align='center' class='table-bordered'><td>$i</td> <td> " . $row["snum"] . "</td><td>" . $row["sname"]. "</td><td> " . $row["spho"]. " </td><td>" . $row["scla"] . "</td><br>";
            }
        }
        echo "</table>";
        $sql2="select per from user where Uid= '$user'";
        $result1=mysqli_query($link,$sql2);
        $uname=$result1->fetch_object()->per;
        $_SESSION['uname']=$uname;
        ?>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#stuinfo").click(function(){
            $("#table").load("SyNotice.php");
        });
    });
    $(document).ready(function(){
        $("#addsoc").click(function(){
            $("#table").load("SocAdd.php");
        });
    });
    $(document).ready(function(){
        $("#Eva").click(function(){
            $("#table").load("EvaStu.php");
        });
    });
    $(document).ready(function(){
        $("#fillinfo").click(function(){
            $("#table").load("downfile.php");
        });
    });
</script>
</body>
</html>