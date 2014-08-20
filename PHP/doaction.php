<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
		<title>登陆</title>
	</head>
<?php
include 'mysql_connect.php';

$time=date("Y-m-d");
$false = "false";
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$sql="insert into love(me,you,date,result) VALUES('$number1','$number2','$time','$false')";
mysql_query($sql) or die(mysql_error());
?>

<script language='javascript' type='text/javascript'> 
	alert("提交成功，当你喜欢的人同样喜欢你后系统会在第一时间自动向你发送短信通知，~点击确定后返回");
	window.location.href='index.php'
</script> 
</html>
