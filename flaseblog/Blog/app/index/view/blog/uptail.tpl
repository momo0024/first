<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body>
	{include file="public/header.tpl"}
	<div>
		<h2>修改博客</h2>
		<form action="?c=blog&a=dochangeBlog
		&bid={$blog->id}" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>标题</td>
				<td><input type="text" name="title" value="{$blog->title}"></td>
			</tr>
			<!-- <tr>
				<td>图片</td>
				<td>{$blog->image}</td>
				<td><input type="file" name="ff" ></td>
			</tr> -->
			<tr>
				<td>内容</td>
				<td><textarea name="content" cols="25" rows="8">{$blog->content}</textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="保存修改"></td>
			</tr>
			</table>
		</form>
	</div>
	{include file="public/footer.tpl"}
</body>
</html>