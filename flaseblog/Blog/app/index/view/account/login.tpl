<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
	<script type="text/javascript">
		function resCaptcha(){
			//获取对象
			var captchaEle = document.getElementById('captcha');
			//操作对象
			captchaEle.src='?a=captcha&c=account&rand='+Math.random();
		}
	</script>
</head>
<body>
	<center>
	{include file="public/header.tpl"}
	<h2>用户登录</h2>
	<form action="?a=dologin&c=account" method="post">
		<table>
			<tr>
				<td>用户名:</td>
				<td><input type="text" name="user"></td>
				<td>用户名长度是2-100为用户名不能包含数字和字母</td>
			</tr>
			<tr>
				<td>密码:</td>
				<td><input type="password" name="pwd"></td>
				<td>密码要大于6位,必须包含数字和字母</td>
			</tr>
			<tr>
				<td>验证码</td>
				<td><input type="text" name="captcha"></td>
				<td><img src="?a=captcha&c=account" id="captcha"><a href="#" onclick="resCaptcha()">看不清?换一张</a></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="登录"></td>
				<td></td>
			</tr>
		</table>
	</form>
	{include file="public/footer.tpl"}
	</center>
</body>
</html>