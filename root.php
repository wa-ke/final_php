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
            /*margin-left: 5vw;*/
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
                    用户管理
                </a>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="adduser">添加用户</a><br>
                    <a id="upuser">修改用户</a><br>
                    <a id="deluser">删除用户</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a  class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    评价管理
                </a>
            </div>
            <div  id="collapseTwo" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="Eva">学生评价信息</a><br>
                    <a id="eva_tea" ">教师评价信息</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div align="right" class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    课程信息
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div align="right" class="card-body">
                    <a id="addc">添加课程</a><br>
                    <a id="delcou">删除课程</a>
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
                    <a id="upfile">教学文件</a><br>
                    <a id="noti">教学通知</a>
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
                    <a href="exit.php">退出</a><br>
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
        $sql1="SELECT snum ,sname,spho,scla,sadd FROM stuinfo";
        $result=mysqli_query($link,$sql1);
        if ($result->num_rows > 0) {
            echo "<table align='center' class='table table-striped 'id='timetable'>";
            echo "<tr align='center'><td></td><td></td><td></td><td>学生资料</td><td></td><td></td></tr>";
            echo "<tr align='center' class='table-bordered'><td>&nbsp;</td><td>学号</td><td>姓名</td><td>电话</td><td>班级</td><td>籍贯</td></tr>";
            while ($row = $result->fetch_assoc()) {
                $i++;
                echo "<tr align='center' class='table-bordered'><td>$i</td> <td> " . $row["snum"] . "</td><td>" . $row["sname"]. "</td><td> " . $row["spho"]. " </td><td>" . $row["scla"] . "</td><td>".$row['sadd']."</td><br>";
            }
        }
        echo "</table>";
        $sql2="select per from user where Uid= '$user'";
        $result1=mysqli_query($link,$sql2);
        $uname=$result1->fetch_object()->per;
        $_SESSION['uname']=$uname;
        ?>
    <div id="table">
        <?php
        require_once "conn.php";
        $i=0;
        $sql1="SELECT Tid,Tname,TD FROM teacher";
        $result=mysqli_query($link,$sql1);
        if ($result->num_rows > 0) {
            echo "<table align='center' class='table table-striped 'id='timetable'>";
            echo "<tr align='center'><td></td><td></td><td>教师资料</td><td></td></tr>";
            echo "<tr align='center' class='table-bordered'><td>&nbsp;</td><td>教师编号</td><td>教师名称</td><td>院系</td></tr>";
            while ($row = $result->fetch_assoc()) {
                $i++;
                echo "<tr align='center' class='table-bordered'><td>$i</td> <td> " . $row["Tid"] . "</td><td>" . $row["Tname"]. "</td><td> " . $row["TD"]. " </td><br>";
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
        $("#adduser").click(function(){
            $("#table").load("adduser.php");
        });
    });
    $(document).ready(function(){
        $("#upuser").click(function(){
            $("#table").load("upUser.php");
        });
    });
    $(document).ready(function(){
        $("#deluser").click(function(){
            $("#table").load("delUser.php");
        });
    });
    $(document).ready(function(){
        $("#eva_tea").click(function(){
            $("#table").load("eva_stu.php");
        });
    });
    $(document).ready(function(){
        $("#addc").click(function(){
            $("#table").load("addcour.php");
        });
    });
    $(document).ready(function(){
        $("#delcou").click(function(){
            $("#table").load("delcour.php");
        });
    });
    $(document).ready(function(){
        $("#Eva").click(function(){
            $("#table").load("xs_eva.php");
        });
    });
    $(document).ready(function(){
        $("#noti").click(function(){
            $("#table").load("teanotice.php");
        });
    });
    $(document).ready(function(){
        $("#upfile").click(function(){
            $("#table").load("upfile.php");
        });
    });
</script>
</body>
</html>