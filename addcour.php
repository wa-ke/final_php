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
<form action="addcour_ok.php" method="post" class="form-group" id="fo1">
    课程ID：<input type="number" name="id" class="form-control col-auto">
    课程名：<input type="text" name="user" class="form-control col-auto">
    教师编号：<input type="text" name="coll" class="form-control col-auto">
    教师名：<input type="text" name="pwd" class="form-control col-auto">
    绩点：<input type="number" name="jd" class="form-control col-auto">
    <br><br>
    <button type="submit" class="btn btn-success col-lg-6" id="tj">提交</button>
    <button type="reset" class="btn col-lg-6 float-right">重置</button>
</form>
</body>
</html>