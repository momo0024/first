<?php
/* Smarty version 3.1.32, created on 2019-06-05 09:26:13
  from 'C:\phpStudy\PHPTutorial\WWW\5-24\Blog\app\index\view\blog\uptail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cf78ab5581605_56624166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05988db5110a02bd8c011a769887719d0ff78ece' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\blog\\uptail.tpl',
      1 => 1559726765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_5cf78ab5581605_56624166 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div>
		<h2>修改博客</h2>
		<form action="?c=blog&a=dochangeBlog
		&bid=<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>标题</td>
				<td><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
"></td>
			</tr>
			<!-- <tr>
				<td>图片</td>
				<td><?php echo $_smarty_tpl->tpl_vars['blog']->value->image;?>
</td>
				<td><input type="file" name="ff" ></td>
			</tr> -->
			<tr>
				<td>内容</td>
				<td><textarea name="content" cols="25" rows="8"><?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
</textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="保存修改"></td>
			</tr>
			</table>
		</form>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
