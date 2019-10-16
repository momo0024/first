<?php
namespace app\index\model;
use libs\Model;
/**
 * 
 */
class BlogModel extends Model
{
	public function saveBlog($args){
		$query="INSERT into blog_blog(`uid`,`title`,`image`,`content`,`view`,`created`,`updated`) values (:uid,:title,:image,:content,:view,:created,:updated)";
		return  $this->exec($query,$args);
	}
	//查询某个用户的所有博客
	public function getBlogBy($uid){
 		//联合查询
 		$query= "SELECT u.username,b.* from blog_user as u inner join blog_blog as b on u.id=b.uid where u.id=:uid";
 		$args = ['uid'=>$uid];
 		return $this->fetchAll($query,$args);
 	}
 	//删除博客的信息
 	public function delBlog($bid){
 		$query="DELETE from blog_blog where id=:id";
 		$args=['id'=>$bid];
 		return $this->exec($query,$args);
 	}
 	//查看博客信息
 	public function getBlogById($bid){
 		//联合查询:因为博客表中没有用户名,所以需要使用联合查询
 		$query= "SELECT u.username,b.* from blog_user as u inner join blog_blog as b on u.id=b.uid where b.id=:bid";
 		$args = ['bid'=>$bid];
 		//获取的是一条数据
 		return $this->fetchObject($query,$args);
 	}
 	//添加阅读量
 	public function addView($bid){
 		$query='UPDATE blog_blog set view=view+1 where id=:id';
 		$args=['id'=>$bid];
 		return $this->exec($query,$args);
 	}
 	//修改编辑博客信息
 	public function updateBlog($bid,$title,$content){
 		//设定SQL语句
 		$query='UPDATE blog_blog set `title` =:title,`content`=:content,`updated`=:updated where id=:id';
 		$args=[
 			'title'=>$title,
 			'content'=>$content,
 			'updated'=>time(),
 			'id'=>$bid,
 		];
 		return $this->exec($query,$args);
 	}
 	//所有博客,排序按照更新时间
 	public function getAllBlog(){
 		//关联查询
 		$query='SELECT u.username,b.* from blog_user as u inner join blog_blog as b on u.id=b.uid order by b.`updated` desc';
 		return $this->fetchAll($query);
 	}
 	//按阅读量排序的前五
 	public function getViewTop5(){
 		$query='SELECT `title`,`view`,`id` from blog_blog order by `view` desc limit 5';
 		return $this->fetchAll($query);
 	}
 	//按照创建时间进行排序
 	public function getCreatedTop5(){
 		$query='SELECT `title`,`id` from blog_blog order by `created` desc limit 5';
 		return $this->fetchAll($query);
 	}
}