<?php
	include "mysql_connect.php";
	
	while(true)
	{
		$result = mysql_query("SELECT * FROM love WHERE result='false'");
	
		while ($row = mysql_fetch_array($result))
		{
			$me = $row['me'];
			$you = $row['you'];
			$search = mysql_query("SELECT * FROM love WHERE me=".$you);
			$search_row = mysql_fetch_array($search);
			if($me==$search_row['you'])
			{
				//判断是否已经插入到success数据表中
				$judge_result = mysql_query("SELECT * FROM love WHERE me=".$me);
				$judge_row = mysql_fetch_array($judge_result);
				if($judge_row['result']!="true")
				{
					//电话为 $me 和 $search_row['you'] 匹配成功
					$success_me = $me;
					$success_you = $search_row['me'];
					echo $success_me."            ".$success_you;
					echo "</br>";
					//更新两个人匹配成功的result为true
					mysql_query("UPDATE love SET result = 'true' WHERE me = ".$success_me." AND you = ".$success_you);
					mysql_query("UPDATE love SET result = 'true' WHERE me = ".$success_you." AND you = ".$success_me);
					
					
					//写入success的数据表
					//mysql_query("INSERT INTO success (tel1, tel2, date, send) VALUES (".$success_me.",".$success_you.",".$judge_row['date'].","."false".")") or die(mysql_error());
					mysql_query("INSERT INTO success (tel1, tel2, send) VALUES (".$success_me.",".$success_you.","."false".")") or die(mysql_error());
				}
			}
		}
	}

?>