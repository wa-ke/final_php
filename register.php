<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #imag{
            width: 20vw;
            height: 20vw;
            margin-top: 16vh;
            margin-left: 10vw;
            background: url("imag/bg.jpg") no-repeat;
            background-size: 12vw,12vw;
            float: left;
        }
        #for{
            margin-top: 30vh;
            float: left;
        }
        button{
            margin-left: 4vw;
            width: 5vw;
        }
    </style>
</head>
<body>
<div id="imag">
</div>
<div id="for">
    <form action="register-ok.php" method="post">
        &nbsp;&nbsp;&nbsp;ID：<input type="number" name="userid" required><br><br>
        姓名：<input type="text" name="username" required><br><br>
        密码：<input type="password" name="userpwd" required><br><br>
        <button type="submit">注册</button>
    </form>
</div>
</body>
</html>