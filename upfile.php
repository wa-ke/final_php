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
<form action="fileup.php" method="post" class="form-group" id="fo1" enctype="multipart/form-data">
    文件上传：<input type="file" name="userfile" class="form-control">
    <br><br>
    <button type="submit" class="btn btn-success col-lg-6" id="tj">上传</button>
</form>
</body>
</html>