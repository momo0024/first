<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="app/index/view/public/style.css">
</head>
<body>
	{include file="public/header.tpl"}
	<div style="background-color: #ccc">
		<h2>添加博客</h2>
		<form action="?a=doAddBlog&c=Blog" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>标题</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>图片</td>
				<td><input type="file" name="ff"></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><textarea name="content" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="添加博客"></td>
			</tr>
			</table>
		</form>
	</div>
	{include file="public/footer.tpl"}
</body>
</html>