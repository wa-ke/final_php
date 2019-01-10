<?php
$Tea=$_GET['tdSeq'];
require_once "conn.php";
session_start();
$_SESSION['Tea']=$Tea;
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
    <title>Document</title>
    <style>
        #fm{
            margin-left: 20vw;
            margin-top: 10vw;
        }
        label{
            margin-left: 5vw;
        }
    </style>
</head>
<body class="container">
<h2 class="font-italic">评价问题板</h2>
<h3 class="font-italic">sample</h3>
<?php
echo "<h3>$Tea</h3>";
?>
<form id="fm" class="form-check" action="eva_ok.php" method="post">
    <h4>评价：</h4>
    <label><input type="radio" name="A" value="A">A</label>
    <label><input type="radio" name="A" value="B">B</label>
    <label><input type="radio" name="A" value="C">C</label>
    <label><input type="radio" name="A" value="D">D</label><br><br>
<button style="margin-left: 12vw" class="btn" type="submit">提交</button>
</form>
</body>
</html>
