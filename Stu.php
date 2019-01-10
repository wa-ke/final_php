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
            margin-top: -15vh;
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
                    个人信息
                </a>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="stuinfo">个人信息查询</a><br>
                    <a id="fillinfo">个人信息补全</a>
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
                    <a id="selsoc">成绩查询</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    学生评价
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="Eva">评教</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                   学生选课
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="sel">选课</a>
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
    <div id="welcome"><h3>welcome，<?php echo $user; ?></h3></div>
    <div id="table">
                <?php
                require_once "conn.php";
                $i=0;
                $sql1="SELECT * FROM timetable";
                $result=mysqli_query($link,$sql1);
                if ($result->num_rows > 0) {
                    echo "<table align='center' class='table table-striped 'id='timetable'>";
                    echo "<tr align='center'><td></td><td></td><td>课表</td><td></td><td></td></tr>";
                    echo "<tr align='center' class='table-bordered'><td>&nbsp;</td><td>1-2节课</td><td>3-4节课</td><td>5-6节课</td><td>7-8节课</td></tr>";
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        echo "<tr align='center' class='table-bordered'><td>$i</td> <td> " . $row["12"] . "</td><td>" . $row["34"]. "</td><td> " . $row["56"]. " </td><td>" . $row["78"] . "</td><br>";
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
            $("#table").load("StuInfo.php");
        });
    });
    $(document).ready(function(){
        $("#fillinfo").click(function(){
            $("#table").load("FillInfo.php");
        });
    });
    $(document).ready(function(){
        $("#selsoc").click(function(){
            $("#table").load("StuSoc.php");
        });
    });
    $(document).ready(function(){
        $("#Eva").click(function(){
            $("#table").load("StuEva.php");
        });
    });
    $(document).ready(function(){
        $("#sel").click(function(){
            $("#table").load("SelC.php");
        });
    });
</script>
</body>
</html>