<?php
namespace app\index\model;
use libs\Model;
/**
 * 
 */
class CommentModel extends Model
{
	//保存评论
	public function save($args){
		$query='INSERT into blog_comment(`bid`,`uid`,`content`,`created`) values (:bid,:uid,:content,:created)';
		return $this->exec($query,$args);
	}
	//查出某个博客对应的所有评论内容
	public function getCommentBid($bid){
		$query='SELECT u.username,c.content,c.created from blog_comment as c inner join blog_user as u on c.uid=u.id where c.bid=:bid';
		$args=['bid'=>$bid];
		return $this->fetchAll($query,$args);
	}	
}