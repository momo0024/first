<?php
namespace app\index\model;
use libs\Model;
//model 只写数据
 class AccountModel extends Model{
 	public function saveUser($args){
 		//设定query语句
 		//使用命名占位符的形式
 		//格式  :任意命名
 		//优点:含义明确
 		//缺点:写起来麻烦
 		$query = 'INSERT into blog_user(`username`,`password`,`email`,`phone`,`balance`,`created`,`admin`) values (:username,:password,:email,:phone,:balance,:created,:admin)';
 		return  $this->exec($query,$args);
 	}
 	public function getUser($user,$pwd){
 		//写sql语句
 		$query='SELECT `id`,`username` from `blog_user` where  `username`=:username and `password`=:password';
 		//绑定预处理
 		$args=['username'=>$user,'password'=>$pwd];
 		//因为是一个字段返回值要么是对象,要么是一个null
 		return $this->fetchAll($query,$args);
 	}
 	//详情页面
 	public function getUserInfo($uid){
 		$query = "SELECT `id`,`username`,`password`,`phone`,`email`,`created`,`balance` from `blog_user` where id=:id";
 		//预处理方式的绑定
 		$args=['id'=>$uid];
 		return $this->fetchObject($query,$args);
 	}
 }