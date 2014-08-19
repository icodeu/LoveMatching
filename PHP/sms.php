<?php
header("Content-Type: text/html; charset=utf-8");
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
$result = mysql_query("SELECT * FROM success WHERE send='false'");
while($row=mysql_fetch_array($result))
{
	$tel1 = $row['tel1'];
	$tel2 = $row['tel2'];
	
	$target = "http://sms.106jiekou.com/utf8/sms.aspx";
	//替换成自己的测试账号,参数顺序和wenservice对应
	$post_data = "account=icodeyou&password=qinaidaqiqi&mobile=".$tel1."&content=".rawurlencode("您的验证码是："."【恭喜！您和".$tel2."捅破了窗户纸~】"."。请不要把验证码泄露给其他人。如非本人操作，可不用理会！");
	echo $gets = Post($post_data, $target);
	
	$post_data = "account=icodeyou&password=qinaidaqiqi&mobile=".$tel2."&content=".rawurlencode("您的验证码是："."【恭喜！您和".$tel1."捅破了窗户纸~】"."。请不要把验证码泄露给其他人。如非本人操作，可不用理会！");
	echo $gets = Post($post_data, $target);
}

?>