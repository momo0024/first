<?php
/* Smarty version 3.1.32, created on 2019-05-29 10:45:10
  from 'E:\phpstudy\PHPTutorial\WWW\5-24\Blog\app\index\view\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cee62b624fea6_18078773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd58c3ea6ddf967830ce2e7e49b2ea9191d5d97e' => 
    array (
      0 => 'E:\\phpstudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\public\\header.tpl',
      1 => 1559119724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cee62b624fea6_18078773 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">
	<a href="index.php">首页</a>
	<a href="">博客列表</a>
	<a href="?a=login&c=account">登录</a>
	<!-- ?a=方法名&c=控制器 -->
	<!-- c代表 controller
		 a  action
		 a = 方法名 -->
	<a href="?a=reg&c=account">注册</a>
</div><?php }
}
