<!DOCTYPE html>
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
	{include file="public/header.tpl"}
	<div class="lcontainer">
		<div class="lleft">
			{foreach $blogs as $value}
			<div>
				<h3><a href="?c=blog&a=doKan&bid={$value.id}">{$value.title}</a></h3>
				<p>{$value.content}</p>
				<span>作者:<a href="?c=account&a=detail&uid={$smarty.session.uid}">{$value.username}</a></span>
				<span>更新时间:{date('Y-m-d H:i:s',$value.updated)}</span>
				<span>阅读量:({$value.view})</span>
			</div>
			{/foreach}
		</div>
		<div class="lright">
		<h3>阅读量排行榜</h3>
		<ul>
		{foreach $views as $value}
		<li style="clear: both;">
			<a href="?c=blog&a=doKan&bid={$value.id}">{$value.view}</a>
			<a href="?c=blog&a=doKan&bid={$value.id}">{$value.title}</a>
		</li>
		</ul>
		{/foreach}
		</div>
		<div style="float: right;background-color:#cdcdc1; width: 30%">
		<h3>最新排行榜</h3>
		<ul>
		{foreach $createds as $value}
		<li style="clear: both;">
			<a href="?c=blog&a=doKan&bid={$value.id}">{$value.title}</a>
		</li>
		</ul>
		{/foreach}
	</div>
	</div>
	{include file="public/footer.tpl"}
</body>
</html>