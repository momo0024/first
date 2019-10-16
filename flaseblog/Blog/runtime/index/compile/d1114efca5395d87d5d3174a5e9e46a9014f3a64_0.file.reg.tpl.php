<?php
/* Smarty version 3.1.32, created on 2019-06-10 00:42:13
  from 'C:\phpStudy\PHPTutorial\WWW\5-24\Blog\app\index\view\account\reg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfda765cac880_87247636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1114efca5395d87d5d3174a5e9e46a9014f3a64' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\account\\reg.tpl',
      1 => 1560127332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_5cfda765cac880_87247636 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户注册</title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
	<?php echo '<script'; ?>
 type="text/javascript">
		function resCaptcha(){
			//获取对象
			var captchaEle = document.getElementById('captcha');
			//操作对象
			captchaEle.src='?a=captcha&c=account&rand='+Math.random();
		}
	<?php echo '</script'; ?>
>
</head>
<body><center>
	<?php $_smarty_tpl->_subTemplateRender("file:public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<h2>注册</h2>
	<form action="?a=doreg&c=account" method="post">
		<table>
			<tr>
				<td>用户名:</td>
				<td>
					<input type="text" name="user">
				</td>
				<td>用户名长度是2-100为用户名</td>
			</tr>
			<tr>
				<td>密码:</td>
				<td><input type="password" name="pwd"></td>
				<td>密码要大于6位,必须包含数字和字母</td>
			</tr><tr>
				<td>确认密码:</td>
				<td><input type="password" name="pwd2"></td>
				<td>请确认两次密码需要一致</td>
			</tr><tr>
				<td>手机号:</td>
				<td><input type="text" name="phone"></td>
				<td>请输入合法的手机号</td>
			</tr><tr>
				<td>邮箱:</td>
				<td><input type="text" name="email"></td>
				<td>请输入合法的邮箱格式</td>
			</tr>
			<tr>
				<td>验证码</td>
				<td><input type="text" name="captcha"></td>
				<td><img src="?a=captcha&c=account" id="captcha"><a href="#" onclick="resCaptcha()">看不清?换一张</a></td>>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="注册"></td>
				<td></td>
			</tr>
		</table>
	</form>
	<?php $_smarty_tpl->_subTemplateRender("file:public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</center>
</body>
</html><?php }
}
