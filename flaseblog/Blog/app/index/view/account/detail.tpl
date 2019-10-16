<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body style="background-color: #ccc;">
	{include file="public/header.tpl"}
	<div>
		<h2>用户详情</h2>
		<table>
			<tr>
				<td>用户名:</td>
				<td>{$user->username}</td>
			</tr>
			<tr>
				<td>邮箱:</td>
				<td>{$user->email}</td>
			</tr>
			<tr>
				<td>手机号:</td>
				<td>{$user->phone}</td>
			</tr>
			<tr>
				<td>余额:</td>
				<td>{$user->balance}</td>
			</tr>
			<tr>
				<td>注册时间:</td>
				<td>{date('Y-m-d H:i:s',$user->created)}</td>
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
			{foreach $blogs as $value}
			<tr>
				<td>{$value.title}</td>
				<td>{date('Y-m-d H:i:s',$value.created)}</td>
				<td>{$value.username}</td>
				<td>				
					<a href="?a=doKan&c=Blog&bid={$value.id}">查看</a>
					{if isset($smarty.session.uid)&&$smarty.session.uid==$user->id}
					<a href="?a=changeBlog&c=Blog&bid={$value.id}">修改</a>
					<a href="?a=delblog&c=Blog&bid={$value.id}">删除</a>
					{/if}
				</td>
			</tr>
			{/foreach}
		</table>
	</div>
	{include file="public/footer.tpl"}
</body>
</html>