<?php
namespace app\index\controller;
//PSR-4 自动加载规范\
//类名和文件夹名称必须是同一非名称

use libs\Controller;
class IndexController extends Controller{
public function index(){
	//路径是相当于模板目录的view
	$this->display('index/index.tpl');
	}
}