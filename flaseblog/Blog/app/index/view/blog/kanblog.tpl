<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body>
	{include file="public/header.tpl"}
	<div style="background-color: #ccc;">
		<h2>博客的内容</h2>
		<hr>
	<table border="1" cellspacing="0">
		<tr>
			<td>标题:</td>
			<td>{$blog->title}</td>
		</tr>
		
		<tr>
			<td>作者:</td>
			<td>{$blog->username}</td>
		</tr>
			<tr>
				<td>创建时间:</td>
				<td>{date('Y-m-d H:i:s',$blog->created)}</td>
			</tr>
		<tr>
			<td>阅读量:</td>
			<td>({$blog->view})</td>
		</tr>
		<tr>
			<td>图片内容:</td>
			<td><img src="upload/{$blog->image}" style="width: 150px; height: 80px;"></td>
		</tr>
			
		</tr>
		<tr>
			<td>博客文字内容:</td>
			<td><textarea>{$blog->content}</textarea></td>
		</tr>
	</table>
	</div>
	<hr>
	{if isset($smarty.session.uid)}
	<div>
		<h2>用户评论</h2>
		<form action="?c=Comment&a=doAdd&bid={$blog->id}" method="post">
			<textarea name="content" rows="5" cols="30"></textarea><br>
			<input type="submit" name="" value="提交评论">
		</form>
	</div>
	{/if}
	<div>
		<table border="1">
			<tr>
				<td>评论内容</td>
				<td>评论人</td>
				<td>评论时间</td>
			</tr>
			{foreach $comments as $value}
			<tr>
				<td>{$value.content}</td>
				<td>{$value.username}</td>
				<td>{date('Y-m-d H:i:s',$value.created)}</td>
			</tr>
			{/foreach}
		</table>
	</div>
	{include file="public/footer.tpl"}
</body>
</html>