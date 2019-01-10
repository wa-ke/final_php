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
    <title>Document</title>
</head>
<body class="container">
<?php
require_once "conn.php";
$i=0;
$sql1="SELECT * FROM timetable";
$result=mysqli_query($link,$sql1);
if ($result->num_rows > 0) {
    echo "<table align='center' class='table 'id='timetable'>";
    echo "<tr align='center'><td></td><td></td><td>课表</td><td></td><td></td></tr>";
    echo "<tr align='center' class='table-bordered'><td>&nbsp;</td><td>1-2节课</td><td>3-4节课</td><td>5-6节课</td><td>7-8节课</td></tr>";
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo "<tr align='center' class='table-bordered'><td>$i</td> <td> " . $row["12"] . "</td><td>" . $row["34"]. "</td><td> " . $row["56"]. " </td><td>" . $row["78"] . "</td><br>";
    }
}
echo "</table>";
?>
<script>

    $('table td').click(function(){
        var tdSeq = $(this).parent().find("td").index($(this)[0]);
        var trSeq = $(this).parent().parent().find("tr").index($(this).parent()[0]);
        // alert("第" + (trSeq ) + "行，第" + (tdSeq) + "列");
        var url="courseSel.php?tdSeq="+tdSeq+"&trSeq="+trSeq;
        window.location.href=url;

    });


</script>
</body>
</html>