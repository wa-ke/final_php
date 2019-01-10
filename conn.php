<?php
$link = @new mysqli("localhost", "root", "root","student") ;
	if ($link->connect_error) {
    die('Connect Error: ' . $link->connect_error);
	}
mysqli_query($link,"SET NAMES UTF8");
?>
