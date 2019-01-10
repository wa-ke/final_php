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
        .form-control:focus{
            box-shadow: none;
        }
        #sel{
            margin-left: 10vw;
        }
    </style>
</head>
<body class="container">
<p align="center" class="card-header">学生信息补全</p><br>
<form action="FillInfo_ok.php" method="post">
    <div class="form-control">
        <label for="email">性别:</label><a id="sel">
            <label><input type="radio" name="ssex" value="男">男</label></a><a id="sel">
            <label><input type="radio" name="ssex" value="女">女</label></a>
    </div>
    <div >
        <label for="pwd">年龄:</label>
        <input name="sage" type="number" class="form-control" >
    </div>
    <div >
        <label for="pwd">电话:</label>
        <input name="spho" type="number" class="form-control" >
    </div>
    <div>
        <label for="pwd">班级:</label>
        <input name="scla" type="text" class="form-control"  >
    </div>
    <div>
        <label for="pwd">地址:</label>
        <input name="sadd" type="text" class="form-control">
    </div>
    <br>
    <button type="submit" class="btn btn-primary col">确认</button>
</form>
</body>
</html>