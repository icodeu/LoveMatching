<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
</head>
<script>
function doCheck(){
	var flag=1;
if(document.regist.name.value==""){

alert('请输入你的用户名！');          
flag=0;
}     
if(document.regist.number1.value=="" || document.regist.number2.value==""){ 
	alert('please input'); flag=0;  
} 
var t1 = document.regist.number1.value;
var t2 = document.regist.number2.value;
if(t1.length != 11 || t2.length != 11){
	flag=0;
	alert('输入位数不正确');
}
	if(flag==1)
	return true;
	else return false;
}
</script>
<body>
	<?php echo $showtime=date("Y-m-d H:i:s");?>
	<form method="post" action="doAction.php"  onsubmit="return doCheck()" name="regist">
		<ul class="login">
			<li class="l_tit">你的手机号</li>
			<li ><input type="text"  name="number1" placeholder="你的手机号" class="login_input user_icon"></li>
			<li class="l_tit">他（她）的手机号</li>
			<li class="mb_10"><input type="password" name="number2"  placeholder="ta的手机号" class="login_input user_icon"></li>			
			<li><input type="submit" value="提交" ></li>
		</ul>
		</form>
		
</body>
</html>
