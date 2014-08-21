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

//给number2发短信
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

$target = "http://sms.106jiekou.com/utf8/sms.aspx";
	//替换成自己的测试账号,参数顺序和wenservice对应
	$post_data = "account=icodeyou&password=qinaidaqiqi&mobile=".$_POST["number2"]."&content=".rawurlencode("您的订单编码：【恭喜！有人在朋友圈说暗恋你，主动想捅破窗户纸~疯传‘捅破窗户纸‘应用，快去看看^_^】。如需帮助请联系客服。");
	echo $gets = Post($post_data, $target);
	$return_code = substr($gets,strlen($gets)- 3,3);
	echo "结果码".$return_code;

$time=date("Y-m-d");
$false = "false";
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$sql="insert into love(me,you,date,result) VALUES('$number1','$number2','$time','$false')";
mysql_query($sql) or die(mysql_error());

?>

<script language='javascript' type='text/javascript'> 
	alert("提交成功，已向你的TA发送了短信通知（TA不知道是你哦）~当你喜欢的人同样喜欢你后系统会在第一时间自动向你发送短信通知，享受这心跳的感觉吧~点击确定后返回");
	window.location.href='index.php'
</script> 
</html>
