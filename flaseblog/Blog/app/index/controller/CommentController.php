<?php
namespace app\index\controller;
use libs\Controller;
use app\index\model\CommentModel;
class CommentController extends Controller
{
	public function doAdd(){
		$bid=$_GET['bid'];//获取博客ID
		$uid=$_SESSION['uid'];//获取用户id
		$content=$_POST['content'];
		$args=[
		'bid'=>$bid,
		'uid'=>$uid,
		'content'=>$content,
		'created'=>time(),
		];
		$model=new CommentModel();
		$suc=$model->save($args);
		if ($suc) {
			// echo "成功";
			header('location:?c=blog&a=doKan&bid='.$bid);
		}else{
			echo "评论失败";
		}
	}
}