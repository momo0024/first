<div class="header">
	<ul>
		<li>
			<div class="xt"><img src="resource/image/1.jpg" class="xt1">
			</div>
		</li>
	<li><a href="index.php">首页</a></li>
	<li><a href="?c=blog&a=List">博客列表</a></li>
	{if isset($smarty.session.uid)}
	<li><a href="?a=addBlog&c=blog">添加动态</a></li>
	<!-- 点击个人用户名,跳转到新的页面显示个人信息和发表过的博客 -->
	<li><a href="?c=account&a=detail&uid={$smarty.session.uid}">{$smarty.session.username}</a></li>
	<li><a href="?c=account&a=logout">退出</a></li>
	{else}
	<li><a href="?a=login&c=account">登录</a></li>
	<!-- ?a=方法名&c=控制器
	c代表 controller
		 a  action
		 a = 方法名 -->
	<li><a href="?a=reg&c=account">注册</a></li>

	{/if}
</ul>
	<div class="right">
		<input type="search" name="" placeholder="请输入你想查找的内容">
	<input type="submit" name="" value="搜索"></div>
</div>