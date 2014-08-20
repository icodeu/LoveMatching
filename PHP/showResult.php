<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>showResult</title>
</head>

<body background="images/bg-result.png">
    <?php
        include "mysql_connect.php";
        $result = mysql_query("SELECT * FROM success");
	?> 
    <div class="container">
    	<center><img src="images/heart7.png" width="100"/></center>
    <?php
	    echo '<table class="table table-bordered">';
		echo '<tr><th>Ta</th><th>Ta</th><th>破窗时间</th></tr>';
        while ($row = mysql_fetch_array($result))
        {
			//进行加密处理
			$tel1 = substr($row['tel1'],0,3);
			$tel1 .= '****';
			$tel1 .= substr($row['tel1'],7,4);
			
			$tel2 = substr($row['tel2'],0,3);
			$tel2 .= '****';
			$tel2 .= substr($row['tel2'],7,4);
			
			$success_date = substr($row['date'], 0, 10);
			
			
			echo '<tr>';
            echo '<td>'.$tel1.'</td>'.'<td>'.$tel2.'</td>'.'<td>'.$success_date.'</td>';
            echo "</tr>";
        }
	?>

</body>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</html>