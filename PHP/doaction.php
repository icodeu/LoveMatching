<?php
include 'mysql_connect.php';

$time=date("Y-m-d H:i:s");
$false = "false";
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$sql="insert into love(me,you,date,result) VALUES('$number1','$number2','$time','$false')";
mysql_query($sql) or die(mysql_error());
?>