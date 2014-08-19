<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
		<title>登陆</title>
	</head>
	<script>
		function doCheck() {
			var flag = 1;
			if (document.regist.name.value == "") {

				alert('请输入你的用户名！');
				flag = 0;
			}
			if (document.regist.number1.value == "" || document.regist.number2.value == "") {
				alert('please input');
				flag = 0;
			}
			var t1 = document.regist.number1.value;
			var t2 = document.regist.number2.value;
			if (t1.length != 11 || t2.length != 11) {
				flag = 0;
				alert('输入位数不正确');
			}
			if (flag == 1)
				return true;
			else return false;
		}
	</script>

	<body style="background-image: url(images/main_back.png); background-repeat:round">
		<?php $showtime = date("Y-m-d H:i:s"); ?>
		<div class="container">
			<img src="images/title.png" width="300"/>
			<br />
			<img src="images/text1.png" width="300">
			<form class="form-horizontal" role="form" method="post" action="doaction.php" onsubmit="return doCheck()" name="regist">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						<p class="text-success"><span class="glyphicon glyphicon-heart-empty"></span>你的手机号<span class="glyphicon glyphicon-heart-empty"></span>
						</p>
					</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputEmail3" placeholder="你的手机号" name="number1">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">
						<p class="text-success"><span class="glyphicon glyphicon-heart"></span>TA的手机号<span class="glyphicon glyphicon-heart"></span>
						</p>
					</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="inputPassword3" placeholder="TA的手机号" name="number2">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<center>
							<button type="submit" class="btn btn-default btn-success">提交</button>
						</center>
					</div>
				</div>
			</form>
			<form action="showResult.php" method="post">
				<center><button type="submit" class="btn btn-default btn-info">看看谁都破了窗户纸</button></center>
			</form>
			</center>
			<br />
			<img src="images/text2.png" />
			<br />
			<br />
			<div class="alert alert-success" role="alert">
				<p style="font-size: small;">*注：本程序开发者为学生，不会泄露贵手机号，请放心使用，有问题尽可找作者的麻烦哈~ 同时欢迎点击右上角分享至朋友圈，让更多的小伙伴有机会一起来捅破窗户纸O(∩_∩)O</p>
			</div>
			<hr />
			<div class="container">
				<div class="alert alert-warning" role="alert">
					<p style="font-size: xx-small;">&copy;作者    北京交通大学</p> 
					<p style="font-size: xx-small;">后台设计：王欢 </p> 
					<p style="font-size: xx-small;">前端设计：牛子健</p> 
					<p style="font-size: xx-small;">美工设计：王圣博</p> 
				</div>
			</div>
		</div>

	</body>





	<center hidden="hidden">
		<script type="text/javascript">
			var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
			document.write(unescape("%3Cspan id='cnzz_stat_icon_1253086468'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/stat.php%3Fid%3D1253086468%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
		</script>
	</center>
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

</html>

