<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
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
<body background="images/bg.png">
	<?php $showtime=date("Y-m-d H:i:s");?>
    <div class="container" style="width:300px">
     	<img src="images/header.png" width="300">
    	<form class="form-horizontal" role="form"  method="post" action="doaction.php"  onsubmit="return doCheck()" name="regist">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"><p class="text-success">你的手机号</p></label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputEmail3" placeholder="你的手机号" name="number1">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"><p class="text-success">你的手机号</p></label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputPassword3" placeholder="TA的手机号" name="number2">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <center><button type="submit" class="btn btn-default btn-success">提交匹配</button></center>
            </div>
          </div>
   		</form>
    </div>
		
</body>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253086468'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/stat.php%3Fid%3D1253086468%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</html>

<!--<form method="post" action="doaction.php"  onsubmit="return doCheck()" name="regist">
            你的手机号
			<input type="text"  name="number1" placeholder="你的手机号" class="login_input user_icon">
			TA的手机号
			<input type="password" name="number2"  placeholder="TA的手机号" class="login_input user_icon">		
			<input type="submit" value="提交" >
		
	</form>-->
