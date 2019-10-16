<?php
/* Smarty version 3.1.32, created on 2019-06-10 15:48:19
  from 'C:\phpStudy\PHPTutorial\WWW\5-24\Blog\app\index\view\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfe0b43021986_45387995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991e03d6c902fdd262162929580e93941b2231c0' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\5-24\\Blog\\app\\index\\view\\public\\header.tpl',
      1 => 1560152318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfe0b43021986_45387995 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">
	<ul>
		<li>
			<div class="xt"><img src="resource/image/1.jpg" class="xt1">
			</div>
		</li>
	<li><a href="index.php">首页</a></li>
	<li><a href="?c=blog&a=List">博客列表</a></li>
	<?php if (isset($_SESSION['uid'])) {?>
	<li><a href="?a=addBlog&c=blog">添加动态</a></li>
	<!-- 点击个人用户名,跳转到新的页面显示个人信息和发表过的博客 -->
	<li><a href="?c=account&a=detail&uid=<?php echo $_SESSION['uid'];?>
"><?php echo $_SESSION['username'];?>
</a></li>
	<li><a href="?c=account&a=logout">退出</a></li>
	<?php } else { ?>
	<li><a href="?a=login&c=account">登录</a></li>
	<!-- ?a=方法名&c=控制器
	c代表 controller
		 a  action
		 a = 方法名 -->
	<li><a href="?a=reg&c=account">注册</a></li>

	<?php }?>
</ul>
	<div class="right">
		<input type="search" name="" placeholder="请输入你想查找的内容">
	<input type="submit" name="" value="搜索"></div>
</div><?php }
}
