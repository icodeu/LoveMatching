<?php 
/**
 * 连接数据库
 * @return resource
 */
function connect(){
	$link=mysql_connect("localhost","root","") or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
	mysql_set_charset("utf8");
	mysql_select_db('test') or die("指定数据库打开失败");
	return $link;
}