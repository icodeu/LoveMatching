<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>showResult</title>
</head>

<body>
    <?php
        include "mysql_connect.php";
        $result = mysql_query("SELECT * FROM success");
	?> 
    <div class="container" style="width:300px">
    	<h1>匹配成功列表</h1>
    <?php
	    echo '<table class="table table-hover">';
        while ($row = mysql_fetch_array($result))
        {
			echo '<tr>';
            echo '<td>'.$row['tel1'].'</td>'.'<td>'.$row['tel2'].'</td>';
            echo "</tr>";
        }
	?>
    </div>
</body>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</html>