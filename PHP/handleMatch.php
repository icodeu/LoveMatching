<?php
	include "mysql_connect.php";
	
	$result = mysql_query("SELECT * FROM love WHERE result='false'");
	
	while ($row = mysql_fetch_array($result))
	{
		$me = $row['me'];
		$you = $row['you'];
		$search = mysql_query("SELECT * FROM love WHERE me=".$you);
		$search_row = mysql_fetch_array($search);
		if($me==$search_row['you'])
		{
			//电话为 $me 和 $search_row['you'] 匹配成功
			$success_me = $me;
			$success_you = $search_row['you'];
			//更新两个人匹配成功的result为true
			mysql_query("UPDATE love SET result = 'true' WHERE me = ".$success_me." AND you = ".$success_you);
			mysql_query("UPDATE love SET result = 'true' WHERE me = ".$success_you." AND you = ".$success_me);
			
			//写入success的数据表
			mysql_query("INSERT INTO success (tel1, tel2) VALUES (".$success_me.",".$success_you.")");
 		}
	}
	
?>