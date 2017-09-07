<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>登陆</title>
<link href="/rd/Public/css/bootstrap.min.css" rel="stylesheet" />
<script src="/rd/Public/js/jquery.min.js"></script>
<script src="/rd/Public/js/bootstrap.min.js"></script>
<style>
	body{
		background-color: #F7F7F7;
	}
	.login{
		width:478px;
		height:301px;
		background: url("/rd/Public/images/login.gif") no-repeat;
		margin:140px auto;
		border-radius:12px;
		padding:15px 10px 10px;
	}
	.login .img{
		height:110px;
		width:269px;
		padding-top:8px;
		}
	.login .form{
		padding:0px 10px;
	}
	.login .form .btn{
		padding:16px 14px;
	}
	.login td{
		text-align: center;
		vertical-align: middle;
	}
	.copyright{text-align: center;}
	.table{border-top:none;}
	.table th,.table td{border-top:none;}
	#notice{
		text-align: center;
		color:red;
		font-size:12px;
		height:24px;
		margin-top:-36px;
	}
</style>
<script>
	$(function(){
		$(".loginform").submit( function () {
		  if(!$("input[type='text']").val()){
			$("#notice").html("用户名不能为空！");
			return false;
			}
		  if(!$("#pwd").val()){
			$("#notice").html("密码不能为空！");
			return false;
			}
			return true;
		} );
	});
</script>
</head>
<body>
<div class="container">
	<div class="login">
		<div class="img"><img src="/rd/Public/images/shop_login_logo.gif" alt=""></div>
		<div class="form">
			<form action="/rd/index.php/Admin/Login/do_login" method="post" class="loginform">
				<table class="table" border="0">
					<tr>
						<b>验证码：</b>
						<input class="code" name="code" type="text" size="4" style="width:200px;"/>
						<img style="width:120px;height:40px;" id="verifyImg" SRC="/rd/index.php/Admin/Login/code" onClick="this.src = this.src+'?'+Math.random()">
					</tr>
					<tr>
						<th>用户名：</th>
						<td><input type="text" name="admin_name" id="name" placeholder="请输入用户名"></td>
						<td rowspan="2"><button class="btn">登陆</button></td>
					</tr>
					<tr>
						<th>密　码：</th>
						<td><input type="password" name="pwd" id="pwd" placeholder="请输入密码"></td>
					</tr>
					
				</table>
			</form>
			<div id="notice"></div>
		</div>
		
		<p class="copyright">Powered by RETURN DREAM Copyright ? 2015-2016</p>
	</div>
	
</div>
</body>
</html>