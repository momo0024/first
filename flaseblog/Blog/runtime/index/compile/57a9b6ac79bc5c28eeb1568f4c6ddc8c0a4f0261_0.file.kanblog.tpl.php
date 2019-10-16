<?php
/* Smarty version 3.1.32, created on 2019-06-10 16:55:06
  from 'C:\phpStudy\PHPTutorial\WWW\5-24\Blog\app\index\view\blog\kanblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfe1aea10fe03_82280956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a9b6ac79bc5c28eeb1568f4c6ddc8c0a4f0261' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\blog\\kanblog.tpl',
      1 => 1560156311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_5cfe1aea10fe03_82280956 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div style="background-color: #ccc;">
		<h2>博客的内容</h2>
		<hr>
	<table border="1" cellspacing="0">
		<tr>
			<td>标题:</td>
			<td><?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
</td>
		</tr>
		
		<tr>
			<td>作者:</td>
			<td><?php echo $_smarty_tpl->tpl_vars['blog']->value->username;?>
</td>
		</tr>
			<tr>
				<td>创建时间:</td>
				<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['blog']->value->created);?>
</td>
			</tr>
		<tr>
			<td>阅读量:</td>
			<td>(<?php echo $_smarty_tpl->tpl_vars['blog']->value->view;?>
)</td>
		</tr>
		<tr>
			<td>图片内容:</td>
			<td><img src="upload/<?php echo $_smarty_tpl->tpl_vars['blog']->value->image;?>
" style="width: 150px; height: 80px;"></td>
		</tr>
			
		</tr>
		<tr>
			<td>博客文字内容:</td>
			<td><textarea><?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
</textarea></td>
		</tr>
	</table>
	</div>
	<hr>
	<?php if (isset($_SESSION['uid'])) {?>
	<div>
		<h2>用户评论</h2>
		<form action="?c=Comment&a=doAdd&bid=<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
" method="post">
			<textarea name="content" rows="5" cols="30"></textarea><br>
			<input type="submit" name="" value="提交评论">
		</form>
	</div>
	<?php }?>
	<div>
		<table border="1">
			<tr>
				<td>评论内容</td>
				<td>评论人</td>
				<td>评论时间</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
				<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['created']);?>
</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
