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

    </style>
</head>
<body class="container">
<form action="delUser_ok.php" method="post" class="form-group" id="fo1">
    ID：<input type="text" name="id" class="form-control col-auto" placeholder="输入用户ID">
    <lable><input style="margin-left: 24vw" type="radio" value="teacher" name="sf"> 教师
        <input style="margin-left: 5vw" type="radio" value="stuinfo" name="sf">学生
    </lable>
    <br><br>
    <button type="submit" class="btn btn-success col-lg-6" id="tj">提交</button>
    <button type="reset" class="btn col-lg-6 float-right">重置</button>
</form>
</body>
</html>