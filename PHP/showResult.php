<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>showResult</title>
</head>

<body>
<?php
	include "mysql_connect.php";
	
	$result = mysql_query("SELECT * FROM success");
	while ($row = mysql_fetch_array($result))
	{
		echo $row['tel1']."            ".$row['tel2'];
		echo "</br>";
	}
?>
</body>
</html>