<?php
//入口文件
include 'vandor/smarty/libs/Smarty.class.php';
//魔术函数 __autoload:自动加载
function autoload($class){
		
		$path = $class . '.php';
		//$class:app\index\controller\IndexController()
		$path=str_replace('\\','/',$path);
		//路径中的分隔符有两种\,/,windows操作系统,可以把\替换为通用的/
		//max linux 只区别/这一个分割符
		include $path;
}
//sql_autoload_register()此函数用来注册任意一个函数作为自动加载函数的
spl_autoload_register('autoload');
//?a=方法名&c=控制器
//首次运行超链接中没有 a 和 c 通过 ?? 来给默认值
$c=$_GET['c'] ?? 'index';//控制器
$a=$_GET['a'] ?? 'index';//方法名
//实例化
$con="\\app\\index\\controller\\{$c}Controller";
// $obj = new \app\index\controller\IndexController();
//调用方法
// $obj->index();
$obj = new $con;
$obj->$a();