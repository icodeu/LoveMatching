<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>showResult</title>
</head>

<body background="images/bg.png">
    <?php
        include "mysql_connect.php";
        $result = mysql_query("SELECT * FROM success");
	?> 
    <div class="container" style="width:300px">
    	<h1>已成功捅破窗户纸</h1>
    <?php
	    echo '<table class="table table-bordered">';
		echo '<tr><th>Ta</th><th>Ta</th><th>捅破时间</th></tr>';
        while ($row = mysql_fetch_array($result))
        {
			//进行加密处理
			$tel1 = substr($row['tel1'],0,3);
			$tel1 .= '****';
			$tel1 .= substr($row['tel1'],6,4);
			
			$tel2 = substr($row['tel2'],0,3);
			$tel2 .= '****';
			$tel2 .= substr($row['tel2'],6,4);
			
			
			echo '<tr>';
            echo '<td>'.$tel1.'</td>'.'<td>'.$tel2.'</td>'.'<td>'.$row['date'].'</td>';
            echo "</tr>";
        }
	?>
    </div>
</body>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</html>