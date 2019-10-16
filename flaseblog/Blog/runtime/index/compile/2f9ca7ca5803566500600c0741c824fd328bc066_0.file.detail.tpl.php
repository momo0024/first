<?php
/* Smarty version 3.1.32, created on 2019-06-10 16:55:57
  from 'C:\phpStudy\PHPTutorial\WWW\5-24\Blog\app\index\view\account\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfe1b1d08ef85_41889738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f9ca7ca5803566500600c0741c824fd328bc066' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\account\\detail.tpl',
      1 => 1560156850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_5cfe1b1d08ef85_41889738 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body style="background-color: #ccc;">
	<?php $_smarty_tpl->_subTemplateRender("file:public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div>
		<h2>用户详情</h2>
		<table>
			<tr>
				<td>用户名:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
			</tr>
			<tr>
				<td>邮箱:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
			</tr>
			<tr>
				<td>手机号:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
</td>
			</tr>
			<tr>
				<td>余额:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value->balance;?>
</td>
			</tr>
			<tr>
				<td>注册时间:</td>
				<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['user']->value->created);?>
</td>
			</tr>
		</table>
		<hr>
		<h2">发布的所有博客</h2>
		<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<td>博客标题</td>
				<td>创建时间</td>
				<td>用户</td>
				<td>操作</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
				<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['created']);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
				<td>				
					<a href="?a=doKan&c=Blog&bid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">查看</a>
					<?php if (isset($_SESSION['uid']) && $_SESSION['uid'] == $_smarty_tpl->tpl_vars['user']->value->id) {?>
					<a href="?a=changeBlog&c=Blog&bid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
					<a href="?a=delblog&c=Blog&bid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
					<?php }?>
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
