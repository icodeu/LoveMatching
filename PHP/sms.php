<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="60">
	</head>
	<body>
<?php
function Post($data, $target) {
    $url_info = parse_url($target);
    $httpheader = "POST " . $url_info['path'] . " HTTP/1.0\r\n";
    $httpheader .= "Host:" . $url_info['host'] . "\r\n";
    $httpheader .= "Content-Type:application/x-www-form-urlencoded\r\n";
    $httpheader .= "Content-Length:" . strlen($data) . "\r\n";
    $httpheader .= "Connection:close\r\n\r\n";
    //$httpheader .= "Connection:Keep-Alive\r\n\r\n";
    $httpheader .= $data;

    $fd = fsockopen($url_info['host'], 80);
    fwrite($fd, $httpheader);
    $gets = "";
    while(!feof($fd)) {
        $gets .= fread($fd, 128);
    }
    fclose($fd);
    return $gets;
}

include 'mysql_connect.php';
$result = mysql_query("SELECT * FROM success WHERE send=0");
while($row=mysql_fetch_array($result))
{
	$tel1 = $row['tel1'];
	$tel2 = $row['tel2'];
	
	echo $tel1;
	echo $tel2;
	
	$target = "http://sms.106jiekou.com/utf8/sms.aspx";
	$post_data = "account=xxxxx&password=xxxx&mobile=".$tel1."&content=".rawurlencode("您的订单编码：【"."恭喜！您和".$tel2."成功捅破了窗户纸~分享至朋友圈一起来捅破窗户纸~"."】。如需帮助请联系客服。");
	echo $gets = Post($post_data, $target);
	
	$post_data = "account=xxxxx&password=xxxxxx&mobile=".$tel2."&content=".rawurlencode("您的订单编码：【"."恭喜！您和".$tel1."成功捅破了窗户纸~分享至朋友圈一起来捅破窗户纸~"."】。如需帮助请联系客服。");
	echo $gets = Post($post_data, $target);
	
	$return_code = substr($gets,strlen($gets)- 3,3);
	
	echo "结果码".$return_code;
	//发送成功，更新success表send字段
	if($return_code=="100")
		mysql_query("UPDATE success SET send = 1 WHERE tel1 = ".$tel1);
}

?>
	  
	</body>
</html>
