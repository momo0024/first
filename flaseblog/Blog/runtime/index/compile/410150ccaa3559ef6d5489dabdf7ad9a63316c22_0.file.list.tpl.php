<?php
/* Smarty version 3.1.32, created on 2019-06-10 17:01:13
  from 'C:\phpStudy\PHPTutorial\WWW\5-24\Blog\app\index\view\blog\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfe1c59be5509_99486899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '410150ccaa3559ef6d5489dabdf7ad9a63316c22' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\blog\\list.tpl',
      1 => 1560157271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_5cfe1c59be5509_99486899 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
	<style type="text/css">
		.lleft{
			width: 70%;
			float: left;
		}
		.lleft>div{
			border: 2px dashed lightgrey;
			padding: 0 0 10px 0;
			background-color: rgba(20,50,155,0.1);
			margin-bottom: 10px;
		}
		.lright{
			float: right;
			background-color: #ccc;
			width: 30%;
			height: 100%;
		}
	</style>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="lcontainer">
		<div class="lleft">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<div>
				<h3><a href="?c=blog&a=doKan&bid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
				<p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
				<span>作者:<a href="?c=account&a=detail&uid=<?php echo $_SESSION['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</a></span>
				<span>更新时间:<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['updated']);?>
</span>
				<span>阅读量:(<?php echo $_smarty_tpl->tpl_vars['value']->value['view'];?>
)</span>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="lright">
		<h3>阅读量排行榜</h3>
		<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<li style="clear: both;">
			<a href="?c=blog&a=doKan&bid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['view'];?>
</a>
			<a href="?c=blog&a=doKan&bid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
		</li>
		</ul>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div style="float: right;background-color:#cdcdc1; width: 30%">
		<h3>最新排行榜</h3>
		<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['createds']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<li style="clear: both;">
			<a href="?c=blog&a=doKan&bid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
		</li>
		</ul>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
