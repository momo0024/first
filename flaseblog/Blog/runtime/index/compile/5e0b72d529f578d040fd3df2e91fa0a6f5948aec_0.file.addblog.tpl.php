<?php
/* Smarty version 3.1.32, created on 2019-06-10 03:15:30
  from 'C:\phpStudy\PHPTutorial\WWW\5-24\Blog\app\index\view\blog\addblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdcb52814c02_34597113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e0b72d529f578d040fd3df2e91fa0a6f5948aec' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\blog\\addblog.tpl',
      1 => 1560136527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_5cfdcb52814c02_34597113 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div style="background-color: #ccc">
		<h2>添加博客</h2>
		<form action="?a=doAddBlog&c=Blog" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>标题</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>图片</td>
				<td><input type="file" name="ff"></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><textarea name="content" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="添加博客"></td>
			</tr>
			</table>
		</form>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
